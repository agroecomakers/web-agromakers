@extends('web.template.main')

@section('title', __('other-apps.title-tab'))

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
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('other-apps.title') }}</h2>
                <p class="g-font-size-24">{{ __('other-apps.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="mt-5" id="go-to-content">
        <div class="container g-pb-50">
            <div class="row justify-content-center g-mb-60">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('other-apps.content-title') }}</h2>
                        <!--<div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>-->
                        <p class="mb-0 g-font-size-20">{{ __('other-apps.content-text') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('other-apps.content-title__2') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="cbp-item-wrapper">
                        <div class="u-block-hover g-parent">
                            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/other-apps/Fruvii.jpg') }}">
                            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                    <li class="list-inline-item">
                                        <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.instagram.com/fruvii_colombia/?hl=es-la">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                            <h3 class="h5 g-color-black g-font-weight-700 mb-1">Fruvii Colombia</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cbp-item-wrapper">
                        <div class="u-block-hover g-parent">
                            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/other-apps/vroom.svg') }}">
                            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                    <li class="list-inline-item">
                                        <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="http://vroom-project.org/">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                            <h3 class="h5 g-color-black g-font-weight-700 mb-1">Vroom</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="cbp-item-wrapper">
                        <div class="u-block-hover g-parent">
                            <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out mx-auto" src="{{ asset('web/img/resources/other-apps/openfoodfact.png') }}">
                            <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                    <li class="list-inline-item">
                                        <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://world.openfoodfacts.org/">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                            <h3 class="h5 g-color-black g-font-weight-700 mb-1">Open Food Facts</h3>
                        </div>
                    </div>
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
