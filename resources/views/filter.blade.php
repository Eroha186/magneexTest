<section id="filter-section">
    <div class="container">
        <div class="section-title">
            <span>Наша задача </span>
            <span>Решить ваш жилищный вопрос</span>
        </div>
        <div class="tab-items">
            <div class="tab-item tab-item_active">Квартира</div>
            <div class="tab-item">Новостройка</div>
            <div class="tab-item">Аренда жилья</div>
            <div class="tab-item">Дома / Коттеджи</div>
            <div class="tab-item">Коммреческая недвижимость</div>
        </div>
        <form class="filter">
            <div class="filter-header">
                <div class="all-object">
                    Всего объектов: <span>45</span>
                </div>
                <div class="rol-up black-link">
                    Свернуть
                </div>
            </div>
            <div class="wrap-filters">
                <div class="numbers-room">
                    <div class="filter-title">Количество комнат</div>
                    <div class="numbers-room-items">
                        <label for="1" class="numbers-room-item">1</label>
                        <input type="radio" id="1" name="numbers-room" value="1" hidden>
                        <label for="2" class="numbers-room-item numbers-room-item_active">2</label>
                        <input type="radio" id="2" name="numbers-room" value="2" hidden checked>
                        <label for="3" class="numbers-room-item">3</label>
                        <input type="radio" id="3" name="numbers-room" value="3" hidden>
                        <label for="4" class="numbers-room-item">4+</label>
                        <input type="radio" id="4" name="numbers-room" value="4" hidden>
                    </div>
                </div>
                <div class="street">
                    <label class="filter-title" for="street">Выбрать улицу</label>
                    <div class="wrap-input-street">
                        <input type="text" id="street" required placeholder="Выбирите улицу">
                    </div>
                </div>
                <div class="district">
                    <label class="filter-title" for="district">Выбрать район</label>
                    <div class="wrap-input-district">
                        <input type="text" id="district" required placeholder="Выбирите район">
                    </div>
                </div>
            </div>
            <div class="wrap-filters">
                <div class="wall-materials">
                    <div class="filter-title">Материал стен</div>
                    <div class="wall-materials-items">
                        <label for="1" class="wall-materials-item">
                            <img src="{{ asset('images/icons/wood.png') }}" alt="">
                            Дерево
                        </label>
                        <input type="radio" id="1" name="wall-material" value="1" hidden>
                        <label for="2" class="wall-materials-item">
                            <img src="{{ asset('images/icons/ferroconcrete.png') }}" alt="">
                            Железобетон
                        </label>
                        <input type="radio" id="2" name="wall-material" value="2" hidden>
                        <label for="3" class="wall-materials-item">
                            <img src="{{ asset('images/icons/brick.png') }}" alt="">
                            Кирпич
                        </label>
                        <input type="radio" id="3" name="wall-material" value="3" hidden>
                        <label for="4" class="wall-materials-item">
                            <img src="{{ asset('images/icons/monolith.png') }}" alt="">
                            Монолит
                        </label>
                        <input type="radio" id="4" name="wall-material" value="4" hidden checked="checked">
                        <label for="4" class="wall-materials-item wall-materials-item_active">
                            <img src="{{ asset('images/icons/panel.png') }}" alt="">
                            Панель
                        </label>
                        <input type="radio" id="4" name="wall-material" value="5" hidden>
                        <label for="4" class="wall-materials-item">
                            <img src="{{ asset('images/icons/slag_concrete.png') }}" alt="">
                            Шлакобетон
                        </label>
                        <input type="radio" id="4" name="wall-material" value="6" hidden>
                    </div>
                </div>
            </div>
            <div class="advanced-filter">
                <div class="price">
                    <div class="price-wrap">
                        <div class="price-title filter-title">Цена (тыс. руб.)</div>
                        <div class="price-min" data-min="1000">
                            <label for="from-price">от</label>
                            <input type="text" name="price-min-input" id="from-price" value="1000" class="price-min-input input-range">
                        </div>
                        <div class="price-max" data-max="50000">
                            <label for="before-price">до</label>
                            <input type="text" name="price-max-input" id="before-price" value="6000" class="price-max-input input-range">
                        </div>
                    </div>
                    <div id="price-range"></div>
                </div>
                <div class="area">
                    <div class="area-wrap">
                        <div class="area-title filter-title">Площадь (м <sup>2</sup>)</div>
                        <div class="area-min" data-min = "10">
                            <label for="from-area">от</label>
                            <input type="text" name="area-min-input" id="from-area" value="10" class="area-min-input input-range">
                        </div>
                        <div class="area-max" data-max="300">
                            <label for="before-price">до</label>
                            <input type="text" name="area-max-input" id="before-area" value="90" class="area-max-input input-range">
                        </div>
                    </div>
                    <div id="area-range"></div>
                </div>
            </div>
            <div class="filter-bottom">
                <div class="advanced-filter-btn">
                    <img src="{{ asset('/images/icons/plus.png') }}" class="">
                    <span>Расширенный поиск</span>
                </div>
                <button class="filter-btn btn">Показать <span>45 объектов</span></button>
            </div>
        </form>
    </div>
</section>
