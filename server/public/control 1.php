<?php
function countDir($arr)
{
//    $i = 0;
//    foreach ($arr as $item) {
//        echo '<pre>';
//        print_r($item);
//        echo '</pre>';
//        for ($j = 0; isset($item[$j]); $j++)
//            if ($item[$j] == "/") {
//                $i++;
//            }
//        $i--;
//    }
//    echo $i;

    foreach ($arr as $item){
        for ($j = 0; isset($item[$j]); $j++)
            if ($item[$j] == "/") {
                $i++;
                break;
            }
    }
    return $i;
}

echo countDir(["C:/Prof/dgfsd/sdfgsdf/some.txt", "/sdf/asdf","C:/dir/der/weuuy.pdf"]);

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";

function findMatching($arr)
{
    if ($arr[0] == $arr[1] && $arr[1] == $arr[2]) {
        return true;
    } else {
        return false;
    }
}

echo findMatching([1, 1, 1]);

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";

function findSamAndFrodo($arr)
{
    for ($i = 0; isset($arr[$i]); $i++) {
        $j = $i + 1;
        if ((($arr[$i] == "Sam") && ($arr[$j] == "Frodo")) || (($arr[$i] == "Frodo") && ($arr[$j] == "Sam"))) {
            echo "true<br>";
            break;
        } else {
            echo "false<br>";
        }
    }
}

echo findSamAndFrodo(["Sam", "Frodo", "Troll", "Balrog", "Human"]);
echo "<br>";
echo findSamAndFrodo(["Orc", "Frodo", "Treant", "Saruman", "Sam"]);
echo "<br>";
echo findSamAndFrodo(["Orc", "Sam", "Frodo", "Gandalf", "Legolas"]);
echo "<br>";

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";


function findSecondMax($arr)
{
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
    return ($arr[1]);
}

echo findSecondMax([1,2,3]);
echo "<br>";
echo findSecondMax([1,-2,3]);
echo "<br>";
echo findSecondMax([0,0,10]);
echo "<br>";
echo findSecondMax([-1,-2,-3]);
echo "<br>";

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";


function findLongestAndFill($arr)
{
    $i = 0;
    $result = [];
    foreach ($arr as $item) {
        if (strlen($item) >= $i) {
            $i = strlen($item);
        }
    }

    foreach ($arr as $value) {
        if (strlen($value) == $i) {
            $result[] = $value;
        }
    }
    return $result;
}

echo '<pre>';
print_r(findLongestAndFill(["a", "b", "n", "r", "u"]));
echo '</pre>';
echo '<pre>';
print_r(findLongestAndFill(["hg", "hgjhk", "ghjkgkj", "programms", "yjgfdxzsw"]));
echo '</pre>';
echo '<pre>';
print_r(findLongestAndFill(["hg", "hgjhk", "ghjkgkj", "programms", "gjgh"]));
echo '</pre>';

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";


function countScore($arr)
{
    // "for" - long to do)))))
    $avg = array_sum($arr) / count($arr);
    switch ($avg) {
        case $avg >= 90 :
            return "Grade: A";
            break;
        case $avg >= 80 :
            return "Grade: B";
            break;
        case $avg >= 70 :
            return "Grade: C";
            break;
        case $avg >= 60 :
            return "Grade: D";
            break;
        default :
            return "Grade: F";
    }
}

echo countScore([90, 91, 99, 93, 100]);
echo "<br>";
echo countScore([92, 77, 85, 84, 84]);
echo "<br>";
echo countScore([70, 72, 78, 72, 70]);
echo "<br>";
echo countScore([60, 61, 62, 63, 70]);
echo "<br>";
echo countScore([50, 42, 20, 31, 0]);
echo "<br>";
echo countScore([10, 9, 2, 3, 5]);
echo "<br>";

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";


function findFigure($sides)
{
    switch ($sides) {
        case $sides == 1 :
            return "circle";
            break;
        case $sides == 2 :
            return "semi-circle";
            break;
        case $sides == 3 :
            return "triangle";
            break;
        case $sides == 4 :
            return "square";
            break;
        case $sides == 5 :
            return "pentagon";
            break;
        case $sides == 6 :
            return "hexagon";
            break;
        case $sides == 7 :
            return "heptagon";
            break;
        case $sides == 8 :
            return "octagon";
            break;
        case $sides == 9 :
            return "nonagon";
            break;
        case $sides == 10 :
            return "decagon";
            break;
        default :
            return "Type a sides' number!";
    }
}

echo "<br>";
echo findFigure(5);
echo "<br>";

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";


function countLegs($a, $b, $c)
{
    $legs = $a * 2 + $b * 4 + $c * 4;
    return $legs;
}

echo "<br>";
echo countLegs(2, 3, 5);
echo "<br>";
echo "<br>";
echo countLegs(1, 2, 3);
echo "<br>";
echo "<br>";
echo countLegs(5, 2, 8);
echo "<br>";

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";


function countSymbols($arr)
{
    $result = [];
    foreach ($arr as $item) {
        $result[] = strlen($item);
    }
    return $result;
}

echo '<pre>';
print_r(countSymbols(["hello", "world"]));
echo '</pre>';
echo '<pre>';
print_r(countSymbols(["some", "test", "data", "strings"]));
echo '</pre>';
echo '<pre>';
print_r(countSymbols(["clojure"]));
echo '</pre>';

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";

function findEven($string)
{
    if ($string[strlen($string) - 1] == 's') {
        return "true";
    } else {
        return "false";
    }
}

echo "<br>";
echo findEven("fork");
echo "<br>";
echo "<br>";
echo findEven("forks");
echo "<br>";

echo "<br>";
echo '-----------------------------------------------------------------';
echo "<br>";