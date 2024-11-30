<?php

declare(strict_types=1); // não permite que variáveis sejam chamadas com tipos incorretos

// argumentos obrigatórios
function greet($name) {
  return "Hello, $name \n";
}

echo greet("World");

// argumentos opcionais

function greetWithTime($name, $time = "morning") {
  return "Hello, $name, it's $time \n";
}

echo greetWithTime("Carlos");
echo greetWithTime("World", "evening");

// tipando argumentos

function add(int $a, int $b): int {
  return $a + $b;
}

echo add(1, 3);

//variadic functions

function sum(...$numbers) {
  $sum = 0;

 foreach($numbers as $number){
  $sum += $number;  
 }

 return $sum;

}

echo sum(5, 10, 15);

function introduceTeam($teamName, ...$members) {
  return "The $teamName team has the following members: " . implode(", ", $members) ;
}

echo introduceTeam("Laravel", "Taylor", "Cedric", "Dayle");

//funções anônimas

$greet = function($name) {
  return "Hello, $name \n";
};

echo $greet("World");

$numbers = [1, 2, 3, 4, 5];
$square = array_map(function($number) {
  return $number * $number;
}, $numbers);

echo implode(", ", $square);
