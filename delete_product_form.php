<!-- delete_product_form.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удаление товара</title>
</head>
<body>
    <h2>Удалить товар</h2>
    <form action="delete_product.php" method="post">
        <label for="product_id">ID товара для удаления:</label><br>
        <input type="text" id="product_id" name="product_id"><br><br>
        <button type="submit">Удалить товар</button>
    </form>
</body>
</html>
