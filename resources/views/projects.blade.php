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
    <div class="projeler">
        <div class="container">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 position-absolute menuTag-holder mt-5">
                        <div class="row align-items-center">
                            <div class="breadcrumb-white-line">

                            </div>
                            <div class="menuTag mb-0 ml-1">Anasayfa/Projeler</div>
                        </div>
                    </div>
                    <div class="col-md-12 project-banner-bg-color">
                        <div class="row">
                            <div class="col-md-1 ">
                            </div>
                            <div class="col-md-5 banner-text">
                                <h1 class="">Projeler</h1>

                                <p>Tecrübemiz ile yurt içi ve yurt dışında yüzlerce depo kurulum ve geri dönüşüm
                                    projesine imza attık. Tecrübeli kurulum ekibimiz ve profesyonel atölyemiz ile
                                    projelerimizi tamamlarken; uygun ﬁyatlarımız, hızlı sevkiyat sistemimizle sizlere en
                                    iyi hizmeti sunmayı hedeﬂiyoruz.</p>
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

                <div class="col-3 px-0 align-self-center text-center">
                    <div class="form-group">
                        <span>Proje Tipi</span>
                        <span class='box'>
                        <select class="selectpicker" id="selectProjectType">
                            <option>Kurulum</option>
                            <option>Two</option>
                            <option>Three</option>
                        </select>
                    </span>
                    </div>
                </div>

                <div class="col-3 px-0 align-self-center text-center">
                    <div class="form-group">
                        <span>Proje Tipi</span>
                        <span class='box'>
                        <select class="selectpicker" id="selectShelfSystem">
                            <option>Ağır yük raf sistemleri</option>
                            <option>Two</option>
                            <option>Three</option>
                        </select>
                    </span>
                    </div>
                </div>

                <div class="col-3 px-0 align-self-center text-center">
                    <div class="form-group">
                        <span>Proje Tipi</span>
                        <span class='box'>
                        <select class="selectpicker" id="selectSector">
                            <option>Ağır yük raf sistemleri</option>
                            <option>Two</option>
                            <option>Three</option>
                        </select>
                    </span>
                    </div>
                </div>

            </div>
        </section>

            <section>
                <div class="container bg-grey">
                    <div class="row px-5 justify-content-around">

                        <div class="col-lg-3 col-md-6 py-5 px-0 mx-3">
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

                        <div class="col-lg-3 col-md-6 py-5 px-0 mx-3">
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

                        <div class="col-lg-3 col-md-6 py-5 px-0 mx-3">
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

                        <div class="col-lg-3 col-md-6 py-5 px-0 mx-3">
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

                        <div class="col-lg-3 col-md-6 py-5 px-0 mx-3">
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

                        <div class="col-lg-3 col-md-6 py-5 px-0 mx-3">
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
            </section>


        </div>
    </div>

@endsection