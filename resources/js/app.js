$(function () {
    $('.tab-item').on('click', function () {
        $('.tab-item').each(function () {
            $(this).removeClass('tab-item_active');
        })
        $(this).toggleClass('tab-item_active');
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
    })

    let advancedFilter = $('.advanced-filter');

    advancedFilter.hide();

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

    $('form.filter').on('submit', function (e) {
        e.preventDefault();
        console.log($(this).serializeArray());
    })

    $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
    })
});
