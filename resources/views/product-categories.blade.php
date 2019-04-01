@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | Ürün ismi </title>
    <meta property="og:title" content="Zem Raf | Ürün"/>
    <meta name="keywords"
          content=" bead ring,dia makina,dia makina products,dia machine products, about dia, tire sector,">
    <!-- DESCRIPTION -->
    <meta name="description" content="">
    <meta property="og:description" content=""/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/nav-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content=""/>
    <meta name="canonical" content=""/>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('/css/fancy-box.min.css')}}">
@endsection
@section('content')
    <div class="product-category mt-5">

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

                            </div>
                            <div class="col-md-5 py-5">
                                <div class="banner-text">
                                    <h1 class="mb-4">Ağır Yük Raf Sistemleri</h1>

                                    <p>Paletli ve Ağır Yük Depo Raf Sistemleri: Palet Rafları, ağır yüklerin ve paletli
                                        malzemelerin istiflendiği raf sistemleridir. Kısacası RACK SİSTEM diye adlandırılır.
                                        Paletli ve Ağır Yük Depo Raf Sistemleri ayak ve traverslerden oluşur. Ayaklar depo
                                        yüksekliğine göre tespit edilir ve üzerine koyulacak paletlerin kilolarına göre
                                        seçilen traverslerin, kancalı veya cıvatalı konektörler vasıtasıyla
                                        birleştirilmesinden oluşur. Bu tür paletli ve ağır yük depo raf sistemleri tamamen
                                        monte ve de-monte özelliklerine sahiptir.</p>
                                </div>

                            </div>
                            <div class="col-md-5 text-center">
                                <img class="w-100 banner-img pl-0 pl-lg-5" src="{{asset("img/product.jpg")}}"
                                     alt="shelves">
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <section class="products pt-5 mt-5">
                <div class="row">
                    <div class="col-md-11 bg-white py-5">
                        <div class="row">
                            <div class="col-0 col-lg-1"></div>
                            <ul class="col-md-6 col-lg-5 mb-0 mb-md-2">
                                <h2>Ağır Yük Raf Modelleri</h2>
                                <li><a href="/product-detail"><img class=" svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;SIRT SIRTA DEPO RAF SİSTEMLER</a></li>
                                <li><a href="#"><img class=" svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;SOĞUK HAVA DEPO RAF SİSTEMLERİ </a></li>
                                <li><a href="#"><img class=" svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;MEKİK RAF SİSTEMLERİ</a></li>
                                <li><a href="#"><img class=" svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;DAR KORİDOR DEPO RAF SİSTEMLERİ</a></li>
                                <li><a href="#"><img class=" svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;KATLI – PLATFORM DEPO RAF SİSTEMLERİ</a></li>
                                <li><a href="#"><img class=" svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;ÇİFT DERİNLİKLİ DEPO RAF SİSTEMLERİ</a></li>
                            </ul>
                            <ul class="col-md-6 col-lg-5">
                                <li class="d-none d-md-inline-block">&nbsp;</li>
                                <li><a href="#"><img class="svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;GİYDİRME DEPO RAF SİSTEMLERİ</a></li>
                                <li><a href="#"><img class="svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;İÇİNE GİRİLEBİLİR DEPO RAF SİSTEMLERİ </a></li>
                                <li><a href="#"><img class="svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;ASKILI DEPO RAF SİSTEMLERİ </a></li>
                                <li><a href="#"><img class="svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;KAYAR RAF SİSTEMLERİ</a></li>
                                <li><a href="#"><img class="svg" src="{{asset("img/product_bullets.svg")}}"
                                                     alt="Bullet Point">&nbsp;KONSOL KOLLU RAF SİSTEMLERİ </a></li>
                            </ul>
                            <div class="col-0 col-lg-1"></div>
                        </div>
                    </div>
                </div>

            </section>

            <section>
                <div class="row pt-5 pb-5">
                    <div class="col-md-12 pb-3">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h3>Projeler</h3>
                            </div>
                        </div>
                        <div class="row px-5 justify-content-around">

                            <div class="col-lg-3 col-md-6 py-5 px-0">
                                <div class="card-item pb-5 custom-border">

                                    <p class="item-no pt-5">02</p>
                                    <div class="p-5">
                                        <h5 class="shorten-news">Baumaxx Yapı Marketleri Raf Sistemleri Projesi

                                        </h5>

                                        <a href="#" id="see-more-btn">Daha Fazlası <img class="svg"
                                                                                src="{{asset("img/see_more_icon.svg")}}"
                                                                                alt="See More Icon"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 py-5 px-0">
                                <div class="card-item pb-5 custom-border">

                                    <p class="item-no pt-5">02</p>
                                    <div class="p-5">
                                        <h5 class="shorten-news">Arkas Holding Sırt Sırta Raf Sistemleri Projesi

                                        </h5>

                                        <a href="#" id="see-more-btn">Daha Fazlası <img class="svg"
                                                                                src="{{asset("img/see_more_icon.svg")}}"
                                                                                alt="See More Icon"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 py-5 px-0">
                                <div class="card-item pb-5 custom-border">

                                    <p class="item-no pt-5">02</p>
                                    <div class="p-5">
                                        <h5 class="shorten-news">Berner Haﬁf Yük Raﬂarı Sistemleri Projesi

                                        </h5>

                                        <a href="#" id="see-more-btn">Daha Fazlası <img class="svg"
                                                                                src="{{asset("img/see_more_icon.svg")}}"
                                                                                alt="See More Icon"></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
        </div>


    </div>


@endsection


@section ('scripts')

    <script src="{{asset('/js/fancy-box.min.js')}}"></script>
    <script>

        //SVG IMAGES TO XML
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');
            jQuery.get(imgURL, function(data) {

                var $svg = jQuery(data).find('svg');

                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }

                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                $svg = $svg.removeAttr('xmlns:a');

                $img.replaceWith($svg);
            }, 'xml');
        });
    </script>

@endsection