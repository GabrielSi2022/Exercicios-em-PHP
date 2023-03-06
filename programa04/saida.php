<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de tabela</title>
</head>

<body>
<section class="saida">
    <h3>Aqui está a sua tabela gerada: </h3>
        <?php

        $titulo = $_POST['titulo'];
        $espaco = $_POST['espaco'];
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
        $borda = $_POST['borda'];
        $fundo = $_POST['fundo'];
        $texto = $_POST['texto'];

        echo "<h2>$titulo</h2>";

        $css_tabela = "border: {$borda}px solid black; background-color: {$fundo}; color: {$texto}; width: {$espaco}px; margin: 0 auto;";

        echo "<table style='{$css_tabela}'>";
        
        for ($i = 1; $i <= $linhas; $i++) {
            echo "<tr>";
           
            for ($j = 1; $j <= $colunas; $j++) {
                echo "<td style='{$css_tabela}'>Texto</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    
</section>
    
</body>