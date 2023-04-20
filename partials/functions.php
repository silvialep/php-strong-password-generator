<?php


// $passwordLength = $_GET['passlen'] ?? 'false';

// var_dump($_GET['passlen']);

function randomPassword($passwordLength) {
      $rpsw = '';
      $source = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#~$%()=^*+[]{}-_';
      
      for($i = 1; $i <= $passwordLength; $i++) {
        //Generate a random index based on the string in question.
        $randomIndex = mt_rand(0, strlen($source) - 1);

        //Print out the random character.
        $newChar = $source[$randomIndex];

        $rpsw .= $newChar;
      }
      return $rpsw;
  }
