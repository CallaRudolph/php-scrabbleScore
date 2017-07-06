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
            $score_array = [];
            $array_of_letters = str_split($input_lower);
            foreach ($array_of_letters as $letter)
                if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u' || $letter == 'l' || $letter == 'n' || $letter == 'r' || $letter == 's' || $letter == 't') {
                    $this->score = 1;
                    array_push($score_array, $this->score);
                } elseif ($letter == 'd' || $letter == 'g') {
                    $this->score = 2;
                    array_push($score_array, $this->score);
                } elseif ($letter == 'b' || $letter == 'c' || $letter == 'm' || $letter == 'p') {
                    $this->score = 3;
                    array_push($score_array, $this->score);
                } elseif ($letter == 'f' || $letter == 'h' || $letter == 'v' || $letter == 'w' || $letter == 'y') {
                    $this->score = 4;
                    array_push($score_array, $this->score);
                } elseif ($letter == 'k') {
                    $this->score = 5;
                    array_push($score_array, $this->score);
                } elseif ($letter == 'j' || $letter == 'x') {
                    $this->score = 8;
                    array_push($score_array, $this->score);
                } else {
                    $this->score = 10;
                    array_push($score_array, $this->score);
                }
            return $score_array;
        }

        function scrabbleFinal($input)
        {
          $input_lower = strtolower($input);
          $score_array = [];

          $array_of_letters = str_split($input_lower);
          foreach ($array_of_letters as $letter)
              if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u' || $letter == 'l' || $letter == 'n' || $letter == 'r' || $letter == 's' || $letter == 't') {
                  $this->score = 1;
                  array_push($score_array, $this->score);
              } elseif ($letter == 'd' || $letter == 'g') {
                  $this->score = 2;
                  array_push($score_array, $this->score);
              } elseif ($letter == 'b' || $letter == 'c' || $letter == 'm' || $letter == 'p') {
                  $this->score = 3;
                  array_push($score_array, $this->score);
              } elseif ($letter == 'f' || $letter == 'h' || $letter == 'v' || $letter == 'w' || $letter == 'y') {
                  $this->score = 4;
                  array_push($score_array, $this->score);
              } elseif ($letter == 'k') {
                  $this->score = 5;
                  array_push($score_array, $this->score);
              } elseif ($letter == 'j' || $letter == 'x') {
                  $this->score = 8;
                  array_push($score_array, $this->score);
              } else {
                  $this->score = 10;
                  array_push($score_array, $this->score);
              }

            $final_score = array_sum($score_array);
            return $final_score;
        }

    }
?>
