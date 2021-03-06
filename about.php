<?php
session_start();
$title = 'Страница о нас';
require 'layouts/app.php';
require 'layouts/header.php';
?>
<section class="filters">
    <ul class="filters-content">
        <button class="filters__button is-active" data-target="#projects">
            RoadMap
        </button>
        <button class="filters__button" data-target="#skills">
            О компании
        </button>
        <button class="filters__button" data-target="#experience">
            Поставщикам
        </button>
    </ul>

    <div>
        <div data-content class="is-active" id="projects">
            <img src="./assets/img/about_map.png" alt="">
        </div>

        <div data-content id="skills">
            <h2 class="about__title">
                <br>AutoParts – ведущий продавец автозапчастей в России с 1998 года. <br>

                <br>На сегодняшний день мы являемся одним из лидеров по продажам автомобильных товаров от ведущих мировых производителей. <br>

                <br>AutoParts сотрудничает с такими известными брендами, как Kayaba, Total, Liqui Moly, Motul, Sangsin Brake и многими другими. Прайс-листы компании насчитывают более 200 млн. предложений по 22 млн. наименованиям 3 000 торговых марок. Мы ежедневно обновляем электронные каталоги, чтобы Вы всегда могли получить актуальную информацию и найти нужные Вам автозапчасти в одном месте, не тратя время на поиски. <br>

                <br>Благодаря надежным и налаженным схемам взаимодействия AutoParts осуществляет поставки с центральных складов основных автопроизводителей России (группа VAG, Toyota, Nissan, Mercedes Benz, Ford, Mobis и др.), крупных оптовых складов автозапчастей, а также доставляет запчасти из ОАЭ, Японии, США, Германии и Кореи. <br>

                <br>Каждый клиент AutoParts получает персонального менеджера, который отслеживает всю цепочку от размещения заказа до его получения. Если вы затрудняетесь с выбором, то персональный менеджер сможет ответить на все Ваши вопросы, предоставить необходимую информацию о производителях и помочь с выбором. <br>

                <br>Также Вы всегда можете оставить запрос на подбор детали по VIN-коду Вашего авто, и наши специалисты в минимальное время придут Вам на помощь. <br>

                <br>Высокий профессионализм наших сотрудников и индивидуальный подход к каждому покупателю, позволяют предоставлять клиентам только качественные запчасти и строго соблюдать обязательства по логистике! <br>
            </h2>
        </div>
        <div data-content id="experience">
            <h2 class="about__title">
                <br>Поставщикам
                <br> Уважаемые поставщики и производители автомобильных запчастей и аксессуаров!
                Интернет-магазин Exist.ru приглашает Вас к сотрудничеству. <br>

                <br>Наша компания существует с 1999 года, прочно занимает ведущие позиции на российском рынке продажи автозапчастей для автомобилей европейских, азиатских, японских производителей и заинтересована в расширении круга своих партнеров. <br>

                Мы предлагаем нашим клиентам обширные on-line каталоги для поиска деталей, полностью компьютеризированную систему приема и обработки заказов. <br>

                Возможности нашей логистической службы позволяют нам оперативно доставлять заказанный товар покупателю в любую точку России (авиа, авто и железнодорожным транспортом). Более 70% наших клиентов — оптовые покупатели, страховые компании и автомастерские в регионах. <br>

                Мы рассматриваем сотрудничество с поставщиками и производителями как одно из основных направлений развития компании. Мы понимаем заинтересованность поставщиков в долгосрочном сотрудничестве и готовы предоставить все необходимые условия для такого сотрудничества:

                Уникальную статистическую и аналитическую информацию по российскому рынку автозапчастей (5 лет работы и собственная аналитическая служба)
                Возможность оперативно регулировать ценовую и ассортиментную политику.
                Широкие рекламные и маркетинговые возможности нашего интернет-магазина и точек выдачи заказов.
                Мы с интересом рассматриваем все предложения о сотрудничестве, но в связи со спецификой работы компании, предпочтение отдается компаниям-поставщикам которые в состоянии предложить:

                Большой ассортимент оригинальных и неоригинальных автозапчастей (не менее 1000 позиций) со склада в Москве
                Регулярное информирование об ассортименте и складских остатках
                Минимальные сроки поставки
                Гибкую ценовую политику
                Для начала сотрудничества заполните, пожалуйста, анкету
            </h2>
        </div>
    </div>
</section>
<?php
require 'layouts/footer.php';
?>

