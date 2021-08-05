<?php

require_once 'funcoes.php';

// array associativos:
$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Guilherme',
    'saldo' => 1000
  ], 
  '983.234.234-23' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ], 
  '623.123.122-33' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

$contasCorrentes['983.234.234-23'] = sacar(
  $contasCorrentes['983.234.234-23'],
   500
);
$contasCorrentes['123.456.789-10'] = depositar(
  $contasCorrentes['123.456.789-10'],
  900
);

unset($contasCorrentes['623.123.122-33']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

// echo "<ul>";

// foreach ($contasCorrentes as $cpf => $conta ) {
//   exibeConta($conta);
// } 
// echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de dados</title>
</head>
<body>
  <h1>Contas Correntes</h1>

  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <h3> <?= $conta['titular'];?>  - <?= $cpf; ?></h3>
      </dt>
      <dd>
        Saldo: <?= $conta['saldo'];?>
      </dd>
      <?php } ?>
  </dl>
    

</body>
</html>