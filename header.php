<?php

require_once 'connect.php';
session_start();
if (isset($_SESSION['last_action'])) {
    $secondsInactive = time() - $_SESSION['last_action'];
    if ($secondsInactive >= $_SESSION['expire_seconds']) {
        header('Location: logout.php');
    }
}
$_SESSION['last_action'] = time();

?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" />
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/npm.js"></script>
    </head>
    <body>
    