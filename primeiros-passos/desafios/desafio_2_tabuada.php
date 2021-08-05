<?php
$mulplicador = 1;
 while($mulplicador <= 10) {
  for ($i = 1; $i < 10; $i++ ) {
    echo "$mulplicador x $i = " . $mulplicador * $i . PHP_EOL; 
  }
  echo "\n";
  $mulplicador++;
}

