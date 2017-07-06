<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function testScrabbleScoreError()
        {
            $test_Scrabble = new Scrabble;
            $input = "ca#34 d";

            $result = $test_Scrabble->scrabbleScore($input);

            $this->assertEquals("error", $result);
        }

        function testScrabbleScoreCase()
        {
          $test_Scrabble = new Scrabble;
          $input = "Cat";

          $result = $test_Scrabble->scrabbleScore($input);

          $this->assertEquals("cat", $result);
        }
    }
?>
