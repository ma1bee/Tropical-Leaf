<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="номер телефона, социальные сети, адрес">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.cdnfonts.com/css/kreadon" rel="stylesheet">
    <title>Tropical Leaf</title>
</head>
<body>
    <div class="container">
        <div class="shapka">
        <ul class="menu-list">
                <li class="menu-list-navigation"><a href="index.php"><img class="logo" src="img/logo.png" alt="Логотпип" width="150"></a></li>
                <li class="menu-list-navigation"><a href="index.php">Главная</a></li>
                <li class="menu-list-navigation"><a href="catalog.php">Каталог</a></li>
                <li class="menu-list-navigation"><a href="o-brende.php">О бренде</a></li>
                <li class="menu-list-navigation-p"><a href="contact.php">Контакты</a></li>
                <li class="menu-list-navigation user"><img class="profile" src="img/social.png" alt="Личный кабинет" width="30"></li> 
            </ul>
        </div>
    </div>
    <hr class="line"></hr> 
    <h1 class="title-pr"> Контакты </h1>

    <div class="contact-main">
        <img class="map-photo"src="img/contact-map.png" alt="Цветы" width=700px height=400px >
            <div class="map-right">

                    <p class="map-text">Тел.: +7 (800) 555-35-35</p>
                    <p class="map-text">Режим работы: 10:00 до 22:00</p>
                    <p class="map-text">Москва, ул.Новослободская, дом 3</p>
                    <p class="map-text">Email: tropical.leaf@yandex.ru</p>

                    <img class="icon" src="img/tg.png"alt="Телеграмм">
                    <img class="icon" src="img/insta.png"alt="Телеграмм">
                    <img class="icon" src="img/whats-up.png"alt="Телеграмм">
                    <img class="icon" src="img/wk.png"alt="Телеграмм">

            </div>
     </div>
</div>

     <div class="flower-footer">
        <img class="left-flower"src="img/flower-left.png" alt="Цветы" width= 300px>
        <img class="logo-footer"src="img/logo.png" alt="Логотпип" width="150">
        <img class="right-flower"src="img/flower-right.png" alt="Цветы" width= 300px>
    </div>

    <footer>
    <div class="footer-menu">
            <ul class="footer-menu-list">
                <li class="footer-menu-list-navigation"><a href="index.php">Главная</a></li>
                <li class="footer-menu-list-navigation"><a href="catalog.php">Каталог</a></li>
                <li class="footer-menu-list-navigation"><a href="o-brende.php">О бренде</a></li>
                <li class="footer-menu-list-navigation"><a href="contact.php">Контакты</a></li> 
                <li class="footer-menu-list-navigation user"><img class="profile-footer" src="img/social.png" alt="Личный кабинет" width="30"></li> 
            </ul>
    </footer>

    <div class="avtorization">

            <img class="close" href="index.php" src="img/close.png" alt="Закрыть">

            <p class="vhod">ВХОД</p>

            <form method="POST" action="./php-handler/auth.php">
            <input type="email" class="input-avtorization" name="email" required="required" placeholder="EMAIL">
            <input type="password" class="input-avtorization" name="password" required="required"placeholder="ПАРОЛЬ">

            <button class="button-1">ВОЙТИ</button>

            <a class="regis" href="regis.php">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </form>
            
        </div>

        <script src="modal.js"></script>



</body>
