<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Piyetra Creative"/>
    <meta name="copyright" content="Dia Makina"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    @yield('seo')
    @yield('styles')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Google Analytics Tracking Code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135669846-1"></script>
    <script> window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-135669846-1');
    </script>
    <script> var globalBaseUrl = "{{ url('') }}"; </script>
</head>
<body>

<header>
    <div id="nav-border" style=" border-bottom: .5px solid #ADC5FF;" class=" container-fluid">
        <div class="container px-0">

            <nav id="navbar-primary" class="navbar navbar-expand-md px-0 py-lg-4">
                <a href="/" class="navbar-brand mr-0">
                    <img class="w-100" src="{{asset("img/nav-logo.png")}}" alt="zem-logo">
                </a>
                <button class="navbar-toggler ml-1" type="button" data-toggle="collapse"
                        data-target="#collapsingNavbar2">
                    <span class="navbar-toggler-icon"><img src="{{asset("img/navicon.svg")}}" alt=""></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100"
                     id="collapsingNavbar2">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link " href="/about-us">Kurumsal</a>
                        </li>

                        <li id="dropdown-primary" class="nav-item active dropdown w-100 desktop-menu">
                            <a class="nav-link d-inline-block dropdown-toggle" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Ürünler</a>
                            <ul id="dropdown-menu-c" class="dropdown-menu pt-md-5">
                                <li class="row">
                                    <div class="col-md-1 overflow-hidden">

                                        <div class="side-menu-title">
                                            Ürünler
                                        </div>
                                        <div class="line mx-auto">

                                        </div>
                                    </div>
                                    <ul class="col-md-6 desktop-menu-categories">
                                        <li class="box d-none"></li>
                                        <li> Ağır Yük Depo Raf Sistemleri</li>
                                        <li> Depo ve Raf Sistemleri Aksesuarları</li>
                                        <li> Hafif ve Orta Yük Raf Sistemleri</li>
                                        <li> Güvenlik</li>
                                    </ul>
                                    <div id="inner-menu" class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li id="inner-menu-item"> Ağır Yük Depo Raf Sistemleri</li>
                                                    <li id="inner-menu-item"> Depo ve Raf Sistemleri Aksesuarları</li>
                                                    <li id="inner-menu-item"> Hafif ve Orta Yük Raf Sistemleri</li>
                                                    <li id="inner-menu-item"> Ağır Yük Depo Raf Sistemleri</li>
                                                    <li id="inner-menu-item"> Depo ve Raf Sistemleri Aksesuarları</li>
                                                    <li id="inner-menu-item"> Ağır Yük Depo Raf Sistemleri</li>
                                                    <li id="inner-menu-item"> Depo ve Raf Sistemleri Aksesuarları</li>
                                                    <li id="inner-menu-item"> Hafif ve Orta Yük Raf Sistemleri</li>
                                                    <li id="inner-menu-item"> Ağır Yük Depo Raf Sistemleri</li>
                                                    <li id="inner-menu-item"> Depo ve Raf Sistemleri Aksesuarları</li>
                                                </ul>

                                            </div>


                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="/projects">Projeler</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="/contact">İletişim</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
                        <li class="nav-item"><a class="nav-link" href="">Diller&nbsp;&nbsp;<img
                                        src="{{asset("img/navicon.svg")}}" alt=""></a></li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
</header>


<div class="container content-holder">
    @yield('content')
</div>


