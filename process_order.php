<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $cardNumber = $_POST['card_number'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $totalPrice = $_POST['total_price']; // Общая сумма заказа

    // Далее вы можете выполнить нужные вам действия, например, сохранить заказ в базе данных или отправить информацию о заказе на почту администратору магазина

    // Предположим, что у вас есть соединение с базой данных
    $servername = "localhost";
    $username = "Nurkanov";
    $password = "pass1234";
    $dbname = "products";

    // Создаем подключение к базе данных
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверяем успешность подключения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Подготавливаем и выполняем SQL-запрос для сохранения заказа в базе данных
    $sql = "INSERT INTO orders (name, surname, email, address, card_number, expiry_date, cvv, total_price) VALUES ('$name', '$surname', '$email', '$address', '$cardNumber', '$expiryDate', '$cvv', '$totalPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "Заказ успешно оформлен!";
    } else {
        echo "Ошибка при оформлении заказа: " . $conn->error;
    }

    // Закрываем соединение с базой данных
    $conn->close();
} else {
    // Если форма не была отправлена, перенаправляем пользователя на страницу оформления заказа
    header("Location: checkout.php");
    exit;
}
?>
