<?php
session_start(); // Открытие сессии и обращение к файлу connect.php для соединения с БД
include("../php-connect/connect.php");

// Присвоение переменным данных, которые ввел пользователь
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email === '') {
        unset($email);
    }
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password === '') {
        unset($password);
    }
}

// Удаление пробелов в начале и конце строки
$email = trim($_POST['email']);
$password = trim($_POST['password']);

//запрос к бд
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            // Пользователь найден
            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])) {
                // Правильный пароль
                if ($user['roles'] == 0) {

                    $_SESSION['roles'] = false; // Добавляем информацию об обычном пользователе в сессию
                    $_SESSION['id_user'] = $user['ID']; // Сохранение ID пользователя в сессию
                    // Перенаправление на profile.php, если Is_admin = 0
                    header("Location: ../user.php");
                    exit();
                } elseif ($user['roles'] == 1) {
                    $_SESSION['roles'] = true; // Добавляем информацию об администраторе в сессию
                    $_SESSION['id_user'] = $user['ID']; // Сохранение ID пользователя в сессию
                    // Перенаправление на admin.php, если Is_admin = 1
                    header("Location: ../admin.php");
                    exit();
                }
            } else {
                // Неверный пароль
                $_SESSION['message'] = "Неверный логин или пароль";
                header("Location: ../index.php");
            }
        } else {
            // Пользователь не найден
            $_SESSION['message'] = "Пользователь не найден";
            header("Location: ../index.php");
        }
    
// Закрытие соединения с базой данных
mysqli_close($connect);
?>