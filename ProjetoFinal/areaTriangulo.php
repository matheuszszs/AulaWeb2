<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./areaTringulo.css">
    <title>Área do Triângulo</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo1">Área do Triângulo</h1>
        <form action="areaTriangulo">
        <label class="texto" for="altTriangulo">Altura do Triângulo: </label>
        <input type="float" id="altTriangulo" name="altTriangulo" step="5" required><br><br>
        <label class="texto" for="base">Base: </label>
        <input type="float" id="base" name="base" step="5" required><br><br>

        <div class="botoes">
        <input class="botao" type="submit" value="Calcular Triângulo">
        <input class="botao" type="reset" value="Limpar"><br><br>
        </div>
        </form>

      
        <div class="botoes">
        <a href="calcAreas.php"><button class="botao">Voltar</button></a><br><br>
        </div>
        </div>

        <div class="respostas">
          
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['altTriangulo']) || isset($_POST['base'])){
                $altTriangulo = $_POST['altTringulo'];
                $base = $_POST['base'];

                $erro = empty($altTriangulo) || empty($base)?"Todos os campos são obrigatório para o cálculo do triângulo" : "";

                if($erro){
                    echo $erro;
                } else {
                    $resp = $altTriangulo * $base;
                    echo "<p>O cálculo da área do triângulo é de: $resp</p>";    
                } } else {
                    echo"Formulário não enviado corretamente!";
                }
        }
        ?>
        </div>
</body>
</html>