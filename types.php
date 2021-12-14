<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Define a new variable and assign a value to each of the following types:
boolean
integer
float
string
array
object
NULL -->
<?php
$foo = true;
echo $foo;
?><br>
<?php
$a = 1234;
echo $a;
?><br>
<?php
$a = 1.234;
echo $a;
?><br>
<?php
echo 'this is a simple string';
?><br>
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?><br>
<?php
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously
?><br>
<?php
$var = NULL;
echo $var;
echo "not showing var because it's null"
?><br>
</body>
</html>