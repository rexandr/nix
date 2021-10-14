<?php
//Home exercise 1.
echo '<h2>Task 1</h2>';
$a = 42;
$b = 55;
echo ($a>$b ? '$a bigger than $b' : '$b bigger than $a');
echo '<br>';
echo ($a>$b ? "$a bigger than $b" : "$b bigger than $a");
echo '<br>';echo '<br>';

//Home exercise 2.
echo '<h2>Task 2 rand() used</h2>';echo '<br>';
$c = rand(5,15);
$d = rand(5,15);
echo ($c>$d ? '$c bigger than $d' : '$d bigger than $c');
echo '<br>';
echo ($c>$d ? "$c bigger than $d" : "$d bigger than $c");
echo '<br>';echo '<br>';


//Home exercise 3.
echo '<h2>Task 3 Working with FIO</h2>';echo '<br>';
$f = 'Golovach';
$i = 'Vjacheslav';
$o = 'Viktorovich';
echo ucfirst($f).' '.ucfirst($i[0]).'.'.ucfirst($o[0]).'.';
echo '<br>';echo '<br>';

//Home exercise 4.
echo '<h2>Task 4 substr_count</h2>';echo '<br>';
$e = rand(1,99999);
$g = rand(0,9);
echo "$g has been found in $e" .' _ '. substr_count($e,$g). ' ' . 'times.';
echo '<br>';echo '<br>';

//Home exercise 5.
echo '<h2>Task 5 Variables</h2>';echo '<br>';
$a1 = 3;
echo '$a1 = ' . $a1;
echo '<br>';
echo '<br>';
$a2 = 10;
echo '$a2 = '. $a2;
echo '<br>';
$b2 = 2;
echo '$b2 = '.$b2;
echo '<br>';
echo '$a2 + $b2 = ' . ($a2+$b2);
echo '<br>';
echo '$a2 - $b2 = ' . ($a2-$b2);
echo '<br>';
echo '$a2 * $b2 = ' . ($a2*$b2);
echo '<br>';
echo '$a2 / $b2 = ' . ($a2/$b2);
echo '<br>';
echo '<br>';
$c1 = 15;
echo '$c1 = ' . $c1;
echo '<br>';
$d1 = 2;
echo '$d1 = ' . $d1;
echo '<br>';
$result = $c1+$d1;
echo '$result  = $c1 + $d1 = ' . $result;
echo '<br>';
echo '<br>';
$a3 = 10;
echo '$a3 = ' . $a3;
echo '<br>';
$b3 = 2;
echo '$b3 = ' . $b3;
echo '<br>';
$c3 = 5;
echo '$c3 = ' . $c3;
echo '<br>';
echo '$a3 + $b3 + $c3 = ' . ($a3+$b3+$c3);
echo '<br>';
echo '<br>';
$a4 = 17;
echo '$a4 = ' . $a4;
echo '<br>';
$b4 = 10;
echo '$b4 = ' . $b4;
echo '<br>';
$c4 = $a4 - $b4;
$d4 = $c4;
echo '$d4 = $c4 = $a4 - $b4 = ' . $d4;
echo '<br>';
echo '<br>';

//Home exercise 6.
echo '<h2>Task 6 The same as subtask 5c</h2>';echo '<br>';
$c1 = 15;
echo '$c1 = ' . $c1;
echo '<br>';
$d1 = 2;
echo '$d1 = ' . $d1;
echo '<br>';
$result = $c1+$d1;
echo '$result  = $c1 + $d1 = ' . $result;
echo '<br>';echo '<br>';

//Home exercise 7.
echo '<h2>Task 7 Strings</h2>';echo '<br>';
$text = 'Hello, World';
echo $text;
echo '<br>';
$text1 = 'Hello,';
$text2 = 'World';
echo $text1.' '.$text2;
echo '<br>';
echo 'There are ' . (60 * 60) . ' seconds per hour, ' . (60 * 60 * 24) . ' seconds per day, '
    . (60 * 60 * 24 * 7) . ' seconds per week and ' . (60 * 60 * 24 * 30) . ' seconds per month.';
