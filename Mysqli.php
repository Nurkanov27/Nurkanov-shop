<?php
$host = 'localhost';
$username = 'Nurkanov';
$password = 'pass1234';
$database = 'products';

// Подключение к базе данных
$mysqli = new mysqli($host, $username, $password, $database);

// Проверка подключения
if ($mysqli->connect_errno) {
    echo "Connection failed: " . $mysqli->connect_error;
    exit();
}
?>
