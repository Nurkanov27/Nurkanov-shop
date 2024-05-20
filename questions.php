<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин печатной продукции "Nurkanov" - Часто задаваемые вопросы</title>
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="styles.css">
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

    <!-- Content -->
    <main>
        <!-- Часто задаваемые вопросы -->
        <section class="faq">
            <h2 id="que">Часто задаваемые вопросы</h2>
            <div class="faq-item">
                <h3 id="que1">Как оформить заказ?</h3>
                <p id="que2">Для оформления заказа добавьте товары в корзину, затем перейдите в корзину и следуйте инструкциям на экране для завершения заказа.</p>
            </div>
            <div class="faq-item">
                <h3 id="que3">Как узнать статус заказа?</h3>
                <p id="que4">Вы можете отслеживать статус своего заказа в разделе "Мои заказы" после входа в ваш аккаунт на нашем сайте.</p>
            </div>
            <div class="faq-item">
                <h3 id="que5">Как связаться с поддержкой?</h3>
                <p id="que6">Для связи с нашей службой поддержки отправьте нам письмо на электронную почту nurkanovshop@gmail.com или воспользуйтесь формой обратной связи на сайте.</p>
            </div>
            <!-- Добавьте дополнительные вопросы и ответы по вашему усмотрению -->
        </section>
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
	    "que": { "ru": "Часто задаваемые вопросы", "kz": "Кәпірлер сұраулары" },
	    "que1": { "ru": "Как оформить заказ?", "kz": "Тапсырысты қалай тапсыру керек?" },
	    "que2": { "ru": "Для оформления заказа добавьте товары в корзину, затем перейдите в корзину и следуйте инструкциям на экране для завершения заказа.", "kz": "Тапсырысты қалай тапсыру керек?" },
	    "que3": { "ru": "Как узнать статус заказа?", "kz": "Тапсырыстың статусын қалай анықтауға болады?" },
	    "que4": { "ru": "Вы можете отслеживать статус своего заказа в разделе \"Мои заказы\" после входа в ваш аккаунт на нашем сайте.", "kz": "Сіз тапсырысының статусын сайттың біздің қолданушы панелінде \"Менің тапсырыстарым\" бөлімінде көруге болады." },
	    "que5": { "ru": "Как связаться с поддержкой?", "kz": "Қолдаумен қалай байланыстырайын?" },
	    "que6": { "ru": "Для связи с нашей службой поддержки отправьте нам письмо на электронную почту nurkanovshop@gmail.com или воспользуйтесь формой обратной связи на сайте.", "kz": "Қолдау қызметімен байланыстыру үшін электрондық поштаның nurkanovshop@gmail.com поштасына хат жазыңыз немесе сайттағы байланыс формасын пайдаланыңыз." },
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
