@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Dia Makina | Test Rim</title>
    <meta property="og:title" content="Dia Makina | Test Rim"/>
    <meta name="keywords"
          content=" Container ,Dia Makina,Dia Makina , Products,dia machine products, about dia, tire sector">
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

@section('content')
    <div class="product">

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12 position-absolute menuTag-holder mt-5">
                        <div class="row align-items-center">
                            <div class="breadcrumb-white-line">

                            </div>
                            <div class="menuTag mb-0 ml-1">Ağır Yük Raf Sistemleri</div>
                        </div>
                    </div>
                    <div class="col-md-12 banner-bg-color">
                        <div class="row">
                            <div class="col-md-1 ">

                            </div>
                            <div class="col-md-5 py-5">
                                <div class="banner-text">
                                    <h1 class="mb-4">Sırt Sırta Depo Raf Sistemleri</h1>

                                    <p>Sırt Sırta depo raf sistemleri yaygınlık bakımından en çok kullanılan raf
                                        sistemleridir. Geniş kullanım alanına rağmen ekonomik ve alışılmış depo raf
                                        sistemleridir. Adından da belli olduğu gibi sırt sırta raf sistemleri iki raf sırt
                                        sırta (arka arkaya) gelecek şekilde koyulup sırt sırta aparatı ile birbirleriyle
                                        bağlantılı olacak şekilde kurulur. Hem sağlamlık hem de güven bakımından son derece
                                        kullanışlıdır. Depolanacak olan ürünleri Forklift veya elle istifleyebilirsiniz.
                                        Sırt sırta raf sistemini, depo alanınıza ve taleplerinize göre veya uzman çalışan
                                        kadromuz tarafından size en uygun şekilde projelendirip siz değerli müşterilerimize
                                        sunuyoruz.</p>
                                </div>

                            </div>
                            <div class="col-md-5 text-center">
                                <img class="w-100 banner-img pl-0 pl-lg-5" src="{{asset("img/product.jpg")}}"
                                     alt="shelves">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 offer-btn">
                        <a href="">Fiyat teklifi alın</a>
                    </div>
                </div>
            </section>

            <section class="product-properties pt-5">
                <div class="row">
                    <div class="col-md-11 bg-white py-5">
                        <div class="row">
                            <div class="col-0 col-md-1"></div>
                            <ul class="col-md-10 mb-0 mb-md-2">
                                <h2>Ağır Yük Raf Modelleri</h2>
                                <li>Sırt sırta raf sistemleri modüler yapıda
                                    olduğundan deponuzu en verimli şekilde kullanmanızı sağlar.</li>
                                <li>Kolayca taşınılabilen, demonte ve monte
                                    edilebilen raf sistemleridir.</li>
                                <li>Her türlü sektörde kullanılabilir.</li>
                                <li>Mükemmel stok denetimi. Her raf gözünde ayrı bir
                                    ürün tipi kullanılabilir. Barkodlama sistemine uyumludur</li>
                                <li>Tüm paletlere istenildiğinde direk ulaşma
                                    imkânı, serbest alan tertibi, manuel veya otomatik istif makinalarıyla kullanım
                                    olanağı, yükleme birimlerinin yüksekliğinde ve genişliğinde esneklik gibi
                                    avantajları vardır.</li>
                                <li>En çok kullanılan paletli yük raflarıdır. İki
                                    ayak arasındaki bir raf gözünde, birkaç palet yan yana depolanabilmektedir.
                                </li>
                                <li>Travers yükseklikleri kolayca değiştirilebilir.
                                    Bu özelliği sayesinde istiflenecek paletli ürünlerin yüksekliklerinde esneklik
                                    sağlamaktadır.</li>
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


