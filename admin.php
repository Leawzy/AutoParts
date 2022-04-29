<?php
session_start();
if (!$_SESSION['admin']) {
    header('Location: signin.php');
}
$title = "Админ панель";
require "layouts/app.php";


echo "Добро пожаловать: " .$_SESSION['admin']['login'];
?>
<form action="eng/admin_product.php" method="post">
    <input name="countries" type="text" placeholder="Страна изготовитель" required><br>
    <input name="firms" type="text" placeholder="Фирма изготовитель" required><br>
    <input name="brands" type="text" placeholder="Марка авто" required><br>
    <input name="aggregates" type="text" placeholder="Агрегат" required><br>
    <input name="unit" type="text" placeholder="Узел" required><br>
    <input name="details" type="text" placeholder="Деталь" required><br>
    <button type="submit">Создать</button>
</form>

<?php
if($_SESSION['adm_msg']){
    echo '<p id="errorMess"> '. $_SESSION['adm_msg'] . '</p>';
}
unset($_SESSION['adm_msg']);
?>

<br><a href="eng/logout.php">Выход</a>