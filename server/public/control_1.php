<?php
/**
 * @param array $dd
 * @return boolean
 */
function dd(array $dd):boolean
{
    echo '<pre>';
    printeger_r($dd);
    echo '</pre>';
    return true;
}

/**
 * @param array $arr
 * @return integer
 */
function countDir(array $arr):integer
{
    $i = 0;
//    foreach ($arr as $item) {
//        echo '<pre>';
//        printeger_r($item);
//        echo '</pre>';
//        for ($j = 0; isset($item[$j]); $j++)
//            if ($item[$j] == "/") {
//                $i++;
//            }
//        $i--;
//    }
//    echo $i;

    foreach ($arr as $item) {
        for ($j = 0; $item[$j]; $j++) {
            if ($item[$j] == '/') {
                $i++;
                break;
            }
        }

    }
    return $i;
}

echo countDir(['C:/Prof/dgfsd/sdfgsdf/some.txt', '/sdf/asdf', 'C:/dir/der/weuuy.pdf']);

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';

/**
 * @param array $arr
 * @return bolean
 */
function findMatching(array $arr):bolean
{
    if ($arr[0] == $arr[1] && $arr[1] == $arr[2]) {
        return true;
    } else {
        return false;
    }
}

echo findMatching([1, 1, 1]);

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';


/**
 * @param array $arr
 * @return bolean
 */
function findSamAndFrodo(array $arr):bolean
{
//    for ($i = 0; isset($arr[$i]); $i++) {
//        $j = $i + 1;
//
//        if ((($arr[$i] == "Sam") && ($arr[$j] == "Frodo")) || (($arr[$i] == "Frodo") && ($arr[$j] == "Sam"))) {
//            echo "true<br>";
//            break;
//        } else {
//            echo "false<br>";
//        }
//    }
    for ($i = 0; isset($arr[$i]); $i++) {
        $j = $i + 1;
        $a = $i - 1;
        if (($arr[$i] == 'Sam') && (($arr[$j] == 'Frodo') || ($arr[$a] == 'Frodo'))) {
            return true;
        }
    }
    return true;
}


$r = findSamAndFrodo(['Sam', 'Frodo', 'Troll', 'Balrog', 'Human']) ? 'true' : 'false';
echo $r;
echo '<br>';
$r = findSamAndFrodo(['Orc', 'Frodo', 'Treant', 'Saruman', 'Sam']) ? 'true' : 'false';
echo $r;
echo '<br>';
$r = findSamAndFrodo(['Orc', 'Sam', 'Frodo', 'Gandalf', 'Legolas']) ? 'true' : 'false';
echo $r;
echo '<br>';

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';


/**
 * @param array $arr
 * @return array
 */
function findSecondMax(array $arr):array
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

echo findSecondMax([1, 2, 3]);
echo '<br>';
echo findSecondMax([1, -2, 3]);
echo '<br>';
echo findSecondMax([0, 0, 10]);
echo '<br>';
echo findSecondMax([-1, -2, -3]);
echo '<br>';

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';


/**
 * @param array $arr
 * @return array
 */
function findLongestAndFill(array $arr):array
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

dd(findLongestAndFill(['a', 'b', 'n', 'r', 'u']));
dd(findLongestAndFill(['hg', 'hgjhk', 'ghjkgkj', 'programms', 'yjgfdxzsw']));
dd(findLongestAndFill(['hg', 'hgjhk', 'ghjkgkj', 'programms', 'gjgh']));

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';


/**
 * @param array $arr
 * @return string
 */
function countScore(array $arr):string
{
    $avg = array_sum($arr) / count($arr);
    switch ($avg) {
        case $avg >= 90 :
            return 'Grade: A';
        case $avg >= 80 :
            return 'Grade: B';
        case $avg >= 70 :
            return 'Grade: C';
        case $avg >= 60 :
            return 'Grade: D';
        default :
            return 'Grade: F';
    }
}

echo countScore([90, 91, 99, 93, 100]);
echo '<br>';
echo countScore([92, 77, 85, 84, 84]);
echo '<br>';
echo countScore([70, 72, 78, 72, 70]);
echo '<br>';
echo countScore([60, 61, 62, 63, 70]);
echo '<br>';
echo countScore([50, 42, 20, 31, 0]);
echo '<br>';
echo countScore([10, 9, 2, 3, 5]);
echo '<br>';

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';


/**
 * @param string $sides
 * @return string
 */
function findFigure($sides):string
{
    switch ($sides) {
        case $sides == 1 :
            return 'circle';
        case $sides == 2 :
            return 'semi-circle';
        case $sides == 3 :
            return 'triangle';
        case $sides == 4 :
            return 'square';
        case $sides == 5 :
            return 'pentagon';
        case $sides == 6 :
            return 'hexagon';
        case $sides == 7 :
            return 'heptagon';
        case $sides == 8 :
            return 'octagon';
        case $sides == 9 :
            return 'nonagon';
        case $sides == 10 :
            return 'decagon';
        default :
            return 'Type a sides\' number!';
    }
}

echo '<br>';
echo findFigure(5);
echo '<br>';

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';


/**
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer
 */
function countLegs($a, $b, $c):integer
{
    $legs = $a * 2 + $b * 4 + $c * 4;
    return $legs;
}

echo '<br>';
echo countLegs(2, 3, 5);
echo '<br>';
echo '<br>';
echo countLegs(1, 2, 3);
echo '<br>';
echo '<br>';
echo countLegs(5, 2, 8);
echo '<br>';

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';

/**
 * @param array $arr
 * @return array
 */
function countSymbols(array $arr):array
{
    $result = [];
    foreach ($arr as $item) {
        $result[] = strlen($item);
    }
    return $result;
}

dd(countSymbols(['hello', 'world']));
dd(countSymbols(['some', 'test', 'data', 'strings']));
dd(countSymbols(['clojure']));

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';

/**
 * @param string $string
 * @return string
 */
function findEven($string):string
{
    if ($string[strlen($string) - 1] == 's') {
        return 'true';
    } else {
        return 'false';
    }
}

echo '<br>';
echo findEven('fork');
echo '<br>';
echo '<br>';
echo findEven('forks');
echo '<br>';

echo '<br>';
echo '-----------------------------------------------------------------';
echo '<br>';
