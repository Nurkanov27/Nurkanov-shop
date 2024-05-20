<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Форма для добавления товара -->
    <div class="admin-form">
        <h1>Добавить товар</h1>
        <form action="add_product.php" method="post">
            <label for="productName">Название товара:</label><br>
            <input type="text" id="productName" name="productName"><br><br>
            <label for="productDescription">Описание товара:</label><br>
            <textarea id="productDescription" name="productDescription"></textarea><br><br>
            <label for="productPrice">Цена:</label><br>
            <input type="text" id="productPrice" name="productPrice"><br><br>
            <label for="productImage">Изображение (URL):</label><br>
            <input type="text" id="productImage" name="productImage"><br><br>
            <button type="submit">Добавить товар</button>
        </form>
    </div>
</body>
</html>
