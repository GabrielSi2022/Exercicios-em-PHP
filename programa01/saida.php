<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de Retangulos em PHP</title>
</head>
<body>
    <section class="saida">
        <?php
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];
        $char_borda = $_POST['char_borda'];
        $cor_borda = $_POST['cor_borda'];
        $char_preenchimento = $_POST['char_preenchimento'];
        $cor_preenchimento = $_POST['cor_preenchimento'];

        $css_borda = "border: 0; font-family: Courier New; color: $cor_borda;";

        $css_preenchimento = "border: 0;font-family: Courier New; color: $cor_preenchimento;";

        echo "<h2>O seu Retangulo foi  gerado com sucesso</h2>";

        echo "<table style='margin: 0 auto;'>";
        
        for ($i = 1; $i <= $altura; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $largura; $j++) {

                if ($i == 1 || $i == $altura || $j == 1 || $j == $largura) {
                    echo "<td style='$css_borda'>$char_borda</td>";
                } else {
                    echo "<td style='$css_preenchimento'>$char_preenchimento</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

       </section>
</body>
</html>