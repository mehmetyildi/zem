<section class="parallaxAskOffer">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xs-12">
                <div class="parallaxMessage clearfix text-center">
                    <h2>{{ trans('local.request-offer') }}</h2>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 borderRight">
                            {{ trans('local.staticRequestDesc') }}
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <form action="{{ route('mail.quick-offer') }}" method="POST" class="parallaxOfferForm clearfix">
                                {{ csrf_field() }}
                                <input type="hidden" name="form_id" value="{{ isset($layoutQuickOfferForm->id) ?: '' }}">
                                <input type="hidden" name="page" value="{{ url()->current() }}">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <input type="text" class="fullWidth" name="name" placeholder="{{ trans('local.fullName') }}">
                                        <input type="email" class="fullWidth" name="email" placeholder="{{ trans('local.yourEmail') }}">
                                        <input type="text" class="fullWidth" name="phone" placeholder="{{ trans('local.yourPhone') }}">
                                        <div class="g-recaptcha" data-sitekey="6LeBqnwUAAAAAHpxqpmu_1kvyIRjb8C50fs1ARcc"></div>
                                    </div>
                                    <div class="col-lg-12 col-12 text-right">

                                        <button type="submit" class="validateThisForm">{{ trans('local.send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br><br>
                    <h4>
                        <a href="tel:+902626581404">0(262) 658 14 64</a>
                        <span>&</span>
                        <a href="mailto:teklif@zmfrafsistemleri.com">teklif@zmfrafsistemleri.com</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>