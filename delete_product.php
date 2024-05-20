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

// Проверка, был ли отправлен запрос на удаление
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка, существует ли параметр id товара
    if(isset($_POST['product_id']) && !empty($_POST['product_id'])){
        // Получение id товара для удаления
        $product_id = $_POST['product_id'];

        // Подготовленный запрос для удаления товара
        $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
        // Проверка подготовленного запроса
        if ($stmt) {
            // Привязка параметров
            $stmt->bind_param("i", $product_id);
            // Выполнение запроса
            if ($stmt->execute()) {
                echo "Товар успешно удален";
            } else {
                echo "Ошибка при выполнении запроса: " . $stmt->error;
            }
            // Закрытие запроса
            $stmt->close();
        } else {
            echo "Ошибка при подготовке запроса: " . $conn->error;
        }
    } else {
        echo "Ошибка: Не удалось получить ID товара для удаления";
    }
} else {
    echo "Ошибка: Неверный метод запроса";
}

// Закрытие соединения
$conn->close();
?>
