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
//Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
    $dateOne = new DateTime();
    $firstDate = $dateOne->format('Y-m-d');
    echo $firstDate;
?><br>
<?php
//Get the current day
    $dateOne = new DateTime();
    $firstDate = $dateOne->format('l');
    echo $firstDate;
?><br>
<?php
//Get the current month in numerical format (1-12)
    $dateOne = new DateTime();
    $firstDate = $dateOne->format('m');
    echo $firstDate;
?><br>
<?php
//Get the current minute with leading zeros (00 - 59)
    $dateOne = new DateTime();
    $firstDate = $dateOne->format('i');
    echo $firstDate;
?>
</body>
</html>