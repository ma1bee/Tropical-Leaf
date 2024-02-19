<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="о нас, кто мы, наша команда">
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
                <li class="menu-list-navigation-p"><a href="o-brende.php">О бренде</a></li>
                <li class="menu-list-navigation"><a href="contact.php">Контакты</a></li>
                <li class="menu-list-navigation user"><img class="profile" src="img/social.png" alt="Личный кабинет" width="30"></li> 
            </ul>
        </div>
    </div>
    <hr class="line"></hr> 

    <div class="o-brende">
        <h1 class="title-pr">О нас</h1>

    <div class="o-brende-first">
        <img class="photo-o-brende" src="img/o-brende.png" width=1000px alt="О нас">
    </div>
    <div class="flower-obs">
        <img class="left-flower"src="img/flower-left-kap.png" alt="Цветы" width= 310px>
    </div>
    <div class="o-brende-second">
        <p class="text-obs">Мы, жители современного мегаполиса, знаем, что стремительный темп города отнимает много сил и энергии, а капризная погода и офисные будни заставляют нас большую часть времени прятаться в помещении. </p>
    </div>
    

  
    <div class="o-brende-second">
        <p class="text-obs">Популярный в наше время скандинавский стиль и философия хюгге научили нас создавать в своих домах уютное и комфортное пространство, наполненное теплом, светом, натуральными материалами и сочной зеленью, всем тем, чего мы лишены большую часть года! </p>
    </div>
    <div class="flower-obs-r">
        <img class="right-flower"src="img/flower-right-kap.png" alt="Цветы" width= 310px>
    </div>
    


    <div class="o-brende-second">
        <p class="text-obs">Мы уверены, что современный интерьер не может считаться завершенным без растений, которые добавляют в него необходимые краски, ухоженность и оригинальность. Ни для кого не секрет, что домашние зеленые питомцы насыщают воздух кислородом, очищают его от токсинов, помогают поддерживать баланс влажности, дают чувство комфорта и спокойствия.  </p>
    </div>
   


    <div class="o-brende-second">
        <p class="text-obs">В Tropical Leaf мы считаем, что каждый городской житель достоин иметь свой персональный зеленый оазис, а наша задача – сделать поиск идеального растения и уход за ним простым и приятным!  </p>
    </div>

    <div class="o-brende-second">
        <p class="text-obs">Мы верим, что превратить свою квартиру в городские джунгли под силу любому: достаточно подобрать здоровые и неприхотливые растения, которые будут учитывать ваш образ жизни, дизайн и условия помещения.  </p>
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