<?php

echo "Digite seu nome: ";

$nome = fgets (STDIN);

echo "Digite sua idade: ";

$idade = fgets (STDIN);
$idade = (int) $idade;

if ($idade >= 18){
    $situacao ="maior de idade";
}else{
    $situacao = "menor de idade";
}

echo"Olá, " . $nome;

echo "Você é: " . $situacao . ".";

?>
