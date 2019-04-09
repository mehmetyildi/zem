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

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <style>
        span.select2-selection.select2-selection--single {
            outline: none;
        }

        .svg {
            margin-bottom: -11px;
        }

    </style>
@endsection
@section('content')
    <div class="projects projeler">
        <div class="container">
            <section>
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 menuTag-holder mt-5 ">
                            <div class="position-absolute w-100 pt-4">
                                <div class="row align-items-center">
                                    <div class="breadcrumb-white-line">

                                    </div>
                                    <div class="menuTag mb-0 ml-1">Anasayfa/Projeler</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 project-banner-bg-color">
                            <div class="row">
                                <div class="col-md-1 ">
                                </div>
                                <div class="col-md-5 banner-text">
                                    <h1 class="">Projeler</h1>

                                    <p>Tecrübemiz ile yurt içi ve yurt dışında yüzlerce depo kurulum ve geri dönüşüm
                                        projesine imza attık. Tecrübeli kurulum ekibimiz ve profesyonel atölyemiz
                                        ile
                                        projelerimizi tamamlarken; uygun ﬁyatlarımız, hızlı sevkiyat sistemimizle
                                        sizlere en
                                        iyi hizmeti sunmayı hedeﬂiyoruz.</p>
                                </div>
                                <div class="col-md-5 text-center">
                                    <img class="w-100 banner-img pl-0 pl-lg-5" src="{{asset("img/projeler.JPG")}}"
                                         alt="shelves">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-around pt-5 mt-5 pb-5">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-lg-3 px-0 align-self-center text-center">
                                <div class="inner-wrap">
                                    <select class="selectFilter" name="type" id="type" style="width:100%;height: 48px">
                                        <option disabled selected>{{ trans('local.projectType') }}</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->{'title_'.$l} }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-3 px-0 align-self-center text-center">
                                <div class="inner-wrap">
                                    <select class="selectFilter" name="category" id="category" style="width: 100%">
                                        <option disabled selected>{{ trans('local.shelfSystem') }}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->{'title_'.$l} }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-3 px-0 align-self-center text-center">
                                <div class="inner-wrap">


                                    <select class="selectFilter" name="sector" id="sector" style="width: 100%">
                                        <option disabled selected>{{ trans('local.sector') }}</option>
                                        @foreach($sectors as $sector)
                                            <option value="{{ $sector->id }}">{{ $sector->{'title_'.$l} }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 align-self-center text-center">
                                <div class="inner-wrap">
                                    <select class="selectFilter" name="city" id="city" style="width: 100%">
                                        <option disabled selected>{{ trans('local.city') }}</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section>
                <div class="container bg-grey">
                    <div class="row px-0 px-lg-5 justify-content-around">

                        @foreach($projects as $project)
                            <div class="col-lg-3 col-md-6 py-5 px-0 mx-3 type{{ $project->project_type_id }} city{{ $project->city_id }}
                            @foreach($project->customer->sectors as $sector)
                                    sector{{ $sector->id }}
                            @endforeach
                                    category{{ $project->category_id }}">
                                <div class="card-item pb-5 custom-border">

                                    <p class="item-no pt-5">
                                        &nbsp;&nbsp;{{ $project->{'created_at'}->format('d/m/Y') }}</p>
                                    <div class="p-5">
                                        <h5 class="shorten-news">{{ $project->{'title_'.$l} }}

                                        </h5>

                                        <a href="{{ route('projects.detail', ['url' => $project->{'url_'.$l}]) }}"
                                           id="see-more-btn" class="mt-4">Daha Fazlası <img class="svg"
                                                                                            src="{{asset("img/see_more_icon.svg")}}"
                                                                                            alt="See More Icon"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').select2();
        });
    </script>
    <script>

        $('#type').change(function () {
            var val = $(this).val();
            $('.selectFilter').not('#type').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function () {
                $(this).hide();
            });
            $('.projectFiltering').not('.visibleType').each(function () {
                $(this).hide();
            });
            $('.projectFiltering.type' + val).each(function () {
                $(this).show();
                $(this).addClass('visibleType');
            });
        });
        $('#city').change(function () {
            var val = $(this).val();
            $('.selectFilter').not('#city').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function () {
                $(this).hide();
            });
            $('.projectFiltering').not('.visibleCity').each(function () {
                $(this).hide();
            });
            $('.projectFiltering.city' + val).each(function () {
                $(this).show();
                $(this).addClass('visibleCity');
            });
        });
        $('#category').change(function () {
            var val = $(this).val();
            $('.selectFilter').not('#category').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function () {
                $(this).hide();
            });
            $('.projectFiltering').not('.visibleCategory').each(function () {
                $(this).hide();
            });
            $('.projectFiltering.category' + val).each(function () {
                $(this).show();
                $(this).addClass('visibleCategory');
            });
        });
        $('#sector').change(function () {
            var val = $(this).val();
            $('.selectFilter').not('#sector').prop('selectedIndex', 0);
            $('.projectFiltering.visible').each(function () {
                $(this).hide();
            });
            $('.projectFiltering').not('.visibleSector').each(function () {
                $(this).hide();
            });
            $('.projectFiltering.sector' + val).each(function () {
                $(this).show();
                $(this).addClass('visibleSector');
            });
        });

    </script>
@endsection