<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин печатной продукции "Nurkanov" - О нас</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
            </form>
        </div>
    </header>

    <main>
        <section class="about-us">
            <h2 id="abous">О нас</h2>
            <p id="part1">Интернет-магазин печатной продукции "Nurkanov" рад приветствовать вас! Мы предлагаем широкий ассортимент печатной продукции высокого качества, включая книги, журналы, плакаты, открытки и многое другое.</p>
            <p id="part2">Наша команда состоит из опытных профессионалов, готовых обеспечить вас качественными товарами и отличным сервисом.</p>
            <p id="part2">Если у вас возникли вопросы или пожелания, не стесняйтесь обращаться к нам. Мы всегда готовы помочь вам!</p>
            <p id="part3">Мы ценим каждого клиента и стремимся сделать ваше покупательское испытание удивительным и приятным. Наша цель - предоставить вам не только высококачественные продукты, но и превосходное обслуживание клиентов.</p>
            <p id="part4">В Nurkanov-shop мы верим в силу слова и долгосрочные отношения с нашими клиентами. Мы гордимся тем, что можем помочь вам в каждом шаге вашего путешествия с нами, начиная от поиска нужных товаров и заканчивая доставкой вашего заказа.</p>
            <p id="part5">Спасибо, что выбрали нас! Мы надеемся на долгосрочное сотрудничество.</p>
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
	    "part1": { "ru": "Интернет-магазин печатной продукции \"Nurkanov\" рад приветствовать вас! Мы предлагаем широкий ассортимент печатной продукции высокого качества, включая книги, журналы, плакаты, открытки и многое другое.", "kz": "\"Nurkanov\" баспасөздік өнімдердің интернет-мәгазині сіздерді қош келдірмек па? Біз сізге кітаптар, журналдар, плакаттар, ашықтар және басқалар да болмаса, жоғары сапада баспасөздік өнімдердің кең ассортиментін ұсынамыз.", },
	    "part2": { "ru": "Наша команда состоит из опытных профессионалов, готовых обеспечить вас качественными товарами и отличным сервисом.", "kz": "Біздің команда тәжірибелі профессионалдардан құрылған, сізге сапалы өнімдер мен отличный қызмет көрсету үшін дайын." },
	    "part3": { "ru": "Если у вас возникли вопросы или пожелания, не стесняйтесь обращаться к нам. Мы всегда готовы помочь вам!", "kz": "Сізде сұрақтар немесе қатысты тапсырмалар бар болса, бізге жазылып келмейтініз. Біз сізге әрдайым көмектесуге дайын." },
	    "part4": { "ru": "Мы ценим каждого клиента и стремимся сделать ваше покупательское испытание удивительным и приятным. Наша цель - предоставить вам не только высококачественные продукты, но и превосходное обслуживание клиентов.", "kz": "Біз әрбір клиентті қадірлейміз және сіздің сатып алуыңызды төменгі және қызығушы кілу үшін құрамыз. Біздің мақсатымыз - сізге тек жоғары сапалы өнімдерді ұсыну емес, олардың қызметтік қызметін де ұсыну." },
	    "part5": { "ru": "В Nurkanov-shop мы верим в силу слова и долгосрочные отношения с нашими клиентами. Мы гордимся тем, что можем помочь вам в каждом шаге вашего путешествия с нами, начиная от поиска нужных товаров и заканчивая доставкой вашего заказа.", "kz": "Nurkanov-shop'tа біз сөздік құрылымның құдайсыздығын және өздеріміздің клиенттерімен көптеген мерзімді құрметтейміз. Біз сізге қажетті өнімдерді іздеуіңізден бастап, сіздің тапсырысыңызды жеткізуді де көмектесу мүмкіндігімізге көңіл бөлеміз." },
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
