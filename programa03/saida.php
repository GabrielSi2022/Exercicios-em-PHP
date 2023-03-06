<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analise das Notas das Provas</title>
</head>
<body>
    <section >
        <div class="container">
            <h1>Resultado da Analise:</h1>
        <?php
            $nota01 = $_POST["nota01"];
            $nota02 = $_POST["nota02"];
            $total01 = $_POST["total01"];
            $total02 = $_POST["total02"];

            $totalProva = $total01 + $total02;
            $totalAluno = $nota01 + $nota02;
            $porcentagemProva01 = ($nota01/$total01)*100;
            $porcentagemProva02 = ($nota02/$total02)*100;
            $porcentagemTotal = ($totalAluno/$totalProva)*100;


            function desempenho($des){
                
                
                if ($des < 60) {
                    return "Pessimo";
                } 
                elseif ($des >= 60 && $des <= 69){
                    return "Ruim";
                }
                elseif ($des >= 70 && $des <= 79){
                    return "Bom";
                }
                elseif ($des >= 80 && $des <= 89){
                    return "Ótimo";
                }
                else{
                    return "Excelente";
                }
            }


            echo "<h2>O valor total das duas provas é  $totalProva pontos</h2>";
            echo "<h2>Em relação a prova 1, o aluno obteve ". number_format($porcentagemProva01, 0) . "% do total</h2>";
            echo "<h2>Em relação a prova 2, o aluno obteve ". number_format($porcentagemProva02, 0) . "% do total</h2>";
            echo "<h2>O aluno totalizou com as duas provas $totalAluno pontos</h2>";
            echo "<h2>A porcentagem obtida pelo aluno em função do total foi de ". number_format($porcentagemTotal, 0) . "%</h2>";
            echo "<h2>O conceito do aluno foi: ".desempenho($porcentagemTotal)."</h2>";


        ?>
        </div>
    </section>
</body>
</html>