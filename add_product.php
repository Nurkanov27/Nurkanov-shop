<?php
// Подключение к базе данных
$servername = "localhost";
$username = "Nurkanov";
$password = "pass1234";
$dbname = "products";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$product_name = $_POST['productName'] ?? '';
$product_description = $_POST['productDescription'] ?? '';
$product_price = $_POST['productPrice'] ?? '';
$product_image_url = $_POST['productImage'] ?? ''; // Добавляем поле для URL-адреса изображения

// Проверка наличия данных перед выполнением операции вставки
if (!empty($product_name) && !empty($product_description) && !empty($product_price) && !empty($product_image_url)) {
    // Подготовленный запрос для вставки данных
    $stmt = $conn->prepare("INSERT INTO products (name, description, price, image_url) VALUES (?, ?, ?, ?)");
    // Проверка подготовленного запроса
    if ($stmt) {
        // Привязка параметров
        $stmt->bind_param("ssds", $product_name, $product_description, $product_price, $product_image_url);
        // Выполнение запроса
        if ($stmt->execute()) {
            // Получаем ID добавленной записи
            $product_id = $conn->insert_id;
            echo "Товар успешно добавлен. ID товара: " . $product_id;
        } else {
            echo "Ошибка при выполнении запроса: " . $stmt->error;
        }
        // Закрытие запроса
        $stmt->close();
    } else {
        echo "Ошибка при подготовке запроса: " . $conn->error;
    }
} else {
    echo "Ошибка: Все поля должны быть заполнены.";
}

// Закрытие соединения
$conn->close();
?>
