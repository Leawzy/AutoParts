<header>
    <a href="index.php" class="logo">AutoParts</a>
    <nav>
        <ul>
            <li>
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="contact.php">Контакты</a>
                <button id="myBtn">+7 (898)-654-86-48</button>
            </li>
        </ul>
    </nav>
</header>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close"></span>
        <form class="callback" onsubmit="sendEmail(); reset(); return false;">
            <input type="text" id="name" placeholder="Ваше имя" required>
            <input type="email" id="email" placeholder="Ваше почта" required>
            <input type="text" id="phone" placeholder="Ваш телефон" required>
            <textarea id="message" rows="2" placeholder="Ваше сообщение нам" required></textarea>
            <button type="submit" class="callback__btn">Отправить</button>
        </form>
    </div>
</div>