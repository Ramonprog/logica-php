<?php

declare(strict_types=1);

function numeros() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i; // Produz um valor a cada iteração
    }
}

foreach (numeros() as $numero) {
    echo $numero . PHP_EOL;
}

function diasDaSemana() {
    yield 1 => 'Segunda-feira';
    yield 2 => 'Terça-feira';
    yield 3 => 'Quarta-feira';
    yield 4 => 'Quinta-feira';
    yield 5 => 'Sexta-feira';
}

foreach (diasDaSemana() as $numero => $dia) {
    echo "{$numero}: {$dia}" . PHP_EOL;
}