$(function () {

    $('.type-realty-item').on('click', function () {
        $('.type-realty-item').each(function () {
            $(this).removeClass('type-realty-item_active');
        })
        $(this).toggleClass('type-realty-item_active');
    })

    $('.numbers-room-item').on('click', function () {
        $('.numbers-room-item').each(function () {
            $(this).removeClass('numbers-room-item_active');
        })
        $(this).toggleClass('numbers-room-item_active');
    })

    $('.wall-materials-item').on('click', function () {
        $('.wall-materials-item').each(function () {
            $(this).removeClass('wall-materials-item_active');
        })
        $(this).toggleClass('wall-materials-item_active');
    })

    $('.rol-up').on('click', function () {
        if($('.filter-body').is(':visible')) {
            $('.filter-body').hide();
            $(this).text('Развернуть фильтр')
        } else {
            $('.filter-body').show();
            $(this).text('Свернуть')
        }
    });

    $("#street").select2({
        placeholder: "Выберите улицу",
        width: 320,
    });

    $("#district").select2({
        placeholder: "Выберите район",
        width: 265,
    });

    let advancedFilter = $('.advanced-filter');

    $('.advanced-filter-btn').on('click', function () {
        if(advancedFilter.is(':visible')) {
            advancedFilter.hide();
            $(this).children('img').attr('src', '/images/icons/plus.png');
        } else {
            advancedFilter.show();
            $(this).children('img').attr('src', '/images/icons/minus.png');
        }
    })

    let priceRange = $('#price-range');
    let areaRange = $('#area-range');

    priceRange.slider({
        animate: "slow",
        range: true,
        values: getPrice(),
        min: getMinPrice(),
        max: getMaxPrice(),
        slide: function (event, ui) {
            $('#from-price').val(ui.values[0]);
            $('#before-price').val(ui.values[1]);
        },
        stop: function (event, ui) {
            $('.filter-form').trigger('change');
        }
    });

    areaRange.slider({
        animate: "slow",
        range: true,
        values: getArea(),
        min: getMinArea(),
        max: getMaxArea(),
        slide: function (event, ui) {
            $('#from-area').val(ui.values[0]);
            $('#before-area').val(ui.values[1]);
        },
        stop: function (event, ui) {
            $('.filter-form').trigger('change');
        }
    });

    function getMaxPrice() {
        return $('.price-max').data('max');
    }

    function getMinPrice() {
        return $('.price-min').data('min');
    }

    function getMaxArea() {
        return $('.area-max').data('max');
    }

    function getMinArea() {
        return $('.area-min').data('min');
    }

    function getPrice() {
       return [
           $('#from-price').val(),
           $('#before-price').val(),
       ]
    };

    function getArea() {
       return [
           $('#from-area').val(),
           $('#before-area').val(),
       ]
    };

    $('.input-range').on('input', function () {
        $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''));
    });

    $('#from-price').on('change', function () {
        let val = $(this).val();

        if (val < getMinPrice()) {
            $(this).val(getMinPrice())
        }
        if(val > priceRange.slider("values", 1)) {
            $(this).val(priceRange.slider("values", 1));
            $(this).trigger('input');
        }
    });

    $('#before-price').on('change', function () {
        let val = $(this).val();

        if (val < priceRange.slider("values", 0)) {
            $(this).val(priceRange.slider("values", 0))
        }
        if(val > getMaxPrice()) {
            $(this).val(getMaxPrice());

        }
    });

    $('#from-area').on('change', function () {
        let val = $(this).val();

        if (val < getMinArea()) {
            $(this).val(getMinArea())
        }
        if(val > areaRange.slider("values", 1)) {
            $(this).val(areaRange.slider("values", 1));
        }
    });

    $('#before-area').on('change', function () {
        let val = $(this).val();

        if (val < areaRange.slider("values", 0)) {
            $(this).val(areaRange.slider("values", 0))
        }
        if(val > getMaxArea()) {
            $(this).val(getMaxArea());
        }
    });

    $('#from-price').on('input', function () {
        let val = $(this).val();

        if(val < priceRange.slider("values", 0)) {
            priceRange.slider("values", 0, $(this).val())
        } else {
            priceRange.slider("values", 0, priceRange.slider("values", 1))
        }
    });

    $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
    })

    $('.rating-item').on('click', function () {
        $('.rating-item').each(function () {
            $(this).removeClass('rating-item_active');
        })
        $(this).toggleClass('rating-item_active');
        changeSmileRating($(this).data('smile'))
    });

    function changeSmileRating(smileId) {
        $('.rating-item_active > .smile').css('background', `url(/images/smile-feedback/${smileId}.png)`)
    }

    $(".cross").on("click", function () {
        $('.popup-wrap').hide();
    });

    // 178 конечная точка ползунка
    $( ".draggable" ).draggable({
        axis : "x",
        containment: ".area-drag",
        scroll: false,
        drag: function (event, ui) {
            let position = ui.position.left;
            console.log(position);
            if(position >= 32) {
                $('.drag-arrow').hide();
            }
            if(ui.position.left === 178) {
                $(".draggable").draggable("disable");
                $("#confirm").prop('checked', true);
            }
        },
        revert: function () {
            let position = $(this).draggable('instance').position.left;
            if(position < 178) {
                setTimeout(() => {
                    $('.drag-arrow').show();
                }, 501);
                return true;
            }
        },
    });

    $(".popup-open").on("click", function () {
        $('.popup-wrap').show();
    });

    $('.popup-bg').on("click", function () {
        $('.popup-wrap').hide();

    });

    // Валидация формы
    $("#phone").mask("+7(999)999-99-99");

    $('.form-btn-feedback').on('click', function (e) {
        e.preventDefault();
        if($('#confirm').prop('checked')) {
            $('form.popup').submit()
        }
    });


    $('.filter-form').on('change', function () {
        console.log('ok');
        $.ajax({
            url: '/ajaxLoadContRealty',
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $(this).serialize(),
            success: function (e) {
                $('.numbers-object').text(e.slice(-1) == '1' ?  e +  " объект" : e +  " объектов")
            }
        })
    })
});
