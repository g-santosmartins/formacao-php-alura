<?php
// valide se um numero é impar ou não de 0 a 100

while ($contador <= 100) {
    if ($contador % 2 != 0) {
      echo "$contador" . PHP_EOL;
    }
    $contador++;
}

