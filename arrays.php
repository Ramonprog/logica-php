<?php

$simpleArray = [1, 2, 3, 4, 5];

// var_dump($simpleArray);

// array associativo

$associativeArray = [
  'name' => 'John Doe',
  'age' => 30,
  'city' => 'New York',
];

$matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];

$fruits = [
  'apple',
  'banana',
  'orange',
];

var_dump(count($fruits));
sort($fruits); //ordem descendente
var_dump($fruits);
rsort($fruits); //ordem ascendente
var_dump($fruits);

$numbers = range(1, 5);
var_dump($numbers);

$squared = array_map(fn($number) => $number ** 2, $numbers);
var_dump($squared);

$evenNumbers = array_filter($numbers, fn($number) => $number % 2 === 0);
var_dump($evenNumbers);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number, 0);
var_dump($sum);

$set1 = [1, 2, 3, 4, 5];
$set2 = [2, 3, 4, 5, 6];

var_dump(array_diff($set1, $set2), array_intersect($set1, $set2));


