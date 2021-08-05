<?php
$idade = 23;
$numeroDePessoas = 2;
 
echo "Você só pode entrar se tiver mais do que 18 anos ou ";
echo "a partir de 16 anos acompanhado: " . PHP_EOL;

if ($idade >= 18 ) {
  echo "Você tem $idade anos".  PHP_EOL . "Pode entrar sozinho.";
}elseif ($idade >= 16 && $numeroDePessoas > 1) {
  echo "Você está acompanhado por $numeroDePessoas pessoa(s)." . PHP_EOL . "Pode entrar.";
}else {
  echo "Você só tem $idade anos e . Você não pode entrar";
}
echo PHP_EOL;
echo "Até mais!";
  
