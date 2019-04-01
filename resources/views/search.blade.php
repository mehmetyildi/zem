@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ trans('local.searchResults') }}</title>
    <meta property="og:title" content="{{ trans('local.searchResults') }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ trans('local.generalSeoDesc') }}">
    <meta property="og:description" content="{{ trans('local.generalSeoDesc') }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/zmf-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('home') }}"/>
    <meta name="canonical" content="{{ route('home') }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
@endsection

@section('content')
    <section class="module parallax parallax-about relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ trans('local.doSearch') }}</li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ $keyword }}</li>
            </ul>
        </div>
    </div>
    <section class="section80">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="headingWithLogo">
                        #{{ trans('local.searchSummary', ['keyword' => $keyword, 'count' => ($articles->count() + $categories->count() + $products->count() + $projects->count())]) }}
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    @if($articles->count())
                        @foreach($articles as $article)
                            <div class="search-result">
                                <h3><a href="{{ route('articles.detail', ['url' => $article->{'url_'.$l}]) }}">{{ $article->{'title_'.$l} }} </a></h3>
                                <p>{{ $article->{'caption_'.$l} }}</p>

                            </div>
                            <hr>
                        @endforeach
                    @endif
                        @if($categories->count())
                            @foreach($categories as $category)
                                <div class="search-result">
                                    <h3><a href="{{ route('products.category', ['category' => $category->{'url_'.$l}]) }}">{{ $category->{'title_'.$l} }} </a></h3>
                                    <p>{!! $category->{'description_'.$l}  !!} </p>

                                </div>
                                <hr>
                            @endforeach
                        @endif
                    @if($products->count())
                        @foreach($products as $product)
                            <div class="search-result">
                                <h3><a href="{{ route('products.detail', ['category' => $product->category->{'url_'.$l}, 'url' => $product->{'url_'.$l}]) }}">{{ $product->{'title_'.$l} }} </a></h3>
                                <p>{!! $product->{'description_'.$l}  !!} </p>

                            </div>
                            <hr>
                        @endforeach
                    @endif
                    @if($projects->count())
                        @foreach($projects as $project)
                            <div class="search-result">
                                <h3><a href="{{ route('projects.detail', ['url' => $project->{'url_'.$l}]) }}">{{ $project->{'title_'.$l} }} </a></h3>
                                <p>{!! $project->{'caption_'.$l}  !!} </p>

                            </div>
                            <hr>
                        @endforeach
                    @endif
                    @if(!$articles->count() and !$categories->count() and !$products->count() and !$projects->count())
                    <h4>{{ trans('local.noResult') }}</h4>
                    <div class="hr-line-dashed"></div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <div class="mt-5 mb-5"></div>
@endsection