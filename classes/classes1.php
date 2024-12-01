<?php

class Person {
  // public string $name;
  // public int $age;

  public function __construct( 
    public string $name,
    public int $age
    ) {}

  public function introduce():string{
    return "Hi, I'm {$this->name} and I'm {$this->age} years old";
  }
}

$person = new Person("John Doe", 30);
echo $person->introduce();