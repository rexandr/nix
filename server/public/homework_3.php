<?php
session_start();
echo '<h1> Homework 3 </h1><a href="index.php">Home</a>';

echo '<h3>Task 1 Comment leaving.</h3>';
if ($_REQUEST['submit']) {
    echo '<pre>';
    echo trim($_REQUEST['user'] . ' - ' . $_REQUEST['comment']);
    echo '</pre>';
}
?>

<form name="task1" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="user" value="user">
    <br>
    <textarea name="comment" cols="30" rows="10"><?php
        if (isset($_REQUEST['comment']) && $_REQUEST['comment']) {
            echo trim($_REQUEST['comment']);
        } else {
            echo trim('Enter your comment');
        } ?>
    </textarea>
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="RESET">
</form>

<?php

echo '<h3>Task 2 Add product to the cart.</h3>';


if ($_POST['id'] && $_POST['count']) {
    echo 'Your order is - ' . $_POST['id'] . ' - ' . $_POST['count'] . 'units!';
} else {
    echo 'Please, make your choice!';
}

?>

<form name="task2" action="homework_3.php" method="post">
    <input type="text" name="id" value="Phone"> <br>
    <input type="text" name="count" value="1"><br>
    <input type="submit" name="buy" value="Buy"><br>
    <input type="reset" name="reset" value="RESET">
</form>


<?php
echo '<h3>Task 3 Recall to a client. </h3>';
if ($_POST['name'] && $_POST['tel']) {
    echo 'Hi ' . $_POST['name'] . ', we will call you as soon as possible by your number - ' . $_POST['tel'] . '!';
} else {
    echo 'Please, enter your name and phone number to dial up with you!';
}

?>

<form name="task3" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" value="Vasya">
    <br>
    <input type="tel" name="tel" value="">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="RESET">
</form>


<?php
echo '<h3>Task 4 Order </h3>';
if ($_POST['client'] && $_POST['phone'] && $_POST['delivery'] && $_POST['del_address'] && $_POST['order']) {
    $_SESSION['cart']['id'] = $_POST['order'];
    echo 'Hi ' . $_POST['client'] . '! Your order - ' . $_SESSION['cart']['id'] . ' is accepted and will be sent to you by ' . $_POST['delivery'] .
        ' according to your address  - ' . $_POST['del_address'] . '!';
} else {
    echo 'Please, fill all necessary fields!';
}

?>

<form name="task4" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="order" value="Black Car">
    <br>
    <input type="text" name="client" value="Petya">
    <br>
    <input type="tel" name="phone" value="0975269632">
    <br>
    <input type="text" name="delivery" value="Post">
    <br>
    <input type="text" name="del_address" value="Magadan str. 5">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="RESET">
</form>


<?php
echo '<h3>Task 5 File upload </h3>';

$valid = ['png', 'jpg', 'pdf', 'xls', 'doc', 'xlsx', 'docx'];

if (isset($_FILES['up_file'])) {
    if (is_uploaded_file($_FILES['up_file']['tmp_name'])) {
        $filename = basename($_FILES['up_file']['name'], 1 + strrpos($_FILES['up_file']['name'], "."));
    } elseif (!in_array($valid)) {
        echo 'Please, choose an another type\'s file!';
    } else {
        echo 'Something is wrong!';
    }
} else {
    print_r($_FILES);
    echo 'Please, select a file!';
}

?>

<form name="task5" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
    <input type="file" name="up_file">
    <br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="RESET">
</form>
