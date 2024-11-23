<?php

$x = 10;

if ($x > 5) {
    echo "x is greater than 5 \n";
} else {
    echo "x is less than or equal to 5 \n";
}

//if else if

if ($x > 5) {
    echo "x is greater than 5 \n";
} elseif ($x == 5) {
    echo "x is equal to 5 \n";
} else {
    echo "x is less than 5 \n";
}

$score = 90;

if ($score >= 90) {
    echo "You got an A \n";
}elseif ($score >= 80) {
    echo "You got a B \n";
} elseif ($score >= 70) {
    echo "You got a C \n";
} else {
    echo "You got a D \n";
}

$num = 15;

if($num > 0) {
  if($num % 2 == 0) {
    echo "num is even \n";
} else {
    echo "num is odd \n";
  }
}

 $userRole = "admin";
 $userPassword = "123456";
 
 if($userRole == "admin" && $userPassword == "123456") {
    echo "Access granted \n";
 } else {
    echo "Access denied \n";
 }