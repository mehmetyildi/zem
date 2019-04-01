@extends('layouts.app')

@section('styles')
    <!-- LOADING FONTS AND ICONS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400%7CLimelight:400" rel="stylesheet"
          property="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{url("revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css")}}">
    <link rel="stylesheet" type="text/css" href="{{url("revolution/fonts/font-awesome/css/font-awesome.css")}}">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{url("revolution/css/settings.css")}}">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{url("revolution/css/layers.css")}}">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{url("revolution/css/navigation.css")}}">


    <!-- CUSTOM CSS -->
    <style type="text/css">body {
            margin: 0
        }

        .hermes.tp-bullets {
        }

        .hermes .tp-bullet {
            overflow: hidden;
            border-radius: 50%;
            width: 8px;
            height: 8px;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0 1px rgb(255, 255, 255);
            -webkit-transition: background 0.3s ease;
            transition: background 0.3s ease;
            position: absolute
        }

        .hermes .tp-bullet:hover {
            background-color: rgba(255, 255, 255, 1)
        }

        .hermes .tp-bullet:after {
            content: ' ';
            position: absolute;
            bottom: 0;
            height: 0;
            left: 0;
            width: 100%;
            background-color: rgb(255, 255, 255);
            box-shadow: 0 0 1px rgb(255, 255, 255);
            -webkit-transition: height 0.3s ease;
            transition: height 0.3s ease
        }

        .hermes .tp-bullet.selected:after {
            height: 100%
        }
    </style>



@endsection

@section('seo')
    <title>Dia Makina | Home Page</title>
    <meta name="description"
          content=" As Dia Makina we’re proud to be a learning organization which is open to innovations and follow latest trends and technologies about productions.">
    <meta name="keywords" content="dia machine,mold ring,clamp ring,container,test rim,bead ring">

@endsection

