<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');
    </style>
    <title>Calculo de fatorial</title>
</head>
<body>

<section>
    <div class="container">
        <h1>Resultado:</h1>
<?php


$fatorial = $_POST['fatorial'];



function calc_fatorial($numero){
    if ($numero == 1) {
        return 1;
    } else {
        return $numero* calc_fatorial($numero - 1);
    }
}

$resultado = calc_fatorial($fatorial);

$resultado = number_format($resultado, 2, '.', '');

if ($fatorial >=1 && $fatorial <= 99){
    echo '<span>O Fatorial de ' . $fatorial . ' é --> ' . $fatorial;
        for ($j = $fatorial - 1; $j > 1; $j--) {
            echo "* $j";
        }
        echo " = " . $resultado . '<span>';
}else{
    echo '<span> O Numero que Você digitou não esta entre ( 0 e 99 ) , digite novamente!!</span>';
}

    ?>
</div>
</section>
</body>
</html>