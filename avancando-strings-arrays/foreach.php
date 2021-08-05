<?php

// array associativos:

$contasCorrentes = [
  12345678910 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
  ], 
  98323423423 => [
    'titular' => 'Maria',
    'saldo' => 10000
  ], 
  62312312233 => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

// adicionando um item ao indice manualmente
// pega o indice mais alto, considera e auto incrementa o indice
$contasCorrentes[] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

$contasCorrentes[] = [
  'titular' => 'Guilherme',
  'saldo' => 100000
];

// consigo pegar o indice também aqui nesse caso 

foreach ($contasCorrentes as $cpf => $conta ) {
 echo $cpf . " " . $conta['titular'] . PHP_EOL;
} 