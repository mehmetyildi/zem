@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ $theProject->{'title_'.$l} }}</title>
    <meta property="og:title" content="{{ $theProject->{'title_'.$l} }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ $theProject->{'caption_'.$l} }}">
    <meta property="og:description" content="{{ $theProject->{'caption_'.$l} }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('storage/'.$theProject->main_image) }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('projects.detail', ['url' => $theProject->{'url_'.$l}]) }}"/>
    <meta name="canonical" content="{{ route('projects.detail', ['url' => $theProject->{'url_'.$l}]) }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
@endsection

@section('content')
    <section class="module parallax parallax-projects relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><a href="{{ route('projects.index') }}">{{ trans('local.projects') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ $theProject->{'title_'.$l} }}</li>
            </ul>
        </div>
    </div>
    <section class="section80 projectDetail">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="headingWithLogo">{{ $theProject->{'title_'.$l} }}</h1>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mbXs mbSm mbMd">
                    <div class="projectImage clearfix">
                        <img src="{{ asset('storage/'.$theProject->main_image) }}" alt="{{ $theProject->{'title_'.$l} }}" title="{{ $theProject->{'title_'.$l} }}" class="img-fluid imgWithBackgroundBigger fullWidth">
                        <div class="projectIcon" style="background-image: url({{ asset('storage/'.$theProject->type->icon) }}); background-size: 50px 50px;"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p>
                        {!! $theProject->{'description_'.$l} !!}
                    </p>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mbXs mbSm">
                            <h4 class="infoIcon">{!! trans('local.projectDetailsAlt') !!}</h4>
                            <ul class="projectList">
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <strong>{{ trans('local.company') }}: </strong> {{ $theProject->customer->{'title_'.$l} }}
                                </li>
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <strong>{{ trans('local.projectType') }}: </strong> {{ $theProject->type->{'title_'.$l} }}
                                </li>
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <strong>{{ trans('local.city') }}: </strong> {{ $theProject->city->name }}
                                </li>
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <strong>{{ trans('local.storageArea') }}: </strong> {{ $theProject->{'area_size_'.$l} }}
                                </li>
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <strong>{{ trans('local.projectDuration') }}: </strong> {{ $theProject->{'duration_'.$l} }}
                                </li>
                            </ul>
                        </div>
                        @if($theProject->project_type_id == config('app.recycling'))
                            @php
                                $effects = explode("\n", $theProject->{'effects_'.$l});
                            @endphp
                            @if(count($effects))
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mbXs mbSm">
                                <h4 class="boxIcon">{!! trans('local.projectRecycled') !!}</h4>
                                <ul class="projectList">

                                    @foreach($effects as $effect)
                                        <li>
                                            <i class="fa fa-check-square"></i>
                                            {{ $effect }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        @else
                            @if($theProject->products->count())
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mbXs mbSm">
                                <h4 class="boxIcon">{!! trans('local.projectUsed') !!}</h4>
                                <ul class="projectList">
                                    @foreach($theProject->products as $product)
                                        <li>
                                            <i class="fa fa-check-square"></i>
                                            {{ $product->{'title_'.$l} }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($theProject->customer->{'testimonial_'.$l})
    <div class="projectSeperator mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="projectTestimonial clearfix">
                        <div class="owl-carousel owl-carousel-suite owl-carousel-ballroom owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ asset('storage/'.$theProject->customer->staff_image) }}" alt="{{ $theProject->customer->staff_name }}" title="{{ $theProject->customer->staff_name }}">
                                    </div>
                                    <div class="col-9">
                                        <p class="quote">
                                            <em>{{ $theProject->customer->{'testimonial_'.$l} }}</em>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <strong>{{ $theProject->customer->staff_name }} </strong><br>
                                        {{ $theProject->customer->{'staff_title_'.$l} }}, {{ $theProject->customer->{'title_'.$l} }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <section class="section80">
        <div class="container">
            @if($theProject->video_path)
                <div class="row mb-5">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12">
                        <div class="videoContainer clearfix">
                            <div class="videoBox">
                                <div class="controls embed-responsive embed-responsive-16by9" >
                                    <iframe class="embed-responsive-item" src="{{ $theProject->video_path }}" allowfullscreen mozallowfullscreen webkitallowfullscreen style="width:100%;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                @if($theProject->images->count())
                    <div class="row">
                        @foreach($theProject->images->where('publish', true)->sortBy('position') as $image)
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
    @if($projects->count())
    <section class="section40 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 text-center blogHeading">
                    <h1 class="headingWithLogo">{{ trans('local.similarProjects') }}</h1>
                </div>
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mbXs mbSm wow fadeIn mb-4">
                        <div class="homeProjectCard clearfix">
                            <div class="homeProjectImage relative">
                                <img src="{{ asset('storage/'.$project->main_image) }}" alt="{{ $project->{'title_'.$l} }}" title="{{ $project->{'title_'.$l} }}" class="img-fluid imgWithBackground fullWidth">
                                <div class="projectIcon" style="background-image: url({{ asset('storage/'.$project->type->icon) }}); background-size: 50px 50px;"></div>
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
    @endif

    @include('includes._askOfferParallax')
    <div class="mt-5 mb-5"></div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script>

        $('.owl-carousel').owlCarousel({
            loop : true,
            margin: 10,
            nav:false,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
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
