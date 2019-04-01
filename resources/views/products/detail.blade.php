@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ $theProduct->{'title_'.$l} }}</title>
    <meta property="og:title" content="{{ $theProduct->{'title_'.$l} }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ mb_substr(strip_tags($theProduct->{'description_'.$l}), 0, 150) }}...">
    <meta property="og:description" content="{{ mb_substr(strip_tags($theProduct->{'description_'.$l}), 0, 150) }}..."/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('storage/'.$theProduct->main_image) }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('products.detail', ['category' => $theCategory->{'url_'.$l}, 'url' => $theProduct->{'url_'.$l} ]) }}"/>
    <meta name="canonical" content="{{ route('products.detail', ['category' => $theCategory->{'url_'.$l}, 'url' => $theProduct->{'url_'.$l} ]) }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
@endsection

@section('content')
    <section class="module parallax parallax-products-alt  relative" @if($theProduct->parallax_image) style="background-image: url({{ asset('storage/'.$theProduct->parallax_image) }});" @endif></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><a href="{{ route('products.index') }}">{{ trans('local.shelfSystems') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><a href="{{ route('products.category', ['category' => $theCategory->{'url_'.$l}]) }}">{{ $theCategory->{'title_'.$l} }}i</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ $theProduct->{'title_'.$l} }}</li>
            </ul>
        </div>
    </div>
    <section class="section80">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 mb-4">
                    <h1 class="headingWithLogo">{{ $theProduct->{'title_'.$l} }}</h1>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mbXs mbSm">
                    <p>
                        {!! $theProduct->{'description_'.$l} !!}
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mbXs mbSm">
                    <div class="quickOfferCard clearfix">
                        <div class="innerCard">
                            <h3>{{ trans('local.productsForm') }}</h3>
                            <p>{{ trans('local.productsFormSub') }}</p>
                            <form action="{{ route('mail.quick-offer') }}" method="POST" class="parallaxOfferForm disableOnSubmit clearfix">
                                {{ csrf_field() }}
                                <input type="hidden" name="form_id" value="{{ isset($layoutQuickOfferForm->id) ?: '' }}">
                                <input type="hidden" name="page" value="{{ url()->current() }}">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                        <div class="form-group">
                                            <div class="borderInput clearfix">
                                                <label for="name">{{ trans('local.fullName') }}</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                        <div class="form-group ">
                                            <div class="borderInput clearfix">
                                                <label for="email">{{ trans('local.yourEmail') }}</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                        <div class="form-group">
                                            <div class="borderInput clearfix">
                                                <label for="phone">{{ trans('local.yourPhone') }}</label>
                                                <input type="text" class="form-control" id="phone" name="phone" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group checkboxInput">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="checkboxWrapper">
                                                        <input type="checkbox" name="bulletinApproval" checked> {{ trans('local.bulletinApproval') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 mb-4">
                                        <div class="form-group submitBtnContainer">
                                            <div class="g-recaptcha" data-sitekey="6LeBqnwUAAAAAHpxqpmu_1kvyIRjb8C50fs1ARcc"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 mb-4">
                                        <div class="form-group submitBtnContainer">
                                            <button class="validateThisForm submitBtn">{{ trans('local.send') }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="https://api.whatsapp.com/send?phone=+905396616724" target="_blank" class="whatsappBtn"> {{ trans('local.whatsapp') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if($theProduct->{'advantages_'.$l})
            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <h1 class="headingWithLogo">{{ trans('local.advantages') }}</h1>
                    <br>

                    <ul class="advantageList">
                        @php
                            $advantages = explode("\n", $theProduct->{'advantages_'.$l});
                        @endphp
                        @foreach($advantages as $advantage)
                        <li>{{ $advantage }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            @if($theProduct->images->count())
                <div class="row">
                    @foreach($theProduct->images->where('publish', true)->sortBy('position') as $image)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
                            <a data-fancybox="gallery" href="{{ asset('storage/uncut_'.$image->main_image) }}" data-caption="{{ $image->{'caption_'.$l} }}">
                                <img src="{{ asset('storage/'.$image->main_image) }}" class="img-fluid fullWidth" alt="{{ $image->{'caption_'.$l} }}" title="{{ $image->{'caption_'.$l} }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    @if($theCategory->id == 1)
        @include('products._agiryuk')
    @endif
    @if($theCategory->id == 2)
        @include('products._hafifyuk')
    @endif
    <section class="parallaxMiddle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="parallaxMessage clearfix">
                        <h2>{{ trans('local.productsWhy') }}</h2>
                        <p>
                            {{ trans('local.categoryBecause') }}
                        </p>
                        <h3>{{ trans('local.categoryLeader') }}</h3>
                        <p>{{ trans('local.categoryLeaderDesc') }}
                        </p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="promiseCard noMinHeight clearfix">
                                    <img src="{{ asset('img/uygun-fiyat-secenekleri.png') }}" alt="{{ trans('local.diff1') }}" title="{{ trans('local.diff1') }}">
                                    <h5>{{ trans('local.diff1') }}</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="promiseCard noMinHeight clearfix">
                                    <img src="{{ asset('img/zengin-stok.png') }}" alt="{{ trans('local.diff2') }}" title="{{ trans('local.diff2') }}">
                                    <h5>{{ trans('local.diff2') }}</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="promiseCard noMinHeight clearfix">
                                    <img src="{{ asset('img/raf-sistemleri-danismanlik.png') }}" alt="{{ trans('local.diff3') }}" title="{{ trans('local.diff3') }}">
                                    <h5>{{ trans('local.diff3') }}</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="promiseCard noMinHeight clearfix">
                                    <img src="{{ asset('img/hizli-sevkiyat.png') }}" alt="{{ trans('local.diff4') }}" title="{{ trans('local.diff4') }}">
                                    <h5>{{ trans('local.diff4') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section80">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 mb-4 text-center blogHeading">
                    <h1 class="headingWithLogo">{{ trans('local.exampleProjects') }}</h1>
                </div>
            </div>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mbXs mbSm wow fadeIn mb-4" data-wow-delay="{{ $loop->first ? 0 : $loop->index / 2 }}s">
                        <div class="homeProjectCard clearfix">
                            <div class="homeProjectImage relative">
                                <img src="{{ asset('storage/'.$project->main_image) }}" alt="{{ $project->{'title_'.$l} }}" title="{{ $project->{'title_'.$l} }}" class="img-fluid imgWithBackground fullWidth">
                                <div class="projectIcon" style="background-image: url({{ asset('storage/'.$project->category->icon) }}); background-size: 50px 50px;"></div>
                            </div>

                            <h3>{{ $project->{'title_'.$l} }}</h3>
                            <p>{{ $project->{'caption_'.$l} }}</p>
                            <a href="{{ route('projects.detail', ['url' => $project->{'url_'.$l}]) }}" class="linkWithLeftBorder">{{ trans('local.projectDetails') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
@endsection
