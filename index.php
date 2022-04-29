<?php
session_start();
$title = 'Главная страница';
require 'layouts/app.php';
require 'layouts/header.php';
?>
<main>
    <div class="main__content">
        <div class="main__content-text">
            <h1>Предлагаем только качественные запчасти для <span>иномарок</span></h1>
        </div>
        <div class="mina__content-img">
            <img src="./assets/img/header-img.png" alt="">
        </div>
    </div>
</main>
<div class="dignity-block">
    <div class="dignity-card">
        <p>Высокое качество</p>
    </div>
    <div class="dignity-card">
        <p>Лучшие на рынкe</p>
    </div>
    <div class="dignity-card">
        <p>Большой выбор</p>
    </div>
</div>
<div class="about">
    <h2>О компании</h2>
    <div class="about__text">
        <p>Компания AutoParts: продажа запчастей и аксессуаров высокого качества<br>

            <br>Компания AutoParts начала свою деятельность недавно, но уже успела заслужить хорошую репутацию среди покупателей. Количество положительных отзывов в адрес нашей компании от благодарных клиентов растет с каждым днем. В нашем интернет-магазине вы можете купить необходимые запчасти и аксессуары для своего автомобиля по выгодным ценам. <br>

            <br>Большой ассортимент <br>

            <br>В каталоге нашего магазина вы найдете автозапчасти для Lexus, Mazda или иных автомобилей. Среди широкого ассортимента<br> </p>
    </div>

</div>
<div class="form-search">
    <h3>Поиск деталей</h3>
    <form action="eng/handler.php" method="post">
        <select name="countries" id="">
            <option value="Россия" selected>Россия</option>
            <option value="Германия">Германия</option>
            <option value="США">США</option>
        </select>
        <select name="brands" id="">
            <option value="BMW" selected>BMW</option>
            <option value="Mercedes-Benz">Mercedes-Benz</option>
            <option value="Volvo">Volvo</option>
            <option value="Dodge">Dodge</option>
        </select>
        <button type="submit">Клик</button>
    </form>
</div>
<?php
        if($_SESSION['message']){
            echo '<p class="errorMess" id="errorMess"> '. $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);


        if($_SESSION['details']) {
?>


    <table>
        <tr>
            <th>Id</th>
            <th>Страна</th>
            <th>Фирма</th>
            <th>Марка</th>
            <th>Агрегат</th>
            <th>Узел</th>
            <th>Деталь</th>
        </tr>
        <?php
            foreach ($_SESSION['details'] as $product) {
        ?>
            <tr>
                <td><?=$product[0]?></td>
                <td><?=$product[1]?></td>
                <td><?=$product[2]?></td>
                <td><?=$product[3]?></td>
                <td><?=$product[4]?></td>
                <td><?=$product[5]?></td>
                <td><?=$product[6]?></td>
            </tr>



        <?php
            }
        }
        unset($_SESSION['details']);
        ?>
<?php
require 'layouts/footer.php';
?>
