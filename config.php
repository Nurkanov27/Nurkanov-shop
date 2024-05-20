<?php
// Параметры подключения к базе данных
$host = 'localhost';
$username = 'Nurkanov';
$password = 'pass1234';
$database = 'products';

// Создание соединения с базой данных
$connection = new mysqli($host, $username, $password, $database);

// Проверка соединения
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
