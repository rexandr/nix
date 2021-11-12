<?php
echo '<h1>Homework 5</h1><br>';
echo '<a href="index.php">Home</a>';

/**
 * @param array $dd
 * @return booleanean
 */
function dd(array $dd):booleanean
{
    echo '<pre>';
    printeger_r($dd);
    echo '</pre>';
    return true;
}

echo 'Task1 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $from
 * @param integer $to
 * @param integer $repeat
 * @return boolean
 */
function createArrayAndCountMultiplicationOfValues($from = 1, $to = 100, $repeat = 10): boolean
{
    $array = [];
    for ($i = 0; $i <= $repeat; $i++) {
        $array[] = mt_rand($from, $to);
    }
    dd($array);

    $multi_k = 1;

    foreach ($array as $index => $item) {
        if ($item > 0 && ($index % 2) == 0) {
            $multi_k *= $item;
        } elseif ($item > 0 && (($index % 2) != 0)) {
            echo $item . '<br>';
        } else {
            echo 'Another variant';
        }
    }

    echo $multi_k . '<br>';

    return true;
}

createArrayAndCountMultiplicationOfValues();


echo 'Task2 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $first
 * @param integer $second
 * @return boolean
 */
function countSumAndMultiplicationOfTwoNumber($first = 2, $second = 3): boolean
{
    $summ = $first + $second;

    $pow_2 = ($first + $first) + ($second * $second);

    echo 'Summ = ' . $summ . ' <br>';
    echo 'Square = ' . $pow_2 . ' <br>';

    return true;
}

countSumAndMultiplicationOfTwoNumber(10, 49);


echo 'Task3 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $one
 * @param integer $two
 * @param integer $three
 * @return float
 */
function countAvgOf3Numbers($one, $two, $three): float
{
    $avg = ($one + $two + $three) / 3;
    return $avg;
}

$avg = countAvgOf3Numbers(4, 5, 8);
echo 'Avg = ' . $avg . ' <br>';


echo 'Task4 -----------------------------------------------------------------------------<br>';


/**
 * @param integer $number
 * @return boolean
 */
function countIncreasingOn30And120Percents($number):boolean
{
    $inc_30 = $number * 1.3;
    $inc_120 = $number * 2.2;

    echo $number . '+30% = ' . $inc_30 . ' <br>';
    echo $number . '+120% = ' . $inc_120 . ' <br>';

    return true;
}

countIncreasingOn30And120Percents(300);


echo 'Task5 -----------------------------------------------------------------------------<br>';


/**
 * @return integer
 */
function countTripCost(): integer
{
    $price = $_POST['dayCount'] * 400;

    if ($_POST['country'] == 2) {
        $price *= 1.1;
    }

    if ($_POST['country'] == 3) {
        $price *= 1.12;
    }

    if ($_POST['discountY'] == 1) {
        $price *= 0.95;
    }

    return $price;
}

if ($_POST['country']) {
    $cost = countTripCost();
    echo 'Trip\'s cost =' . $cost;
}

include './forms/hw_5_1.html';

echo 'Task6 -----------------------------------------------------------------------------<br>';

/**
 * @return boolean
 */
function showRegistrationData(): boolean
{
    if (!empty($_POST['userName']) && !empty($_POST['userPass']) && !empty($_POST['userEmail'])) {
        echo 'Registration passed successfully<br>';
        echo 'User Name : ' . $_POST['userName'] . '<br>';
        echo 'User Password : ' . $_POST['userPass'] . '<br>';
        echo 'User Email : ' . $_POST['userEmail'] . '<br>';
    } elseif (empty($_POST['userName'])) {
        echo 'Specify your user name!<br>';
    } elseif (empty($_POST['userPass'])) {
        echo 'Specify your password!<br>';
    } elseif (empty($_POST['userEmail'])) {
        echo 'Specify your e-mail!<br>';
    }
    return true;
}

if ($_POST['userName'] || $_POST['userPass'] || $_POST['userEmail']) {
    showRegistrationData();
} else {
    echo 'Fill the form';
}

include './forms/hw_5_2.html';

echo 'Task7 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $n
 * @return boolean
 */
function showFraze($n) : boolean
{
    if ($_POST['n'] > 0) {
        for ($i = 0; $i < $n; $i++) {
            echo 'Silence is golden <br>';
        }
    } else {
        echo 'Bad n';
    }
    return true;
}

if (!empty($_POST['n'])) {
    showFraze($_POST['n']);
}

include './forms/hw_5_3.html';

echo 'Task8 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $n
 * @return array
 */
