<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Atual</title>
</head>
<body>
    <h1>
        Data Atual 
    </h1>

Hoje é

<?php

date_default_timezone_set(
    'America/Sao_Paulo');

    echo date("d/m/Y");

?>

<?php
$hora = date('H:i');
echo "e agora são: $hora";
?>
<br><br><br>
<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
$data_extenso = strftime('%A, %d de %B de %Y', time());
echo "Hoje é $data_extenso";
?>



<?php
$hora = date('H:i');
echo "e agora são: $hora";
?>





</body>
</html>