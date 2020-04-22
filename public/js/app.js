/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $('.type-realty-item').on('click', function () {
    $('.type-realty-item').each(function () {
      $(this).removeClass('type-realty-item_active');
    });
    $(this).toggleClass('type-realty-item_active');
  });
  $('.numbers-room-item').on('click', function () {
    $('.numbers-room-item').each(function () {
      $(this).removeClass('numbers-room-item_active');
    });
    $(this).toggleClass('numbers-room-item_active');
  });
  $('.wall-materials-item').on('click', function () {
    $('.wall-materials-item').each(function () {
      $(this).removeClass('wall-materials-item_active');
    });
    $(this).toggleClass('wall-materials-item_active');
  });
  $('.rol-up').on('click', function () {
    if ($('.filter-body').is(':visible')) {
      $('.filter-body').hide();
      $(this).text('Развернуть фильтр');
    } else {
      $('.filter-body').show();
      $(this).text('Свернуть');
    }
  });
  $("#street").select2({
    placeholder: "Выберите улицу",
    width: 320
  });
  $("#district").select2({
    placeholder: "Выберите район",
    width: 265
  });
  var advancedFilter = $('.advanced-filter');
  $('.advanced-filter-btn').on('click', function () {
    if (advancedFilter.is(':visible')) {
      advancedFilter.hide();
      $(this).children('img').attr('src', '/images/icons/plus.png');
    } else {
      advancedFilter.show();
      $(this).children('img').attr('src', '/images/icons/minus.png');
    }
  });
  var priceRange = $('#price-range');
  var areaRange = $('#area-range');
  priceRange.slider({
    animate: "slow",
    range: true,
    values: getPrice(),
    min: getMinPrice(),
    max: getMaxPrice(),
    slide: function slide(event, ui) {
      $('#from-price').val(ui.values[0]);
      $('#before-price').val(ui.values[1]);
    },
    stop: function stop(event, ui) {
      $('.filter-form').trigger('change');
    }
  });
  areaRange.slider({
    animate: "slow",
    range: true,
    values: getArea(),
    min: getMinArea(),
    max: getMaxArea(),
    slide: function slide(event, ui) {
      $('#from-area').val(ui.values[0]);
      $('#before-area').val(ui.values[1]);
    },
    stop: function stop(event, ui) {
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
    return [$('#from-price').val(), $('#before-price').val()];
  }

  ;

  function getArea() {
    return [$('#from-area').val(), $('#before-area').val()];
  }

  ;
  $('.input-range').on('input', function () {
    $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''));
  });
  $('#from-price').on('change', function () {
    var val = $(this).val();

    if (val < getMinPrice()) {
      $(this).val(getMinPrice());
    }

    if (val > priceRange.slider("values", 1)) {
      $(this).val(priceRange.slider("values", 1));
      $(this).trigger('input');
    }
  });
  $('#before-price').on('change', function () {
    var val = $(this).val();

    if (val < priceRange.slider("values", 0)) {
      $(this).val(priceRange.slider("values", 0));
    }

    if (val > getMaxPrice()) {
      $(this).val(getMaxPrice());
    }
  });
  $('#from-area').on('change', function () {
    var val = $(this).val();

    if (val < getMinArea()) {
      $(this).val(getMinArea());
    }

    if (val > areaRange.slider("values", 1)) {
      $(this).val(areaRange.slider("values", 1));
    }
  });
  $('#before-area').on('change', function () {
    var val = $(this).val();

    if (val < areaRange.slider("values", 0)) {
      $(this).val(areaRange.slider("values", 0));
    }

    if (val > getMaxArea()) {
      $(this).val(getMaxArea());
    }
  });
  $('#from-price').on('input', function () {
    var val = $(this).val();

    if (val < priceRange.slider("values", 0)) {
      priceRange.slider("values", 0, $(this).val());
    } else {
      priceRange.slider("values", 0, priceRange.slider("values", 1));
    }
  });
  $('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: $('.prev'),
    nextArrow: $('.next')
  });
  $('.rating-item').on('click', function () {
    $('.rating-item').each(function () {
      $(this).removeClass('rating-item_active');
    });
    $(this).toggleClass('rating-item_active');
    changeSmileRating($(this).data('smile'));
  });

  function changeSmileRating(smileId) {
    $('.rating-item_active > .smile').css('background', "url(/images/smile-feedback/".concat(smileId, ".png)"));
  }

  $(".cross").on("click", function () {
    $('.popup-wrap').hide();
  }); // 178 конечная точка ползунка

  $(".draggable").draggable({
    axis: "x",
    containment: ".area-drag",
    scroll: false,
    drag: function drag(event, ui) {
      var position = ui.position.left;
      console.log(position);

      if (position >= 32) {
        $('.drag-arrow').hide();
      }

      if (ui.position.left === 178) {
        $(".draggable").draggable("disable");
        $("#confirm").prop('checked', true);
      }
    },
    revert: function revert() {
      var position = $(this).draggable('instance').position.left;

      if (position < 178) {
        setTimeout(function () {
          $('.drag-arrow').show();
        }, 501);
        return true;
      }
    }
  });
  $(".popup-open").on("click", function () {
    $('.popup-wrap').show();
  });
  $('.popup-bg').on("click", function () {
    $('.popup-wrap').hide();
  }); // Валидация формы

  $("#phone").mask("+7(999)999-99-99");
  $('.form-btn-feedback').on('click', function (e) {
    e.preventDefault();

    if ($('#confirm').prop('checked')) {
      $('form.popup').submit();
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
      success: function success(e) {
        $('.numbers-object').text(e.slice(-1) == '1' ? e + " объект" : e + " объектов");
      }
    });
  });
});

/***/ }),

/***/ "./resources/sass/app.sass":
/*!*********************************!*\
  !*** ./resources/sass/app.sass ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.sass ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/magneex/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /var/www/magneex/resources/sass/app.sass */"./resources/sass/app.sass");


/***/ })

/******/ });