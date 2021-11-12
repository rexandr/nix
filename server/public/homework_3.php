<?php
session_start();
echo '<h1> Homework 3 </h1><a href="index.php">Home</a>';

echo '<h3>Task 1 Comment leaving.</h3>';
if ($_REQUEST['submit']) {
    echo '<pre>';
    echo trim($_REQUEST['user'] . ' - ' . $_REQUEST['comment']);
    echo '</pre>';
}
include './forms/hw_3_1.html';

echo '<h3>Task 2 Add product to the cart.</h3>';

if ($_POST['id'] && $_POST['count']) {
    echo 'Your order is - ' . $_POST['id'] . ' - ' . $_POST['count'] . 'units!';
} else {
    echo 'Please, make your choice!';
}

include './forms/hw_3_2.html';

echo '<h3>Task 3 Recall to a client. </h3>';
if ($_POST['name'] && $_POST['tel']) {
    echo 'Hi ' . $_POST['name'] . ', we will call you as soon as possible by your number - ' . $_POST['tel'] . '!';
} else {
    echo 'Please, enter your name and phone number to dial up with you!';
}

include './forms/hw_3_3.html';

echo '<h3>Task 4 Order </h3>';
if ($_POST['client'] && $_POST['phone'] && $_POST['delivery'] && $_POST['del_address'] && $_POST['order']) {
    $_SESSION['cart']['id'] = $_POST['order'];
    echo 'Hi ' . $_POST['client'] . '! Your order - ' . $_SESSION['cart']['id'] . ' is accepted and will be sent to you by ' . $_POST['delivery'] .
        ' according to your address  - ' . $_POST['del_address'] . '!';
} else {
    echo 'Please, fill all necessary fields!';
}

include './forms/hw_3_4.html';

echo '<h3>Task 5 File upload </h3>';

$valid = ['png', 'jpg', 'pdf', 'xls', 'doc', 'xlsx', 'docx'];

if (isset($_FILES['up_file'])) {
    if (is_uploaded_file($_FILES['up_file']['tmp_name'])) {
        $filename = basename($_FILES['up_file']['name'], 1 + strrpos($_FILES['up_file']['name'], '.'));
    } elseif (!in_array($valid)) {
        echo 'Please, choose an another type\'s file!';
    } else {
        echo 'Something is wrong!';
    }
} else {
    echo 'Please, select a file!';
}

include './forms/hw_3_5.html';
