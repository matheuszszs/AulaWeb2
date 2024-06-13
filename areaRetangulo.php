<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Retângulo</title>
</head>
<body>
    <center>
        <h1>Área do Retângulo</h1>
        <form action="areaRetangulo.php" method="post">
            <label for="largura">Largura:</label>
            <input type="float" id="largura" name="largura" step="5" required><br><br>
            <label for="altura">Altura:</label>
            <input type="float" id="altura" name="altura" step="5" required><br><br>

            <input type="submit" value="Calcular Raio">
            <input type="reset" value="Limpar"><br><br>
        </form>

        <a href="calcAreas.php"><button class="botao">Voltar</button></a><br><br>

        <div class="respostas">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['largura']) || isset($_POST['altura'])){
                    $largura = $_POST['largura'];
                    $altura = $_POST['altura'];

                    $erro = empty($altura) || empty($largura)?"Todos os campos são obrigatório para o cálculo do retângulo" : "";

                    if ($erro) {
                        echo $erro;
                    } else {
                        $resp = $largura * $altura;
                        echo "<p>O cálculo da área do retângulo é de: $resp</p>";
                    }} else {
                        echo"Formulário não enviado corretamente!"; 
                    }
            }
            ?>

        </div>
    </center>
</body>
</html>