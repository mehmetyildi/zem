@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | Test Rim</title>
    <meta property="og:title" content="Zem Raf | Test Rim"/>
    <meta name="keywords"
          content=" Container ,Zem Raf,Zem Raf , Products,dia machine products, about dia, tire sector">
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
    <link rel="stylesheet" href="{{asset('/css/fancy-box.min.css')}}">
@endsection

@section ('scripts')

    <script src="{{asset('/js/fancy-box.min.js')}}"></script>
    <script>

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

@section('content')
    <div class="product">

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12 position-absolute menuTag-holder mt-5">
                        <div class="row align-items-center">
                            <div class="breadcrumb-white-line">

                            </div>
                            <div class="menuTag mb-0 ml-1">Ana Sayfa / {{ $theCategory->{'title_'.$l} }}
                                / {{ $theProduct->{'title_'.$l} }}</div>
                        </div>
                    </div>
                    <div class="col-md-12 banner-bg-color">
                        <div class="row">
                            <div class="col-md-1 ">

                            </div>
                            <div class="col-md-5 py-5">
                                <div class="banner-text">
                                    <h1 class="mb-4">{{$theProduct -> {'title_'.$l} }}</h1>
                                    {!! $theProduct -> {'description_'.$l}  !!}
                                </div>
                            </div>
                            <div class="col-md-5 text-center">
                                <img class="w-100 banner-img pl-0 pl-lg-5" src="{{asset("img/product.jpg")}}"
                                     alt="shelves">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="product-properties pt-5">
                <div class="row">
                    <div class="col-md-11 bg-white py-5">
                        <div class="row">
                            <div class="col-0 col-md-1"></div>
                            <ul class="col-md-10 mb-0 mb-md-2">
                                <h2>{{$theProduct -> {'title_'.$l} }}</h2>
                                @if($theProduct->{'advantages_'.$l})

                                    @php
                                        $advantages = explode("\n", $theProduct->{'advantages_'.$l});
                                    @endphp
                                    @foreach($advantages as $advantage)
                                        <li>{{ $advantage }}</li>
                                    @endforeach

                                @endif
                            </ul>
                            <div class="col-0 col-md-1"></div>
                        </div>
                    </div>
                </div>

            </section>

            <section>
                <div class="product-gallery container">

                    <div class="row justify-content-center pt-5 mt-2">

                        <div class="col-md-10 gallery-cover-style">
                            <div class="position-absolute gallery-icon-position text-center">
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
                                <img src="{{url('img/gallery-icon.svg')}}" alt="gallery icon"><br><br>
                                Fotoğraf galerisini görmek için tıklayınız
                            </div>
                            <figure class="tint">
                                <a href="http://127.0.0.1:8000/img/gallery1.jpg" data-fancybox="images-preview">
                                    <img class="w-100" src="{{url('/img/gallery1.jpg')}}">
                                </a>
                            </figure>
                        </div>

                    </div>

                </div>


            </section>

            <section>
                <div class="row pt-5 pb-5">
                    <div class="col-md-12 pb-3">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h3>Projeler</h3>
                            </div>
                        </div>
                        <div class="row px-5 justify-content-around">

                            <div class="col-lg-3 col-md-6 py-5 px-0">
                                <div class="card-item pb-5 custom-border">

                                    <p class="item-no pt-5">02</p>
                                    <div class="p-5">
                                        <h5 class="shorten-news">Baumaxx Yapı Marketleri Raf Sistemleri Projesi

                                        </h5>

                                        <a href="#" id="see-more-btn">Daha Fazlası <img class="svg"
                                                                                        src="{{asset("img/see_more_icon.svg")}}"
                                                                                        alt="See More Icon"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 py-5 px-0">
                                <div class="card-item pb-5 custom-border">

                                    <p class="item-no pt-5">02</p>
                                    <div class="p-5">
                                        <h5 class="shorten-news">Arkas Holding Sırt Sırta Raf Sistemleri Projesi

                                        </h5>

                                        <a href="#" id="see-more-btn">Daha Fazlası <img class="svg"
                                                                                        src="{{asset("img/see_more_icon.svg")}}"
                                                                                        alt="See More Icon"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 py-5 px-0">
                                <div class="card-item pb-5 custom-border">

                                    <p class="item-no pt-5">02</p>
                                    <div class="p-5">
                                        <h5 class="shorten-news">Berner Haﬁf Yük Raﬂarı Sistemleri Projesi

                                        </h5>

                                        <a href="#" id="see-more-btn">Daha Fazlası <img class="svg"
                                                                                        src="{{asset("img/see_more_icon.svg")}}"
                                                                                        alt="See More Icon"></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

@endsection


