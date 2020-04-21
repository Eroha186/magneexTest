<div class="popup-wrap">
    <form class="popup">
        <div class="title">
            Отзывы и предложения
            <span class="cross">&#10005;</span>
        </div>
        <p>Вы можете оставить свой отзыв о качестве обслуживания, высказать лыбые предложения и пожелания по улучшению
            клиентского сервиса.</p>
        <p>Мы стараемся обеспечить максимально высокий уровень сервиса для наших клиентов, поэтому Ваше мнение очень
            важно для нас.
            <br>Спасибо!
        </p>
        <div class="form-groups">
            <div class="form-group">
                <label for="name">Представтесть пожалуйста <sup>*</sup> </label>
                <input type="text" required id="name" name="name">
            </div>
            <div class="form-group">
                <label for="phone">Контактный телефон</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="email">Электронная почта <sup>*</sup> </label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Сообщение <sup>*</sup> </label>
                <textarea name="message" id="message" rows="3" required></textarea>
            </div>
            <div class="form-group rating">
                <label>Оценка услуг <sup>*</sup> </label>
                <div class="ratings-group">
                    <div class="rating-list">
                        <label for="rating-1" class="rating-item" data-smile="1">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            1
                        </label>
                        <label for="rating-2" class="rating-item" data-smile="2">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            2
                        </label>
                        <label for="rating-3" class="rating-item  rating-item_active" data-smile="3">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            3
                        </label>
                        <label for="rating-4" class="rating-item" data-smile="4">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            4
                        </label>
                        <label for="rating-5" class="rating-item" data-smile="5">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            5
                        </label>
                        <label for="rating-6" class="rating-item" data-smile="6">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            6
                        </label>
                        <label for="rating-7" class="rating-item" data-smile="7">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            7
                        </label>
                        <label for="rating-8" class="rating-item" data-smile="8">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            8
                        </label>
                        <label for="rating-9" class="rating-item" data-smile="9">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            9
                        </label>
                        <label for="rating-10" class="rating-item" data-smile="10">
                            <span class="smile"></span>
                            <span class="dot"></span>
                            10
                        </label>
                    </div>

                    <input type="radio" id="rating-1" name="rating" value="1" hidden>
                    <input type="radio" id="rating-2" name="rating" value="2" hidden>
                    <input type="radio" id="rating-3" name="rating" value="3" hidden>
                    <input type="radio" id="rating-4" name="rating" value="4" hidden>
                    <input type="radio" id="rating-5" name="rating" value="5" hidden>
                    <input type="radio" id="rating-6" name="rating" value="6" hidden>
                    <input type="radio" id="rating-7" name="rating" value="7" hidden>
                    <input type="radio" id="rating-8" name="rating" value="8" hidden>
                    <input type="radio" id="rating-9" name="rating" value="9" hidden>
                    <input type="radio" id="rating-10" name="rating" value="10" hidden>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Проверка <sup>*</sup> </label>
                <div class="area-drag">
                    <img src="{{ asset('/images/icons/drag-icon.png') }}" alt="" class="draggable">
                    <img src="{{ asset('/images/icons/drag-arrow.png') }}" alt="" class="drag-arrow">
                </div>
                <input type="checkbox" name="confirm" id="confirm" hidden>
            </div>
            <div class="help-drag">перетащите ползунок вправо</div>
        </div>
        <button class="btn form-btn">
            <img src="{{ asset('images/icons/message-from.png') }}" alt="">
            Отправить
        </button>
    </form>
</div>
