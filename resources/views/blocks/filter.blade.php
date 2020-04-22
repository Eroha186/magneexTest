<section id="filter-section">
    <div class="container">
        <div class="section-title">
            <span>Наша задача </span>
            <span>Решить ваш жилищный вопрос</span>
        </div>
        <form class="filter-form" action="{{ route('filter-realty') }}" method="POST">
            {{ csrf_field() }}
            <div class="type-realty-items">
                <label for="type-realty-1" class="type-realty-item type-realty-item_active">Квартира</label>
                <label for="type-realty-2" class="type-realty-item">Новостройка</label>
                <label for="type-realty-3" class="type-realty-item">Аренда жилья</label>
                <label for="type-realty-4" class="type-realty-item">Дома / Коттеджи</label>
                <label for="type-realty-5" class="type-realty-item">Коммреческая недвижимость</label>
                <input type="radio" id="type-realty-1" name="type-realty" value="1" hidden checked>
                <input type="radio" id="type-realty-2" name="type-realty" value="2" hidden>
                <input type="radio" id="type-realty-3" name="type-realty" value="3" hidden>
                <input type="radio" id="type-realty-4" name="type-realty" value="4" hidden>
                <input type="radio" id="type-realty-5" name="type-realty" value="5" hidden>
            </div>
           <div class="filter">
               <div class="filter-header">
                   <div class="all-object">
                       Всего объектов: <span>{{ $realtyAll }}</span>
                   </div>
                   <div class="rol-up black-link">
                       {{ isset($hide) ? "Развернуть фильтр" : "Свернуть" }}
                   </div>
               </div>
               <div class="filter-body" {{ isset($hide) ? 'style=display:none' : '' }}>
                   <div class="wrap-filters">
                       <div class="numbers-room">
                           <div class="filter-title">Количество комнат</div>
                           <div class="numbers-room-items">
                               <label for="numbers-room-1" class="numbers-room-item">1</label>
                               <input type="radio" id="numbers-room-1" name="numbers-room" value="1" hidden>
                               <label for="numbers-room-2" class="numbers-room-item numbers-room-item_active">2</label>
                               <input type="radio" id="numbers-room-2" name="numbers-room" value="2" hidden checked>
                               <label for="numbers-room-3" class="numbers-room-item">3</label>
                               <input type="radio" id="numbers-room-3" name="numbers-room" value="3" hidden>
                               <label for="numbers-room-4" class="numbers-room-item">4+</label>
                               <input type="radio" id="numbers-room-4" name="numbers-room" value="4" hidden>
                           </div>
                       </div>
                       <div class="street">
                           <label class="filter-title" for="street">Выбрать улицу</label>
                           <div class="wrap-input-street">
                               <select type="text" id="street" name="street" required>
                                   <option></option>
                                   @foreach($streets as $street)
                                       <option value="{{ $street->id }}">ул. {{ $street->name }}, {{ $street->number_house }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="district">
                           <label class="filter-title" for="district">Выбрать район</label>
                           <div class="wrap-input-district">
                               <select type="text" id="district" name="district" required>
                                   <option></option>
                                   @foreach($districts as $district)
                                       <option value="{{ $district->id }}">{{ $district->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                   </div>
                   <div class="wrap-filters">
                       <div class="wall-materials">
                           <div class="filter-title">Материал стен</div>
                           <div class="wall-materials-items">
                               <label for="wall-material-1" class="wall-materials-item">
                                   <img src="{{ asset('images/icons/wood.png') }}" alt="">
                                   Дерево
                               </label>
                               <input type="radio" id="wall-material-1" name="wall-material" value="1" hidden>
                               <label for="wall-material-2" class="wall-materials-item">
                                   <img src="{{ asset('images/icons/ferroconcrete.png') }}" alt="">
                                   Железобетон
                               </label>
                               <input type="radio" id="wall-material-2" name="wall-material" value="2" hidden>
                               <label for="wall-material-3" class="wall-materials-item">
                                   <img src="{{ asset('images/icons/brick.png') }}" alt="">
                                   Кирпич
                               </label>
                               <input type="radio" id="wall-material-3" name="wall-material" value="3" hidden>
                               <label for="wall-material-4" class="wall-materials-item">
                                   <img src="{{ asset('images/icons/monolith.png') }}" alt="">
                                   Монолит
                               </label>
                               <input type="radio" id="wall-material-4" name="wall-material" value="4" hidden checked="checked">
                               <label for="wall-material-5" class="wall-materials-item wall-materials-item_active">
                                   <img src="{{ asset('images/icons/panel.png') }}" alt="">
                                   Панель
                               </label>
                               <input type="radio" id="wall-material-5" name="wall-material" value="5" hidden>
                               <label for="wall-material-6" class="wall-materials-item">
                                   <img src="{{ asset('images/icons/slag_concrete.png') }}" alt="">
                                   Шлакобетон
                               </label>
                               <input type="radio" id="wall-material-6" name="wall-material" value="6" hidden>
                           </div>
                       </div>
                   </div>
                   <div class="advanced-filter" style="display: none">
                       <div class="price">
                           <div class="price-wrap">
                               <div class="price-title filter-title">Цена (тыс. руб.)</div>
                               <div class="price-min" data-min="0">
                                   <label for="from-price">от</label>
                                   <input type="text" name="price-min-input" id="from-price" value="1000000" class="price-min-input input-range">
                               </div>
                               <div class="price-max" data-max="10000000">
                                   <label for="before-price">до</label>
                                   <input type="text" name="price-max-input" id="before-price" value="3500000" class="price-max-input input-range">
                               </div>
                           </div>
                           <div id="price-range"></div>
                       </div>
                       <div class="area">
                           <div class="area-wrap">
                               <div class="area-title filter-title">Площадь (м <sup>2</sup>)</div>
                               <div class="area-min" data-min = "0">
                                   <label for="from-area">от</label>
                                   <input type="text" name="area-min-input" id="from-area" value="29" class="area-min-input input-range">
                               </div>
                               <div class="area-max" data-max="300">
                                   <label for="before-price">до</label>
                                   <input type="text" name="area-max-input" id="before-area" value="55" class="area-max-input input-range">
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
                       <button class="filter-btn btn">Показать <span class="numbers-object">{{ substr(count($realty), -1) == '1' ?  count($realty) . " объект" : count($realty) . " объектов"}}</span></button>
                   </div>
               </div>
           </div>
        </form>
    </div>
</section>
