<?php

//while

$secret = 'magic';
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts) {
  echo "Enter the magic word: ";
  $guess = trim(fgets(STDIN));
  $attempts++;


  if($guess == $secret) {
    echo "Correct! You've unlocked the treasure in $attempts attempts. \n";
    break;
  } elseif($attempts == $maxAttempts) {
    echo "Sorry, you've run out of attempts. The treasure is still locked. \n";
    break;
  }else{
    echo "Sorry, wrong guess. Try again. \n";
  }
}