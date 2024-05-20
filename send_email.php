<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email адрес, куда будет отправлено письмо
    $to = "nurkanovshop@gmail.com";

    // Тема письма
    $subject = "Новое сообщение от $name";

    // Тело письма
    $body = "От: $name\n Email: $email\n\n Сообщение:\n $message";

    // Отправка письма
    if (mail($to, $subject, $body)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>
