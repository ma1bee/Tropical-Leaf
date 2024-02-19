<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="экзотические растения, комнатные тропические растения, купить тропические растения">
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
                <li class="menu-list-navigation-p"><a href="catalog.php">Каталог</a></li>
                <li class="menu-list-navigation"><a href="o-brende.php">О бренде</a></li>
                <li class="menu-list-navigation"><a href="contact.php">Контакты</a></li>
                <li class="menu-list-navigation user"><img class="profile" src="img/social.png" alt="Личный кабинет" width="30"></li> 
        </div>
    </div>
    <hr class="line"></hr> 

    <div class="products">

    <h1 class="title-pr">Каталог</h1>
    <div class="gallery-1">
        <div class="product">
             <img class="photo" src="img/photo-pr1.png" width=300px alt="Орхидея Рим">
             <p class="text-pr">Орхидея Рим</p>
             <p class="text-pr-under">1.999 руб.</p>
        </div>
        <div class="product">
            <img class="photo" src="img/photo-pr2.png" width=300p alt="Монстера делициоза">
             <p class="text-pr">Монстера делициоза</p>
             <p class="text-pr-under">3.999 руб.</p>
        </div>
        <div class="product">
            <img class="photo" src="img/photo-pr3.png" width=300p alt="Фикус каучуконосный">  
             <p class="text-pr">Фикус каучуконосный</p>
             <p class="text-pr-under">7.999 руб.</p>
        </div>
        <div class="product">
            <img class="photo" src="img/photo-pr4.png" width=300p alt="Бонсай Вяз"> 
             <p class="text-pr">Бонсай Вяз</p>
             <p class="text-pr-under">24.999 руб.</p>
        </div>
    </div>

    <div class="gallery-2">
        <div class="product">
             <img class="photo" src="img/photo-pr5.png" width=300px alt="Бамбук ">
             <p class="text-pr">Бамбук </p>
             <p class="text-pr-under">8.999 руб.</p>
        </div>
        <div class="product">
            <img class="photo" src="img/photo-pr6.png" width=300p alt="Хойя">
             <p class="text-pr">Хойя</p>
             <p class="text-pr-under">4.799 руб.</p>
        </div>
        <div class="product">
            <img class="photo" src="img/photo-pr7.png" width=300p alt="Стрелиция Королевская">  
             <p class="text-pr">Стрелиция Королевская</p>
             <p class="text-pr-under">50.999 руб.</p>
        </div>
        <div class="product">
            <img class="photo" src="img/photo-pr8.png" width=300p alt="Лимонное дерево"> 
             <p class="text-pr">Лимонное дерево</p>
             <p class="text-pr-under">2.999 руб.</p>
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
            </ul>
    </footer>


    </div>

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