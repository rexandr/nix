<?php
echo '<h1>Homework 4_1</h1><br>';
echo '<a href="index.php">Home</a>';
echo '<h3>Task 1 Prime numbers</h3><br>';
//for ($i = 1; $i < 100; $i++) {
//    if ($i == 1 || $i == 2 ||3$i == 5 ||$i == 7 || $i % 2 !== 0) {
//        if ($i % 3) {
//            if ($i % 5) {
//                if ($i % 7) {
//                    echo $i . '<br>';
//                }
//            }
//        }
//    }
//}

//for ($i = 1; $i < 100; $i++) {
//    if ($i == 1 || $i == 2 ||$i == 5 ||$i == 7 || $i % 2 !== 0) {
//        echo $i.'<br>';
//    }elseif ($i % 3) {
//        echo $i.'<br>';
//    }elseif ($i % 5){
//        echo $i.'<br>';
//    }elseif ($i % 7){
//        echo $i.'<br>';
//    }
//
//}
if (isset($_POST['to']) && isset($_POST['from']) && ($_POST['from'] < $_POST['to'])) {
    for ($i = $_POST['from']; $i < $_POST['to']; $i++) {
        if ($i == 2 || $i == 3 || $i == 5 || $i == 7) {
            echo $i . '<br>';
        } elseif ($i != 1 && $i % 2 != 0) {
            if ($i % 3) {
                if ($i % 5) {
                    if ($i % 7) {
                        echo $i . '<br>';
                    }
                }
            }
        }
    }
} else {
    echo 'Please choose a correct range!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    FROM: <input type="text" name="from" value="0">
    <br>
    TO: <input type="text" name="to" value="100">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//


<?php
echo '<h3>Task 2 Counting even numbers in 100 random numbers </h3><br>';


if (isset($_POST['to1']) && isset($_POST['from1']) && ($_POST['from1'] < $_POST['to1']) && (($_POST['to1'] - $_POST['from1']) >= 100)) {
    $j = 0;
    $arr = [];
    for ($i = 0; $i <= $_POST['count1']; $i++) {
        $rand = mt_rand($_POST['from1'], $_POST['to1']);
        if ((($rand % 2) == 0) && $rand !== 0 && !in_array($rand, $arr)) {
            $j++;
            $arr[] = $rand;
        }
    }
    echo $j;
    sort($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
} else {
    echo 'Please choose a correct range!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    FROM: <input type="text" name="from1" value="0">
    <br>
    TO: <input type="text" name="to1" value="100">
    <br>
    COUNT: <input type="text" name="count1" value="100">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//


<?php
echo '<h3>Task 3 Counting number\'s matching while random generation is running </h3><br>';


//if (isset($_POST['to2']) && isset($_POST['from2']) && ($_POST['from2'] < $_POST['to2'])) {
//    $arr = [];
//    for ($a = $_POST['from2']; $a<=$_POST['to2']; $a++){
//        $arr[]=$a;
//    }
//    print_r($arr);
//    for ($i = 0; $i <= $_POST['count2']; $i++) {
//        $rand = mt_rand($_POST['from2'], $_POST['to2']);
//        $pos = array_search($rand, $arr);
//        $next = $arr[$pos];
//        array_push($next, '1');
//        $arr[$pos][] = $next;
//        echo $pos.' - '.$arr[$pos].' - '.'<br>';
//    }
//    echo '<pre>';
//    print_r($arr);
//    echo '</pre>';
//} else {
//    echo 'Please choose a correct range!';
//}

if (isset($_POST['to2']) && isset($_POST['from2']) && ($_POST['from2'] < $_POST['to2'])) {
    $arr = [];

    for ($i = 0; $i < $_POST['count2']; $i++) {
        $rand = mt_rand($_POST['from2'], $_POST['to2']);
        $arr[] = $rand;
    }

    for ($a = $_POST['from2']; $a <= $_POST['to2']; $a++) {
        $j = 0;
        foreach ($arr as $var) {
            if ($var == $a) {
                $j++;
            }
        }
        echo "$a has matched $j times!<br>";
    }
//    echo '<pre>';
//    print_r($arr);
//    echo '</pre>';
} else {
    echo 'Please choose a correct range!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    FROM: <input type="text" name="from2" value="1">
    <br>
    TO: <input type="text" name="to2" value="5">
    <br>
    COUNT: <input type="text" name="count2" value="100">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//


<?php
echo '<h3>Task 4 Table columns*rows size with different background. </h3><br>';


if (isset($_POST['col']) && isset($_POST['row'])) {
    echo '<table border="1">';
    for ($i = 1; $i <= $_POST['col']; $i++) {
        echo '<tr align="center">';
        for ($j = 1; $j <= $_POST['row']; $j++) {
            if ((($i * $j) % 2) == 0) {
                echo '<td align="center" width="20" bgcolor="blue">' . $i * $j . '</td>';
            } elseif ((($i * $j) % 3) == 0) {
                echo '<td align="center" width="20" bgcolor="#a52a2a">' . $i * $j . '</td>';
            } else {
                echo '<td align="center" width="20">' . $i * $j . '</td>';
            }
        }
        echo '</tr>';
    }
    echo "</table>";
} else {
    echo 'Please choose a correct range!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    COLUMNS: <input type="text" name="row" value="5">
    <br>
    ROWS : <input type="text" name="col" value="3">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//

<?php
echo '<h3>Task 5 What is the season. </h3><br>';

$month = mt_rand(1, 12);
if ($month == 1 || $month == 2 || $month == 12) {
    echo $month . ' - It is winter!';
} elseif ($month == 3 || $month == 4 || $month == 5) {
    echo $month . ' - It is spring!';
} elseif ($month == 6 || $month == 7 || $month == 8) {
    echo $month . ' - It is summer!';
} else {
    echo $month . ' - It is autumn!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="submit" value="Boogy woogy">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//


<?php
echo '<h3>Task 6 What is the first symbol? </h3><br>';


if (isset($_POST['symbol']) && isset($_POST['find']) && isset($_POST['position'])) {
    if ($_POST['symbol'][$_POST['position']] == $_POST['find']) {
        echo 'YES!';
    } else {
        echo 'NO!';
    }
} else {
    echo 'Please enter a correct data!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    SYMBOLS: <input type="text" name="symbol" value="drgerge">
    <br>
    FIND : <input type="text" name="find" value="r">
    <br>
    POSITION : <input type="text" name="position" value="2">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//

<?php
echo '<h3>Task 7 What is the first number? </h3><br>';


if (isset($_POST['numbers']) && isset($_POST['find']) && isset($_POST['position'])) {
    if ($_POST['numbers'][$_POST['position']] == $_POST['find'][0]
        || $_POST['numbers'][$_POST['position']] == $_POST['find'][1]
        || $_POST['numbers'][$_POST['position']] == $_POST['find'][2]) {
        echo 'YES!';
    } else {
        echo 'NO!';
    }
} else {
    echo 'Please enter a correct data!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    SYMBOLS: <input type="text" name="numbers" value=12345>
    <br>
    FIND : <input type="text" name="find" value=123>
    <br>
    POSITION : <input type="text" name="position" value=0>
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//


<?php
echo '<h3>Task 8 True or false? </h3><br>';

if (isset($_POST['radio'])) {
    if ($_POST['radio'] == "true") {
        echo 'RIGHT!';
    } else {
        echo 'WRONG!';
    }

    $true_false = ($_POST['radio'] == "true") ? 'RIGHT!' : 'WRONG!';
    echo $true_false;
} else {
    echo 'Please enter a correct data!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    TRUE: <input type="radio" name="radio" value="true" checked>
    <br>
    FALSE : <input type="radio" name="radio" value="false">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//


<?php
echo '<h3>Task 9 Ru or Eng? </h3><br>';

if (isset($_POST['lng'])) {
    $en = ['Mn', 'Tu', 'Wd', 'Tr', 'Fr', 'Sa', 'Su'];
    $ru = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд'];

    if ($_POST['lng'] == "ru") {
        echo '<pre>';
        print_r($ru);
        echo '</pre>';
    } else {
        echo '<pre>';
        print_r($en);
        echo '</pre>';
    }

    echo '<br>';

    $ru_eng = ($_POST['lng'] == "ru") ? $ru : $en;
    echo '<pre>';
    print_r($ru_eng);
    echo '</pre>';
} else {
    echo 'Please enter a correct data!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    RU: <input type="radio" name="lng" value="ru" checked>
    <br>
    ENG : <input type="radio" name="lng" value="ru">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//


<?php
echo '<h3>Task 10 What a quarter of the clock? </h3><br>';

if (isset($_POST['clock']) && $_POST['clock'] >= 0 && $_POST['clock'] <= 59) {

    if ($_POST['clock'] >= 0 && $_POST['clock'] <= 15) {
        echo 'It is the first quarter!';
    } elseif ($_POST['clock'] >= 16 && $_POST['clock'] <= 30) {
        echo 'It is the second quarter!';
    } elseif ($_POST['clock'] >= 31 && $_POST['clock'] <= 45) {
        echo 'It is the third quarter!';
    } else {
        echo 'It is the fourth quarter!';
    }

    echo '<br>';
    $quarter2 = ($_POST['clock'] >= 31 && $_POST['clock'] <= 45) ? 'It is the second quarter!' : 'It is the fourth quarter!';
    $quarter1 = ($_POST['clock'] >= 16 && $_POST['clock'] <= 30) ? 'It is the second quarter!' : $quarter2;
    $quarter = ($_POST['clock'] >= 0 && $_POST['clock'] <= 15) ? 'It is the first quarter!' : $quarter1;
    echo $quarter;

} else {
    echo 'Please enter a correct data!';
}

?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    CLOCK: <input type="text" name="clock" value="30">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>


//--------------------------------------------------------------------------------------------------------------------//
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="reset" value="RESET WHOLE FORM">
</form>
//--------------------------------------------------------------------------------------------------------------------//
