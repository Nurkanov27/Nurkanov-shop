<?php
session_start();

// Подключение к базе данных
$servername = "localhost";
$username = "Nurkanov";
$password = "pass1234";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы входа
$login = $_POST['login'];
$password = $_POST['password'];

// Подготовленный запрос для защиты от SQL-инъекций
$stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
$stmt->bind_param("ss", $login, $password);
$stmt->execute();
$result = $stmt->get_result();

// Проверка результатов запроса
if ($result->num_rows > 0) {
    // Пользователь найден, устанавливаем сессию входа и сохраняем данные пользователя
    $user = $result->fetch_assoc();
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    echo "success";
} else {
    // Неверные учетные данные
    echo "error";
}

$stmt->close();
$conn->close();
?>
