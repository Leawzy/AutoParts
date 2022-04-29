<?php
session_start();
require_once 'database.php';
$login = $_POST['login'];
$password = md5($_POST['password']);

$check_adm = mysqli_query($bd, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_adm) > 0){
    $admin = mysqli_fetch_assoc($check_adm);
    $_SESSION['admin'] = [
        "login" => $admin['login'],
    ];
    header('Location: ../admin.php');
} else {
    $_SESSION['adm_msg'] = 'Неверный логин или пароль!';
    header('Location: ../signin.php');
}