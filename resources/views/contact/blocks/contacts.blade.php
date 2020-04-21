<section class="contact-section">
    <div class="container">
        {{ Breadcrumbs::render('contact') }}

        <div class="title-section">
            Контакная информация
        </div>
        <div class="contact-info-wrap">
            <div class="contact-info">
                <div class="address">
                    <div class="icon">
                        <img src="{{ asset('images/icons/contact-geo.png') }}" alt="">
                    </div>
                    <a href="" class="blue-link">г. Абакан, ул. Чертыгашева, 102</a>
                </div>
                <div class="phone">
                    <div class="icon">
                        <img src="{{ asset('images/icons/contact-phone.png') }}" alt="">
                    </div>
                    <a href="tel:+73902305699" class="link-as-text">+7 (3902) 30 - 56 - 99</a>, <a href="tel:+73902305277" class="link-as-text">+7 (3902) 305 - 277</a>
                </div>
                <div class="email">
                    <div class="icon">
                        <img src="{{ asset('images/icons/contact-letter.png') }}" alt="">
                    </div>
                    <a href="mailto:nika261632@yandex.ru" class="link-as-text">nika261632@yandex.ru</a>
                </div>
            </div>
            <div class="contact-info">
                <div class="address">
                    <div class="icon">
                        <img src="{{ asset('images/icons/contact-geo.png') }}" alt="">
                    </div>
                    <a href="" class="blue-link">г. Абакан, ул. Тельмана, 102</a>
                </div>
                <div class="phone">
                    <div class="icon">
                        <img src="{{ asset('images/icons/contact-phone.png') }}" alt="">
                    </div>
                    <a href="tel:261632" class="link-as-text">26-16-32</a>, <a href="tel:305277" class="link-as-text">305-277</a>, <a href="tel:89024671632" class="link-as-text">8-902-467-1632</a>
                </div>
                <div class="email">
                    <div class="icon">
                        <img src="{{ asset('images/icons/contact-letter.png') }}" alt="">
                    </div>
                    <a href="mailto:nika261632@yandex.ru" class="link-as-text">nika261632@yandex.ru</a>
                </div>
            </div>
        </div>

        <a href="mailto:nika261632@yandex.ru" class="btn contact-btn">
            <img src="{{ asset('images/icons/message.png') }}" alt="">
            Написать письмо
        </a>
    </div>
</section>
