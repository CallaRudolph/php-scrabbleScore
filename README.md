# Scrabble Score
##### _Exercise in Behavior-Driven Development with PHP Testing, 07.06.17_

#### By Brittany Kerr & Calla Rudolph

## Description

This web application allows users to input a word, and the program will convert it to the matching Scrabble score! This is a practice in using Behavior Driven Development PHP with the Silex micro framework and twig templates. It was tested step by step using PHPUnit.

## Setup

* Open GitHub site on your browser: https://github.com/CallaRudolph/php-scrabbleScore
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
    * type 'cd desktop' and press enter
    * type 'git clone' then copy the repository link and press enter
    * type 'cd php-scrabbleScore' to access the document root (project folder) on your computer
    * type 'composer install' to download dependencies (Silex & Twig)
    * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
* Open browser and type 'localhost:8000' to view app.
* Enter in a word, and you will see its Scrabble Score!
* Click the link on the results page to return home.

## Specifications
1. The program can return the score for a single lowercased letter.
  * Input: "a"
  * Output: 1
2. The program can return the combined score for a lowercased multiple-letter string input.
  * Input: "best"
  * Output: 6
3. The program will take a multi-cased input word and output a score.
  * Input: "Cat"
  * Output: 5
4. The program will reject special characters, numbers, and spaces and return an error message.
  * Input: "ca%h 1"
  * Output: "special characters, numbers, or spaces not accepted"

## Technologies Used

PHP, Silex, Twig, PHPUnit, CSS, HTML5

### License
This software is licensed under the MIT license.

Copyright &copy; 2017 **_Brittany Kerr & Calla Rudolph_**
