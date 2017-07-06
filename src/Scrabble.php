<?php
    class Scrabble
    {
        private $score;

        function scrabbleError($input)
        {

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input) || (preg_match('/\\d/', $input)) || (preg_match('/\s/', $input)))
            {
                $this->score= "error";
            }
            return $this->score;
        }

        function scrabbleCase($input)
        {
            $this->score = strtolower($input);
            return $this->score;
        }

        function scrabbleScore($input)
        {
            $input_lower = strtolower($input);

            for($i = 0; $i <= $input_lower; $i++)
                if ($input_lower == 'a' || $input_lower == 'e' || $input_lower == 'i' || $input_lower == 'o' || $input_lower == 'u' || $input_lower == 'l' || $input_lower == 'n' || $input_lower == 'r' || $input_lower == 's' || $input_lower == 't')
                    $this->score = 1;
                elseif ($input_lower == 'd' || $input_lower == 'g')
                    $this->score = 2;
                elseif ($input_lower == 'b' || $input_lower == 'c' || $input_lower == 'm' || $input_lower == 'p')
                    $this->score = 3;
                elseif ($input_lower == 'f' || $input_lower == 'h' || $input_lower == 'v' || $input_lower == 'w' || $input_lower == 'y')
                    $this->score = 4;
                elseif ($input_lower == 'k')
                    $this->score = 5;
                elseif ($input_lower == 'j' || $input_lower == 'x')
                    $this->score = 8;
                else
                    $this->score = 10;
            return $this->score;
        }
    }
?>
