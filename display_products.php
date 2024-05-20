<?php
// Подключение к базе данных
$servername = "localhost";
$username = "Nurkanov";
$password = "pass1234";
$dbname = "products";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выполнение запроса к базе данных
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Вывод товаров
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "'>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p>Цена: ". $row["price"] . "  тг</p>";
        echo "<form action='add_to_cart.php' method='post'>
                <input type='hidden' name='product_id' value='" . $row['id'] . "'>
                <button type='submit'>Добавить в корзину</button>
              </form>";
        echo "</div>";
    }
} else {
    echo "0 результатов";
}
$conn->close();
?>
