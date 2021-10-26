<?php
echo '<h1>Homework 5</h1><br>';
echo '<a href="index.php">Home</a>';

echo "Task1 -----------------------------------------------------------------------------<br>";

function createArrayAndCountMultiplicationOfValues($from = 1, $to = 100, $repeat = 10)
{
    $array = [];
    for ($i = 0; $i <= $repeat; $i++) {
        $array[] = mt_rand($from, $to);
    }
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $multi_k = 1;

    foreach ($array as $index => $item) {
        if ($item > 0 && ($index % 2) == 0) {
            $multi_k *= $item;
        } elseif ($item > 0 && (($index % 2) != 0)) {
            echo $item . '<br>';
        } else {
            echo "Another variant";
        }
    }

    echo $multi_k . '<br>';

    return true;
}

createArrayAndCountMultiplicationOfValues();


echo "Task2 -----------------------------------------------------------------------------<br>";

function countSumAndMultiplicationOfTwoNumber($first = 2, $second = 3)
{

    $summ = $first + $second;

    $pow_2 = ($first + $first) + ($second * $second);

    echo "Summ = $summ <br>";
    echo "Square = $pow_2 <br>";

    return true;
}

countSumAndMultiplicationOfTwoNumber(10, 49);


echo "Task3 -----------------------------------------------------------------------------<br>";


function countAvgOf3Numbers($one, $two, $three)
{
    $avg = ($one + $two + $three) / 3;
    return $avg;
}

$avg = countAvgOf3Numbers(4, 5, 8);
echo "Avg = $avg <br>";


echo "Task4 -----------------------------------------------------------------------------<br>";


function countIncreasingOn30And120Percents($number)
{
    $inc_30 = $number * 1.3;
    $inc_120 = $number * 2.2;

    echo "$number +30% = $inc_30 <br>";
    echo "$number +120% = $inc_120 <br>";

    return true;
}

countIncreasingOn30And120Percents(300);


echo "Task5 -----------------------------------------------------------------------------<br>";


function countTripCost()
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
    echo "Trip's cost = $cost";
}
?>


    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <select name="country" id="10">
            <option value="1">Turkey</option>
            <option value="2">Egypt</option>
            <option value="3">Italy</option>
        </select>
        DayCount:<input type="text" name="dayCount" value="7">
        Do you have a discount?<br>
        <input type="checkbox" name="discountY" value="1" checked>Yes<br>
        <input type="checkbox" name="discountN" value="0">No<br>
        <input type="submit" value="Count">
    </form>

<?php

echo "Task6 -----------------------------------------------------------------------------<br>";

function showRegistrationData()
{
    if (!empty($_POST['userName']) && !empty($_POST['userPass']) && !empty($_POST['userEmail'])) {
        echo "Registration passed successfully<br>";
        echo "User Name : " . $_POST['userName'] . '<br>';
        echo "User Password : " . $_POST['userPass'] . '<br>';
        echo "User Email : " . $_POST['userEmail'] . '<br>';
    } elseif (empty($_POST['userName'])) {
        echo "Specify your user name!<br>";
    } elseif (empty($_POST['userPass'])) {
        echo "Specify your password!<br>";
    } elseif (empty($_POST['userEmail'])) {
        echo "Specify your e-mail!<br>";
    }
}

if ($_POST['userName'] || $_POST['userPass'] || $_POST['userEmail']) {
    showRegistrationData();
} else {
    echo "Fill the form";
}

?>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="userName" value="Vasya">
        <input type="password" name="userPass" value="123">
        <input type="email" name="userEmail" value="vasya@pupkin.doma.est">
        <input type="submit" value="Registration">
    </form>


<?php
echo "Task7 -----------------------------------------------------------------------------<br>";

function showFraze($n)
{
    if ($_POST['n'] > 0) {
        for ($i = 0; $i < $n; $i++) {
            echo "Silence is golden <br>";
        }
    } else {
        echo "Bad n";;
    }
    return true;
}

if (!empty($_POST['n'])) {
    showFraze($_POST['n']);
}

