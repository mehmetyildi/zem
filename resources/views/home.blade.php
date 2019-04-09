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


    <style>
        .custom-button svg{
            margin-bottom:-21px
        }
    </style>


@endsection

@section('seo')
    <title>Zem Raf | Home Page</title>
    <meta name="description"
          content=" As Dia Makina we’re proud to be a learning organization which is open to innovations and follow latest trends and technologies about productions.">
    <meta name="keywords" content="dia machine,mold ring,clamp ring,container,test rim,bead ring">

@endsection

@section('content')

    <section class="home-gallery pt-c-70 wow fadeIn" data-wow-delay=".6s">

        <div class="row position-relative align-items-center">
            <div class="col-md-1 col-0">
                <div class="justify-content-between position-absolute w-100 h-100 slider-filter wow custom-parallax d-none d-md-block"
                     scrollSpeed="9"
                     data-wow-duration="1.2s" data-wow-delay=".5s">
                    <div class="position-absolute dashed-line-container-1 dashed-line-container-2" style="  -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
     -webkit-transform-origin: 15px 0px;
    transform-origin: 15px 0px;">
                        <div class="line-test"></div>
                        <div class="dash-text d-inline-block ml-2 text-blue" style="    transform: rotate(-90deg);
    /* bottom: 0; */
    left: -58px;
    position: absolute;
    top: -103px;"><p>Scroll Down</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-12 position-relative caption-slider-container">
                <img class="w-100  false" src="{{ asset("img/worker2.jpg") }}" alt="worker image"
                     style="opacity: 0">
                @foreach ($sliders as $slide)


                    <img class="w-100  position-absolute faden caption-slide"
                         src="{{ asset('storage/'.$slide->main_image) }}"
                         alt="worker image">
                    <img class="w-100  position-absolute faden caption-slide"
                         src="{{ asset("img/worker2.jpg") }}"
                         alt="worker image">

                @endforeach


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
                    <a href="" class="float-right mt-4 custom-button"> <span>Daha Fazlası</span> <span
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
                            @foreach($layoutCategories as $layoutCategory)
                                <li><a href="{{ route('products.category', ['url' => $layoutCategory->{'url_'.$l} ])}}">{{ $layoutCategory->{'title_'.$l} }}</a></li>

                            @endforeach

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
                        @foreach ($projects as $project)
                            <img class="slide faden w-100" src="{{ asset('storage/'.$project->main_image) }}"
                                 alt="Zemraf Slider"
                                 data-title="{{$project -> {'title_'.$l} }}" data-link="www.test.com"
                                 data-caption="{{$project -> {'caption_'.$l} }}">
                        @endforeach
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
                        <div class="navigation-btn left-btn text-center position-relative plus-slide"
                        >
                            <img src="{{asset ('img/arrow-left.svg')}}" alt="Zemraf Navigation Left Icon">
                        </div>
                        <div class="navigation-btn right-btn text-center position-relative minus-slide "
                        >
                            <img src="{{asset ('img/arrow-left.svg')}}" alt="Zemraf Navigation Right Icon ">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 float-right px-3 bg-white pl-5 pt-5 pb-5 ">
                    <div class=" wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                        <h3 class="c-bold" id="project-title">Projeler</h3>
                        <p class="pt-4" id="project-caption">40 yıllık tecrübemiz bizim en değerli varlığımız. Bu
                            tecrübeyi projenizin
                            her adımında sizlerle paylaşmaktan gurur duyuyoruz.
                            <br><br>
                            ZMF çatısı altında tamamlanmış yüzlerce projenin tecrübesinden yararlanan satış ekibimiz
                            etkileyici düzeyde bir bilgi tabanına sahiptir.</p>
                        <a id="project-link" href="" class="float-right mt-4 custom-button"> <span>Daha Fazlası</span>
                            <span
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
                        <h3>Blog</h3>
                    </div>
                </div>
                <div class="row justify-content-around">
                    @foreach($articles as $article)
                        <div class="col-lg-4 col-md-6 py-5">
                            <div class="card-item pb-5 custom-border ">

                                <p class="item-no pt-5">&nbsp;&nbsp;{{$article -> created_at->format('d/m/Y')}}</p>
                                <div class="p-lg-3 px-4 pt-3 p-xl-5">
                                    <h5 class="shorten-news"> {{ $article ->{'title_'.$l} }}
                                    </h5>

                                    <a href="{{url('news-detail/'.$article->{'url_'.$l})}}"
                                       class="d-block text-right float-none float-md-right mt-5 mt-md-4 custom-button">
                                        <span>Daha Fazlası</span> <span class="line"></span> <img class="pr-3 svg"
                                                                                                  src="{{asset('img/product_bullets.svg')}}"
                                                                                                  alt=""></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
@endsection


