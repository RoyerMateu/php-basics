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
//Generate an instruction that makes use of "echo"
echo "echo does not require parentheses.";
?>
<br>
<?php
//Generate an instruction that makes use of "print"
print "hello";
print "world";
?>
<br>
<?php
//Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
?>
</body>
</html>