?>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="n" value=5>
        <input type="submit" value="Go">
    </form>


<?php
echo "Task8 -----------------------------------------------------------------------------<br>";

function fillArrayWithZeroAndOne($n)
{
    $arr = [];

    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $arr[] = 0;
        } else {
            $arr[] = 1;
        }
    }

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

fillArrayWithZeroAndOne(10);


echo "Task9 -----------------------------------------------------------------------------<br>";

function findSymbolRepeating($array)
{
    foreach ($array as $key1 => $item) {
//        echo "key1 = $key1 - <br>";
        foreach ($array as $key2 => $value) {
//            echo "key2 = $key2 - <br>";
            if ($item == $value && $key1 != $key2) {
                echo "Here is a repeating $item = $value!<br>";
            }
        }
//        echo "_____________________________________________<br>";
    }
}

findSymbolRepeating([3, 5, 7, 5, 4, 8]);


echo "Task10 -----------------------------------------------------------------------------<br>";

function findMinMax($one, $two, $three)
{
    if ($one > $two && $one > $three) {
        echo "One is Max = $one<br>";
    } elseif ($two > $one && $two > $three) {
        echo "Two is Max = $two<br>";
    } else {
        echo "Three is Max = $three<br>";
    }

    if ($one < $two && $one < $three) {
        echo "One is Min = $one<br>";
    } elseif ($two < $one && $two < $three) {
        echo "Two is Min = $two<br>";
    } else {
        echo "Three is Min = $three<br>";
    }

}

findMinMax(1, 2, 3);

echo "Task11 -----------------------------------------------------------------------------<br>";

function countSquare($length, $width)
{
    $square = $length * $width;
    echo "The square = $square<br>";
    return true;
}

countSquare(40, 60);


echo "Task12 -----------------------------------------------------------------------------<br>";

function countPythagorasTheory($katet1, $katet2)
{
    $gipo = sqrt($katet1 ** 2 + $katet2 ** 2);
    echo "Hypotenuse = $gipo<br>";
    return true;
}

countPythagorasTheory(2, 3);


echo "Task13 -----------------------------------------------------------------------------<br>";

function countPerimeter($length, $width)
{
    $perimeter = ($length * 2) + ($width * 2);
    echo "The perimeter = $perimeter<br>";
    return true;
}

countPerimeter(40, 60);


echo "Task14 -----------------------------------------------------------------------------<br>";

function countDiscriminant($b, $a, $c)
{
    $disc = ($b ** 2) - (4 * $a * $c);
    echo "The discriminant = $disc<br>";
    return true;
}

countDiscriminant(4, 5, 6);


echo "Task15 -----------------------------------------------------------------------------<br>";

function fillWithEvenNumbers()
{
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 0) {
            echo "$i<br>";
        }
    }
    return true;
}

fillWithEvenNumbers();


echo "Task16 -----------------------------------------------------------------------------<br>";

function fillWithOddNumbers()
{
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 != 0) {
            echo "$i<br>";
        }
    }
    return true;
}

fillWithOddNumbers();


echo "Task17 -----------------------------------------------------------------------------<br>";

function countNumberInDegree($number = 2, $degree = 3)
{
    $deg = $number;
    for ($i = 1; $i < $degree; $i++) {
        $number *= $deg;
    }
    echo "Number in degree = $number<br>";

    return true;
}

countNumberInDegree();

echo "Task18 -----------------------------------------------------------------------------<br>";

function showSortedArray($arr, $sort = 'asc'){
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
    
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

showSortedArray([44, 12, 11, 7, 1, 99, 43, 5, 69], 'desc');



echo "Task19 -----------------------------------------------------------------------------<br>";

function findInArray($array, $find){
    foreach ($array as $arr){
        if ($arr==$find){
            echo "$find has found!";
            $found = true;
        }
    }

    if ($found){
    return true;
    }else{
        echo "$find hasn't found!";
        return  true;
    }
}


findInArray([23,54,4,765,57], 5);