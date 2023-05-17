<?php
session_start();

require_once '../../models/login/loginM.php';

if (empty($_SESSION['active'])) {
    header('location: ../../views/nav.php');
}

if (empty($_POST['email']) && empty($_POST['password']) && empty($_POST['userType'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
}


?>