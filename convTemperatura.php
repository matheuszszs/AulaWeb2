<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h1>Conversor de Temperatura</h1>
    <form action="convTemperatura.php" method="POST">
        <label for="temp">Temperatura:</label>
        <input type="number" id="temp" name="temp" required><br><br>
        <label for="convTemp">Converter para:</label>
        <select name="convTemp" id="convTemp">
            <option value="celsius">Celsius</option>
            <option value="fahreinheit">Fahreinheit</option>
        </select><br><br>
        <input type="submit" value="Converter">
        <input type="reset" value="Limpar">
    </form>

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