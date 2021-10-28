<?php
echo '<h1>Homework 6</h1><br>';
echo '<a href="index.php">Home</a><br>';

echo "Task1 -----------------------------------------------------------------------------<br>";

$max = 0;
$min = 0;
$arrayMaxMin = [];

$minMax = function ($one, $two, $three) {

    if ($one > $two && $one > $three) {
        $max = $one;
    } elseif ($two > $one && $two > $three) {
        $max = $two;
    } else {
        $max = $three;
    }

    if ($one < $two && $one < $three) {
        $min = $one;
    } elseif ($two < $one && $two < $three) {
        $min = $two;
    } else {
        $min = $three;
    }

    $arrayMaxMin [] = $min;

    $arrayMaxMin [] = $max;

    return $arrayMaxMin;
};

print_r($minMax(1, 2, 3));

echo "<br>";


echo "Task2 -----------------------------------------------------------------------------<br>";

$aria = function ($a, $b) {
    return $a * $b;
};

echo 'Aria = ' . $aria(4, 8) . '<br>';

//-------------------------------------------

$aria = fn($a, $b) => $a * $b;

echo "Aria = " . $aria(5, 9) . '<br>';


echo "Task3 -----------------------------------------------------------------------------<br>";


$aria = function ($a, $b) {
    return sqrt($a * $a + $b * $b);
};

echo "Hypotenuse = " . $aria(4, 8) . '<br>';

//-------------------------------------------

$aria = fn($a, $b) => $a * $b;

echo "Hypotenuse = " . $aria(5, 9) . '<br>';


echo "Task4 -----------------------------------------------------------------------------<br>";

$aria = function ($a, $b, $c, $d) {
    return $a + $b + $c + $d;
};

echo 'The perimeter = ' . $aria(4, 8, 9, 7) . '<br>';

//-------------------------------------------

$aria = fn($a, $b, $c, $d) => $a + $b + $c + $d;

echo "The perimeter = " . $aria(5, 9, 6, 3) . '<br>';


echo "Task5 -----------------------------------------------------------------------------<br>";

$aria = function ($a) {
    $result = [];
    for ($i = 0; $i <= $a; $i++) {
        if ($i%2==0){
            $result [] = $i;
        }
    }
    return $result;
};

echo '<pre>';
print_r($aria);
echo '</pre>';;

//-------------------------------------------

function even($i,$fn){
    $result = [];
    for ($j = 0; $j <= $i; $j++) {
        if (!empty($fn($j))){
         $result[] = $j;
        }
    }
    return $result;
}

$aria = even($a = 5, fn ($b) => $b%2==0??$b);

echo '<pre>';
print_r($aria);
echo '</pre>';


print_r($aria) . '<br>';


echo "Task6 -----------------------------------------------------------------------------<br>";


