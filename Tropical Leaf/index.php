<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Тропические растения, тропические цветы, редкие растения">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.cdnfonts.com/css/kreadon" rel="stylesheet">
    <title>Tropical Leaf</title>
</head>
<body>
    <div class="container">
        <div class="shapka">
        <ul class="menu-list">
                <li class="menu-list-navigation"><a href="index.php"><img class="logo" src="img/logo.png" alt="Логотпип" width="150"></a></li>
                <li class="menu-list-navigation-p"><a href="index.php">Главная</a></li>
                <li class="menu-list-navigation"><a href="catalog.php">Каталог</a></li>
                <li class="menu-list-navigation"><a href="o-brende.php">О бренде</a></li>
                <li class="menu-list-navigation"><a href="contact.php">Контакты</a></li>
                <li class="menu-list-navigation user"><img class="profile" src="img/social.png" alt="Личный кабинет" width="30"></li> 
            </ul>
        </div>
    </div>
    <hr class="line"></hr> 
    <div class="main">
        <div class="main-box">
            <div class="text-index">
                <p class="word-one">МАГАЗИН</p>
                <p class="word">ТРОПИЧЕСКИХ</p>
                <p class="word-three">РАСТЕНИЙ</p>
                <p class="under-word">Озелените свой дом тропической красотой</p>

                <button class="button"><a href="catalog.php" class="btn-text">Выбрать Растение</a></button>
            </div>
            <div class="r-el"><img class="ellipse" src="img/ellipse-index.png" alt="Композиция" width="500"></div>
        </div>
    </div>

    <div class="flower">
        <img class="left-flower"src="img/flower-left.png" alt="Цветы" width= 300px>
        <img class="right-flower"src="img/flower-right.png" alt="Цветы" width= 300px>
    </div>


    <div class="o-nas">
        <h1 class="o-nas-title">О нас</h1>
    
         <img class="o-nas-photo"src="img/o-nas-photo.png" alt="Цветы" width= 550px>
        
            <div class="o-nas-right">
                    <p class="o-nas-text">Мы вам предлагаем уникальные растения, подходящие для различных стилей декора и жизненных
            ситуаций, помогая людям создавать зеленые и уютные пространства в своих домах.</p>
                    <p class="o-nas-text">Наш широкий ассортимент имеет экзотических растений, таких как пальмы,
            кактусы, орхидеи, суккуленты и другие, которые выращиваются вспециальных
             теплицах с контролируемым климатом для создания их комфортной среды обитания. </p>
            </div>
    </div>

    <div class="flower">
        <img class="left-flower"src="img/flower-left.png" alt="Цветы" width= 300px>
        <img class="right-flower"src="img/flower-right.png" alt="Цветы" width= 300px>
    </div>

    <div class="spec">
        <h1 class="o-nas-title">Спецпредлолжение</h1>

        <div class="main-spec">
            <div class="text-spec">
                <p class="text-1">ПОМОЖЕМ ВАМ С ВЫБОРОМ ПОДАРКА</p>
                <p class="text-2">Сделайте ваш подарок уникальным. Приятно удивите свою вторую
                половинку уникальным растением. Мы сможем подобрать по вашим предпочтениям</p>

                <!-- <button class="button">Выбрать Растение</button> работает но без ссылки-->
                <button class="button"><a href="catalog.php" class="btn-text">Выбрать Растение</a></button>
            </div>
            <img class="ellipse-spec" src="img/spec-orhid.png" alt="Композиция" width="500">
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

</body>

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
</html>