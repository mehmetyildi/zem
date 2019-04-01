@extends('layouts.app')

@section('seo')
    <!-- TITLE -->
    <title>{{ trans('local.request-offer') }}</title>
    <meta property="og:title" content="{{ trans('local.request-offer') }}"/>
    <meta name="keywords" content="">
    <!-- DESCRIPTION -->
    <meta name="description" content="{{ trans('local.reqOfferDesc') }}">
    <meta property="og:description" content="{{ trans('local.reqOfferDesc') }}"/>
    <!-- IMAGE -->
    <meta property="og:image" content="{{ asset('img/zmf-logo.png') }}"/>
    <!-- URL -->
    <meta property="og:url" content="{{ route('ask-offer') }}"/>
    <meta name="canonical" content="{{ route('ask-offer') }}"/>
@endsection
@section ('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
@endsection

@section('content')
    <section class="module parallax parallax-offer relative"></section>
    <div class="pageBreadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('local.homepage') }}</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>{{ trans('local.request-offer') }}</li>
            </ul>
        </div>
    </div>
    <section class="section80">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <h1 class="headingWithLogo text-uppercase">{{ trans('local.request-offer') }}</h1>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mbXs mbSm">
                    <p>
                        {{ trans('local.reqOfferDesc') }}
                    </p>
                    <form action="{{ route('mail.offer') }}" method="POST" class="offerForm disableOnSubmit">
                        {{ csrf_field() }}
                        <input type="hidden" name="form_id" value="{{ isset($pageForm->id) ?: '' }}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="form-group">
                                    <div class="borderInput clearfix">
                                        <label for="name">{{ trans('local.fullName') }}</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="form-group">
                                    <div class="borderInput clearfix">
                                        <label for="company">{{ trans('local.company') }}</label>
                                        <input type="text" class="form-control" id="company" name="company" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="form-group">
                                    <div class="borderInput clearfix">
                                        <label for="city">{{ trans('local.city') }}</label>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="form-group">
                                    <div class="borderInput clearfix">
                                        <label for="phone">{{ trans('local.phone') }}</label>
                                        <input type="text" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="form-group ">
                                    <div class="borderInput clearfix">
                                        <label for="gsm">{{ trans('local.gsm') }}</label>
                                        <input type="text" class="form-control" id="gsm" name="gsm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                                <div class="form-group ">
                                    <div class="borderInput clearfix">
                                        <label for="email">{{ trans('local.yourEmail') }}</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group checkboxInput">
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>{{ trans('local.yourContactPreference') }}</strong>
                                        </div>
                                        <div class="col-8">
                                            <div class="checkboxWrapper">
                                                <input type="checkbox" name="preferencePhone"> {{ trans('local.phone') }}
                                            </div>
                                            <div class="checkboxWrapper">
                                                <input type="checkbox" name="preferenceEmail"> {{ trans('local.email') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                <div class="form-group checkboxInput">
                                    <div class="row">
                                        <div class="col-4">
                                            <strong>{{ trans('local.yourInterest') }}</strong>
                                        </div>
                                        <div class="col-8">
                                            <div class="checkboxWrapper">
                                                <input type="checkbox" name="serviceSell"> {{ trans('local.interestSell') }}
                                        </div>
                                            <div class="checkboxWrapper">
                                                <input type="checkbox" name="serviceBuy"> {{ trans('local.interestBuy') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-xs-12 mb-4">
                                <div class="form-group">
                                    <div class="borderInput clearfix">
                                        <label for="body">{{ trans('local.yourMessage') }}</label>
                                        <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 mb-4">
                                <div class="form-group submitBtnContainer">
                                    <div class="g-recaptcha" data-sitekey="6LeBqnwUAAAAAHpxqpmu_1kvyIRjb8C50fs1ARcc"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 mb-4">
                                <div class="form-group submitBtnContainer">
                                    <button class="validateThisForm submitBtn">{{ trans('local.send') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mbXs mbSm">
                    <img src="{{ asset('img/offer.png') }}" alt="ZMF {{ trans('local.request-offer') }}" title="ZMF {{ trans('local.request-offer') }}" class="img-fluid imgWithBackgroundVerticalOrange">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="headingWithLogo text-uppercase">{{ trans('local.salesTeam') }}</h1>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($employees as $employee)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
                        <div class="teamCard clearfix">
                            <img src="{{ asset('storage/'.$employee->main_image) }}" class="float-right" alt="{{ $employee->name }}" title="{{ $employee->name }}" width="110">
                            <div class="memberName">
                                <h2>{{ $employee->name }}</h2>
                                <h3>{{ $employee->{'job_title_'.$l} }}</h3>
                            </div>
                            <div class="memberContacts">
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
                                @if($employee->pbx)
                                    <div class="memberLine">
                                        <i class="fa fa-envelope"></i> <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a>
                                    </div>
                                @endif
                            </div>
                            <div class="shortLinks">
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('js/timeline.js') }}"></script>
@endsection
