<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

// adicionando um novo valor, 
// deixando vazio ele coloca no ultimo
$idadeList[] = 20;

foreach($idadeList as $idade) {
  echo $idade . PHP_EOL;
}