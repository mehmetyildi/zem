@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | About Us</title>
    <meta property="og:title" content="Zem Raf | Bead Ring"/>
    <meta name="keywords"
          content=" bead ring,zem raf,zem raf products,dia machine products, about dia, tire sector,">
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
        .svg {
            margin-bottom: -11px;
        }

        .shorten-news{
            height: 130px;
            max-height: 130px;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
    <div class="blog">
        <section class="pt-5 pb-5">
            <div class="container">

                <div class="row ">
                    <div class="col-md-6 align-self-center blog-banner-bg" style="height: 100%;">

                        <div class="row h-100 justify-content-center">
                            <div class="col-md-12 py-5">
                                <div class="row">
                                    <div class="col-md-12 px-0"><p class="menuTag">Anasayfa/Blog</p></div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-11 blog-title">
                                        <h1 class="">Blog</h1>
                                    </div>
                                </div>
                                <div class="row justify-content-end pt-3">
                                    <div class="col-11 blog-text">
                                        <p>Raf Sistemleri ve Zem Raf hakkındaki en son Blog yazılarını paylaşıyoruz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 align-self-center px-0">

                        <img class="w-100" alt="" src="{{asset("img/blog-banner.jpg")}}">
                    </div>
                </div>

            </div>

        </section>

        <section>
            <div class="container bg-grey">
                <div class="row p-5 justify-content-around">
                    @foreach($articles as $article)


                        <div class="col-lg-3 col-md-6 py-5 px-0 mx-3">
                            <div class="card-item pb-5 custom-border">

                                <p class="item-no pt-5">&nbsp;{{$article -> created_at->format('d/m/Y')}}</p>
                                <div class="p-5">
                                    <h5 class="shorten-news">{{$article ->{'title_'.$l} }}

                                    </h5>

                                    <a href="{{ route('articles.detail', ['url' => $article->{'url_'.$l}]) }}"
                                       id="see-more-btn" class="mt-3">Daha Fazlası <img class="svg"
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