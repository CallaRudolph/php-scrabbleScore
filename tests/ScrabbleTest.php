<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function testScrabbleScoreError()
        {
            $test_Scrabble = new Scrabble;
            $input = "ca%h 1";

            $result = $test_Scrabble->scrabbleScore($input);

            $this->assertEquals("error", $result);
        }
    }
?>
