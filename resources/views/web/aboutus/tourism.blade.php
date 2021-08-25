@extends('web.template.main')

@section('title', __('tourism.title-tab'))

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.css') }}">
@endsection

@section('content')
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}" style="margin-top: 6rem!important;">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_3--after" style="height: 130%; background-image: url('{{ asset('web/img-temp/1200x960/img1.jpg') }}'); transform: translate3d(0px, -78.0646px, 0px);"></div>
        <div class="u-bg-overlay_iiner">
            <div class="container g-color-white text-center g-bg-cover__inner g-py-170">
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('tourism.title') }}</h2>
                <p class="g-font-size-24">{{ __('tourism.sub-title') }}</p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('tourism.content-title') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('tourism.content-text') }}</p>
            </div>
        </div>
        <div class="row g-mb-70">
            <div class="col-lg-8 g-mb-30">
                <img class="img-fluid w-100" src="{{ asset('web/img/aboutus/tourism/agrualinda.png') }}" >
            </div>
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('tourism.item-title-1__1') }}</h2>
                    <p>{{ __('tourism.item-text-1__1') }}</p>
                </div>
                <div class="mb-5">
                    <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-25 g-px-30 g-py-12" href="http://agualinda.co" target="_blank">{{ __('tourism.button-see-more') }}</a>
                </div>
            </div>
        </div>
        <div class="row g-mb-70">
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('tourism.item-title-2__1') }}</h2>
                    <p>{{ __('tourism.item-text-2__1') }}</p>
                </div>
                <div class="mb-5">
                    <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-25 g-px-30 g-py-12" href="https://www.facebook.com/Utop%C3%ADabio-205617153207983/" target="_blank">{{ __('tourism.button-see-more') }}</a>
                </div>
            </div>
            <div class="col-lg-8 g-mb-30">
                <img class="img-fluid w-100" src="{{ asset('web/img/aboutus/tourism/utopiabio.jpg') }}" >
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.js') }}"></script>

    <script src="{{ asset('web/plugins/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>


@endsection

@section('footer')
    @include('web.template.footer')
@endsection
