@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ trans('local.projects') }}</title>
    <meta property="og:title" content="{{ trans('local.projects') }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ trans('local.projectsOpening') }}">
    <meta property="og:description" content="{{ trans('local.projectsOpening') }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/zmf-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('projects.index') }}"/>
    <meta name="canonical" content="{{ route('projects.index') }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
@endsection

@section('content')
    <section class="module parallax parallax-projects relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ trans('local.projects') }}</li>
            </ul>
        </div>
    </div>
    <section class="section80">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="headingWithLogo text-uppercase">{{ trans('local.projects') }}</h1>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mbXs mbSm mbMd">
                    <p>
                        <br>
                        {{ trans('local.projectsOpening') }}
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
        </div>
    </section>
    <section class="section40 mb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <select class="selectFilter" name="type" id="type">
                        <option disabled selected>{{ trans('local.projectType') }}</option>
                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->{'title_'.$l} }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select class="selectFilter" name="category" id="category" >
                        <option disabled selected>{{ trans('local.shelfSystem') }}</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->{'title_'.$l} }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select class="selectFilter" name="sector" id="sector" >
                        <option disabled selected>{{ trans('local.sector') }}</option>
                        @foreach($sectors as $sector)
                        <option value="{{ $sector->id }}">{{ $sector->{'title_'.$l} }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select class="selectFilter" name="city" id="city" >
                        <option disabled selected>{{ trans('local.city') }}</option>
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
        </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mbXs mbSm wow fadeIn mb-4 projectFiltering visible type{{ $project->project_type_id }} city{{ $project->city_id }}
                        @foreach($project->customer->sectors as $sector)
                        sector{{ $sector->id }}
                        @endforeach
                        category{{ $project->category_id }}">
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

    @include('includes._askOfferParallax')
    <div class="mt-5 mb-5"></div>
@endsection
@section('scripts')
    <script>
        $('#type').change(function(){
            var val = $(this).val();
            $('.selectFilter').not('#type').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function(){ $(this).hide(); });
            $('.projectFiltering').not('.visibleType').each(function(){ $(this).hide(); });
            $('.projectFiltering.type'+val).each(function(){$(this).show(); $(this).addClass('visibleType');});
        });
        $('#city').change(function(){
            var val = $(this).val();
            $('.selectFilter').not('#city').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function(){ $(this).hide(); });
            $('.projectFiltering').not('.visibleCity').each(function(){ $(this).hide(); });
            $('.projectFiltering.city'+val).each(function(){$(this).show(); $(this).addClass('visibleCity');});
        });
        $('#category').change(function(){
            var val = $(this).val();
            $('.selectFilter').not('#category').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function(){ $(this).hide(); });
            $('.projectFiltering').not('.visibleCategory').each(function(){ $(this).hide(); });
            $('.projectFiltering.category'+val).each(function(){$(this).show(); $(this).addClass('visibleCategory');});
        });
        $('#sector').change(function(){
            var val = $(this).val();
            $('.selectFilter').not('#sector').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function(){ $(this).hide(); });
            $('.projectFiltering').not('.visibleSector').each(function(){ $(this).hide(); });
            $('.projectFiltering.sector'+val).each(function(){$(this).show(); $(this).addClass('visibleSector');});
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>

        $('.owl-carousel').owlCarousel({
            loop : true,
            margin: 10,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
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
