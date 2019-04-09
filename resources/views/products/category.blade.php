@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | Ürün ismi </title>
    <meta property="og:title" content="Zem Raf | Ürün"/>
    <meta name="keywords"
          content=" bead ring,zem raf,zem raf products,dia machine products, about dia, tire sector,">
    <!-- DESCRIPTION -->
    <meta name="description" content="">
    <meta property="og:description" content=""/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/nav-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content=""/>
    <meta name="canonical" content=""/>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('/css/fancy-box.min.css')}}">
@endsection
@section('content')
    <div class="product-category mt-5">

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12 position-absolute menuTag-holder mt-5">
                        <div class="row align-items-center">
                            <div class="breadcrumb-white-line">

                            </div>
                            <div class="menuTag mb-0 ml-1">Ürünler</div>
                        </div>
                    </div>
                    <div class="col-md-12 banner-bg-color">
                        <div class="row">
                            <div class="col-md-1 ">

                            </div>
                            <div class="col-md-5 py-5">
                                <div class="banner-text">
                                    <h1 class="mb-4">{{$theCategory-> {'title_'.$l} }}</h1>

                                    <p>{!! $theCategory-> {'description_'.$l} !!}</p>
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

            <section class="products pt-5 mt-5">
                <div class="row">
                    <div class="col-md-11 bg-white py-5">
                        <div class="row">
                            <div class="col-0 col-lg-1"></div>
                            @foreach(array_chunk($theCategory->products->where('publish', true)->sortBy('position')->all(),2) as $productGroup)
                                <ul class="col-md-6 col-lg-5 mb-0 mb-md-2">
                                    @foreach($productGroup as $product)
                                        <li><a href="{{ route('products.detail', ['category' => $theCategory->{'url_'.$l}, 'url' => $product->{'url_'.$l}]) }}"><img class="svg" hre src="{{asset("img/product_bullets.svg")}}"
                                                                           alt="Bullet Point">{{ $product->{'title_'.$l} }}</a></li>

                                    @endforeach
                                </ul>

                            @endforeach

                            <div class="col-0 col-lg-1"></div>
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


@section ('scripts')

    <script src="{{asset('/js/fancy-box.min.js')}}"></script>
    <script>

        //SVG IMAGES TO XML
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');
            jQuery.get(imgURL, function(data) {

                var $svg = jQuery(data).find('svg');

                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }

                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                $svg = $svg.removeAttr('xmlns:a');

                $img.replaceWith($svg);
            }, 'xml');
        });
    </script>

@endsection