echo '<br>';echo '<br>';

//Home exercise 8.
echo '<h2>Task 8 Code rebuilding</h2>';echo '<br>';
$var = 1;
echo '$var = ' . $var;
echo '<br>';
$var+=12;
echo '$var+=12 = '. $var;
echo '<br>';
$var-=14;
echo '$var-=14 = '. $var;
echo '<br>';
$var*=5;
echo '$var*=5 = '. $var;
echo '<br>';
$var/=7;
echo '$var/=7 = '. $var;
echo '<br>';
$var++;
echo '$var++ = '. $var;
echo '<br>';
$var--;
echo '$var-- = '. $var;
echo '<br>';
echo '<br>';

//Home exercise 9.
echo '<h2>Task 9 Current time</h2>';echo '<br>';
$hour = date("H");
echo '$hour = ' . $hour;
echo '<br>';
$minute = date("i");
echo '$minute = ' . $minute;
echo '<br>';
$second = date("s");
echo '$second = ' . $second;
echo '<br>';
echo "Current time is $hour : $minute : $second .";
echo '<br>';echo '<br>';

//Home exercise 10.
echo '<h2>Task 10 .= </h2>';echo '<br>';
$text = 'I';
$text .= ' want ';
$text .= ' to know ';
$text .= ' PHP!';
echo $text;
echo '<br>';echo '<br>';

//Home exercise 11.
echo '<h2>Task 11 $$foo </h2>';echo '<br>';
$foo  = 'bar';
echo '$foo  = \'bar\'';
echo '<br>';
$bar = 10;
echo '$bar = 10';
echo '<br>';
echo '$$foo = ' . $$foo;
echo '<br>';echo '<br>';

//Home exercise 12.
echo '<h2>Task 12 What will be result? </h2>';echo '<br>';
$a = 2;
echo '$a = ' . $a;
echo '<br>';
$b = 4;
echo '$b = ' . $b;
echo '<br>';
echo '$a++ + $b = ' . ($a++ +$b) . ' - $a - ' .$a . '- $b - ' .$b;
echo '<br>';
echo '$a + ++$b = ' . ($a+ ++$b) . ' - $a - ' .$a . '- $b - ' .$b;
echo '<br>';
echo '++$a + $b++ = ' . (++$a + $b++) . ' - $a - ' .$a . '- $b - ' .$b;
echo '<br>';echo '<br>';

//Home exercise 13.
echo '<h2>Task 13 Data type checking. </h2>';echo '<br>';

echo 'isset($a) ' . (isset($a)?'$a is set': '$a isn\'t set');
echo '<br>';
echo 'gettype($a) ' . (gettype($a) == 'integer'?'$a is integer': '$a isn\'t integer');
echo '<br>';
echo 'is_null($a) ' . (is_null($a)?'$a is null': '$a isn\'t null');
echo '<br>';
echo 'empty($a) ' . (empty($a)?'$a is empty': '$a isn\'t empty');
echo '<br>';
echo 'is_integer($a) ' . (is_integer($a)?'$a is integer': '$a isn\'t integer');
echo '<br>';
echo 'is_double($a) ' . (is_double($a)?'$a is double': '$a isn\'t double');
echo '<br>';
echo 'is_string($a) ' . (is_string($a)?'$a is string': '$a isn\'t string');
echo '<br>';
echo 'is_numeric($a) ' . (is_numeric($a)?'$a is numeric': '$a isn\'t numeric');
echo '<br>';
echo 'is_bool($a) ' . (is_bool($a)?'$a is bool': '$a isn\'t bool');
echo '<br>';
echo 'is_scalar($a) ' . (is_scalar($a)?'$a is scalar': '$a isn\'t scalar');
echo '<br>';
echo 'is_array($a) ' . (is_array($a)?'$a is array': '$a isn\'t array');
echo '<br>';
echo 'is_object($a) ' . (is_object($a)?'$a is object': '$a isn\'t object');
echo '<br>';
echo '<br>';echo '<br>';

