<?php

// php entende o tipo d variável

$nome = "Poggersvaldo";
$anoNasc = 2013;
$idade = 2024 - $anoNasc;
$peso = 90.4;
$ehCasado = true;
$altura = 1.75;
$imc = $peso / pow($altura, 2);
// coringa para ver o tipo dos dados var_dump

echo"<h1>Hello World, i am $nome</h1>";

//Aspas duplas veêm a variável, aspas simples não vê as variaveis, aspas simples é mais usado para concatenar 
// . Esse ponto é basicamente um + na linguagem do PHP

echo '<br>Boa noite, ' . $nome . ', Seja bem vindo!<br>';

echo "Nome: $nome <br>";
echo "Nascido em $anoNasc <br>";
echo "$nome tem $idade anos de idade";

if($idade > 18){
    echo "<br><br>$nome você é maior de idade!";
} else {
    echo "<br>$nome você é mixuruca";
}

if($imc < 18.5){
    echo"<br>$nome kd vc?";
} else if ($imc >= 18.5 && $imc < 24.9){
    echo"<br>$nome tá lindao hein...";
} else if ($imc >= 25 && $imc <= 29.9){
    echo"<br>$nome tá na hora de se cuidar...";
} else if ($imc >= 30 && $imc <= 34.9){
    echo"<br>$nome está passando dos limites, querido!";
} else if ($imc >= 35 && $imc <= 39.9){
    echo"<br>$nome ja tá exagerando";
} else{
    echo"<br>$nome se foi pelos ares!";
}

$op = 6;
switch ($op) {
    case 1:
        echo "<br>Domingo";
        break;
    case 2:
        echo "<br>Segunda-Feira";
        break;
    case 3:
        echo "<br>Terça-Feira";
        break;
    case 4:
        echo "<br>Quarta-Feira";
        break;
    case 5:
        echo "<br>Quinta-Feira";
        break;
    case 6:
        echo "<br>Sexta-Feira";
        break;
    case 7:
        echo "<br>Sábado";
        break; 
    default: 
    echo"<br>Dia da semana inválido!";
}

// LOOOOOOOOOOOOOPSSSSSSSSSSSSS

$cont = 1;
while ($cont <= 10){
    echo "<br>$cont<br>";
    $cont++;
}

for($i = 1; $i <= 10; $i++){
    echo"<p style='border: 1px solid black; '> Número: $i </p>";
}