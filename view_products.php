<?php
// Подключение к базе данных
$servername = "localhost";
$username = "Nurkanov";
$password = "pass1234";
$dbname = "products";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получение данных о товарах из базы данных
$sql = "SELECT * FROM Products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Вывод данных о товарах
  while($row = $result->fetch_assoc()) {
    echo "Название: " . $row["name"]. " - Описание: " . $row["description"]. " - Цена: " . $row["price"]. "<br>";
  }
} else {
  echo "0 результатов";
}

$conn->close();
?>
