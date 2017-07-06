<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function testScrabbleScoreError()
        {
            $test_Scrabble = new Scrabble;
            $input = "ca3";

            $result = $test_Scrabble->scrabbleError($input);

            $this->assertEquals("error", $result);
        }

        function testScrabbleScoreCase()
        {
            $test_Scrabble = new Scrabble;
            $input = "C";

            $result = $test_Scrabble->scrabbleCase($input);

            $this->assertEquals("c", $result);
        }

        function testScrabbleScoreOneLetter()
        {
            $test_Scrabble = new Scrabble;
            $input = "C";

            $result = $test_Scrabble->scrabbleScore($input);

            $this->assertEquals("3", $result);
        }
    }
?>