//Home exercise 14.
echo '<h2>Task 14 The sum and multiplication of two numbers </h2>';echo '<br>';
$a = 4;
echo '$a  = ' . $a;
echo '<br>';
$b = 6;
echo '$b  = ' . $b;
echo '<br>';
echo '$a + $b = ' . ($a+$b);
echo '<br>';
echo '$a * $b = ' . ($a*$b);
echo '<br>';echo '<br>';

//Home exercise 15.
echo '<h2>Task 15 The sum of the squares of two numbers </h2>';echo '<br>';
$a = 4;
echo '$a  = ' . $a;
echo '<br>';
$b = 6;
echo '$b  = ' . $b;
echo '<br>';
echo 'pow($a,2) + pow($b,2) = ' . (pow($a,2)+pow($b,2));
echo '<br>';
echo '$a**2 + $b**2 = ' . ($a**2 + $b**2);
echo '<br>';echo '<br>';

//Home exercise 16.
echo '<h2>Task 16 The arithmetic mean of three numbers </h2>';echo '<br>';
$a = 4;
echo '$a  = ' . $a;
echo '<br>';
$b = 6;
echo '$b  = ' . $b;
echo '<br>';
$c = 12;
echo '$c  = ' . $c;
echo '<br>';
echo '($a+$b+$c)/3 = ' . (($a+$b+$c)/3);
echo '<br>';echo '<br>';

//Home exercise 17.
echo '<h2>Task 17 X,Y,Z </h2>';echo '<br>';
$a = 4;
echo '$a  = ' . $a;
echo '<br>';
$b = 6;
echo '$b  = ' . $b;
echo '<br>';
$c = 12;
echo '$c  = ' . $c;
echo '<br>';
echo '($a+1)-2*($c-(2*$a)+$b) = ' . (($a+1)-2*($c-(2*$a)+$b));
echo '<br>';echo '<br>';

//Home exercise 18.
echo '<h2>Task 18 % + 30% + 120% </h2>';echo '<br>';
$a = 3;
echo '$a  = ' . $a;
echo '<br>';
$b = 5;
echo '$b  = ' . $b;
echo '<br>';
echo '$a % $b = ' . ($a%$b);
echo '<br>';
echo '($a % $b) + 30% = ' . ($a%$b) * 1.3;
echo '<br>';
echo '($a % $b) + 120% = ' . (($a%$b) + (($a%$b) * 120/100));
echo '<br>';echo '<br>';

//Home exercise 19.
echo '<h2>Task 19 Sum 40% of first number and 84% of second number </h2>';echo '<br>';
$a = 323;
echo '$a  = ' . $a;
echo '<br>';
$b = 234;
echo '$b  = ' . $b;
echo '<br>';
echo '($a * 40/100) + ($b * 84/100) = ' . (($a * 40/100) + ($b * 84/100));
echo '<br>';echo '<br>';

//Home exercise 20.
echo '<h2>Task 20 Changing second symbol and reverse typing </h2>';echo '<br>';
$a = "123";
echo '$a  = ' . $a;
echo '<br>';
$a[1] = "0";
echo '$a[1] = \"0\" ___ $a = '.$a;
echo '<br>';
echo '$a[2].$a[1].$a[0] ___ $a = ' . $a[2].$a[1].$a[0];
echo '<br>';echo '<br>';

//Home exercise 21.
echo '<h2>Task 21 Even or odd number </h2>';echo '<br>';
$a = 5;
echo '$a  = ' . $a;
echo '<br>';
echo ((($a%2) == 0) ? 'The number is even' : 'The number is odd');
echo '<br>';echo '<br>';