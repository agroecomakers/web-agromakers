@extends('web.template.main')

@section('title', __('mi-campo-app.title-tab'))

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
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('mi-campo-app.title') }}</h2>
                <p class="g-font-size-24">{{ __('mi-campo-app.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="container g-mt-50">
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('mi-campo-app.content-title__1') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('mi-campo-app.content-text__1') }}</p>
            </div>
        </div>
        <!-- Icon Blocks -->
        <div class="row">
            <div class="col-lg-6 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
                    <div class="media g-mb-15">
                        <div class="d-flex mr-4">
                            <span class="g-color-gray-dark-v4 g-font-size-26"><i class="fa fa-lightbulb-o"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">{{ __('mi-campo-app.item-title-1__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('mi-campo-app.item-text-1__1') }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-6 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
                    <div class="media g-mb-15">
                        <div class="d-flex mr-4">
                            <span class="g-color-gray-dark-v4 g-font-size-26"><i class="fa fa-cogs"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">{{ __('mi-campo-app.item-title-2__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('mi-campo-app.item-text-2__1') }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
            <div class="col-lg-6 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
                    <div class="media g-mb-15">
                        <div class="d-flex mr-4">
                            <span class="g-color-gray-dark-v4 g-font-size-26"><i class="fa fa-bar-chart-o"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">{{ __('mi-campo-app.item-title-3__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('mi-campo-app.item-text-3__1') }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-6 g-mb-30">
                <!-- Icon Blocks -->
                <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
                    <div class="media g-mb-15">
                        <div class="d-flex mr-4">
                            <span class="g-color-gray-dark-v4 g-font-size-26"><i class="fa fa-balance-scale"></i></span></div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">{{ __('mi-campo-app.item-title-4__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('mi-campo-app.item-text-4__1') }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
        <!-- End Icon Blocks -->

        <div class="row g-mb-70">
            <div class="col-lg-8 g-mb-30">
                <img class="img-fluid w-100" src="{{ asset('web/img-temp/1200x960/img1.jpg') }}">
            </div>
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('mi-campo-app.item-title-1__2') }}</h2>
                    <p>{{ __('mi-campo-app.item-text-1__2') }}</p>
                </div>
            </div>
        </div>

        <div class="row g-mb-70">
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('mi-campo-app.item-title-2__2') }}</h2>
                    <p>{{ __('mi-campo-app.item-text-2__2') }}</p>
                </div>
            </div>
            <div class="col-lg-8 g-mb-30">
                <img class="img-fluid w-100" src="{{ asset('web/img-temp/1200x960/img1.jpg') }}">
            </div>
        </div>

        <div class="row g-mb-70">
            <div class="col-lg-8 g-mb-30">
                <img class="img-fluid w-100" src="{{ asset('web/img-temp/1200x960/img1.jpg') }}">
            </div>
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('mi-campo-app.item-title-3__2') }}</h2>
                    <p>{{ __('mi-campo-app.item-text-3__2') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.js') }}"></script>
@endsection

@section('footer')
    @include('web.template.footer')
@endsection
