<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин печатной продукции "Nurkanov"</title>
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="styles.css">
    <style>        
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <img src="images/logo.png" alt="Логотип">
        <nav>
            <ul>
            <li><a href="main.php" id="home-link">Главная</a></li>
            <li><a href="catalog.php"  id="catalog-link">Каталог</a></li>
            <li><a href="account.php" id="account-link">Личный кабинет</a></li>
            <li><a href="basket.php" id="basket-link">Корзина</a></li>
            <li><a href="joinreg.php" class="active-link" id="joinreg-link">Войти/Регистрация</a></li>
            </ul>
        </nav>
<!-- Русский -->
<img src="images/ru.jpg" alt="Русский" onclick="loadTranslations('ru')" style="cursor: pointer; max-width: 70px; max-height: 70px; margin-left: 100px;">
<!-- Казахский -->
<img src="images/kz.jpg" alt="Казахский" onclick="loadTranslations('kz')" style="cursor: pointer; max-width: 70px; max-height: 70px;">

        <div class="search">
            <input type="text" id="searchInput" placeholder="Поиск товаров...">
            <button onclick="search()">Найти</button>
        </div>
    </header>
    <!-- Content -->
    <main>
        <!-- Форма регистрации/входа -->
        <section class="login-registration">
            <h1 id="joinreg">Войти/Регистрация</h1>
            <!-- Форма входа -->
            <form id="login-form" onsubmit="login(event)">
                <h2 id="vhod">Вход</h2>
                <input type="text" placeholder="Логин" id="login" name="login">
                <input type="password" placeholder="Пароль" id="password" name="password">
                <button type="submit" id="vhod-b">Войти</button>
            </form>
            <!-- Форма регистрации -->
            <form id="registration-form" onsubmit="register(event)">
                <h2 id="reg">Регистрация</h2>
                <input type="text" placeholder="Имя" id="name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Пароль" id="password" name="password">
                <button type="submit" id="reg">Зарегистрироваться</button>
            </form>
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
            "joinreg": { "ru": "Войти/Регистрация", "kz": "Кіру/Тіркелу" },
            "phone": { "ru": "Телефон: +7 (XXX) XXX-XX-XX", "kz": "Телефон: +7 (XXX) XXX-XX-XX" },
            "email": { "ru": "Электронная почта: nurkanovshop@gmail.com", "kz": "Электрондық пошта: nurkanovshop@gmail.com" },
            "address": { "ru": "Адрес: г. Лисаковск, ул. Сатпаева, д. 123, офис 456", "kz": "Мекенжайы: Лисаковск қ., Сәтпаев к-сі, 123-үй, 456-кеңсе" },
            "info-header": { "ru": "Информация", "kz": "Ақпарат" },
	    "joinreg-link": { "ru": "Войти/Регистрация", "kz": "Кіру/Тіркелу" },
	    "vhod": { "ru": "Вход", "kz": "Кіру" },
	    "vhod1": { "ru": "Вход", "kz": "Кіру" },
 	    "reg": { "ru": "Зарегистрироваться", "kz": "Тіркелу" },
	    "login": { "ru": "Логин", "kz": "Логин" },
            "password": { "ru": "Пароль", "kz": "Құпия сөз" },
            "name": { "ru": "Имя", "kz": "Аты" },
            "vhod": { "ru": "Вход", "kz": "Кіру" },
"reg": { "ru": "Регистрация", "kz": "Тіркелу" },
            "aboutus-link": { "ru": "О нас", "kz": "Біз туралы" },
            "delivery-link": { "ru": "Доставка", "kz": "Жеткізу" },
            "payment-link": { "ru": "Оплата", "kz": "Төлем" },
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
    function login(event) {
        event.preventDefault();
        var form = document.getElementById("login-form");
        var formData = new FormData(form);

        fetch('login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === "success") {
                alert('Вы успешно вошли!');
                window.location.href = "account.php"; // Перенаправление на личный кабинет
            } else {
                alert('Неверные логин или пароль!');
            }
        })
        .catch(error => {
            console.error('Ошибка:', error);
        });
    }

    function register(event) {
        event.preventDefault();
        var form = document.getElementById("registration-form");
        var formData = new FormData(form);

        fetch('register.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === "success") {
                alert('Вы успешно зарегистрировались!');
                window.location.href = "account.php"; // Перенаправление на личный кабинет
            } else {
                alert('Ошибка при регистрации!');
            }
        })
        .catch(error => {
            console.error('Ошибка:', error);
        });
    }
</script>

</body>
</html>
