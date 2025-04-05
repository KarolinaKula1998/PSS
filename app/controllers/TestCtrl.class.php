<?php

namespace app\controllers;

use PDOException;
use core\Utils;
use core\ParamUtils;
use core\App;


class TestCtrl
{
    private $questions;
    private $groupedAnswers = [];

    public function action_testShow()
    {
        // Inicjalizacja numeru pytania
        $this->initializeCurrentQuestion();

        // Pobieranie danych z bazy
        $this->loadQuestions();
        $this->loadAnswers();

        // Obsługa akcji formularza
        $this->handleFormActions();

        // Wyświetlanie widoku
        $this->displayCurrentQuestion();
    }

    private function initializeCurrentQuestion()
    {
        if (!isset($_SESSION['current_question'])) {
            $_SESSION['current_question'] = 0; // Ustawienie domyślnego pytania
        }
    }

    private function loadQuestions()
    {
        try {
            $this->questions = App::getDB()->select("questions", ["id", "name"]);
        } catch (PDOException $e) {
            $this->handleDbError($e);
        }
    }

    private function loadAnswers()
    {
        try {
            $answers = App::getDB()->select("answers", ["id", "question_id", "answer_text", "score"],);
            foreach ($answers as $answer) {
                $this->groupedAnswers[$answer['question_id']][] = $answer;
            }

            // Sortowanie, aby wyświetlić w kolejność od najmniejszej do największej wagi odpowiedzi
            foreach ($this->groupedAnswers as $qid => $group) {
                usort($group, function ($a, $b) {
                    return $a['score'] - $b['score'];
                });
                $this->groupedAnswers[$qid] = $group;
            }
        } catch (PDOException $e) {
            $this->handleDbError($e);
        }
    }

    private function handleDbError(PDOException $e)
    {
        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas pobierania rekordów');
        if (App::getConf()->debug) {
            Utils::addErrorMessage($e->getMessage());
        }
    }

    private function handleFormActions()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Zapisz odpowiedź dla bieżącego pytania
            $this->saveCurrentAnswer();

            // Sprawdź, co użytkownik kliknął
            if (isset($_POST['save'])) {
                $this->saveAnswers();
            } elseif (isset($_POST['next'])) {
                $this->handleNextQuestion();
            } elseif (isset($_POST['back'])) {
                $this->goBackToPreviousQuestion();
            }
        }
    }

    private function handleNextQuestion()
    {
        $currentQuestionId = $this->questions[$_SESSION['current_question']]['id'];
        $selectedAnswerId = ParamUtils::getFromRequest("question_{$currentQuestionId}", false);

        // Sprawdź, czy odpowiedź została wybrana
        if ($this->isAnswerSelected($selectedAnswerId)) {
            $_SESSION['current_question']++;
        } else {
            Utils::addErrorMessage("Proszę wybrać odpowiedź na pytanie.");
        }
    }

    private function goBackToPreviousQuestion()
    {
        $_SESSION['current_question']--;
    }

    private function isAnswerSelected($selectedAnswerId)
    {
        return $selectedAnswerId !== null;
    }

    private function saveAnswers()
    {
        $totalScore = 0;
        foreach ($this->questions as $question) {
            if (!isset($_SESSION['answers'][$question['id']])) {
                // Jeśli dla pytania nie ma zapisanej odpowiedzi w sesji, dodajemy komunikat o błędzie
                Utils::addErrorMessage("Proszę wybrać odpowiedź na pytanie: " . $question['name']);
                return; // Zatrzymujemy dalsze wykonywanie, jeśli brakuje odpowiedzi
            }

            $selectedAnswerId = $_SESSION['answers'][$question['id']];
            $totalScore += $this->calculateScore($question['id'], $selectedAnswerId);
        }

        // Określenie typu porowatości na podstawie wyniku
        $porosityType = $this->getPorosityType($totalScore, count($this->questions));

        // Zapisanie wyniku do bazy
        $this->storeResult($totalScore, $porosityType);
    }

    private function saveCurrentAnswer()
    {
        // Sprawdzamy, czy odpowiedź jest zaznaczona, zanim zapisujemy ją do sesji
        $currentQuestionId = $this->questions[$_SESSION['current_question']]['id'];
        $selectedAnswerId = ParamUtils::getFromRequest("question_{$currentQuestionId}", false,);

        // Zapisz odpowiedź w sesji tylko jeśli została wybrana
        if ($selectedAnswerId !== '') {
            $_SESSION['answers'][$currentQuestionId] = $selectedAnswerId;
        }
    }


    private function calculateScore($questionId, $selectedAnswerId)
    {
        $score = 0;

        if ($selectedAnswerId !== null && isset($this->groupedAnswers[$questionId])) {
            foreach ($this->groupedAnswers[$questionId] as $answer) {
                if ($answer['id'] == $selectedAnswerId) {
                    $score = $answer['score'];
                    break;
                }
            }
        }
        return $score;
    }

    private function getPorosityType($score, $totalQuestions)
    {
        $maxScore = $totalQuestions * 3;
        $percentage = ($score / $maxScore) * 100;

        $porosityTypes = App::getDB()->select("porositytypes", "*");

        foreach ($porosityTypes as $porosityType) {
            if ($percentage >= $porosityType['min_score_percentage'] && $percentage < $porosityType['max_score_percentage']) {
                return $porosityType;
            }
            // Dla wartości równej max_score_percentage, przypisz ostatni przedział
            if ($percentage == $porosityType['max_score_percentage']) {
                return $porosityType;
            }
        }

        return null; // Brak odpowiedniego typu porowatości
    }

    private function storeResult($totalScore, $porosityType)
    {
        try {
            App::getDB()->insert("results", [
                'user_id' => $_SESSION['user']['id'],
                'score_result' => $totalScore,
                'porosity_type_id' => $porosityType['id']
            ]);

            $_SESSION['test_completed'] = true;
            $_SESSION['last_result'] = [
                'score' => $totalScore,
                'porosity' => $porosityType['name'],
                'id' =>  $porosityType['id']
            ];
            // Resetowanie testu po zapisaniu wyników
            $_SESSION['current_question'] = 0;
            unset($_SESSION['answers']); // Usuwamy zapisane odpowiedzi w sesji
            App::getRouter()->redirectTo('resultShow');
        } catch (PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas zapisywania wyniku.');
            if (App::getConf()->debug) {
                Utils::addInfoMessage($e->getMessage());
            }
        }
    }

    private function displayCurrentQuestion()
    {
        // Pobieramy aktualne pytanie
        $current_question = isset($this->questions[$_SESSION['current_question']]) ? $this->questions[$_SESSION['current_question']] : reset($this->questions);
        App::getSmarty()->assign('current_question', $current_question);
        App::getSmarty()->assign('groupedAnswers', $this->groupedAnswers);
        App::getSmarty()->assign('current_question_index', $_SESSION['current_question']);
        App::getSmarty()->assign('total_questions', count($this->questions));

        // Pobieramy zaznaczoną odpowiedź z sesji, jeśli istnieje
        $selectedAnswerId = isset($_SESSION['answers'][$current_question['id']]) ? $_SESSION['answers'][$current_question['id']] : null;
        App::getSmarty()->assign('selectedAnswerId', $selectedAnswerId);

        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->display('TestView.tpl');
    }
}
