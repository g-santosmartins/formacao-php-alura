<?php

$string = 'Testes de integração com PHP';

// convertendo apenas as primeiras letras de cada palavra
$novaStrig = mb_convert_case($string, MB_CASE_TITLE);
echo $string . PHP_EOL;
echo $novaStrig . PHP_EOL;

// mb_ para conseguir tratar a letra com mais de um byte (dai vem mb_)
echo mb_strlen($string) .PHP_EOL;

echo mb_strtoupper($string);

// de um tipo para outro
$convertida = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
echo $convertida . PHP_EOL;

?>