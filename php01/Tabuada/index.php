<!DOCTYPE html>

<html lang="pt-br">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="index.php">

    <title>Exemplo com PHP</title>

</head>



<body>



    <h1>Variavel</h1>


    <?php

    $valor = 'Maria';
    echo $valor . '<br />';
    $valor = 9;
    $valor = $valor + 1;
    echo $valor;



    $valor = "João";
    echo $valor;

    $outra_variavel ="";

    $valor1 = $outra_variavel . "PHP e divertido!!";
    echo $valor1;


    ?>







</body>



</html>