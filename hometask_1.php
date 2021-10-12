<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$name = 'Vyacheslav';
echo $name;
echo '<br>';
print $name;
echo '<br>';
print_r($name);
echo '<br>';echo '<br>';

$age = 37;
echo '<br>';
echo $age;
echo '<br>';
print $age;
echo '<br>';
print_r($age);
echo '<br>';echo '<br>';

$pi = 3.14;
echo '<br>';
echo $pi;
echo '<br>';
print $pi;
echo '<br>';
print_r($pi);
echo '<br>';echo '<br>';

$arr1 = ['alex', 'vova', 'tolya'];
echo '<br>';
echo $arr1;
echo '<br>';
print $arr1;
echo '<br>';
print_r($arr1);
echo '<br>';echo '<br>';

$arr2 = ['alex', 'vova', 'tolya',['kostya', 'olya']];
echo '<br>';
echo $arr2;
echo '<br>';
print $arr2;
echo '<br>';
print_r($arr2);
echo '<br>';echo '<br>';

$arr3 = ['alex', 'vova', 'tolya',['kostya', 'olya',['gosha', 'mila']]];
echo '<br>';
echo $arr3;
echo '<br>';
print $arr3;
echo '<br>';
print_r($arr3);
echo '<br>';echo '<br>';

$arr4 = [['alex', 'vova', 'tolya'],['kostya', 'olya',['gosha', 'mila']]];
echo '<br>';
echo $arr4;
echo '<br>';
print $arr4;
echo '<br>';
print_r($arr4);
?>
</body>
</html>
