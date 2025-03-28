{extends file="main.tpl"}

{block name=top}
    <form action="" method="post" class="pure-form pure-form-aligned">
        <fieldset>
            <legend>{$current_question.name}</legend>

            {foreach $groupedAnswers[$current_question.id] as $answer}
                <label>
                    <input type="radio" name="question_{$current_question.id}" value="{$answer.id}"
                        {if $answer.id == $selectedAnswerId}checked="checked" {/if}>
                    {$answer.answer_text}
                </label><br>
            {/foreach}

            <div>
                {if $current_question_index > 0}
                    <button type="submit" name="back" class="button-small pure-button">Wstecz</button>
                {/if}
                {if $current_question_index < $total_questions - 1}
                    <button type="submit" name="next" class="button-small pure-button">Dalej</button>
                {/if}
                {if $current_question_index == $total_questions - 1}
                    <button type="submit" name="save" class="button-small pure-button">Zapisz</button>
                {/if}
            </div>
        </fieldset>
    </form>
{/block}