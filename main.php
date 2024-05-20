<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин печатной продукции "Nurkanov"</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <img src="images/logo.png" alt="Логотип">
    <nav>
        <ul>
            <li><a href="main.php" class="active-link" id="home-link">Главная</a></li>
            <li><a href="catalog.php" id="catalog-link">Каталог</a></li>
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
        <button onclick="search()">Найти</button>
    </div>
</header>

<!-- Main Banner -->
<section class="main-banner">
    <div class="banner-content">
        <h1 id="welcome-header">Добро пожаловать в магазин "Nurkanov"</h1>
        <p id="welcome-message">Лучшие печатные издания для вас!</p>
        <a href="catalog.php" class="shop-now-btn" id="shop-now">Перейти к покупкам</a>
    </div>
</section>

<!-- About Us -->
<section class="about-us">
    <h2 id="about-us-header">О нас</h2>
    <p id="about-us-content">Интернет-магазин "Nurkanov" предлагает широкий ассортимент печатной продукции, включая книги, тетради, канцелярские товары и многое другое. Мы стремимся предоставить нашим клиентам высококачественные товары по доступным ценам и гарантируем быструю доставку и отличное обслуживание.</p>
</section>

<!-- Promotions -->
<section class="promotions">
    <h2 id="promotions-header">Акции и скидки</h2>
    <div class="promotions-grid">
        <div class="promotion-card">
            <img src="images/promo1.png" alt="Скидка на книги" style="max-width: 200px; max-height: 200px;">
            <div class="promotion-info">
                <h3 id="promo1-title">Скидка 15% на все книги!</h3>
                <p id="promo1-content">Только до конца месяца! Спешите приобрести любимые книги по сниженным ценам.</p>
            </div>
        </div>
        <div class="promotion-card">
            <img src="images/promo2.png" alt="Скидка на канцелярские товары" style="max-width: 200px; max-height: 200px;">
            <div class="promotion-info">
                <h3 id="promo2-title">Скидка 15% на канцелярские товары</h3>
                <p id="promo2-content">При покупке на сумму от 5000 тенге. Полный ассортимент товаров доступен на сайте.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="featured-products">
    <h2 id="featured-products-header">Популярные товары</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="images/product1.png" alt="Книги" style="max-width: 200px; max-height: 200px;">
            <div class="product-info">
                <h3 id="product1-title">Книги</h3>
                <p id="product1-content">Книги - это источник знаний, вдохновения и удовольствия. Наш магазин предлагает широкий ассортимент книг на самые разнообразные темы: от литературных шедевров до научной литературы. Вы сможете найти здесь как классические произведения, так и новинки от популярных авторов. Разнообразие жанров и тематик позволит выбрать именно то, что подойдет для вашего вкуса и интересов.</p>
                <a href="catalog.php" class="product-link" id="product1-link">К покупкам</a>
            </div>
        </div>
        <div class="product-card">
            <img src="images/product2.png" alt="Тетради" style="max-width: 200px; max-height: 200px;">
            <div class="product-info">
                <h3 id="product2-title">Тетради</h3>
                <p id="product2-content">Тетради - это незаменимый аксессуар для учебы, работы и записей. В нашем магазине вы найдете широкий выбор тетрадей различных форматов, размеров и дизайнов. Независимо от того, нужны вам тетради для школы, университета, офиса или личных записей, у нас вы найдете идеальный вариант. Наши тетради отличаются высоким качеством бумаги, удобством использования и привлекательным дизайном, который подчеркнет ваш стиль.</p>
                <a href="catalog.php" class="product-link" id="product2-link">К покупкам</a>
            </div>
        </div>
    </div>
</section>

<!-- Latest News -->
<section class="latest-news">
    <h2 id="latest-news-header">Последние новости</h2>
    <div class="news-grid">
        <div class="news-card">
            <img src="images/news1.png" alt="News 1" style="max-width: 200px; max-height: 200px;">
            <div class="news-info">
                <h3 id="news1-title">Пополнение товара</h3>
                <p id="news1-content">У нас появилось множество новых товаров! Приглашаем вас ознакомиться с нашими последними поступлениями и выбрать то, что подходит именно вам. Будьте в курсе всех новинок и обновлений в нашем магазине.</p>
            </div>
        </div>
        <div class="news-card">
            <img src="images/news2.png" alt="News 2" style="max-width: 200px; max-height: 200px;">
            <div class="news-info">
                <h3 id="news2-title">Улучшена производительность</h3>
                <p id="news2-content">Наш магазин рад сообщить, что мы значительно улучшили производительность нашего веб-сайта. Теперь вы можете с легкостью находить и приобретать нужные товары быстрее и удобнее. Благодарим за ваше терпение и надеемся на ваше дальнейшее удовлетворение нашим обновленным сервисом.</p>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews -->
