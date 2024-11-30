<?php

$person = 'John Doe';

$client = &$person;

echo $client;

$client = 'Alisson Ramon';

echo $person;