<form name="form1" action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <a href="homework_3.php">Homework_3</a>
    <br>
    <a href="homework_4_1.php">Homework_4_1</a>
    <br>
    <a href="homework_4_2.php">Homework_4_2</a>
    <br>
    <a href="homework_5.php">Homework_5</a>
    <br>
    <a href="homework_6.php">Homework_6</a>
    <br>
    <a href="control 1.php">Control 1</a>

</form>
<?php
include_once 'form.php';

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

?>


