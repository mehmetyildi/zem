@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Zem Raf | Hakkımızda</title>
    <meta property="og:title" content="Zem Raf | Hakkımızda"/>
    <meta name="keywords" content=" Zem Raf,Zem insan kaynakları">
    <!-- DESCRIPTION -->
    <meta name="description" content="">
    <meta property="og:description" content=""/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/nav-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content=""/>
    <meta name="canonical" content=""/>
@endsection


@section('content')
    <div class="hresources">

            <div class="container">

                <section>
                    <div class="row">
                        <div class="col-md-12 position-absolute menuTag-holder mt-5">
                            <div class="row align-items-center">
                                <div class="breadcrumb-white-line">

                                </div>
                                <div class="menuTag mb-0 ml-1">Kurumsal</div>
                            </div>
                        </div>
                        <div class="col-md-12 banner-bg-color">
                            <div class="row">
                                <div class="col-md-1 ">
                                    <h1 class="d-lg-block d-none banner-title-vertical transform-origin-hr pt-5 pt-md-0">İnsan Kaynakları</h1>
                                </div>
                                <div class="col-md-5 py-5">
                                    <div class="banner-text">
                                        <h1 class="mb-4 d-block d-lg-none">İnsan Kaynakları</h1>

                                        <h2 >Politikamiz</h2>
                                        <p>Sektöründe sürekli gelişim ve kapasitesini artırarak sürdüren, çalışana değer
                                            veren, değişime açık, çevreye, iş sağlığı ve güvenliğine duyarlı, kalite
                                            standartlarına uyumlu, müşteri odaklı bir şirket olma yolunda, insan
                                            kaynaklarını verimli bir şekilde kullanmaktır.</p>
                                        <br>
                                        <h2>Politikamizin Hedefi</h2>
                                        <p>Eğitimli ve deneyimli insan gücünü istihdam etmek; verimliliklerini artırmak,
                                            gelişmelerine imkân tanımak, iş birliği ve dayanışmanın olduğu huzurlu bir çalışma
                                            ortamı yaratmak sürekli büyüme ve gelişme için seçtiğimiz yoldur.
                                            <br> <br>
                                            Şirket kültürüne ve ortak değerlerine uyum sağlayabilecek, çalışacağı pozisyonun
                                            gerektirdiği nitelik ve yetkinliklere sahip, motivasyonu yüksek, gelişim ve değişime
                                            açık, ZMF Raf Sistemleri‘ni geleceğe taşıyacak adayları bünyemize kazandırmak işe
                                            alım sürecimizin esas amacıdır.</p>
                                    </div>

                                </div>
                                <div class="col-md-5 text-center">
                                    <img class="w-100 banner-img pl-0 pl-lg-5" src="{{asset("img/human-resources.jpg")}}"
                                         alt="shelves">
                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="pt-5 mt-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <h4 class="form-title text-center">
                                    IS STAJ BASVURU FORMU</h4>
                                <form action="" method="POST" id="career-form custom-border"
                                      class="offerForm disableOnSubmit">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="form_id"
                                           value="{{ isset($pageForm) ? $pageForm->id : '' }}">
                                    <div class="row py-2">
                                        <div class="col-12 ">
                                            <input type="text" name="name" class="form-control custom-border"
                                                   placeholder="İsim Soyisim">
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-12 col-md-6">
                                            <input type="text" name="phone" class="form-control custom-border" placeholder="Telefon">
                                        </div>
                                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                                            <input type="email" name="email" class="form-control custom-border" placeholder="E-posta">
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-12 ">
                                            <input type="text" name="position" class="form-control custom-border"
                                                   placeholder="Pozisyon">
                                        </div>
                                    </div>
                                    <div class="row py-2 justify-content-start">
                                        <div class="col-12 col-md-6">

                                            <select id="inputDepartment" name="application" class="form-control custom-border "placeholder="Başvuru Tipi">
                                                @if(isset($pageForm->id))
                                                    @foreach($pageForm->categories as $formCategory)
                                                        <option value="{{ $formCategory->id }}">{{ $formCategory->{'title_en'} }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                                            <div class="pl-2 custom-border chooseFile">
                                                CV.
                                            <label for="file-upload" class="my-1 py-0 ml-3 custom-file-upload">
                                                 Dosya Seçiniz
                                            </label>
                                            <input id="file-upload" type="file"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-12">
                                    <textarea class="form-control custom-border" name="body" id="exampleFormControlTextarea1" rows="3"
                                              placeholder="Kendinizi Tanıtın"></textarea>
                                        </div>
                                    </div>
                                    <button style="border:none; box-shadow: none; background: none;"
                                            class="validateThisForm gonderButton d-inline-block pt-3" type="submit">Gönder<img class="pl-2"
                                                src="{{asset("img/sen-icon.svg")}}"
                                                alt="send-icon">&nbsp;
                                    </button>
                                </form>


                            </div>
                        </div>
                    </div>


                </section>

            </div>


    </div>

@endsection

@section ('scripts')
    <script>
        var $bannerTitle = $('.banner-title').css('width'),
            parentDiv = $bannerTitle.parent();


    </script>
@endsection