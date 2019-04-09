@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Dia Makina | About Us</title>
    <meta property="og:title" content="Dia Makina | Bead Ring"/>
    <meta name="keywords"
          content=" bead ring,dia makina,dia makina products,dia machine products, about dia, tire sector,">
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
    <style>
        .content-holder {
            background-color: white !important;
            background-image: none !important;
        }



    </style>

@endsection

@section('content')
    <div class="references">
        <section class="pt-5 pb-5">
            <div class="container">

                <div class="row ">
                    <div class="col-md-6 " style="height: 100%;">

                        <div class="row h-100 justify-content-center">
                            <div class="col-md-12 pb-5">
                                <div class="row">
                                    <div class="col-md-12 px-0"><p class="menuTag text-blue">Anasayfa / Referanslar</p></div>
                                </div>

                                <div class="row justify-content-end pt-1 pt-md-5">
                                    <div class="col-md-11 col-12 blog-title">
                                        <h1 class="text-blue">Referanslar</h1>
                                    </div>
                                </div>
                                <div class="row justify-content-end pt-3">
                                    <div class="col-md-11 col-12">
                                        <p class="justify-content-center">ZEM Raf sistemleri depo kurulum ve geri
                                            dönüşüm projeleri ile yurt içi ve
                                            yurt dışında yüzlerce projeye imza atmıştır. Uygun fiyatlı, profesyonel
                                            hizmet ile tamamladığımız projelerimiz ile ortaya çıkan tecrübeler ile
                                            sizlere en iyi hizmeti sunmayı hedef edinmiştir.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 align-self-center px-0">

                        <img class="w-100" alt="" src="{{asset("img/references_top.png")}}">
                    </div>
                </div>

            </div>

        </section>

        <section>
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-10">

                        <div class="clearfix"></div>
                        <div class="row justify-content-center">
                            <div class="btn-group mb-5 w-100" role="group" aria-label="First group">
                                <div class="col-md-12">
                                    <div class="row justify-content-center">
                                        <button type="button" data-filter="all"
                                                class="btn col-lg-2 mx-2 mt-2 filter-btn">{{ trans('local.all') }}</button>
                                        @foreach($sectors as $sector)
                                            <button class="btn col-lg-2 mx-2 mt-2 filter-btn"
                                                    data-filter=".mix{{ $sector->id  }}">
                                                {{ $sector->{'title_'.$l}  }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                </div>
            </div>

            <div class="container px-lg-0 pb-5">

                <div class="row justify-content-center  mix-container">

                    @foreach($references as $reference)
                        <div class="col-lg-3 reference-card-container col-md-4 col-sm-4 col-6 mix @foreach($reference->customer->sectors as $refSector) mix{{ $refSector->id }} @endforeach">
                            <div class="inner-wrap bg-light">
                                <div class="singleReferenceCard clearfix text-center">
                                    <img src="{{ asset('storage/'.$reference->customer->logo) }}"
                                         class="w-100 img-fluid"
                                         height="30" alt="{{ $reference->customer->{'title_'.$l} }}"
                                         title="{{ $reference->customer->{'title_'.$l} }}">
                                    @if($reference->project_id)
                                        <div class="projectLink">
                                            <a class="linkWithLeftBorder"
                                               href="">{{ trans('local.reviewProject') }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection

@section ('scripts')
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{asset('/js/fancy-box.min.js')}}"></script>
    <script>
        var mixer = mixitup('.mix-container');

        //SVG IMAGES TO XML
        jQuery('img.svg').each(function () {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');
            jQuery.get(imgURL, function (data) {

                var $svg = jQuery(data).find('svg');

                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }

                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }

                $svg = $svg.removeAttr('xmlns:a');

                $img.replaceWith($svg);
            }, 'xml');
        });
    </script>

@endsection