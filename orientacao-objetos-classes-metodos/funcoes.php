<?php
// subrotina
function exibeMensagem(string $mensagem) 
{
  echo $mensagem . '<br>';
}

// função
function sacar(array $conta, float $valorASacar) : array
{
  if($valorASacar > $conta['saldo'] ) {
    exibeMensagem("Você não pode sacar esse valor");
  }else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
}

function depositar (array $conta, float $valorADepositar) : array
{
  if($valorADepositar > 0 ) {
   $conta['saldo'] += $valorADepositar;
  }else {
    exibeMensagem("Operação inválida. Saldo indisponível");
  }
   return $conta;
}

function titularComLetrasMaiusculas(array &$conta) 
{
 $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta) 
{
  ['titular' => $titular, 'saldo' => $saldo]  = $conta;
  echo "<li>Titular: $titular . Saldo:  $saldo </li>";
}


