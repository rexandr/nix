<?php
echo '<h1>Homework 6</h1><br>';
echo '<a href="index.php">Home</a><br>';

echo "Task1 -----------------------------------------------------------------------------<br>";

$minMax = function ($one, $two, $three) {

    $max = 0;
    $min = 0;
    $arrayMaxMin = [];

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

    $arrayMaxMin ['min'] = $min;

    $arrayMaxMin ['max'] = $max;

    return $arrayMaxMin;
};

echo '<pre>';
print_r($minMax(1, 2, 3));
echo '</pre>';


//---------------------------------------------------


function minMax($one, $two, $three, $fn) {

    $max = 0;
    $min = 0;
    $arrayMaxMin = [];

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

    $arrayMaxMin ['min'] = $min;

    $arrayMaxMin ['max'] = $max;

    $arrayMaxMin ['sum'] = $fn($min, $max);

    return $arrayMaxMin;
};
echo '<pre>';
print_r(minMax(1, 2, 3, fn($a, $b) => $a+$b));
echo '</pre>';


echo "Task2 -----------------------------------------------------------------------------<br>";

$countAria = function ($a, $b) {
    return $a * $b;
};

echo 'Aria = ' . $countAria(4, 8) . '<br>';

//-------------------------------------------

$countAria = fn($a, $b) => $a * $b;

echo "Aria = " . $countAria(5, 9) . '<br>';


echo "Task3 -----------------------------------------------------------------------------<br>";


$countHypotenuse = function ($a, $b) {
    return sqrt($a * $a + $b * $b);
};

echo "Hypotenuse = " . $countHypotenuse(4, 8) . '<br>';

//-------------------------------------------

$countHypotenuse = fn($a, $b) => $a * $b;

echo "Hypotenuse = " . $countHypotenuse(5, 9) . '<br>';


echo "Task4 -----------------------------------------------------------------------------<br>";

$countPerimeter = function ($a, $b, $c, $d) {
    return $a + $b + $c + $d;
};

echo 'The perimeter = ' . $countPerimeter(4, 8, 9, 7) . '<br>';

//-------------------------------------------

$countPerimeter = fn($a, $b, $c, $d) => $a + $b + $c + $d;

echo "The perimeter = " . $countPerimeter(5, 9, 6, 3) . '<br>';


echo "Task5 -----------------------------------------------------------------------------<br>";


$countDiscriminant = function ($a, $b, $c) {
    return ($b ** 2) - (4 * $a * $c);
};

echo 'The Discriminant = ' . $countDiscriminant(4, 8, 9) . '<br>';

//-------------------------------------------

$countDiscriminant = fn($a, $b, $c) => ($b ** 2) - (4 * $a * $c);

echo "The Discriminant = " . $countDiscriminant(5, 9, 6) . '<br>';

echo "Task6 -----------------------------------------------------------------------------<br>";

$countEven = function ($a) {
    $result = [];
    for ($i = 0; $i <= $a; $i++) {
        if ($i % 2 == 0) {
            $result [] = $i;
        }
    }
    return $result;
};

echo '<pre>';
print_r($countEven(10));
echo '</pre>';;

//-------------------------------------------

function countEven($i, $fn)
{
    $result = [];
    for ($j = 0; $j <= $i; $j++) {
        if (!empty($fn($j))) {
            $result[] = $j;
        }
    }
    return $result;
}

$countEven = countEven(5, fn($b) => $b % 2 == 0 ?? $b);

echo '<pre>';
print_r($countEven);
echo '</pre>';


echo "Task7 -----------------------------------------------------------------------------<br>";

$createOdd = function ($a) {
    $result = [];
    for ($i = 0; $i <= $a; $i++) {
        if ($i % 2 != 0) {
            $result [] = $i;
        }
    }
    return $result;
};

echo '<pre>';
print_r($createOdd(10));
echo '</pre>';;

//-------------------------------------------

function createOdd($i, $fn)
{
    $result = [];
    for ($j = 0; $j <= $i; $j++) {
        if (!empty($fn($j))) {
            $result[] = $j;
        }
    }
    return $result;
}

$createOdd = createOdd(5, fn($b) => $b % 2 != 0 ?? $b);

echo '<pre>';
print_r($createOdd);
echo '</pre>';

echo "Task8 -----------------------------------------------------------------------------<br>";

$findRepeating = function ($array)
{
    $rep = '';
    foreach ($array as $key1 => $item) {
        foreach ($array as $key2 => $value) {
            if ($item == $value && $key1 != $key2) {
                $rep .= "Here is a repeating $item = $value!<br>";
            }
        }
    }
    return $rep;
};
$array= [44, 12, 11, 7, 44, 99, 43, 7, 69];
echo '<pre>';
print_r($findRepeating($array));
echo '</pre>';

//--------------------------------------------------------------


function findRepeating($arr, $fn){
    
    $rep = '';
    
    foreach ($arr as $key1 => $item) {
        foreach ($arr as $key2 => $value) {
            if ($item == $value && $key1 != $key2) {
                $rep .= $fn($value);
                
            }
        }
    }
    return $rep;
}
$array= [44, 12, 11, 7, 44, 99, 43, 7, 69];
$findRep = $findRepeating($array, fn($value)=> $value = "Here is a repeating $value!<br>");
echo '<pre>';
print_r($findRep);
echo '</pre>';

echo "Task9 -----------------------------------------------------------------------------<br>";

$showSortedArray = function ($arr, $sort = 'asc'){
    if ($sort!='asc'){
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
    }else{
        $i = 0;
        foreach ($arr as $array) {
            $j = 0;
            foreach ($arr as $next) {

                if ($j > $i) {
                    // $j++;
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
    }

    return($arr);
};

$array = [44, 12, 11, 7, 1, 99, 43, 5, 69];
echo '<pre>';
print_r($showSortedArray($array));
echo '</pre>';

//------------------------------------------------------


function showSortedArray ($arr, $sort = 'asc', $fn){
    if ($sort!='asc'){
        $i = 0;
        foreach ($arr as $array) {
            $j = 0;
            foreach ($arr as $next) {

                if ($j < $i) {
                    $fn($j);
                    continue;
                }
                if ($arr[$i] < $next) {
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $next;
                }

                $fn($j);
            }
            $fn($i);
        }
    }else{
        $i = 0;
        foreach ($arr as $array) {
            $j = 0;
            foreach ($arr as $next) {

                if ($j > $i) {
                    // $j++;
                    continue;
                }
                if ($arr[$i] < $next) {
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $next;
                }

                $fn($j);
            }
            $fn($i);
        }
    }

    return($arr);
};

$array = [44, 12, 11, 7, 1, 99, 43, 5, 69];
echo '<pre>';
print_r($showSortedArray($array, "dsc", fn($a) => $a++));
echo '</pre>';