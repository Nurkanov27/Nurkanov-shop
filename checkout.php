<?php
session_start();
// Инициализируем переменную $totalPrice
$totalPrice = 0;

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    $servername = "localhost";
    $username = "Nurkanov";
    $password = "pass1234";
    $dbname = "products";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ids = implode(',', array_keys($_SESSION['cart']));
    $sql = "SELECT * FROM products WHERE id IN ($ids)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $quantity = $_SESSION['cart'][$row['id']];
            $subtotal = $row['price'] * $quantity;
            $totalPrice += $subtotal; // Увеличиваем общую сумму
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .page-container {
            position: relative;
            min-height: 100%;
        }

        button {
            background-color: #d6ae01;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Добавлено затенение */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Тень для кнопки */
        }
        button:hover {
            background-color: #c29500; /* Изменен цвет при наведении */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* Изменена тень при наведении */
        }
        .checkoutmain {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-size: 18px; /* Размер текста в форме */
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Логотип">
        <nav>
            <ul>
            <li><a href="main.php" id="home-link">Главная</a></li>
            <li><a href="catalog.php"  id="catalog-link">Каталог</a></li>
            <li><a href="account.php" id="account-link">Личный кабинет</a></li>
            <li><a href="basket.php" class="active-link" id="basket-link">Корзина</a></li>
            <li><a href="joinreg.php" id="joinreg-link">Войти/Регистрация</a></li>
            </ul>
        </nav>
<!-- Русский -->
<img src="images/ru.jpg" alt="Русский" onclick="loadTranslations('ru')" style="cursor: pointer; max-width: 70px; max-height: 70px; margin-left: 100px;">
<!-- Казахский -->
<img src="images/kz.jpg" alt="Казахский" onclick="loadTranslations('kz')" style="cursor: pointer; max-width: 70px; max-height: 70px;">

        <div class="search">
    <input type="text" id="searchInput" placeholder="Поиск товаров...">
    <!-- Изменение атрибута onclick -->
    <button onclick="searchInCatalog()">Найти</button>
        </div>
    </header>

	<div class="checkoutmain">
        <h1 id="chk0>Оформление заказа</h1>
        <form action="process_order.php" method="post">
<input type="hidden" name="total_price" value="<?php echo $totalPrice; ?>">

            <label for="name" id="chk">Имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="surname" id="chk1">Фамилия:</label>
            <input type="text" id="surname" name="surname" required>

            <label for="email" id="chk2">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address" id="chk3">Адрес доставки:</label>
            <textarea id="address" name="address" required></textarea>

            <label for="card_number" id="chk4">Номер карты:</label>
	    <input type="text" id="card_number" name="card_number" maxlength="16" inputmode="numeric" pattern="[0-9]*" required>

            <label for="expiry_date" id="chk4">Срок действия:</label>
            <input type="date" id="expiry_date" name="expiry_date" required>

            <label for="cvv">CVV:</label>
	    <input type="text" id="cvv" name="cvv" maxlength="3" inputmode="numeric" pattern="[0-9]*" required>

<!-- Добавляем графу для отображения общей суммы перед кнопкой -->
<div class="total-price" id="al-sum">Общая сумма к оплате: <?php echo $totalPrice; ?> тг</div>


            <button type="submit">Оформить заказ</button>
        </form>
    </div>
    </main>

  <footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3 id="contacts-header">Контакты</h3>
            <p id="phone">Телефон: +7 (XXX) XXX-XX-XX</p>
            <p id="email">Электронная почта: nurkanovshop@gmail.com</p>
            <p id="address">Адрес: г. Лисаковск, ул. Сатпаева, д. 123, офис 456</p>
        </div>
        <div class="footer-column">
            <h3 id="info-header">Информация</h3>
            <ul>
                <li><a class="nav-link" href="aboutus.php" id="aboutus-link">О нас</a></li>
                <li><a class="nav-link" href="dostavka.php" id="delivery-link">Доставка</a></li>
                <li><a class="nav-link" href="pay.php" id="payment-link">Оплата</a></li>
                <li><a class="nav-link" href="vozvrat.php" id="return-link">Возврат и обмен</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3 id="support-header">Служба поддержки</h3>
            <ul>
                <li><a class="nav-link" href="questions.php" id="faq-link">Часто задаваемые вопросы</a></li>
                <li><a class="nav-link" href="svyaz.php" id="contact-link">Связаться с нами</a></li>
                <li><a class="nav-link" href="support.php" id="support-link">Помощь и поддержка</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2024 Интернет-магазин печатной продукции "Nurkanov". Все права защищены.</p>
    </div>
</footer>
<script>
    function loadTranslations(language) {
        // Определение URL-адреса файла перевода
        let translationsFile = "";
        if (language === "ru") {
            translationsFile = "translations/translations_ru.js";
        } else if (language === "kz") {
            translationsFile = "translations/translations_kz.js";
        }

        // Создание тега скрипта для загрузки файла перевода
        const scriptTag = document.createElement("script");
        scriptTag.src = translationsFile;

        // После загрузки файла применяем переводы
        scriptTag.onload = function () {
            applyTranslations(language);
        };

        // Добавление тега скрипта в заголовок документа
        document.head.appendChild(scriptTag);
    }

    function applyTranslations(language) {
        const elementsToTranslate = {
            "home-link": { "ru": "Главная", "kz": "Басты бет" },
            "catalog-link": { "ru": "Каталог", "kz": "Каталог" },
            "account-link": { "ru": "Личный кабинет", "kz": "Жеке кабинет" },
            "basket-link": { "ru": "Корзина", "kz": "Себет" },
            "joinreg-link": { "ru": "Войти/Регистрация", "kz": "Кіру/Тіркелу" },
            "contacts-header": { "ru": "Контакты", "kz": "Байланыстар" },
            "info-header": { "ru": "Информация", "kz": "Мәлімет" },
            "phone": { "ru": "Телефон: +7 (XXX) XXX-XX-XX", "kz": "Телефон: +7 (XXX) XXX-XX-XX" },
            "email": { "ru": "Электронная почта: nurkanovshop@gmail.com", "kz": "Электрондық пошта: nurkanovshop@gmail.com" },
            "address": { "ru": "Адрес: г. Лисаковск, ул. Сатпаева, д. 123, офис 456", "kz": "Мекенжайы: Лисаковск қ., Сәтпаев к-сі, 123-үй, 456-кеңсе" },
            "info-header": { "ru": "Информация", "kz": "Ақпарат" },
            "aboutus-link": { "ru": "О нас", "kz": "Біз туралы" },
            "delivery-link": { "ru": "Доставка", "kz": "Жеткізу" },
            "payment-link": { "ru": "Оплата", "kz": "Төлем" },
	    "abous": { "ru": "О нас", "kz": "Біз туралы" },
	    "chk0": { "ru": "Оформление заказа", "kz": "Тапсырысты орнату" },
	    "chk": { "ru": "Имя:", "kz": "Аты:" },
	    "chk1": { "ru": "Фамилия:", "kz": "Тегі:" },
	    "chk2": { "ru": "Email:", "kz": "Электрондық пошта:" },
	    "chk3": { "ru": "Адрес доставки:", "kz": "Жеткізу мекенжайы:" },
	    "chk4": { "ru": "Номер карты:", "kz": "Карта нөмірі:" },
	    "al-sum": { "ru": "Общая сумма к оплате:", "kz": "Төлеу үшін жалпы сомма:" },
            "return-link": { "ru": "Возврат и обмен", "kz": "Қайтару және айырбастау" },
            "support-header": { "ru": "Служба поддержки", "kz": "Қолдау қызметі" },
            "faq-link": { "ru": "Часто задаваемые вопросы", "kz": "Жиі қойылатын сұрақтар" },
            "contact-link": { "ru": "Связаться с нами", "kz": "Бізбен байланысыңыз" },
            "support-link": { "ru": "Помощь и поддержка", "kz": "Көмек және қолдау" }
        };

        // Применение переводов
        for (const [key, value] of Object.entries(elementsToTranslate)) {
            const element = document.getElementById(key);
            if (element) {
                element.innerText = value[language];
            }
        }
    }
    function searchInCatalog() {
        // Получаем значение из поля ввода поиска
        const searchTerm = document.getElementById("searchInput").value;
        // Перенаправляем пользователя на страницу catalog.php с параметром поискового запроса
        window.location.href = "catalog.php?search=" + encodeURIComponent(searchTerm);
    }
</script>

</body>
</html>
