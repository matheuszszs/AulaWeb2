<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
</head>

<body>
    <h1>Conversor de Moedas</h1>
    <form action="convMoedas.php" method="post">
        <label for="valor">Valor: </label>
        <input type="number" id="valor" step="0.01" name="valor" required><br><br>
        <placeholder for="converterDe">Converter de:</placeholder>
        <select id="converterDe" name="converterDe">
            <option value="usd">USD</option>
            <option value="brl">BRL</option>
            <option value="eur">EUR</option>
        </select>
        <br><br>
        <placeholder for="converterPara">Converter Para:</placeholder>
        <select id="converterPara" name="converterPara">
            <option value="usd">USD</option>
            <option value="brl">BRL</option>
            <option value="eur">EUR</option>
        </select><br><br>
        <input type="submit" value="Converter">
        <input type="reset" value="Limpar">
    </form>
    <div class="resposta">

        <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['valor']) && isset($_POST['converterDe']) && isset($_POST['converterPara'])) {
                $valor = $_POST['valor'];
                $converterDe = $_POST['converterDe'];
                $converterPara = $_POST['converterPara'];

                if($converterDe == 'brl' && $converterPara == 'usd'){
                    $resp = $valor * 5.37;
                    echo"<p> USD $ $resp </p>";
                } else if($converterDe == 'brl' && $converterPara == 'eur'){
                    $resp = $valor * 5.76;
                    echo"<p> EUR $ $resp </p>";
                } else if($converterDe == 'eur' && $converterPara == 'brl'){
                    $resp = $valor / 5.76;
                    echo"<p> BRL $ $resp </p>";
                } else if($converterDe == 'eur' && $converterPara == 'usd'){
                    $resp = $valor / 1.07;
                    echo"<p> USD $ $resp </p>";
                } else if($converterDe == 'usd' && $converterPara == 'brl'){
                    $resp = $valor / 0.19;
                    echo"<p> BRL $ $resp</p>";
                } else if ($converterDe == 'usd' && $converterPara == 'eur'){
                    $resp = $valor * 0.93;
                    echo"<p> EUR $ $resp</p>";
                }
                
                $erro = empty($converterDe) || empty($converterPara) ? "Escolha pelo menos uma opção de conversão!" :
                    ((!is_numeric($valor) || $valor <= 0) ? "Por favor, insira valores váidos!" : "");

                if ($erro) {
                    echo $erro;
                } else {
                    echo"Formulario não enviado corretamente!";
                }
            }
        }
        ?>
    </div>
</body>

</html>