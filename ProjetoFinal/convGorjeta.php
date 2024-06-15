<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="convGorjeta.css">
    <title>Conversor de Gorjeta</title>
</head>
<body>

<div class="container">

    <h1 class="titulo1">Conversor de Gorjeta</h1>
    <form action="convGorjeta.php" method="post">
        <label class="texto" for="valor">Valor da Conta(R$): </label>
        <input type="number" id="valor" step="0.01" name="valor" required><br><br>
        <label class="texto" for="porcent">Porcentagem da Gorjeta(%):</label>
        <input type="number" id="porcent" step="0.1" name="porcent" required><br><br>

    </form>

    <div class="botoes">
        <input class="botao" type="submit" value="Calcular a Gorjeta">
        <input class="botao" type="reset" value="Limpar">
        <a href="index.php"><button class="botao">Voltar</button></a><br><br>
    </div>

</div>
    <div class="resposta">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                if (isset($_POST['valor']) && isset($_POST['porcent'])){
                    $valor = $_POST['valor'];
                    $porcent = $_POST['porcent'];

                    $erro = empty($valor) || empty($porcent)?"Todos os campos são obrigatórios para a onclusão do cálculo!" : 
                    ((!is_numeric($valor) || (!is_numeric($porcent)) || $valor <= 0 || $porcent <= 0)?"Por favor, insura valores válidos para os cálculos!" : "");

                    if ($erro){
                        echo $erro;
                    } else {
                        $resp = $valor * ($porcent / 100.0);
                        echo "<p>O valor da gorjeta é de $resp</p>";   
                    }
                }
            }
        ?>
    </div>
</body>
</html>