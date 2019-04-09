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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/main.js":
/***/ (function(module, exports) {

$(document).ready(function () {
    $('.disableOnSubmit').submit(function () {
        $(this).find("button[type='submit'], input[type='submit']").prop('disabled', true);
        $(this).find("button[type='submit'], input[type='submit']").after('<img src="' + globalBaseUrl + '/img/sending.gif" style="margin-left:8px; margin-top:15px; float: right;" />');
    });

    jQuery(function () {
        jQuery('#subForm').submit(function (e) {
            e.preventDefault();
            jQuery(this).find("button[type='submit'], input[type='submit']").prop('disabled', true);
            jQuery(this).find("button[type='submit'], input[type='submit']").html('<img src="' + globalBaseUrl + '/img/sending.gif" width="20" />');
            jQuery('#gif').show();
            jQuery.getJSON(this.action + "?callback=?", jQuery(this).serialize(), function (data) {
                if (data.Status === 400) {
                    alert("Error: " + data.Message);
                } else {
                    // 200
                    jQuery('#bulletinRegular').hide();
                    jQuery('#subForm').hide();
                    jQuery('#success').show();
                }
            });
        });
    });
});

//Doc Ready Begin

$(function () {

    //Home page main slider


    //Img to svg code
    jQuery('img.svg').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
        jQuery.get(imgURL, function (data) {

            var $svg = jQuery(data).find('svg');

            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }

            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            $svg = $svg.removeAttr('xmlns:a');

            $img.replaceWith($svg);
        }, 'xml');
    });

    //Custom link line effects
    $(".custom-button").hover(function () {
        $(this).find('.line').animate({
            display: 'block',
            width: '25px'
        });

        $(this).find('.svg').find('#ürünler').animate({
            svgFill: 'red'
        });
    }, function () {
        $(this).find('.line').animate({
            display: 'none',
            width: '0px'
        });
    });

    //Paralax scroll effects
    $(window).scroll(function () {
        if (isMobile()) {
            $('.custom-parallax').each(function () {
                $(this).css('margin-top', -$(window).scrollTop() / parseInt($(this).attr('scrollSpeed')));
            });
            return false;
        } else {
            $('.custom-parallax').each(function () {
                $(this).css('margin-top', -$(window).scrollTop() / parseInt($(this).attr('scrollSpeed')));
            });

            $('.custom-parallax-1').each(function () {

                $(this).css('margin-top', -$(window).scrollTop() / parseInt($(this).attr('scrollSpeed')));
            });

            $('.custom-parallax-2').each(function () {

                $(this).css('margin-top', -$(window).scrollTop() / parseInt($(this).attr('scrollSpeed')));
            });

            $('.custom-parallax-3').each(function () {

                $(this).css('margin-top', -$(window).scrollTop() / parseInt($(this).attr('scrollSpeed')) + 195);
            });
        }
    });
});

//Doc Ready End

//Is mobile
function isMobile() {
    var isMobile = false; //initiate as false
    // device detection
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
        return isMobile = true;
    }
    return false;
}

//Home page custome slider 2

//Custom Slider


//Home page projects slider call
var slideIndex = 1;

showSlides(slideIndex);

$('.plus-slide').click(function () {

    plusSlides(1);
});

$('.minus-slide').click(function () {
    plusSlides(-1);
});

function plusSlides(n) {

    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    $titleHolder = $('#project-title'), $captionHolder = $('#project-caption'), $linkHolder = $('#project-link'), slides = $(".slide");

    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";

    $titleHolder.text(slides[slideIndex - 1].getAttribute('data-title'));
    $captionHolder.text(slides[slideIndex - 1].getAttribute('data-caption'));
    var btnLink = slides[slideIndex - 1].getAttribute('data-link');
    $linkHolder.attr('href', btnLink);
}

var $captionSliderContainer = $('.caption-slider-container'),
    images = $captionSliderContainer.find('.caption-slide'),
    index = 0;

carousel(images, index);

function carousel(images, index) {

    var x = images;

    for (var i = 0; i < x.length; i++) {
        x.eq(i).fadeOut();
    }

    index++;

    if (index > x.length) {
        index = 1;
    }

    x.eq(index - 1).show();

    setTimeout(function () {
        carousel(images, index);
    }, 5000);
    // Change image every 2 seconds
}

//Mouse smooth scroll

//Mouse smooth scroll
if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

var goUp = true;
var end = null;
var interval = null;

function handle(delta) {
    var animationInterval = 20; //lower is faster
    var scrollSpeed = 20; //lower is faster

    if (end == null) {
        end = $(window).scrollTop();
    }
    end -= 20 * delta;
    goUp = delta > 0;

    if (interval == null) {
        interval = setInterval(function () {
            var scrollTop = $(window).scrollTop();
            var step = Math.round((end - scrollTop) / scrollSpeed);
            if (scrollTop <= 0 || scrollTop >= $(window).prop("scrollHeight") - $(window).height() || goUp && step > -1 || !goUp && step < 1) {
                clearInterval(interval);
                interval = null;
                end = null;
            }
            $(window).scrollTop(scrollTop + step);
        }, animationInterval);
    }
}

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/sass/cms.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/sass/style.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/main.js");
__webpack_require__("./resources/assets/sass/style.scss");
__webpack_require__("./resources/assets/sass/cms.scss");
module.exports = __webpack_require__("./resources/assets/sass/app.scss");


/***/ })

/******/ });