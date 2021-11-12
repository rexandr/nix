<?php
include_once './forms/form.html';

if (!empty($_POST['number']) && !empty($_POST['from']) && !empty($_POST['to']) && ($_POST['from'] < $_POST['to'])) {
    $ran = mt_rand($_POST['from'], $_POST['to']);
    echo 'The secret number is - ' . $ran . '<br>';
    if ($ran < $_POST['number']) {
        echo 'The number is lower!';
    } elseif ($ran > $_POST['number']) {
        echo 'The number is bigger!';
    } elseif ($ran == $_POST['number']) {
        echo 'Congratulation! You guessed!';
    }
} else {
    echo 'Type a correct data!';
}
