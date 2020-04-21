<section class="news">
    <div class="container">
        <div class="title-section">
            <img src="{{ asset('images/icons/news.png') }}" alt="">
            Новости
        </div>
        <div class="wrap-topics">
            <ul class="topics-items">
                <li class="topics-item topics-item_active"><a href="#" class="black-link">Все события</a></li>
                <li class="topics-item"><a href="#" class="black-link">Новости компании</a></li>
                <li class="topics-item"><a href="#" class="black-link">Новости рынка</a></li>
                <li class="topics-item"><a href="#" class="black-link">Интервью</a></li>
                <li class="topics-item"><a href="#" class="black-link">Пресса о нас</a></li>
            </ul>
            <form class="subscribe-form">
                <input type="email" class="subscribe-form-input" placeholder="Введите Ваш email">
                <button class="btn form-btn">
                    <img src="{{ asset('images/icons/subscribe.png') }}" alt="">
                    Подписаться
                </button>
            </form>
        </div>
        <div class="news-list">
            <div class="news-list-item">
                <div class="topic news-company">
                    Новости комании
                </div>
                <div class="cover">
                    <img src="{{ asset('images/slider-city.jpg') }}" alt="">
                </div>
                <div class="date">
                    22 Июня 2015
                </div>
                <a href="#" class="title">
                    Тут заголовок определенной новости, в которой написано много всего интересного
                </a>
            </div>
            <div class="news-list-item">
                <div class="topic news-market">
                    Новости рынка
                </div>
                <div class="cover">
                    <img src="{{ asset('images/slider-city.jpg') }}" alt="">
                </div>
                <div class="date">
                    22 Июня 2015
                </div>
                <a href="#" class="title">
                    Тут заголовок определенной новости, в которой написано много всего интересного
                </a>
            </div>
            <div class="news-list-item">
                <div class="topic news-interview">
                    Интервью
                </div>
                <div class="cover">
                    <img src="{{ asset('images/slider-city.jpg') }}" alt="">
                </div>
                <div class="date">
                    22 Июня 2015
                </div>
                <a href="#" class="title">
                    Тут заголовок определенной новости, в которой написано много всего интересного
                </a>
            </div>
            <div class="news-list-item">
                <div class="topic news-about-us">
                    Пресса о нас
                </div>
                <div class="cover">
                    <img src="{{ asset('images/slider-city.jpg') }}" alt="">
                </div>
                <div class="date">
                    22 Июня 2015
                </div>
                <a href="#" class="title">
                    Тут заголовок определенной новости, в которой написано много всего интересного
                </a>
            </div>
        </div>
        <a href="" class="btn archive-btn">
            <img src="{{ asset('images/icons/archive.png') }}" alt="">
            Архив новостей
        </a>
    </div>
</section>
