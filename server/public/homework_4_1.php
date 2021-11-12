<?php
echo '<h1>Homework 4_1</h1><br>';
echo '<a href="index.php">Home</a>';
echo '<h3>Task 1 Prime numbers</h3><br>';

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

include './forms/hw_4_1_1.html';

echo '<h3>Task 2 Counting even numbers in 100 random numbers </h3><br>';


if (isset($_POST['to1']) && isset($_POST['from1']) && ($_POST['from1'] < $_POST['to1'])
    && (($_POST['to1'] - $_POST['from1']) >= 100)) {
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
    dd($arr);
} else {
    echo 'Please choose a correct range!';
}

include './forms/hw_4_1_2.html';

echo '<h3>Task 3 Counting number\'s matching while random generation is running </h3><br>';

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
        echo $a . 'has matched ' . $j . ' times!<br>';
    }
} else {
    echo 'Please choose a correct range!';
}

include './forms/hw_4_1_3.html';

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
    echo '</table>';
} else {
    echo 'Please choose a correct range!';
}

include './forms/hw_4_1_4.html';

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

include './forms/hw_4_1_5.html';

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

include './forms/hw_4_1_6.html';

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

include './forms/hw_4_1_7.html';

echo '<h3>Task 8 True or false? </h3><br>';

if (isset($_POST['radio'])) {
    if ($_POST['radio'] == 'true') {
        echo 'RIGHT!';
    } else {
        echo 'WRONG!';
    }

    $true_false = ($_POST['radio'] == 'true') ? 'RIGHT!' : 'WRONG!';
    echo $true_false;
} else {
    echo 'Please enter a correct data!';
}

include './forms/hw_4_1_8.html';

echo '<h3>Task 9 Ru or Eng? </h3><br>';

if (isset($_POST['lng'])) {
    $en = ['Mn', 'Tu', 'Wd', 'Tr', 'Fr', 'Sa', 'Su'];
    $ru = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд'];

    if ($_POST['lng'] == 'ru') {
        dd($ru);
    } else {
        dd($en);
    }

    echo '<br>';

    $ru_eng = ($_POST['lng'] == 'ru') ? $ru : $en;

    dd($ru_eng);

} else {
    echo 'Please enter a correct data!';
}

include './forms/hw_4_1_9.html';

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
include './forms/hw_4_1_10.html';
