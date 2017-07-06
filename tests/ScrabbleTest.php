<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function testScrabbleScoreOneLetter()
        {
            $test_Scrabble = new Scrabble;
            $input = "c";

            $result = $test_Scrabble->scrabbleScore($input);

            $this->assertEquals(3, $result);
        }

        function testScrabbleScoreMultipleLetters()
        {
            $test_Scrabble = new Scrabble;
            $input = "cat";

            $result = $test_Scrabble->scrabbleScore($input);

            $this->assertEquals(5, $result);
        }

        function testScrabbleScoreFinal()
        {
            $test_Scrabble = new Scrabble;
            $input = "Cat";

            $result = $test_Scrabble->scrabbleFinal($input);

            $this->assertEquals(5, $result);
        }

        function testScrabbleScoreFinal()
        {
            $test_Scrabble = new Scrabble;
            $input = "Ca$";

            $result = $test_Scrabble->scrabbleFinal($input);

            $this->assertEquals("Please input one word that does not have numbers or special characters", $result);
        }
    }
?>
