<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <form action="calculadora.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"
        required><br><br>
        <placeholder for="peso">Peso(Kg):</placeholder>
        <input type="number" id="peso" name="peso"
        step="0.1" required><br><br>
        <placeholder for="altura">Altura(m):</placeholder>
        <input type="number" id="altura" name="altura"
        step="0.01" required><br><br>
        <label for="dataNasc">Data de Nascimento:</label>
        <input type="number" id="dataNasc" name="dataNasc" ><br><br>
        <input type="submit" value="Calcular IMC">
        <input type="reset" value="Limpar">
    </form>
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