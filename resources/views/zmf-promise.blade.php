@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ trans('local.zmf-promise') }}</title>
    <meta property="og:title" content="{{ trans('local.zmf-promise') }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ trans('local.promiseSeo') }}">
    <meta property="og:description" content="{{ trans('local.promiseSeo') }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/zmf-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('zmf-promise') }}"/>
    <meta name="canonical" content="{{ route('zmf-promise') }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
@endsection

@section('content')
    <section class="module parallax parallax-about relative">
        <div class="parallaxHeading">
            <h1 class="headingWithLogoLarge text-uppercase">{{ trans('local.zmf-promise') }}</h1>
        </div>
    </section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ trans('local.zmf-promise') }}</li>
            </ul>
        </div>
    </div>
    <section class="section80 zmfPromise">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mbXs mbSm">
                    <h6>{{ trans('local.promiseLine1') }}</h6>
                    <h6>{{ trans('local.promiseLine2') }}</h6>
                    <h6>{{ trans('local.promiseLine3') }}</h6>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mbXs mbSm">
                    <img src="{{ asset('img/anasayfa/zmf-hakkinda.png') }}" alt="{{ trans('local.zmf-promise') }}" title="{{ trans('local.zmf-promise') }}" class="img-fluid imgWithBackground">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="headingWithLogoSmall">
                        {{ trans('local.promisePart1') }}
                    </h2>
                    <p>
                        {!!  trans('local.promisePart1Desc')  !!}
                    </p>
                    <h2 class="headingWithLogoSmall">
                        {{ trans('local.promisePart2') }}
                    </h2>
                    <p>
                        {!!  trans('local.promisePart2Desc')  !!}
                    </p>
                    <h2 class="headingWithLogoSmall">
                        {{ trans('local.promisePart3') }}
                    </h2>
                    <p>
                        {!!  trans('local.promisePart3Desc')  !!}
                    </p>
                    <h2 class="headingWithLogoSmall">
                        {{ trans('local.promisePart4') }}
                    </h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="promiseCard clearfix">
                                <img src="{{ asset('img/uygun-fiyat-secenekleri.png') }}" alt="{{ trans('local.diff1') }}" title="{{ trans('local.diff1') }}">
                                <h5>{{ trans('local.diff1') }}</h5>
                                <p>
                                    {{ trans('local.diff1Desc') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="promiseCard clearfix">
                                <img src="{{ asset('img/zengin-stok.png') }}" alt="{{ trans('local.diff2') }}" title="{{ trans('local.diff2') }}">
                                <h5>{{ trans('local.diff2') }}</h5>
                                <p>
                                    {{ trans('local.diff2Desc') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="promiseCard clearfix">
                                <img src="{{ asset('img/raf-sistemleri-danismanlik.png') }}" alt="{{ trans('local.diff3') }}" title="{{ trans('local.diff3') }}">
                                <h5>{{ trans('local.diff3') }}</h5>
                                <p>
                                    {{ trans('local.diff3Desc') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="promiseCard clearfix">
                                <img src="{{ asset('img/hizli-sevkiyat.png') }}" alt="{{ trans('local.diff4') }}" title="{{ trans('local.diff4') }}">
                                <h5>{{ trans('local.diff4') }}</h5>
                                <p>
                                    {{ trans('local.diff4Desc') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes._askOfferParallax')
    <div class="mt-5 mb-5"></div>
@endsection