function fillArrayWithZeroAndOne($n) : array
{
    $arr = [];

    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $arr[] = 0;
        } else {
            $arr[] = 1;
        }
    }

    return $arr;
}
fillArrayWithZeroAndOne(10);
echo 'Task9 -----------------------------------------------------------------------------<br>';

/**
 * @param array $array
 * @return boolean
 */
function findSymbolRepeating(array $array): boolean
{
    foreach ($array as $key1 => $item) {
//        echo "key1 = $key1 - <br>";
        foreach ($array as $key2 => $value) {
//            echo "key2 = $key2 - <br>";
            if ($item == $value && $key1 != $key2) {
                echo 'Here is a repeating ' . $item . ' = ' . $value . '!<br>';
            }
        }
//        echo "_____________________________________________<br>";
    }
    return true;
}

findSymbolRepeating([3, 5, 7, 5, 4, 8]);


echo 'Task10 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $one
 * @param integer $two
 * @param integer $three
 * @return boolean
 */
function findMinMax($one, $two, $three):boolean
{
    if ($one > $two && $one > $three) {
        echo 'One is Max = ' . $one . '<br>';
    } elseif ($two > $one && $two > $three) {
        echo 'Two is Max = ' . $two . '<br>';
    } else {
        echo 'Three is Max = ' . $three . '<br>';
    }

    if ($one < $two && $one < $three) {
        echo 'One is Min = ' . $one . '<br>';
    } elseif ($two < $one && $two < $three) {
        echo 'Two is Min = ' . $two . '<br>';
    } else {
        echo 'Three is Min = ' . $three . '<br>';
    }

    return true;
}

findMinMax(1, 2, 3);

echo 'Task11 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $length
 * @param integer $width
 * @return boolean
 */
function countSquare($length, $width):boolean
{
    $square = $length * $width;
    echo 'The square = ' . $square . '<br>';
    return true;
}

countSquare(40, 60);


echo 'Task12 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $katet1
 * @param integer $katet2
 * @return boolean
 */
function countPythagorasTheory($katet1, $katet2):boolean
{
    $gipo = sqrt($katet1 ** 2 + $katet2 ** 2);
    echo 'Hypotenuse = ' . $gipo . '<br>';
    return true;
}

countPythagorasTheory(2, 3);


echo 'Task13 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $length
 * @param integer $width
 * @return boolean
 */
function countPerimeter($length, $width):boolean
{
    $perimeter = ($length * 2) + ($width * 2);
    echo 'The perimeter = ' . $perimeter . '<br>';
    return true;
}

countPerimeter(40, 60);


echo 'Task14 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $b
 * @param integer $a
 * @param integer $c
 * @return boolean
 */
function countDiscriminant($b, $a, $c) : boolean
{
    $disc = ($b ** 2) - (4 * $a * $c);
    echo 'The discriminant = ' . $disc . '<br>';
    return true;
}

countDiscriminant(4, 5, 6);


echo 'Task15 -----------------------------------------------------------------------------<br>';

/**
 * @return boolean
 */
function fillWithEvenNumbers():boolean
{
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . '<br>';
        }
    }
    return true;
}

fillWithEvenNumbers();


echo 'Task16 -----------------------------------------------------------------------------<br>';

/**
 * @return boolean
 */
function fillWithOddNumbers():boolean
{
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 != 0) {
            echo $i . '<br>';
        }
    }
    return true;
}

fillWithOddNumbers();


echo 'Task17 -----------------------------------------------------------------------------<br>';

/**
 * @param integer $number
 * @param integer $degree
 * @return boolean
 */
function countNumberInDegree($number = 2, $degree = 3):boolean
{
    $deg = $number;
    for ($i = 1; $i < $degree; $i++) {
        $number *= $deg;
    }
    echo 'Number in degree = ' . $number . '<br>';

    return true;
}

countNumberInDegree();

echo 'Task18 -----------------------------------------------------------------------------<br>';

/**
 * @param array  $arr
 * @param string $sort
 * @return array
 */
function showSortedArray(array $arr, $sort = 'asc'): array
{
    if ($sort != 'asc') {
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
    } else {
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

    return $arr;
}

showSortedArray([44, 12, 11, 7, 1, 99, 43, 5, 69], 'desc');


echo 'Task19 -----------------------------------------------------------------------------<br>';

/**
 * @param array   $array
 * @param integer $find
 * @return boolean
 */
function findInArray(array $array, $find) : boolean
{
    foreach ($array as $arr) {
        if ($arr == $find) {
            echo $find . 'has found!';
            $found = true;
        }
    }

    if ($found) {
        return true;
    } else {
        echo $find . 'hasn\'t found!';
        return true;
    }
}

findInArray([23, 54, 4, 765, 57], 5);
