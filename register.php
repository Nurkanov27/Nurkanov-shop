<?php
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

// Получение данных из формы регистрации
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Запрос к базе данных для добавления нового пользователя
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "error";
}

$conn->close();
?>
