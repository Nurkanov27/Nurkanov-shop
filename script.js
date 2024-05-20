let language = "ru"; // по умолчанию устанавливаем русский язык

function toggleLanguage() {
    language = language === "ru" ? "kazakh" : "ru"; // переключаем язык
    translate(); // переводим элементы на странице
}

function translate() {
    fetch(`languages/${language}.json`)
        .then(response => response.json())
        .then(data => {
            // переводим тексты в шапке
            document.getElementById('home-link').textContent = data['home'];
            document.getElementById('catalog-link').textContent = data['catalog'];
            document.getElementById('account-link').textContent = data['account'];
            document.getElementById('basket-link').textContent = data['basket'];
            document.getElementById('joinreg-link').textContent = data['joinreg'];
            document.getElementById('searchInput').placeholder = data['searchPlaceholder'];
            document.getElementById('welcome-heading').textContent = data['welcome'];
            document.getElementById('best-products').textContent = data['bestProducts'];
            document.getElementById('about-us-heading').textContent = data['aboutUs'];
            document.getElementById('promotions-heading').textContent = data['promotions'];
            document.getElementById('featured-products-heading').textContent = data['featuredProducts'];
            document.getElementById('latest-news-heading').textContent = data['latestNews'];
            document.getElementById('customer-reviews-heading').textContent = data['customerReviews'];
            document.getElementById('contacts-header').textContent = data['contacts'];
            document.getElementById('phone').textContent = data['phone'];
            document.getElementById('email').textContent = data['email'];
            document.getElementById('address').textContent = data['address'];
            document.getElementById('info-header').textContent = data['info'];
            document.getElementById('support-header').textContent = data['support'];
            document.getElementById('faq-link').textContent = data['faq'];
            document.getElementById('contact-link').textContent = data['contact'];
            document.getElementById('support-link').textContent = data['help'];
            document.getElementById('copyright-text').textContent = data['copyright'];
        })
        .catch(error => console.error('Translation error:', error));
}

// переводим при загрузке страницы
translate();
