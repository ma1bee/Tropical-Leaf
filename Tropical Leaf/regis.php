<?php
session_start();
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];

    // Очистка сессионной переменной
    unset($_SESSION['message']);

    // Вывод сообщения только после регистрации
    echo '<div class="message">' . $message . '</div>';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li class="menu-list-navigation"><a href="contact.php">Контакты</a></li>
                <li class="menu-list-navigation user"><img class="profile" src="img/social.png" alt="Личный кабинет" width="30"></li> 
                <li class="menu-list-navigation user"><img src="img/basket.png" alt="Корзина" width="30"></li> 
            </ul>
        </div>
    </div>
    <hr class="line"></hr> 
    <p class="h1-regis">РЕГИСТРАЦИЯ</p>
    <form action="./php-handler/regisrtation.php" method="Post">
        <div class="regis-column"> 
        <input type="text" class="first-column" name="surname" required="required" placeholder="Фамилия">
        <input type="text" class="first-column" name="number" required="required"placeholder="Номер телефона">

            <div class="regis-two">
            <input type="text" class="first-column" name="name" required="required" placeholder="Имя">
            <input type="email" class="first-column" name="email" required="required"placeholder="Адрес email">
            </div>
                <div class="regis-three">
                    <input type="password" class="center-column" name="password" required="required"placeholder="Пароль">
                    <input type="password" class="center-column" name="confirm_password" required="required" placeholder="Повторите пароль">
                    <button class="button-regis">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                </div>
        </div>
    </form>
     <footer class="under">
        <img class="left-flower"src="img/flower-left.png">
        <img class="right-flower"src="img/flower-right.png">
     </footer>
</body>
</html>