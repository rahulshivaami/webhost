<?php

require 'connect.php';
session_start();
print_r($_SESSION);
if (isset($_POST['submit'])) {
    $data = $_POST;
    $user_id = $_SESSION['user_id'];
    $domain = $data['domain'];
    $ssl = $data['ssl'];
    $amp = $data['amp'];
    print_r($data);
    //exit;
    if ($_FILES['file']['name'] != "") {
        $path = $_FILES['file']['name'];
        $pathto = "/Applications/XAMPP/htdocs/uploads/" . $path;
        move_uploaded_file($_FILES['file']['tmp_name'], $pathto) or
                die("Could not copy file!");

        $sql = "INSERT INTO `domain`(`user_id`, `domain_name`, `file_path`, `ssl_required`, `amp_required`, `created_date`, `created_by`) "
                . "VALUES ('".$user_id."','".$domain."','".$pathto."','".$ssl."','".$amp."',NOW(),'".$user_id."')";

        $insert = mysqli_query($conn, $sql);
        if (isset($insert)) {
            echo "User added successfully!";
            header('Location: home.php');
        } else {
            echo "Try again!";
            header('Location: home.php');
        }
    } else {
        die("No file specified!");
    }
}
