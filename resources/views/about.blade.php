@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | Hakkımızda</title>
    <meta property="og:title" content="Zem Raf | Hakkımızda"/>
    <meta name="keywords" content=" Zem Raf,Zem hakkında">
    <!-- DESCRIPTION -->
    <meta name="description" content="Dia Teknoloji Mühendislik Makine San. ve Tic. Ltd. Şti. was founded in 2012
                        ,Kocaeli/Kartepe by Alper
                        Şeraner and Ata YURDAKUL who have 10 years of experience in tire sector and by Korhan YENIPAZAR
                        again who has 10 years of experience of Foreign Trade and Logistics .">
    <meta property="og:description" content="Dia Teknoloji Mühendislik Makine San. ve Tic. Ltd. Şti. was founded in 2012
                        ,Kocaeli/Kartepe by Alper Şeraner and Ata YURDAKUL who have 10 years of experience in tire sector and by Korhan YENIPAZAR
                        again who has 10 years of experience of Foreign Trade and Logistics ."/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/nav-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content=""/>
    <meta name="canonical" content=""/>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fancy-box.min.css')}}">
@endsection

@section('content')
    <div class="about">
        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12 position-absolute menuTag-holder mt-5">
                        <div class="row align-items-center">
                            <div class="breadcrumb-white-line">

                            </div>
                            <div class="menuTag mb-0 ml-1">Ürünler</div>
                        </div>
                    </div>
                    <div class="col-md-12 banner-bg-color">
                        <div class="row">
                            <div class="col-md-1 ">
                                <h1 class="d-lg-block d-none banner-title-vertical transform-origin-about pt-5 pt-md-0">Hakkımızda</h1>
                            </div>
                            <div class="col-md-5 py-5">
                                <div class="banner-text">
                                    <h1 class="mb-4 d-block d-lg-none">Hakkımızda</h1>

                                    <p>Firmamız 1995 yılından beri 2. el sektöründe faaliyet göstermektedir. Kartal’da 300
                                        m²’lik bir alanda faaliyete başlayan firmamız günümüzde Şekerpınar'da 6.000 m²’lik
                                        bir alanda her geçen gün büyüme sağlayarak çalışmalarını sürdürmektedir. <br> <br>

                                        Başta 2. el depo raf sistemleri olmak üzere 2. el depolama ekipmanları ve istif
                                        makinaları alım satımında ülkemizin öncü ve lider kuruluşudur. ZMF, 2. el raf
                                        sektörünü oluşturmadan önce ülkemizde 2. el raf sistemleri genellikle geri dönüşüme
                                        atık olarak verilmekteydi. Rafını satan firmalar düşük meblağlara ürünlerini
                                        verirken, alım yapacak diğer firmalar ise sıfır ürünlere yüksek ücretler öderdi.
                                        ZMF, bu raf sistemlerini atık fiyatının çok üzerinde alıp, hasarlı parçalar var ise
                                        müşterilerinin ihtiyacına yönelik revize ederek ülke ekonomisine büyük katkı
                                        sağlamaktadır.</p>
                                </div>

                            </div>
                            <div class="col-md-5 text-center ">
                                <img class="w-100 banner-img pl-0 pl-lg-5 " src="{{asset("img/about.jpg")}}" alt="shelves">
                            </div>

                        </div>

                    </div>
                </div>
            </section>



            <section class="mt-5 py-5">
                <div class="row">

                    <div class="col-lg-1 d-none d-md-block">

                    </div>
                    <div class="col-lg-6 col-12 bg-white py-5">

                        <h2 class="d-md-none d-block text-blue pb-4">Degerlerimiz</h2>
                        <div class="col-lg-12">
                            <ul class="vision-text">
                                <li>Girişimci, Yenilikçi ve Öncü Yapımız</li>
                                <li>Takım Ruhumuz</li>
                                <li>Hedeflerimiz</li>
                                <li>Çözüm Odaklılığımız</li>
                                <li>Güvenilirliğimiz</li>
                                <li>İnsana ve Doğaya Saygımız</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-1 bg-white align-self-center d-none d-lg-block">
                        <div class="justify-content-between position-absolute w-100 h-100 slider-filter wow fadeIn"
                             data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="position-absolute dashed-line-container-1" style="bottom:-238px">
                                <div class="dash-line d-inline-block my-auto"></div>
                                <div class="dash-text d-inline-block ml-2 "><p>Degerlerimiz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">


                    </div>
                </div>
            </section>
        </div>

    </div>

@endsection

@section('scripts')
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/fancy-box.min.js')}}"></script>

    <script>

        $('.owl-carousel').owlCarousel({
            nav: true,
            loop: true,
            dots: true,
            margin: 10,

            responsive: {
                0: {

                    items: 1,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: true,
                },
                1000: {
                    items: 3,
                    nav: true,
                }
            }
        });


        $('.owl-carousel').find('.owl-nav').removeClass('disabled');
        $('.owl-carousel').on('changed.owl.carousel', function (event) {
            $(this).find('.owl-nav').removeClass('disabled');
        });
    </script>


@endsection