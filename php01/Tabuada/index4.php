<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While</h1> números pares até dez:
    <?php $i = 2;
    while($i<= 10) {
        echo $i ." ,";
        $i = $i + 2;
    }
 ?>
 <hr>

 <?php  $i = 101;
 while($i< 1000) {
    echo $i .",";
    $i = $i + 2;
 }
    ?>
<hr> 
<?php  $i = 30;
 while($i >= 3) {
    echo $i .",";
    $i = $i - 3;
 }
    ?>
</body>
</html>