@section('content')

    <section class="home-gallery pt-c-70 wow fadeIn" data-wow-delay=".6s">

        <div class="row position-relative align-items-center">
            <div class="col-md-1 col-0">
                <div class="justify-content-between position-absolute w-100 h-100 slider-filter wow custom-parallax"
                     scrollSpeed="9"
                     data-wow-duration="1.2s" data-wow-delay=".5s">
                    <div class="position-absolute dashed-line-container-1 dashed-line-container-2">
                        <div class="dash-line d-inline-block my-auto"></div>
                        <div class="dash-text d-inline-block ml-2 text-blue"><p>Scroll Down</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-12 position-relative">
                <img class="w-100" src="{{ asset("img/worker2.jpg") }}" alt="worker image">

            </div>
            <div class="col-md-8 offset-md-4 blue-bg-position ">

                <div class="bg-blue custom-parallax" scrollSpeed="3">

                </div>
                <div class="test mt-5 mt-lg-0 mt-xl-5 " style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}">
                    <div class="col-xl-9 col-lg-11 home-sub-text">

                        <p class="px-3 py-4 pb-md-0 pl-md-5 custom-parallax" scrollSpeed="4"><span
                                    class="c-ulight p-c-home ">
                Pratik deneyim uzmanlığı ile ihtiyaçlarınızı belirliyor ve İster “0” raf sistemi, ister geri dönüşüme kazandırılmış ikinci el raf  sistemleri olsun, size en uygun ürünleri sunuyoruz.
                            </span></p>
                    </div>

                </div>
            </div>

            <div id="primary-home-title" class="col-12 custom-parallax" scrollSpeed="4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-2 col-lg-2 d-none d-md-flex"></div>
                    <div class="col-12 col-md-6 ">
                        <h1 id="home-title">
                            BEKLENTİLERİN ÜSTÜNE ÇIKIYORUZ
                        </h1>
                    </div>
                    <div class="col-0 col-lg-4"></div>
                </div>
            </div>
        </div>


    </section>







    <section class="pt-c-70 home-caption wow fadeInLeft" data-wow-duration="1.2s" data-wow-offset="30">
        <div class="row pt-c-70  custom-parallax-1" scrollSpeed="7">
            <div class="col-lg-1 col-0 d-lg-none d-xl-block bg-white">

            </div>
            <div class="col-lg-6 col-lg-9  col-xl-6 bg-white pt-5 pr-0 pr-md-5 pb-5 pt-c7">

                <div class="col-lg-12 home-about-text-container wow fadeIn" data-wow-duration="1.4s"
                     data-wow-offset="45"
                     data-wow-delay=".5s">
                    <h2 class="d-md-none d-block">Hakkımızda</h2>
                    <p class="home-about-text">
                        300m²'lik dükkanımızla Büyük çaplı
                        üretim yapan fabrikaların ürünlerini geri dönüşüme kazandırmaya başladık.
                    </p>
                    <a href="{{url('about-us')}}" class="float-right mt-4 custom-button"> <span>Daha Fazlası</span> <span
                                class="line"></span> <img class="pr-3 svg" src="{{asset('img/product_bullets.svg')}}"
                                                          alt=""></a>
                </div>
            </div>
            <div class="col-1 col-lg-2 col-xl-1  bg-white">
                <div class="justify-content-between position-absolute w-100 h-100 slider-filter wow fadeIn"
                     data-wow-duration="1.2s" data-wow-delay=".5s">
                    <div class="position-absolute dashed-line-container-1">
                        <div class="dash-line d-inline-block my-auto"></div>
                        <div class="dash-text d-inline-block ml-2 "><p>Hakkımızda</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">


            </div>
        </div>


    </section>
    <section class="pt-5 mt-5">

        <div class="row justify-content-xl-end justify-content-lg-start">

            <div class="col-lg-10 col-xl pl-0 mb-5 mb-md-0 pr-0  home-list  custom-parallax-3" scrollSpeed="6">

                <div class="col-md-12 pl-5 bg-white  p-4 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="45"
                     data-wow-delay="0s">
                    <div class="row wow fadeIn " data-wow-duration="1s" data-wow-offset="55"
                         data-wow-delay=".5s">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-10">
                            <h3>Hizmetlerimiz</h3>
                            <ul>
                                <li>Raf Kiralama</li>
                                <li>Raf Bakim</li>
                                <li>Raf Statik</li>
                                <li>Raf Montaj ve Demontaj</li>
                            </ul>
                            <a href="" class="float-right mt-4 custom-button"> <span>Daha Fazlası</span> <span
                                        class="line"></span> <img class="pr-3 svg"
                                                                  src="{{asset('img/product_bullets.svg')}}"
                                                                  alt=""></a>
                        </div>
                    </div>

                </div>

            </div>


            <div class="col-md-1"></div>

            <div class="col-lg-11 col-xl pr-0 pl-0 home-list py-4 mb-5 custom-parallax-2" scrollSpeed="20">
                <div class="col-md-12 pl-5 bg-white offset-lg-2 p-4 wow fadeInRight" data-wow-duration="1s"
                     data-wow-offset="45"
                     data-wow-delay="0s">
                    <div class="wow fadeIn" data-wow-duration="1s"
                         data-wow-offset="55"
                         data-wow-delay=".5s">
                        <h3>Ürünler</h3>
                        <ul>
                            <li>Agir yuk depo raf sistemleri</li>
                            <li>Hafif ve orta yuk raf sistemleri</li>
                            <li>Raf Statik</li>
                            <li>Raf Montaj ve Demontaj</li>
                        </ul>
                    </div>

                    <a href="" class="mt-4 custom-button"> <span>Daha Fazlası</span> <span class="line"></span> <img
                                class="pr-3 svg" src="{{asset('img/product_bullets.svg')}}"
                                alt=""></a>
                </div>


            </div>

        </div>


    </section>
    <section class="pt-5 mt-5">
        <div class="slider-container">
            <div class="row justify-content-center">
                <div class="col-md-10 wow fadeIn" data-wow-duration="1s" data-wow-offset="100">
                    <div class="slide-container ">
                        <img class="slide faden w-100" src="{{asset('img/demo_slide.jpg')}}" alt="Zemraf Slider"
                             data-title="Test Message" data-link="www.test.com"
                             data-caption="lorem ipsum sfafafaf lorem ipsum sfafafaf lorem ipsum sfafafaf lorem ipsum sfafafaf lorem ipsum sfafafaf lorem ipsum sfafafaf lorem ipsum sfafafaf lorem ipsum sfafafaf">
                        <img class="slide faden w-100" src="https://www.w3schools.com/howto/img_mountains_wide.jpg"
                             alt="Zemraf Slider" title="Test Message 1">
                        <img class="slide faden w-100" src="https://www.w3schools.com/howto/img_nature_wide.jpg"
                             alt="Zemraf Slider" title="Test Message 2">
                    </div>

                    <div class="justify-content-between position-absolute w-100 h-100 slider-filter">
                        <img src="{{asset('img/home_slide_filter.png')}}" alt="test" class="w-100"
                        >


                    </div>
                </div>
                <div class="col-md-10">

                </div>

            </div>
            <div class="row justify-content-end navigation-container wow fadeInRightBig" data-wow-duration="1s">
                <div class="col-md-3  align-self-end">
                    <div class="row slide-btn float-right">
                        <div class="navigation-btn left-btn text-center position-relative" onclick="plusSlides(-1)"
                        >
                            <img src="{{asset ('img/arrow-left.svg')}}" alt="Zemraf Navigation Left Icon">
                        </div>
                        <div class="navigation-btn right-btn text-center position-relative" onclick="plusSlides(1)"
                        >
                            <img src="{{asset ('img/arrow-left.svg')}}" alt="Zemraf Navigation Right Icon ">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 float-right px-3 bg-white pl-5 pt-5 pb-5 ">
                    <div class=" wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                        <h3 class="c-bold" id="project-title">Projeler</h3>
                        <p class="pt-4" id="project-caption">40 yıllık tecrübemiz bizim en değerli varlığımız. Bu tecrübeyi projenizin
                            her adımında sizlerle paylaşmaktan gurur duyuyoruz.
                            <br><br>
                            ZMF çatısı altında tamamlanmış yüzlerce projenin tecrübesinden yararlanan satış ekibimiz
                            etkileyici düzeyde bir bilgi tabanına sahiptir.</p>
                        <a id="project-link" href="" class="float-right mt-4 custom-button"> <span>Daha Fazlası</span> <span
                                    class="line"></span> <img class="pr-3 svg"
                                                              src="{{asset('img/product_bullets.svg')}}"
                                                              alt=""></a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="row pt-5 pb-5">
            <div class="col-md-1">

            </div>
            <div class="col-md-10 pb-3">
                <div class="row">

                    <div class="col-md-10 px-3">
                        <h3>Projeler</h3>
                    </div>
                </div>
                <div class="row justify-content-around">

                    <div class="col-lg-4 col-md-6 py-5">
                        <div class="card-item pb-5 custom-border ">

                            <p class="item-no pt-5">02</p>
                            <div class="p-lg-3 px-4 pt-3 p-xl-5">
                                <h5 class="shorten-news">Baumaxx Yapı Marketleri Raf Sistemleri Projesi

                                </h5>

                                <a href=""
                                   class="d-block text-right float-none float-md-right mt-5 mt-md-4 custom-button">
                                    <span>Daha Fazlası</span> <span class="line"></span> <img class="pr-3 svg"
                                                                                              src="{{asset('img/product_bullets.svg')}}"
                                                                                              alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 py-5">
                        <div class="card-item pb-5 custom-border ">

                            <p class="item-no pt-5">02</p>
                            <div class="p-lg-3 px-4 pt-3 p-xl-5">
                                <h5 class="shorten-news">Baumaxx Yapı Marketleri Raf Sistemleri Projesi

                                </h5>

                                <a href=""
                                   class="d-block text-right float-none float-md-right mt-5 mt-md-4 custom-button">
                                    <span>Daha Fazlası</span> <span class="line"></span> <img class="pr-3 svg"
                                                                                              src="{{asset('img/product_bullets.svg')}}"
                                                                                              alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 py-5">
                        <div class="card-item pb-5 custom-border ">

                            <p class="item-no pt-5">02</p>
                            <div class="p-lg-3 px-4 pt-3 p-xl-5">
                                <h5 class="shorten-news">Baumaxx Yapı Marketleri Raf Sistemleri Projesi

                                </h5>

                                <a href=""
                                   class="d-block text-right float-none float-md-right mt-5 mt-md-4 custom-button">
                                    <span>Daha Fazlası</span> <span class="line"></span> <img class="pr-3 svg"
                                                                                              src="{{asset('img/product_bullets.svg')}}"
                                                                                              alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>




    @if($thePopup)
        <!-- Modal -->
        <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <br>
                    </div>
                    <div class="modal-body">
                        @if($thePopup->video_path)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $thePopup->video_path }}"></iframe>
                            </div>
                        @else
                            <a href="{{ $thePopup->link }}" target="_blank"><img class="img-fluid fullWidth"
                                                                                 src="{{ url('storage/'.$thePopup->{'image_path_en'}) }}"
                                                                                 alt="DIA Makina"
                                                                                 title="DIA Makina"></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">

        </div>
    </div>