<footer class="py-4">
    <div class="container-fluid pt-5">
        <div class="container ">
            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <div class="ebulten">

                        <p><span id="bulletinRegular">E-bültenlerimizden haberdar <br>olmak için;</span>
                            <span id="success" style="display: none; ">Thank you for your interest. You'll be hearing from us soon!</span>
                        </p>

                        <form class="js-cm-form" action="https://www.createsend.com/t/subscribeerror?description="
                              method="post"
                              data-id="92D4C54F0FEC16E5ADC2B1904DE9ED1A85DAB7D5B885DB6A57461AFB831DAD010D5058E1BA78A75A1B5A3A4B602FABD14DB5E2E68FD64529B66E3D069CA6FC11">
                            <div class="row ">
                                <div class="col-lg-9 col-md-6  col-10 pr-0">
                                    <div class="input-group mb-3">

                                        <input aria-label="Amount (to the nearest dollar)" id="fieldEmail"
                                               name="cm-wlytdh-wlytdh" type="email"
                                               placeholder="*E-mail adresinizi yazabilirsiniz."
                                               class="js-cm-email-input form-control required "/>
                                        <div class="input-group-append">
                                            <span class="input-group-text text-white">> </span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </form>
                        <script type="text/javascript"
                                src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
                    </div>
                    <div class="social">
                        <h5 class="mt-3 mt-lg-0">Sosyal Medya</h5>
                        <img class="pr-lg-3 pr-md-2 pr-sm-1 pb-3 pb-lg-0" src="{{asset("img/facebook-icon.svg")}}"
                             alt="facebook icon">
                        <img class="pr-lg-3 pr-md-2 pr-sm-1 pb-3 pb-lg-0" src="{{asset("img/linkedin-icon.svg")}}"
                             alt="linkedin icon">
                        <img class="pr-lg-3 pr-md-2 pr-sm-1 pb-3 pb-lg-0" src="{{asset("img/ig-icon.svg")}}"
                             alt="instagram icon">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2 col-md-6">
                    <h5 class="mt-3 mt-md-0">Kurumsal</h5>
                    <ul class="list-unstyled">
                        <li><a href="/about-us">Hakkımızda </a></li>
                        <li><a href="/human-resources">İnsan Kaynakları
                            </a></li>
                        <li><a href="/projects">Projeler</a></li>
                        <li><a href="/news">Haberler</a></li>
                        <li><a href="/blog">ZEM Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2 col-md-6">
                    <h5 class="mt-3 mt-lg-0">Ürünler</h5>
                    <ul class="list-unstyled">
                        <li><a href="/product-categories">Ağır Yük Depo Raf Sistemleri</a></li>
                        <li><a href="/product-categories">Hafif Yük Depo Raf Sistemleri</a></li>
                        <li><a href="/product-categories">Depo ve Raf Sistemleri Aksesuarları</a></li>

                    </ul>
                </div>

                <div class="align-self-end align-self-md-start col-sm-6 col-lg-2 col-md-6 pl-3 pl-lg-0">
                    <h5 class="d-none d-md-inline-block mt-3 mt-lg-0">&nbsp;</h5>
                    <ul class="list-unstyled">
                        <li><a href="/product-categories">Depolama Ekipmanları</a></li>
                        <li><a href="/product-categories">Diğer Ekipmanlar</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2 col-md-6">
                    <h5 class="mt-3 mt-lg-0">İletişim</h5>
                    <ul class="list-unstyled">
                        <li><p>Köşklüçeşme mahallesi
                                562. sokak No:13
                                Gebze Kocaeli</p></li>
                        <li><a href="tel:+90 262 335 19 66">T: 0262 320 07 23
                            </a></li>
                        <li><a href="mailto:info@zemraf.com">E: info@zemraf.com</a></li>

                    </ul>
                </div>
                <ul class="col-lg-1 col-6 pr-lg-0 d-none d-md-inline-block">
                    <li class="text-center"><img src="{{asset("img/dotted-line.svg")}}" alt="Up Line Icon"></li>
                    <li class="text-center mt-2"><img src="{{asset("img/up-icon.svg")}}" alt="Up Circle Icon"></li>
                </ul>


            </div>
            <hr class="w-100 hr-color">
            <div class="row align-items-center justify-content-between">
                <div class="w-100 col-4 col-md-2 align-content-center">
                    <img src="{{ asset('img/logo-footer.png') }}" alt="Zem Logo">
                </div>
                <div class="col-11 col-md-4 text-center order-last order-md-0">
                    <p class="mt-3 my-md-auto">© 2019 ZEM RAF SİSTEMLERİ A.S • Tüm hakları saklıdır.
                    </p>
                </div>
                <div class="w-100 col-4 col-md-2 text-right">
                    <img src="{{ asset('img/piyetra_logo.png') }}" alt="Piyetra Logo">
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>

<script>
    new WOW().init();
</script>

<script>
    var $desktopMenu=$('.desktop-menu');
</script>

<script src="{{ asset('js/validateThisForm.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
    @if(Session::has('success'))
    sweetAlert("Thank You", "We've received your message. We'll contact you back shortly.", "success");
    @endif
    @if(Session::has('errormessage'))
    sweetAlert("Error", "An unexpected error occured. Please try again later", "error");
    @endif
</script>
<script src="{{ asset('js/main.js') }}"></script>

@yield('scripts')
<script src="{{asset ('js/scroll.me.js')}}"></script>
</body>
</html>