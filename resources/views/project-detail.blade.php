@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Dia Makina | About Us</title>
    <meta property="og:title" content="Dia Makina | About Us"/>
    <meta name="keywords" content=" dia makina, about dia, tire sector, quality policy, certification">
    <!-- DESCRIPTION -->
    <meta name="description" content="">
    <meta property="og:description" content=""/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/dia_logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content=""/>
    <meta name="canonical" content=""/>
@endsection


@section('content')
    <div class="project-detail pt-5">
        <div class="container">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 position-absolute menuTag-holder mt-5">
                            <div class="row align-items-center">
                                <div class="breadcrumb-white-line">

                                </div>
                                <div class="menuTag mb-0 ml-1">Anasayfa / Projeler / Arkas Holding Sırt Sırta Raf
                                    Sistemleri
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 project-banner-bg-color">
                            <div class="row">
                                <div class="col-md-1 ">
                                </div>
                                <div class="col-md-5 banner-text">
                                    <h1 class="">Arkas Holding
                                        Sırt Sırta Raf Sistemleri</h1>

                                    <p>Gölcük limanda bulunan Arkas Holding in depo raf sistemlerini güçlü demontaj
                                        ekibimizle en kısa sürede tasfiyesini sağlayarak firmanın güvenini ve takdirini
                                        kazanmışızdır. </p>
                                </div>
                                <div class="col-md-5 text-center">
                                    <img class="w-100 banner-img pl-0 pl-lg-5" src="{{asset("img/projeler.JPG")}}"
                                         alt="shelves">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-around pt-5 mt-5">
                    <h2 class="col-md-12">Proje Detayları</h2>
                    <div class="col-md-2 px-0 align-self-center text-center">
                        Proje Tipi: Kurulum
                    </div>

                    <div class="col-md-2 px-0 align-self-center text-center">
                        Depo Alanı: 200
                    </div>

                    <div class="col-md-2 px-0 align-self-center text-center">
                        Proje Süresi: 1 hafta
                    </div>

                    <div class="col-md-4 px-0 align-self-center text-center">
                        Kullanılan ürün:  SIRT SIRTA DEPO RAF SİSTEMLERİ
                    </div>

                </div>
            </section>

            <section>
                <div class="product-gallery container">

                    <div class="row justify-content-center pt-5 mt-2">

                        <div class="col-md-10 gallery-cover-style">
                            <div class="position-absolute gallery-icon-position text-center">
                                <img src="{{url('img/gallery-icon.svg')}}" alt="gallery icon"><br><br>
                                Fotoğraf galerisini görmek için tıklayınız
                            </div>
                            <figure class="tint">
                                <a href="http://127.0.0.1:8000/img/gallery1.jpg" data-fancybox="images-preview">
                                    <img class="w-100" src="{{url('/img/gallery1.jpg')}}">
                                </a>
                            </figure>
                        </div>

                    </div>

                </div>


            </section>

            <section>

        </div>
    </div>

@endsection

@section ('scripts')


@endsection