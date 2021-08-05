<?php
$peso = 68;
$altura = 1.72**2;

$imc = $peso / $altura;

echo "seu IMC é $imc. O resultado é: ";
if($imc < 16) {
  echo "Subpeso severo";
}elseif($imc >= 16 &&$imc <= 19.9 ) {
  echo "Subpeso";
}elseif($imc >= 20 && $imc <= 24.9 ) {
  echo "Normal";
}elseif($imc >= 25 && $imc <= 29.9 ) {
  echo "Sobrepeso";
}elseif($imc >= 30 && $imc <= 39.9 ) {
  echo "Obeso";
}else{
  echo "Obeso mórbito";
}




