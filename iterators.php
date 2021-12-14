<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Generate a snippet that makes use of for
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
?>
<br>
<?php
//Generate a snippet that makes use of foreach
    $array = array(1, 2, 3, 4);
    foreach ($array as &$valor) {
        $valor = $valor * 2;
        echo $valor;
    }
?>
    <br>
<?php
//Generate a snippet that uses while
    $i = 1;
    while ($i <= 5) {
        echo $i++;
    }
?>
<br>
<?php
//Generate a snippet that uses do while
$i = 1;
do {
    echo $i;
} while ($i > 1);
?>
</body>
</html>