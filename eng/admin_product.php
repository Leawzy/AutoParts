<?php
session_start();
require_once 'database.php';


$countries = $_POST['countries'];
$firms = $_POST['firms'];
$brands = $_POST['brands'];
$aggregates = $_POST['aggregates'];
$unit = $_POST['unit'];
$details = $_POST['details'];

if (strlen($countries) > 1) {
    mysqli_query($bd, "INSERT INTO `products` (`id`, `countries`, `firms`, `brands`, `aggregates`, `unit`,
    `details`) VALUES (NULL, '$countries', '$firms', '$brands', '$aggregates', '$unit', '$details')");
    $_SESSION['adm_msg'] = 'Добавление детали прошло успешно!';
    header('Location: ../admin.php');

} else {
    $_SESSION['adm_msg'] = 'Произошла ошибка, свяжитесь с системным администратором!';
    header('Location: ../admin.php');
}