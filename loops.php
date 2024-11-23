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

// for

echo "Rocket lauch countdown: \n";

for ($i = 10; $i > 0; $i--) {
  echo "$i ... ";
  if(1 == $i) {
    echo "Launch! 🚀";
  }
  sleep(1);
}

// foreach

$basket = [
    ['fruit' => 'apple', 'price' => 0.5],
    ['fruit' => 'banana', 'price' => 0.8],
    ['fruit' => 'orange', 'price' => 0.7],
];

$total = 0;


foreach ($basket as $fruit) {
    echo "Fruit: " . $fruit['fruit'] . ", Price: $" . $fruit['price'] . "\n";
    $total += $fruit['price']; 
}

echo "Total Price: $" . $total . "\n";