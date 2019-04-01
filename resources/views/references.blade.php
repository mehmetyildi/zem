@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ trans('local.references') }}</title>
    <meta property="og:title" content="{{ trans('local.references') }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{!! trans('local.referencesDesc') !!}">
    <meta property="og:description" content="{!! trans('local.referencesDesc') !!}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/zmf-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('references') }}"/>
    <meta name="canonical" content="{{ route('references') }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
@endsection

@section('content')
    <section class="module parallax parallax-references relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ trans('local.references') }}</li>
            </ul>
        </div>
    </div>
    <section class="section80">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="headingWithLogo text-uppercase">{{ trans('local.references') }}</h1>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mbXs mbSm mbMd">
                    <p>
                        <br>
                        {!! trans('local.referencesDesc') !!}
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="homeTestimonialSlider clearfix">
                        <div class="owl-carousel owl-carousel-suite owl-carousel-ballroom owl-theme">
                            @foreach($references as $testimonial)
                                @if($testimonial->customer->{'testimonial_'.$l})
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="{{ asset('storage/'.$testimonial->customer->staff_image) }}" alt="{{  $testimonial->customer->staff_name }}" title="{{  $testimonial->customer->staff_name }}">
                                            </div>
                                            <div class="col-9">
                                                <p class="quote">
                                                    <em>{{ $testimonial->customer->{'testimonial_'.$l} }}</em>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <strong>{{  $testimonial->customer->staff_name }} </strong><br>
                                                {{ $testimonial->customer->{'staff_title_'.$l} }}, {{ $testimonial->customer->{'title_'.$l} }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="mt-5">{{ trans('local.filterBySector') }}</p>
                    <div class="btn-group mb-5" role="group" aria-label="First group">
                        <button type="button" data-filter="all" class="btn btn-secondary">{{ trans('local.all') }}</button>
                        @foreach($sectors as $sector)
                        <button type="button" data-filter=".mix{{ $sector->id  }}" class="btn btn-secondary">{{ $sector->{'title_'.$l}  }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-5 mix-container">
                @foreach($references as $reference)
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 mix @foreach($reference->customer->sectors as $refSector) mix{{ $refSector->id }} @endforeach">
                    <div class="singleReferenceCard clearfix text-center">
                        <img src="{{ asset('storage/'.$reference->customer->logo) }}" class="img-fluid" height="30" alt="{{ $reference->customer->{'title_'.$l} }}" title="{{ $reference->customer->{'title_'.$l} }}">
                        @if($reference->project_id)
                        <div class="projectLink">
                            <a class="linkWithLeftBorder" href="{{ route('projects.detail', ['url' => $reference->project->{'url_'.$l}]) }}">{{ trans('local.reviewProject') }}</a>
                        </div>
                        @endif
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script>
        var mixer = mixitup('.mix-container');
        $('.owl-carousel').owlCarousel({
            loop : true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            margin: 10,
            nav:true,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    margin: 20
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        });
    </script>
@endsection
