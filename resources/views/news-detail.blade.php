@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Dia Makina | About Us</title>
    <meta property="og:title" content="Dia Makina | Bead Ring"/>
    <meta name="keywords"
          content=" bead ring,dia makina,dia makina products,dia machine products, about dia, tire sector,">
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
    <div class="news-details">
        <section style="position: relative;">
            <div class="container-fluid px-0 news-banner parallax-banner">
                <div class="container">
                    <h1>NEWS</h1>
                </div>
            </div>
        </section>
        <section class="bead-ring pt-c-60">
            <div class="container">
                <div class="row px-0 position-relative">
                    <div class="col-md-7 bg-c-light my-5 pr-md-0">
                        <div class="top left"></div>
                        <div class="p-c-30">
                        <h2>DIA MAKİNA</h2>
                        <h3>MACHINE EXPO 2019’ da</h3>
                        <p class=" mb-0 pb-5">Anatolia Casting is an organization which provide service by attributing
                            particular importance for customer satisfaction with its 33 managers ; including 14
                            engineers and 9 technicians; and staff of 110 persons all of whom are experienced and have
                            know-how about their areas. Prior to casting a part in Anatolian casting, its simulation is
                            made with the state-of-the-art technological applications by considering the customer
                            demand; the recession zones and hot spots are detected. The casting process is carried out
                            in without faults and deficiencies.</p>
                        </div>
                    </div>
                    <div class="col-md-5 pl-md-0">
                        <img class="w-100 mt-2 p-4 product-img-bg" alt="" src="{{asset("img/bead-ring/beadring.png")}}">
                    </div>
                    <div class="position-absolute" style="width: 100%;bottom: 0px">

                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset("img/bead-ring/beadring1.png")}}" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset("img/bead-ring/beadring2.png")}}" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset("img/bead-ring/beadring3.png")}}" alt="">
                                </div>
                            </div>

                            <div class="col-md-5">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="pt-c-60 news-preview">
            <div class="container px-0">
                <div class="row justify-content-center">
                    <div class="col-md-4 position-relative bg-c-light">
                        <div class="top news-left-corner"></div>
                        <div class="bottom news-right-corner"></div>
                        <div class="px-4 py-5">
                            <div class="corners">

                                <div class="news-corner-border  news-bottom-border news-left-border"></div>
                                <h3 class="home-news-title pl-4"><a href="/news-detail">MACHINE EXPO 2019’da</a></h3><a class="my-btn d-inline-block pl-4"
                                        href="">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative bg-c-light">
                        <div class="top news-left-corner"></div>
                        <div class="bottom news-right-corner"></div>
                        <div class="px-4 py-5">
                            <div class="corners">

                                <div class="news-corner-border  news-bottom-border news-left-border"></div>
                                <h3 class="home-news-title pl-4"><a href="/news-detail">MACHINE EXPO 2019’da</a></h3><a class="my-btn d-inline-block pl-4"
                                        href="">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative bg-c-light">
                        <div class="top news-left-corner"></div>
                        <div class="bottom news-right-corner"></div>
                        <div class="px-4 py-5">
                            <div class="corners">

                                <div class="news-corner-border  news-bottom-border news-left-border"></div>
                                <h3 class="home-news-title pl-4"><a href="/news-detail">MACHINE EXPO 2019’da</a></h3><a class="my-btn d-inline-block pl-4"
                                    href="">Read More ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection