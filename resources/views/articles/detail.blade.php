@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | About Us</title>
    <meta property="og:title" content="Zem Raf | About Us"/>
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
                        <div class="col-md-12 menuTag-holder mt-5 ">
                            <div class="position-absolute w-100 pt-4">
                                <div class="row align-items-center">
                                    <div class="breadcrumb-white-line">

                                    </div>
                                    <div class="menuTag mb-0 ml-1"><a
                                                href="{{ route('home') }}">{{ trans('local.homepage') }}</a> / <a
                                                href="{{ route('articles.index') }}">{{ trans('local.blog') }}</a>
                                        / {{ $theArticle->{'title_'.$l} }} </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 project-banner-bg-color">
                            <div class="row">
                                <div class="col-md-1 ">
                                </div>
                                <div class="col-md-5 banner-text">
                                    <h1 class="">{{$theArticle->{'title_'.$l} }}</h1>

                                    <p>{{$theArticle->{'caption_'.$l} }}</p>
                                </div>
                                <div class="col-md-5 text-center py-4">

                                    <img src="{{ asset('storage/'.$theArticle->main_image) }}" alt="{{ $theArticle->{'title_'.$l} }}" title="{{ $theArticle->{'title_'.$l} }}" class="w-100">
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row bg-white py-5 justify-content-center">
                        <div class="col-md-12 ">

                            <div class="line-centered"><span><p class="mb-0">{{$theArticle->created_at->format('d.m.Y')}}</p></span></div>
                        </div>
                        <div class="col-md-10 mt-4 ">
                            {!! $theArticle -> {'description_'.$l} !!}
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container bg-grey">
                    <div class="row px-0 px-lg-5 justify-content-around">


                    </div>
                </div>
            </section>


        </div>
    </div>

@endsection