@endsection
@section('scripts')

    @if($thePopup)
        <script>
            $(document).ready(function () {
                $('#popupModal').modal('show');
                setTimeout(function () {
                    $('#popupModal').modal('hide');
                }, {{ $thePopup->duration }} * 1000
            )
                ;
                setTimeout(function () {
                    $('#popupModal').remove()
                }, {{ $thePopup->duration }} * 1200
            )
                ;

            });

        </script>
    @endif

    <script type="text/javascript">
        function isMobile() {
            var isMobile = false; //initiate as false
            // device detection
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
                || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
                return isMobile = true;
            }
            return false
        }


        $(function () {
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

            $(".custom-button").hover(function () {
                    $(this).find('.line').animate({
                        display: 'block',
                        width: '25px'
                    });

                    $(this).find('.svg').find('#ürünler').animate({
                        svgFill: 'red'
                    });
                },
                function () {
                    $(this).find('.line').animate({
                        display: 'none',
                        width: '0px'
                    });


                });


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


        })


    </script>

    <script>
        //Custom Slider
        var slideIndex = 1;

        showSlides(slideIndex);

        function plusSlides(n) {

            showSlides(slideIndex += n);

        }

        function showSlides(n) {
            var i;
            $titleHolder = $('#project-title'),
                $captionHolder = $('#project-caption'),
                $linkHolder = $('#project-link'),
                slides =$(".slide");

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";

            $titleHolder.text(slides[slideIndex - 1].getAttribute('data-title'));
            $captionHolder.text(slides[slideIndex - 1].getAttribute('data-caption'));
            var btnLink = slides[slideIndex - 1].getAttribute('data-link');
            $linkHolder.attr('href',btnLink)


        }


    </script>
    <script>
        //Mouse smooth scroll
        if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
        window.onmousewheel = document.onmousewheel = wheel;

        function wheel(event) {
            var delta = 0;
            if (event.wheelDelta) delta = event.wheelDelta / 120;
            else if (event.detail) delta = -event.detail / 3;

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
                    if (scrollTop <= 0 ||
                        scrollTop >= $(window).prop("scrollHeight") - $(window).height() ||
                        goUp && step > -1 ||
                        !goUp && step < 1) {
                        clearInterval(interval);
                        interval = null;
                        end = null;
                    }
                    $(window).scrollTop(scrollTop + step);
                }, animationInterval);
            }
        }
    </script>
    <script>
        //SVG IMAGES TO XML
    </script>
@endsection


