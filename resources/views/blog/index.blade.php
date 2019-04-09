@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | About Us</title>
    <meta property="og:title" content="Zem Raf | Bead Ring"/>
    <meta name="keywords"
          content=" zem raf,rem raf,dia makina products,dia machine products, about dia, tire sector,">
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
        .post p {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #see-more-btn svg {
            margin-bottom: -13px;
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
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6 py-5">
                            <div class="card-item pb-4">
                                <img src="{{ asset('storage/'.$post->main_image) }}" class="img-fluid w-100"
                                     alt="{{ $post->{'title_'.$l} }}" title="{{ $post->{'title_'.$l} }}">
                                <p class="item-no pt-4">&nbsp;{{$post->created_at->format('d/m/Y')}}</p>
                                <div class="p-4">
                                    <h5 class="shorten-news">{{$post ->{'title_'.$l} }}
                                    </h5>
                                    <div class="post py-3">
                                        <p class="blog-content-intro">{{$post->{'caption_'.$l} }}</p>
                                    </div>

                                    <a href="{{ route('blog.detail', ['url' => $post->{'url_'.$l}]) }}" id="see-more-btn">Daha Fazlası <img class="svg"
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