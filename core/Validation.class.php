<?php

namespace core;


class Validation
{
    public function validatePassword($password)
    {
        if (empty($password)) {
            Utils::addErrorMessage('Nie podano hasła');
        } elseif (strlen($password) < 8) {
            Utils::addErrorMessage('Hasło musi zawierać co najmniej 8 znaków');
        } elseif (!preg_match('/[A-Z]/', $password)) {
            Utils::addErrorMessage('Hasło musi zawierać co najmniej jedną wielką literę');
        } elseif (!preg_match('/[0-9]/', $password)) {
            Utils::addErrorMessage('Hasło musi zawierać co najmniej jedną cyfrę');
        }
    }

    public function validatePhone($phone)
    {
        if (empty($phone)) {
            Utils::addErrorMessage('Nie podano numeru telefonu');
        } elseif (!preg_match('/^[0-9]{9}$/', $phone)) {
            Utils::addErrorMessage('Numer telefonu musi składać się z 9 cyfr');
        }
    }

    public function validateEmail($email)
    {
        if (empty($email)) {
            Utils::addErrorMessage('Nie podano adresu e-mail');
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            Utils::addErrorMessage('Nieprawidłowy format adresu e-mail');
        }
    }

    public function validateName($name)
    {
        if (empty($name)) {
            Utils::addErrorMessage('Nie podano imienia');
        } elseif (strlen($name) < 2) {
            Utils::addErrorMessage('Imię musi zawierać co najmniej 2 znaki');
        }
    }

    public function validateSurname($surname)
    {
        if (empty($surname)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        } elseif (strlen($surname) < 2) {
            Utils::addErrorMessage('Nazwisko musi zawierać co najmniej 2 znaki');
        }
    }

    public function validateConfirmationPassword($password, $confirmaion_password)
    {
        if (empty($confirmaion_password)) {
            Utils::addErrorMessage('Nie podano potwierdzenia hasła');
        } elseif ($password != $confirmaion_password) {
            Utils::addErrorMessage('Hasła nie są takie same');
        }
    }
}
