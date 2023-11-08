<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis em PHP</title>
</head>
<body>
    <h1>
    Variaveis em PHP
    </h1>

    <?php
    $valor = 'Maria';
    echo $valor. '<br />';
    $valor =9;
    $valor = $valor + 1;
    echo $valor;
    ?>

    <h1>
    Variaveis em PHP
    </h1>

    <?php
    $valor = 'João';
    echo $valor. '<br />';
    $valor =9;
    $valor = $valor + 5;
    echo $valor. '<br />';;
    $valor2= 'PHP é divertido!';
    echo $valor2;
    ?>

    <h1>
    Condição
    </h1>

    <?php
    $valor = 10;
    echo $valor. '<br /> <br />';

    echo 'Mais + 1<br />';
    $valor2 =$valor+1;
    echo $valor2. '<br /> <br />';

    echo 'Menos - 1<br />';
    $valor3 =$valor-1;
    echo $valor3. '<br /> <br />';

    echo 'Vezes * 2<br />';
    $valor4 =$valor*2;
    echo $valor4. '<br /> <br />';

    echo 'Dividir / 2<br />';
    $valor5 =$valor/2;
    echo $valor5. '<br /> <br />';
    ?>

    <h1>
    if/elseif/else
    </h1>
    O valor é

    <?php
    $valor = true;
    if($valor==1){
        echo'um';
    }elseif($valor==2){
        echo'Dois';
    }elseif($valor==3){
        echo'Tres';
    }else{
        echo'não sei';
    }
    ?>
</body>
</html>