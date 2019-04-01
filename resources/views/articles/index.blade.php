@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ trans('local.blog') }}</title>
    <meta property="og:title" content="{{ trans('local.blog') }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ trans('local.generalSeoDesc') }}">
    <meta property="og:description" content="{{ trans('local.generalSeoDesc') }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/zmf-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('articles.index') }}"/>
    <meta name="canonical" content="{{ route('articles.index') }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
@endsection

@section('content')
    <section class="module parallax parallax-blog relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ trans('local.blog') }}</li>
            </ul>
        </div>
    </div>
    <section class="section80">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 text-center blogHeading">
                    <h1 class="headingWithLogo text-uppercase">{{ trans('local.blog') }}</h1>
                </div>
            </div>
            <div class="row">
                @foreach($articles as $article)
                <div class="{{ $loop->index < 2 ? 'col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-4' : 'col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-4'}}">
                    <div class="homeBlogCard clearfix">
                        <img src="{{ asset('storage/'.$article->main_image) }}" class="img-fluid fullWidth" alt="{{ $article->{'title_'.$l} }}" title="{{ $article->{'title_'.$l} }}">
                        <div class="blogCardContent">
                            <h3>{{ $article->{'title_'.$l} }}</h3>
                            <p>
                                {{ $article->{'caption_'.$l} }}
                            </p>
                            <a href="{{ route('articles.detail', ['url' => $article->{'url_'.$l}]) }}" class="linkWithLeftBorder">{{ trans('local.readMore') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('includes._askOfferParallax')
    <div class="mt-5 mb-5"></div>
@endsection