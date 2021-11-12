<?php
echo '<h1>Homework 4_2</h1><br>';
echo '<a href="index.php">Home</a>';
//________________________________________________________________________________________
echo '<h3>Task 1 To reverse array with string data.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

$i = 0;

while (!empty($arr[$i])) {
    $i++;
}

$reverse = [];

$i--;

while (!empty($arr[$i])) {
    $reverse[] = $arr[$i];
    $i--;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

do {
    $i++;
} while (!empty($arr[$i]));

$reverse = [];

$i--;

do {
    $reverse[] = $arr[$i];
    $i--;
} while (!empty($arr[$i]));

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;

for ($j = 0; $arr[$i] != null; $j++) {
    $i++;
}

$reverse = [];

$i--;

for ($j = 0; $arr[$i] != null; $j++) {
    $reverse[] = $arr[$i];
    $i--;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//


echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

foreach ($arr as $value) {
    $i++;
}

$reverse = [];

$i--;

foreach ($arr as $value) {
    $reverse[] = $arr[$i];
    $i--;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h3>Task 2 To reverse array with number data.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];

$i = 0;

while (!empty($arr[$i])) {
    $i++;
}

$reverse = [];

$i--;

while (!empty($arr[$i])) {
    $reverse[] = $arr[$i];
    $i--;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

do {
    $i++;
} while (!empty($arr[$i]));

$reverse = [];

$i--;

do {
    $reverse[] = $arr[$i];
    $i--;
} while (!empty($arr[$i]));

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;
for ($j = 0; $arr[$i] != null; $j++) {
    $i++;
}

$reverse = [];

$i--;

for ($j = 0; $arr[$i] != null; $j++) {
    $reverse[] = $arr[$i];
    $i--;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//


echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

foreach ($arr as $value) {
    $i++;
}

$reverse = [];

$i--;

foreach ($arr as $value) {
    $reverse[] = $arr[$i];
    $i--;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h3>Task 3 To reverse string.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = 'Hi I am Alex';

$i = 0;

while (!empty($arr[$i])) {
    $i++;
}

$reverse = '';

$i--;

while (!empty($arr[$i]) && $i >= 0) {
    $reverse .= $arr[$i];
    $i--;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

do {
    $i++;
} while (!empty($arr[$i]));

$reverse = '';

$i--;

do {
    $reverse .= $arr[$i];
    $i--;
} while (!empty($arr[$i] && $i >= 0));

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;
for ($j = 0; $arr[$i] != null; $j++) {
    $i++;
}

$reverse = '';

$i--;

for ($j = 0; $arr[$i] != null && $i >= 0; $j++) {
    $reverse .= $arr[$i];
    $i--;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//


echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

$array = [];

for ($j = 0; $arr[$i] != null; $j++) {
    $array[] = $arr[$i];
    $i++;
}

$reverse = '';

$i--;

foreach ($array as $value) {
    $reverse .= $arr[$i];
    $i--;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h3>Task 4 All string\'s symbols to low case.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = 'Hi I am Alex';

$i = 0;

$reverse = '';

while (!empty($arr[$i])) {
    $reverse .= strtolower($arr[$i]);
    $i++;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

$reverse = '';

do {
    $reverse .= strtolower($arr[$i]);
    $i++;
} while (!empty($arr[$i]) && $i >= 0);

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;

$reverse = '';

for ($j = 0; $arr[$i] != null; $j++) {
    $reverse .= strtolower($arr[$i]);
    $i++;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//


echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

$array = [];

$reverse = '';

for ($j = 0; $arr[$i] != null; $j++) {
    $array[] = $arr[$i];
    $i++;
}

$i = 0;

foreach ($array as $value) {
    $reverse .= strtolower($arr[$i]);
    $i++;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//


echo '<h3>Task 5 All string\'s symbols to upper case.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = 'Hi I am Alex';

$i = 0;

$reverse = '';

while (!empty($arr[$i])) {
    $reverse .= strtoupper($arr[$i]);
    $i++;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

$reverse = '';

do {
    $reverse .= strtoupper($arr[$i]);
    $i++;
} while (!empty($arr[$i]) && $i >= 0);

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;

$reverse = '';

for ($j = 0; $arr[$i] != null; $j++) {
    $reverse .= strtoupper($arr[$i]);
    $i++;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//


echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

$array = [];

$reverse = '';

for ($j = 0; $arr[$i] != null; $j++) {
    $array[] = $arr[$i];
    $i++;
}

$i = 0;

foreach ($array as $value) {
    $reverse .= strtoupper($arr[$i]);
    $i++;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h3>Task 6 Array\'s data to lowercase.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

$i = 0;
$reverse = [];

while (!empty($arr[$i])) {
    $reverse[] = strtolower($arr[$i]);
    $i++;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

$reverse = [];

do {
    $reverse[] = strtolower($arr[$i]);
    $i++;
} while (!empty($arr[$i]));

dd($reverse);
dd($arr);

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;

$reverse = [];

for ($j = 0; $arr[$i] != null; $j++) {
    $reverse[] = strtolower($arr[$i]);
    $i++;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

$reverse = [];

foreach ($arr as $value) {
    $reverse[] = strtolower($arr[$i]);
    $i++;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//


echo '<h3>Task 7 Array\'s data to uppercase.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

$i = 0;
$reverse = [];

while (!empty($arr[$i])) {
    $reverse[] = strtoupper($arr[$i]);
    $i++;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

$reverse = [];

do {
    $reverse[] = strtoupper($arr[$i]);
    $i++;
} while (!empty($arr[$i]));

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;

$reverse = [];

for ($j = 0; $arr[$i] != null; $j++) {
    $reverse[] = strtoupper($arr[$i]);
    $i++;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

$reverse = [];

foreach ($arr as $value) {
    $reverse[] = strtoupper($arr[$i]);
    $i++;
}

dd($reverse);
dd($arr);
//___________________________________________________________________________________________________________________//


echo '<h3>Task 8 To reverse a number.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = 12345678;

$arr = (string)$arr;

$i = 0;

while (!empty($arr[$i])) {
    $i++;
}

$reverse = '';

$i--;

while (!empty($arr[$i]) && $i >= 0) {
    $reverse .= $arr[$i];
    $i--;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$i = 0;

do {
    $i++;
} while (!empty($arr[$i]));

$reverse = '';

$i--;

do {
    $reverse .= $arr[$i];
    $i--;
} while (!empty($arr[$i] && $i >= 0));

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$i = 0;
for ($j = 0; $arr[$i] != null; $j++) {
    $i++;
}

$reverse = '';

$i--;

for ($j = 0; $arr[$i] != null && $i >= 0; $j++) {
    $reverse .= $arr[$i];
    $i--;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//


echo '<h6 align="center">______FOREACH______.</h6>';

$i = 0;

$array = [];

for ($j = 0; $arr[$i] != null; $j++) {
    $array[] = $arr[$i];
    $i++;
}

$reverse = '';

$i--;

foreach ($array as $value) {
    $reverse .= $arr[$i];
    $i--;
}

echo $reverse;
echo $arr;
//___________________________________________________________________________________________________________________//

echo '<h3>Task 9 Sort array from hi to low.</h3>';
echo '<h6 align="center">______WHILE______.</h6>';

$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];

dd($arr);

$i = 0;

$j = 1;

while ((!empty($arr[$i]))) {
    while ((!empty($arr[$j]))) {
        $a = $arr[$i];
        $b = $arr[$j];
        if ($a < $b) {
            $arr[$i] = $b;
            $arr[$j] = $a;
        }
        $j++;
    }
    $i++;
    $j = $i + 1;
}

dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______DO WHILE______.</h6>';

$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];

dd($arr);

$i = 0;

$j = 1;

do {
    do {
        $a = $arr[$i];
        $b = $arr[$j];
        if ($a < $b) {
            $arr[$i] = $b;
            $arr[$j] = $a;
        }
        $j++;
    } while ((!empty($arr[$j])));

    $i++;
    $j = $i + 1;

} while ((!empty($arr[$i])));

dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOR______.</h6>';

$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];

for ($i = 0; (!empty($arr[$i])); $j++) {
    for ($j = $i + 1; (!empty($arr[$j])); $j++) {
        $a = $arr[$i];
        $b = $arr[$j];
        if ($a < $b) {
            $arr[$i] = $b;
            $arr[$j] = $a;
        }
    }
    $i++;
    $j = $i + 1;
}

dd($arr);
//___________________________________________________________________________________________________________________//

echo '<h6 align="center">______FOREACH______.</h6>';

$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];

dd($arr);

$i = 0;
foreach ($arr as $array) {
    $j = 0;
    foreach ($arr as $next) {

        if ($j < $i) {
            $j++;
            continue;
        }
        if ($arr[$i] < $next) {
            $arr[$j] = $arr[$i];
            $arr[$i] = $next;
        }

        $j++;
    }
    $i++;
}

dd($arr);
//___________________________________________________________________________________________________________________//
