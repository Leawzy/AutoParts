<?php
session_start();
$title = "Авторизуйтесь";
require 'layouts/app.php';
require 'layouts/header.php';
?>
    <form action="eng/admin_auth.php" method="post" class="auth">
        <input name="login" type="text" placeholder="login"><br>
        <input name="password" type="password" placeholder="Введите пароль"><br>
        <button type="submit" class="auth__btn">Авторизоваться</button>
    </form>
<?php
if($_SESSION['adm_msg']){
    echo '<p id="errorMess"> '. $_SESSION['adm_msg'] . '</p>';
}
unset($_SESSION['adm_msg']);

?>