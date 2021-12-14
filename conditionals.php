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
//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
    $date = new DateTime();
    $weekDay = $date->format('l');
    if ($weekDay == "Monday") {
        echo "We are on Monday";
    }else {
        echo "We are not on Monday";
    }
?><br>
<?php
//Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
    $date = new DateTime();
    $weekDay = $date->format('m');
    if ($weekDay == "10") {
        echo "We are in October";
    }else {
        echo "We are on month $weekDay";
    }
?><br>
<?php
//Create a double condition that evaluates: If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
    $date = new DateTime();
    $weekDay = $date->format('i');
    if ($weekDay < "10") {
        echo "the current minute is less than 10";
    }elseif ($weekDay > "15"){
        echo "the current minute is more than 15";
    }else {
        echo "does not meet any conditions";
    }
?><br>
<?php
//Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
    $date = new DateTime();
    $weekDay = $date->format('l');
switch ($weekDay) {
    case "Monday":
        echo"Today is Monday";
        break;
    case "Tuesday":
        echo"Today is Tuesday";
        break;
    case "Wednesday":
            echo"Today is Wednesday";
        break;
    case "Thursday":
        echo"Today is Thursday";
        break;
    case "Friday":
        echo"Today is Friday";
        break;
    case "Saturday":
        echo"Today is Saturday";
        break;
    case "Sunday":
        echo"Today is Sunday";
        break;
}
?><br>
</body>
</html>