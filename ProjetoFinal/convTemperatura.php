<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./convTemperatura.css">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <div class="container">
    <h1 class="titulo1">Conversor de Temperatura</h1>
    <form action="convTemperatura.php" method="POST">
        <label class="texto" for="temp">Temperatura:</label>
        <input type="number" id="temp" name="temp" required><br><br>
        <label class="texto" for="convTemp">Converter para:</label>
        <select name="convTemp" id="convTemp">
            <option value="celsius">Celsius</option>
            <option value="fahreinheit">Fahreinheit</option>
        </select><br><br>

        <div class="botoes">
        <input class="botao" type="submit" value="Converter">
        <input class="botao" type="reset" value="Limpar">
        </div>

    </form>

    <div class="botoes">
        <a href="index.php"><button class="botao">Voltar</button></a><br><br>
    </div>

    </div>
    <div class="resposta">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['temp']) && isset($_POST['convTemp'])) {
                    $temp = $_POST['temp'];
                    $convTemp = $_POST['convTemp'];

                    if($convTemp == 'celsius'){
                        $resp = ($temp * 90/5.0);
                        echo"<p> A temperatura convertida para Celsius é: $resp ° Celsius</p>";
                    } else if ($convTemp == 'fahreinheit'){
                        $resp = ($temp - 32) * 5.0/9.0;
                        echo"<p> A temperatura convertida para Fahreinheit é: $resp ° Fahreinheit</p>";
                    } else {
                        echo"Formulário não preenchido corretamente";
                    }
                }
            }
        ?>
    </div>
</body>
</html>