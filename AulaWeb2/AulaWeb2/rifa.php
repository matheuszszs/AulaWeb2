<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./rifa.css">
    <title>Ação dos Guri</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">AÇÃO ENTRE AMIGOS</h1>
        <?php
        $premio = "Olho que tudo vê";
        $valor = "2.60";
        $quantNum = 7;
        ?>
        <table class="tabela">
            <?php 
                
                for($i=1;$i<=5; $i++){
                    echo"<tr class='linhas'>";
                    echo"<td class='quadrado1'>
                            <p class='dados'>Nº $i</p>
                            <p class='dados'>Nome:</p>
                            <p class='dados'>Telefone:</p>
                            <p class='dados'>E-mail:</p>
                            </td>
                            <td  class='col'>
                              <p class='aea' >AÇÃO ENTRE AMIGOS</p>
                              <p class='premiotext' style='font-size: 20px;'>$premio</p>
                              <a href = ''>
                                <img src = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Illuminati_triangle_eye.png/100px-Illuminati_triangle_eye.png'/>
                              </a>
                              <p>Valor da Rifa: $valor</p> 
                              <p>N° $i</p>
                            </td>";  
                }
               
            ?>
        </table>
    </div>
    
</body>
</html>
