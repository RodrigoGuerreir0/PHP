<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuções</title>
</head>

<body>
    <h1>Funções</h1>

    <?php
    function soma($i, $j)
    {
        $k = $i + $j;
        return $k;
    }
    $rest1 = soma("4", "5");
    echo "O resultado é da soma 1 ( de 4 e 5) é " . "= " . "<strong>$rest1</strong>";
    echo "<br>";

    $rest2 = soma("2", "3");
    echo "O resultado é da soma 2 ( de 2 com 3) é " . "= " . "<strong>$rest2</strong>";
    echo "<br>";

    $rest3 = soma("-1", "-2");
    echo "O resultado é da soma 3 ( de -1 com -2) é " . "= " . "<strong>$rest3</strong>";
    echo "<br>";
    echo "<hr>";

    echo "<h1>Multiplicação </h1>";

    function mult($a, $b)
    {
        $z = $a * $b;
        return $z;
    }
    $mult1 = mult("10", "34");
    echo "o valor da mulpicação " . "= " . "<strong>$mult1</strong>";
    echo "<br>";

    $mult2 = mult("33", "14");
    echo "o valor da mulpicação " . "= " . "<strong>$mult2</strong>";
    echo "<br>";

    $mult3 = mult("11", "37");
    echo "o valor da mulpicação " . "= " . "<strong>$mult3</strong>";
    echo "<br>";

    ?>
</body>

</html>