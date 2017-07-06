<?php
    class Scrabble
    {
        function scrabbleScore($input)
        {
            $answer = "";
            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input) || (preg_match('/\\d/', $input)) || (preg_match('/\s/', $input)))
                {
                    $answer = "error";
                }
            return $answer;
        }
    }
?>
