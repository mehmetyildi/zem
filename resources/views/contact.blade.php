@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>Dia Makina | About Us</title>
    <meta property="og:title" content="Dia Makina | About Us"/>
    <meta name="keywords" content=" dia makina, about dia, tire sector, quality policy, certification">
    <!-- DESCRIPTION -->
    <meta name="description" content="">
    <meta property="og:description" content=""/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/dia_logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content=""/>
    <meta name="canonical" content=""/>

    <style>
        .rotated {
            -webkit-transform: rotate(90deg);  /* Chrome, Safari 3.1+ */
            -moz-transform: rotate(90deg);  /* Firefox 3.5-15 */
            -ms-transform: rotate(90deg);  /* IE 9 */
            -o-transform: rotate(90deg);  /* Opera 10.50-12.00 */
            transform: rotate(90deg);  /* Firefox 16+, IE 10+, Opera 12.10+ */
            -webkit-transition: .7s;
            -moz-transition: .7s;
            -ms-transition: .7s;
            -o-transition: .7s;
            transition: .7s;
        }

        .form-container{
            display: none;
        }
    </style>

@endsection


@section('content')
    <div class="contact">
        <section>
            <div class="container-fluid intro">
                <div class="container">
                    <div class="row form-intro">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-6">
                            <h2>
                                Projenizi tartışmaktan ve sorularınıza <br>cevap vermekten mutluluk duyuyoruz.
                            </h2>
                            <p class="pt-2">
                                Form ile dilediğiniz departmanımıza mesajınızı iletebilirsiniz veya İlgili departmanı
                                seçerek
                                ekibimizle iletişime geçin size geri dönelim.
                            </p>
                            <a id="form-toggler" onclick="return false" href="return false" class="text-white btn-on">
                                <div class="d-flex align-items-center "><img src={{asset('img/right-arrow.svg')}} alt=""
                                    ><span class="pl-3 py-3 form-btn">İletişim Formu</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                    <div class=" row  pt-4 ">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-7 bg-white p-4 form-container">

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
                                        <input type="text" name="phone" class="form-control custom-border"
                                               placeholder="Telefon">
                                    </div>
                                    <div class="col-12 col-md-6 mt-3 mt-md-0">
                                        <input type="email" name="email" class="form-control custom-border"
                                               placeholder="E-posta">
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

                                        <select id="inputDepartment" name="application"
                                                class="form-control custom-border "
                                                placeholder="Başvuru Tipi">
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
                                    <textarea class="form-control custom-border" name="body"
                                              id="exampleFormControlTextarea1" rows="3"
                                              placeholder="Kendinizi Tanıtın"></textarea>
                                    </div>
                                </div>
                                <button style="border:none; box-shadow: none; background: none;"
                                        class="validateThisForm gonderButton d-inline-block pt-3 text-center" type="submit">
                                    <div class="d-flex align-items-center ">
                                        Gönder<img
                                                class="pl-2"
                                                src="{{asset("img/sen-icon.svg")}}"
                                                alt="send-icon">&nbsp;
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-10 py-5">
                        <h1>Pazarlama Ekibimizle İletişim Kurun</h1>
                    </div>
                    <div class="col-md-10 text-left pb-5">
                        <div class="row justify-content-between">
                            @foreach($employees as $employee)
                                <div class="col-md-3 contact-card">
                                    <h3>{{$employee->name}}</h3>
                                    <h4>{{$employee-> {'job_title_'.$l} }}</h4>
                                    <img src="{{ asset('storage/'.$employee->main_image) }}" class="w-100" alt="{{ $employee->name }}" title="{{ $employee->name }}" >
                                    <div class="text-left w-100 pt-3">
                                        @if($employee->email)

                                        @if($employee->desk_phone)
                                            <div class="memberLine">
                                                <i class="fa fa-phone"></i> <a href="tel:{{ $employee->desk_phone }}">{{ $employee->desk_phone }} ({{ $employee->desk_extension }})</a>
                                            </div>
                                        @endif
                                        @if($employee->mobile_phone)
                                            <div class="memberLine">
                                                <i class="fa fa-phone"></i> <a href="tel:{{ $employee->mobile_phone }}">{{ $employee->mobile_phone }}</a>
                                            </div>
                                        @endif
                                        @if($employee->pbx)
                                            <div class="memberLine">
                                                <i class="fa fa-print"></i> <a href="tel:{{ $employee->pbx }}">{{ $employee->pbx }}</a>
                                            </div>
                                        @endif
                                            <div class="memberLine">
                                                <img src="{{asset("img/mail-icon.svg")}}" alt="{{ $employee->email }}"> <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a>
                                            </div>
                                        @endif
                                            @if($employee->whatsapp)
                                                <a href="https://api.whatsapp.com/send?phone={{ $employee->whatsapp }}" target="_blank" class="whatsapp whatsappBtn"></a>
                                            @endif
                                            @if($employee->linkedin)
                                                <a target="blank" href="{{ $employee->linkedin }}" class="linkedin"></a>
                                            @endif
                                            @if($employee->vcf)
                                                <a target="_blank" href="{{ asset('storage/'.$employee->vcf) }}" class="vcf"></a>
                                            @endif



                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>


        </section>

    </div>




@endsection

@section ('scripts')
    <script>
        $('#form-toggler').click(function () {

            $('.form-container').slideDown(700);

            $(this).find('img').addClass('rotated')

        });
    </script>
@endsection