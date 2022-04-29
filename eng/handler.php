<?php
session_start();
require_once 'database.php';

$countries = $_POST['countries'];
$brands = $_POST['brands'];


$check_products = mysqli_query($bd, "SELECT * FROM `products` WHERE `countries` = '$countries' AND 
                               `brands` = '$brands'");
if (mysqli_num_rows($check_products) > 0) {
    $products = mysqli_fetch_all($check_products);
    $_SESSION['details'] = $products;
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Деталей нет в наличии!';
    header('Location: ../index.php');
}
