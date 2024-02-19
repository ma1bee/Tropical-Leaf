<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tropical";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Валидация данных
    
    // Проверка совпадения паролей
    if ($password !== $confirm_password) {
        $message = "Пароли не совпадают.";
        exit;
    }

    // Хеширование пароля
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Проверка, если пользователь уже существует
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // Пользователь уже существует
        $message = "Пользователь с таким email уже зарегистрирован.";
    } else {
        // Создание нового пользователя и сохранение в базе данных
        $query = "INSERT INTO users (surname, name, email, number, password) VALUES ('$surname', '$name', '$email', '$number', '$hashed_password')";
        if ($conn->query($query) === TRUE) {
            $message = "Регистрация прошла успешно!";
        } else {
            $message = "Ошибка при регистрации: " . $conn->error;
        }
        
    }
}
$conn->close();

    
header("Location: ../regis.php");
?>