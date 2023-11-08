<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>For</h1>
    Números pares  até dez:
    <?php 
    for ($i = 2; $i <=10; $i = $i + 2) {
        echo $i.",";
    }
    ?>
    <hr>
    <?php 
    for ($i = 50; $i <=100; $i = $i + 5) {
        echo $i.",";
    }
    ?>
    <hr>
    <?php 
    for ($i = -100; $i >= -1000; $i = $i - 10) {
        echo $i.",";
    }
    ?>
    
</body>
</html>