<section class="customer-reviews">
    <h2 id="customer-reviews-header">Отзывы клиентов</h2>
    <div class="reviews-grid">
        <div class="review-card">
            <h3 id="review1-author">Алексей Иванов</h3>
            <p id="review1-content">Отличный магазин! Быстрая доставка и высокое качество товаров. Обязательно закажу ещё раз.</p>
        </div>
        <div class="review-card">
            <h3 id="review2-author">Мария Петрова</h3>
            <p id="review2-content">Большой выбор книг и канцелярских товаров. Цены очень радуют, а обслуживание на высшем уровне!</p>
        </div>
    </div>
</section>

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
            "welcome-header": { "ru": "Добро пожаловать в магазин \"Nurkanov\"", "kz": "«Nurkanov» дүкеніне қош келдіңіздер" },
            "welcome-message": { "ru": "Лучшие печатные издания для вас!", "kz": "Сіздер үшін ең жақсы басылымдар!" },
            "shop-now": { "ru": "Перейти к покупкам", "kz": "Сауда жасауға көшу" },
            "about-us-header": { "ru": "О нас", "kz": "Біз туралы" },
            "about-us-content": { "ru": "Интернет-магазин \"Nurkanov\" предлагает широкий ассортимент печатной продукции, включая книги, тетради, канцелярские товары и многое другое. Мы стремимся предоставить нашим клиентам высококачественные товары по доступным ценам и гарантируем быструю доставку и отличное обслуживание.", "kz": "«Nurkanov» интернет-дүкені кітаптар, дәптерлер, кеңсе тауарлары және тағы басқалар сияқты кең ассортименттегі баспа өнімдерін ұсынады. Біз клиенттерімізге қолжетімді бағамен жоғары сапалы өнімдерді ұсынуға және жылдам жеткізу мен тамаша қызмет көрсетуге тырысамыз." },
            "promotions-header": { "ru": "Акции и скидки", "kz": "Акциялар мен жеңілдіктер" },
            "promo1-title": { "ru": "Скидка 15% на все книги!", "kz": "Барлық кітаптарға 15% жеңілдік!" },
            "promo1-content": { "ru": "Только до конца месяца! Спешите приобрести любимые книги по сниженным ценам.", "kz": "Тек айдың соңына дейін! Сүйікті кітаптарыңызды төмендетілген бағамен сатып алыңыз." },
            "promo2-title": { "ru": "Скидка 15% на канцелярские товары", "kz": "Кеңсе тауарларына 15% жеңілдік" },
            "promo2-content": { "ru": "При покупке на сумму от 5000 тенге. Полный ассортимент товаров доступен на сайте.", "kz": "5000 теңгеден астам сатып алғанда. Барлық тауарлар ассортименті сайтта қолжетімді." },
            "featured-products-header": { "ru": "Популярные товары", "kz": "Танымал тауарлар" },
            "product1-title": { "ru": "Книги", "kz": "Кітаптар" },
            "product1-content": { "ru": "Книги - это источник знаний, вдохновения и удовольствия. Наш магазин предлагает широкий ассортимент книг на самые разнообразные темы: от литературных шедевров до научной литературы. Вы сможете найти здесь как классические произведения, так и новинки от популярных авторов. Разнообразие жанров и тематик позволит выбрать именно то, что подойдет для вашего вкуса и интересов.", "kz": "Кітаптар - бұл білімнің, шабыттың және ләззаттың көзі. Біздің дүкеніміз әр түрлі тақырыптардағы кітаптардың кең ассортиментін ұсынады: әдеби шедеврлерден бастап ғылыми әдебиетке дейін. Мұнда сіз классикалық туындыларды да, танымал авторлардың жаңалықтарын да таба аласыз. Жанрлар мен тақырыптардың әртүрлілігі сіздің талғамыңыз бен қызығушылықтарыңызға сәйкес келетін нәрсені таңдауға мүмкіндік береді." },
            "product1-link": { "ru": "К покупкам", "kz": "Сауда жасау" },
            "product2-title": { "ru": "Тетради", "kz": "Дәптерлер" },
            "product2-content": { "ru": "Тетради - это незаменимый аксессуар для учебы, работы и записей. В нашем магазине вы найдете широкий выбор тетрадей различных форматов, размеров и дизайнов. Независимо от того, нужны вам тетради для школы, университета, офиса или личных записей, у нас вы найдете идеальный вариант. Наши тетради отличаются высоким качеством бумаги, удобством использования и привлекательным дизайном, который подчеркнет ваш стиль.", "kz": "Дәптерлер - бұл оқу, жұмыс және жазбалар үшін таптырмас аксессуар. Біздің дүкенде сіз әртүрлі форматтардағы, өлшемдердегі және дизайндағы дәптерлердің кең таңдауын таба аласыз. Сізге мектеп, университет, кеңсе немесе жеке жазбаларға арналған дәптерлер қажет пе, бізде сіз тамаша нұсқаны таба аласыз. Біздің дәптерлер жоғары сапалы қағазмен, пайдаланудың ыңғайлылығымен және сіздің стиліңізді айқындайтын тартымды дизайнымен ерекшеленеді." },
            "product2-link": { "ru": "К покупкам", "kz": "Сауда жасау" },
            "latest-news-header": { "ru": "Последние новости", "kz": "Соңғы жаңалықтар" },
            "news1-title": { "ru": "Пополнение товара", "kz": "Тауарлардың толықтырылуы" },
            "news1-content": { "ru": "У нас появилось множество новых товаров! Приглашаем вас ознакомиться с нашими последними поступлениями и выбрать то, что подходит именно вам. Будьте в курсе всех новинок и обновлений в нашем магазине.", "kz": "Бізде көптеген жаңа тауарлар пайда болды! Біздің соңғы келген заттармен танысып, өзіңізге қажеттісін таңдауға шақырамыз. Біздің дүкендегі барлық жаңалықтар мен жаңартулардан хабардар болыңыз." },
            "news2-title": { "ru": "Улучшена производительность", "kz": "Өнімділік жақсарды" },
            "news2-content": { "ru": "Наш магазин рад сообщить, что мы значительно улучшили производительность нашего веб-сайта. Теперь вы можете с легкостью находить и приобретать нужные товары быстрее и удобнее. Благодарим за ваше терпение и надеемся на ваше дальнейшее удовлетворение нашим обновленным сервисом.", "kz": "Біздің дүкеніміз веб-сайтымыздың өнімділігін айтарлықтай жақсартқанымызды хабарлауға қуанышты. Енді сіз қажетті тауарларды оңай тауып, сатып ала аласыз. Сіздің шыдамдылығыңыз үшін рахмет және біздің жаңартылған қызметімізге қанағаттанасыз деп үміттенеміз." },
            "customer-reviews-header": { "ru": "Отзывы клиентов", "kz": "Клиенттердің пікірлері" },
            "review1-author": { "ru": "Алексей Иванов", "kz": "Алексей Иванов" },
            "review1-content": { "ru": "Отличный магазин! Быстрая доставка и высокое качество товаров. Обязательно закажу ещё раз.", "kz": "Керемет дүкен! Жылдам жеткізу және жоғары сапалы тауарлар. Әлі де тапсырыс беремін." },
            "review2-author": { "ru": "Мария Петрова", "kz": "Мария Петрова" },
            "review2-content": { "ru": "Большой выбор книг и канцелярских товаров. Цены очень радуют, а обслуживание на высшем уровне!", "kz": "Кітаптар мен кеңсе тауарларының кең таңдауы. Бағалар өте қолайлы, ал қызмет көрсету ең жоғары деңгейде!" },
            "contacts-header": { "ru": "Контакты", "kz": "Байланыстар" },
            "phone": { "ru": "Телефон: +7 (XXX) XXX-XX-XX", "kz": "Телефон: +7 (XXX) XXX-XX-XX" },
            "email": { "ru": "Электронная почта: nurkanovshop@gmail.com", "kz": "Электрондық пошта: nurkanovshop@gmail.com" },
            "address": { "ru": "Адрес: г. Лисаковск, ул. Сатпаева, д. 123, офис 456", "kz": "Мекенжайы: Лисаковск қ., Сәтпаев к-сі, 123-үй, 456-кеңсе" },
            "info-header": { "ru": "Информация", "kz": "Ақпарат" },
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
    function searchInCatalog() {
        // Получаем значение из поля ввода поиска
        const searchTerm = document.getElementById("searchInput").value;
        // Перенаправляем пользователя на страницу catalog.php с параметром поискового запроса
        window.location.href = "catalog.php?search=" + encodeURIComponent(searchTerm);
    }
</script>
</body>
</html>
