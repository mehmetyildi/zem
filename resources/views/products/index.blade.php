@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ trans('local.shelfSystems') }}</title>
    <meta property="og:title" content="{{ trans('local.shelfSystems') }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ trans('local.productsOpening') }}">
    <meta property="og:description" content="{{ trans('local.productsOpening') }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/zmf-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('products.index') }}"/>
    <meta name="canonical" content="{{ route('products.index') }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
@endsection

@section('content')
    <section class="module parallax parallax-products relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ trans('local.shelfSystems') }}</li>
            </ul>
        </div>
    </div>
    <section class="section80">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 text-center blogHeading">
                    <h1 class="headingWithLogo text-uppercase">{{ trans('local.shelfSystems') }}</h1>
                    <p>
                        {{ trans('local.productsOpening') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="parallaxMiddle">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12">
                    <div class="parallaxMessage clearfix">
                        <h2>{{ trans('local.productsWhy') }}</h2>
                        <p>
                            {{ trans('local.productsBecause') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="parallaxMessage clearfix">
                        <h2>{{ trans('local.productsDiff') }}</h2>
                        <ul class="darkBlueList">
                            <li>{{ trans('local.productsDiff1') }}</li>
                            <li>{{ trans('local.productsDiff2') }}</li>
                            <li>{{ trans('local.productsDiff3') }}</li>
                            <li>{{ trans('local.productsDiff4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section80">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="categoryCard clearfix">
                        <a href="{{ route('products.category', ['category' => $category->{'url_'.$l}]) }}">
                            <img src="{{ asset('storage/'.$category->main_image) }}" class="img-fluid" alt="{{ $category->{'title_'.$l} }}" title="{{ $category->{'title_'.$l} }}">
                            <div class="caption">
                                {{ $category->{'title_'.$l} }}
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection