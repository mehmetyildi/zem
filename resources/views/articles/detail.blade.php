@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ $theArticle->{'title_'.$l} }}</title>
    <meta property="og:title" content="{{ $theArticle->{'title_'.$l} }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ $theArticle->{'caption_'.$l} }}">
    <meta property="og:description" content="{{ $theArticle->{'caption_'.$l} }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('storage/'.$theArticle->main_image) }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('articles.detail', ['url' => $theArticle->{'url_'.$l}]) }}"/>
    <meta name="canonical" content="{{ route('articles.detail', ['url' => $theArticle->{'url_'.$l}]) }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
@endsection

@section('content')
    <section class="module parallax parallax-blog relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><a href="{{ route('articles.index') }}">{{ trans('local.blog') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ $theArticle->{'title_'.$l} }}</li>
            </ul>
        </div>
    </div>
    <section class="section80 projectDetail">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="headingWithoutLogo">{{ $theArticle->{'title_'.$l} }}</h1>
                </div>
                <div class="col-12">
                    <article>
                        <img src="{{ asset('storage/'.$theArticle->main_image) }}" alt="{{ $theArticle->{'title_'.$l} }}" title="{{ $theArticle->{'title_'.$l} }}" class="imgWithBorder">
                        <p>
                            {!! $theArticle->{'description_'.$l} !!}
                        </p>
                        <div class="shareArea clearfix ">
                            <div id="shareSocial"></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section80">
        <div class="container">
            @if($theArticle->video_path)
            <div class="row mb-5">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12">
                    <div class="videoContainer clearfix">
                        <div class="videoBox">
                            <div class="controls embed-responsive embed-responsive-16by9" >
                                <iframe class="embed-responsive-item" src="{{ $theArticle->video_path }}" style="width:100%;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($theArticle->images->count())
            <div class="row">
                @foreach($theArticle->images->where('publish', true)->sortBy('position') as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <a data-fancybox="gallery" href="{{ asset('storage/uncut_'.$image->main_image) }}" data-caption="{{ $image->{'caption_'.$l} }}">
                        <img src="{{ asset('storage/'.$image->main_image) }}" class="img-fluid fullWidth" alt="{{ $image->{'title_'.$l} }}" title="{{ $image->{'title_'.$l} }}">
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
    <section class="section80">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 text-center blogHeading">
                    <h1 class="headingWithLogo">{{ trans('local.otherArticles') }}</h1>
                </div>
            </div>
            <div class="row">
                @foreach($articles as $article)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-4">
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
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script>
        jQuery("#shareSocial").jsSocials({
            shareIn: "popup",
            showLabel: false,
            showCount: false,
            shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest"]
        });
    </script>
@endsection
