<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
    <style>
.account-page {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.user-info {
    margin-bottom: 20px;
}

.purchase-history table {
    width: 100%;
    border-collapse: collapse;
}

.purchase-history th, .purchase-history td {
    border: 1px solid #ccc;
    padding: 10px;
}

.purchase-history th {
    background-color: #d6ae01;
    color: #fff;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет - Интернет-магазин печатной продукции "Nurkanov"</title>
</head>
<body>
<!-- Header -->
<header>
    <img src="images/logo.png" alt="Логотип">
    <nav>
        <ul>
            <li><a href="main.php" id="home-link">Главная</a></li>
            <li><a href="catalog.php" id="catalog-link">Каталог</a></li>
            <li><a href="account.php" class="active-link" id="account-link">Личный кабинет</a></li>
            <li><a href="basket.php" id="basket-link">Корзина</a></li>
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

<main>
    <section class="account-page">
        <h1 id="weclome-account">Добро пожаловать в ваш личный кабинет!</h1>
        <div class="user-info">
            <h2 id="user-info">Информация о пользователе</h2>
            <div class="user-details">
                <?php
                if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
                    $name = $_SESSION['name'];
                    $email = $_SESSION['email'];
                    echo "<p><strong>Имя:</strong> $name</p>";
                    echo "<p><strong>Email:</strong> $email</p>";
                } else {
                    echo "<p id='user-not'>Данные пользователя не доступны</p>";
                }
                ?>
            </div>
        </div>
<!-- История покупок -->
<div class="purchase-history">
    <h2 id="history-shop">История покупок</h2>
    <table>
        <thead>
            <tr>
                <th id="tovar_name">Название товара</th>
                <th id="cena">Цена</th>
                <th id="data-pokupki">Дата покупки</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Получение данных о покупках текущего пользователя
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $sql = "SELECT product_name, price, purchase_date FROM purchases WHERE email='$email'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Вывод данных о покупках в виде строк таблицы
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['purchase_date'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr id='not-info'><td colspan='3'>Нет данных о покупках</td></tr>";
                }
            } else {
                echo "<tr id='auto-not'><td colspan='3'>Пользователь не авторизован</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
    </section>
</main>

<!-- Footer -->
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
                <li><a class="nav-link" href="dostavka.php" id="aboutus-link">Доставка</a></li>
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
        "weclome-account": { "ru": "Добро пожаловать в ваш личный кабинет!", "kz": "Сіздің жеке кабинетіңізге қош келдіңіз!" },
        "user-info": { "ru": "Информация о пользователе", "kz": "Пайдаланушы туралы мәлімет" },
        "user-not": { "ru": "Данные пользователя не доступны", "kz": "Пайдаланушының мәліметтері қол жетімді емес" },
        "history-shop": { "ru": "История покупок", "kz": "Сатып алу тарихы" },
        "tovar_name": { "ru": "Название товара", "kz": "Товар атауы" },
        "cena": { "ru": "Цена", "kz": "Баға" },
        "data-pokupki": { "ru": "Дата покупки", "kz": "Сатып алу күні" },
        "not-info": { "ru": "Нет данных о покупках", "kz": "Сатып алу туралы деректер жоқ" },
        "auto-not": { "ru": "Пользователь не авторизован", "kz": "Пайдаланушы аутентификацияланбады" },
        "contacts-header": { "ru": "Контакты", "kz": "Байланыстар" },
        "phone": { "ru": "Телефон: +7 (XXX) XXX-XX-XX", "kz": "Телефон: +7 (XXX) XXX-XX-XX" },
        "email": { "ru": "Электронная почта: nurkanovshop@gmail.com", "kz": "Электрондық пошта: nurkanovshop@gmail.com" },
        "address": { "ru": "Адрес: г. Лисаковск, ул. Сатпаева, д. 123, офис 456", "kz": "Мекенжай: Лисаковск қ., Сатпаев к-сі, 123-к., 456 офис" },
        "info-header": { "ru": "Информация", "kz": "Мәлімет" },
        "aboutus-link": { "ru": "О нас", "kz": "Біз туралы" },
        "payment-link": { "ru": "Оплата", "kz": "Төлеу" },
        "return-link": { "ru": "Возврат и обмен", "kz": "Айырбастау және алмасу" },
        "support-header": { "ru": "Служба поддержки", "kz": "Қолдау қызметі" },
        "faq-link": { "ru": "Часто задаваемые вопросы", "kz": "Жиі көп сұрақтар" },
        "contact-link": { "ru": "Связаться с нами", "kz": "Бізбен байланысу" },
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
