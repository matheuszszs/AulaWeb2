<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./calculadora.css">
    <title>Formularios</title>
</head>
<body>
    <div class="container">

    <h1 class="titulo">Calculadora IMC</h1>
    <form action="calculadora.php" method="POST">
        <label class="texto" for="nome">Nome:</label>
        <input class="campText" type="text" id="nome" name="nome"
        required><br><br>
        <placeholder class="texto" for="peso">Peso(Kg):</placeholder>
        <input class="campText" type="number" id="peso" name="peso"
        step="0.1" required><br><br>
        <placeholder class="texto" for="altura">Altura(m):</placeholder>
        <input class="campText" type="number" id="altura" name="altura"
        step="0.01" required><br><br>
        <label class="texto" for="dataNasc">Data de Nascimento:</label>
        <input class="campoText" type="number" id="dataNasc" name="dataNasc" ><br><br>
        <input class="botao" type="submit" value="Calcular IMC">
        <input class="botao" type="reset" value="Limpar">
    </form>

    </div>
    <div class="resposta">
    <?php

    if($_SERVER["REQUEST_METHOD"] =="POST"){
        if(isset($_POST['peso']) && isset($_POST['altura']) && isset($_POST['nome']) && isset($_POST['dataNasc'])){
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $nome = $_POST['nome'];
            $dataNasc = $_POST['dataNasc'];

            $erro = empty($peso) || empty($altura) || empty($dataNasc) || empty($nome)?"todos os campos são obrigatórios" : 
            ((!is_numeric($altura) || $peso <= 0 || $altura <= 0)?"Por favor, insira os valores válido para peso e altura!" : ""); 
            // : vale como um else ou "senão"
            if ($erro){
                echo $erro;
            } else {
                $imc = $peso / ($altura * $altura);
                $imc = number_format($imc, 2);
                $anoAtual = date('Y');
                $idade = $anoAtual - $dataNasc; 
                

                $classificacao = ($imc < 18.5)? "Abaixo do Peso" : (($imc < 24.9)? "Peso Normal" : (($imc < 29.9)? 
                "Sobre peso" : "Obesidade"));
                echo"<br><br>$nome Seu IMC é: $imc<br>";
                echo"Classificação: $classificacao<br>";
                echo"Sua idade é de $idade anos!<br>";

             
            }} else { echo"Formulário não enviado corretamente";}}?>
</div>
</body>
</html>