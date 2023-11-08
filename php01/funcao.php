<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <h1>Funções Soma</h1>
    <?php
    function soma($PrimeiroParametro, $SegundoParametro)
    {
        $Return = $PrimeiroParametro * $SegundoParametro;
        return $Return;
    }

    $res1 = soma(4, 5);
    echo "O Resultado é da soma 1 (de 4 com 5) é " . $res1;
    echo "<br>";
    $res2 = soma(2, 3);
    echo "O Resultado é da soma 2 (de 2 com 3) é " . $res2;
    echo "<br>";
    $res3 = soma(-1, -7);
    echo "O Resultado é da soma 3 (de -1 com -7) é " . $res3;
    ?>
    <br><br><br>

    <h1>Funções Multiplicação</h1>
    <?php
    function multiplicacao($PrimeiroParametro, $SegundoParametro)
    {
        $Return = $PrimeiroParametro * $SegundoParametro;
        return $Return;
    }

    $res1 = multiplicacao(4, 5);
    echo "O Resultado é da mutiplicação 1 (de 4 com 5) é " . $res1;
    echo "<br>";
    $res2 = soma(2, 3);
    echo "O Resultado é da mutiplicação 2 (de 2 com 3) é " . $res2;
    echo "<br>";
    $res3 = soma(-1, -7);
    echo "O Resultado é da mutiplicação 3 (de -1 com -7) é " . $res3;
    ?>
    <br><br><br>

    <h1>Funções Area(Retangulo)</h1>
    <?php
    function calculaAreaRetangulo($Largura, $Altura)
    {
        $Return = $Largura * $Altura;
        return $Return;
    }

    $res1 = calculaAreaRetangulo(4, 5);
    echo "A area do Retangulo é de (de 4 com 5) é " . $res1;

    ?>
    <br><br><br>

    <h1>Funções Perimetro(Retangulo)</h1>
    <?php
    function calculaPerimetroRetangulo($Largura, $Altura)
    {
        $Return = 2 * $Largura + 2 * $Altura;
        return $Return;
    }

    $res1 = calculaPerimetroRetangulo(4, 5);
    echo "O perimetro do Retangulo é de (de 4 com 5) é " . $res1;
    ?>
    <br><br><br>

    <h1>Funções Media</h1>
    <?php
    function calcularMedia($Notas)
    {

        $total = array_sum($Notas);
        $quantidade = count($Notas);
        $Return =  $total / $quantidade;
        return $Return;
    }

    $notasAluno1 = array(10, 6, 8, 5, 8);
    $mediaAluno1 = calcularMedia($notasAluno1);
    echo "A media das notas dos alunos do terceiro ano é " . $mediaAluno1 . "<br>";

    $notasAluno2 = array(10, 9, 1, 7, 6);
    $mediaAluno2 = calcularMedia($notasAluno2);
    echo "A media das notas dos alunos do terceiro ano é " . $mediaAluno2 . "<br>";

    $notasAluno3 = array(10, 9, 1, 7, 6, 10, 2);
    $mediaAluno3 = calcularMedia($notasAluno3);
    echo "A media das notas dos alunos do terceiro ano é " . $mediaAluno3 . "<br>";

    $notasAluno4 = array(10, 9, 1, 7, 6, 10, 10, 8);
    $mediaAluno4 = calcularMedia($notasAluno4);
    echo "A media das notas dos alunos do terceiro ano é " . $mediaAluno4 . "<br>";

    ?>

</body>

</html>