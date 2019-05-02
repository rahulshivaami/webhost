<?php

require_once 'connect.php';

if (isset($_POST['signup_user'])) {
    $data = $_POST;
    $name = trim($data['name']);
    $contact = trim($data['contact']);
    $email = trim($data['email']);
    $password = md5($data['password']);

    $sql = "INSERT INTO `user`(`name`, `contact`, `email`, `password`, `created_date`,`created_by`,`updated_date`,`updated_by`) "
            . "VALUES ('" . $name . "','" . $contact . "','" . $email . "','" . $password . "',NOW(),'1',NOW(),'1')";

    $insert = mysqli_query($conn, $sql);
    if (isset($insert)) {
        echo "User added successfully!";
        header('Location: index.php');
    } else {
        echo "Try again!";
        header('Location: signup.php');
    }
}
if (isset($_POST['login'])) {
    $data = $_POST;
    $username = $data['username'];
    $password = md5($data['password']);

    $sql = "SELECT * FROM `user` WHERE `email`='" . $username . "' AND `password`='" . $password . "'";
    $res = mysqli_query($conn, $sql);

    $start = time();
    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        session_start();

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['start'] = time();
        $_SESSION['expire_seconds'] = 30 * 60;
        $_SESSION['last_action'] = time();

        header("Location: home.php");
    } else {
        echo 'not done';
    }
    exit;
}