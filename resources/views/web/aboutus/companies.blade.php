@extends('web.template.main')

@section('title', __('companies.title-tab'))

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
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('companies.title') }}</h2>
                <p class="g-font-size-24">{{ __('companies.sub-title') }}</p>
            </div>
        </div>
    </section>
    <div class="container g-py-100">
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('companies.content-title') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('companies.content-text') }}</p>
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
                            <h3 class="h5 g-color-black mb-20">{{ __('companies.item-title-1__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('companies.item-text-1__1') }}</p>
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
                            <span class="g-color-gray-dark-v4 g-font-size-26"><i class="fa fa-money"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">{{ __('companies.item-title-2__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('companies.item-text-2__1') }}</p>
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
                            <h3 class="h5 g-color-black mb-20">{{ __('companies.item-title-3__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('companies.item-text-3__1') }}</p>
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
                            <span class="g-color-gray-dark-v4 g-font-size-26"><i class="fa fa-sitemap"></i></span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">{{ __('companies.item-title-4__1') }}</h3>
                            <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                            <p class="g-color-gray-dark-v4 g-mb-0">{{ __('companies.item-text-4__1') }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
        <!-- End Icon Blocks -->

        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('companies.content-title__2') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('companies.content-text__2') }}</p>
            </div>
        </div>

        <!-- Team Block -->
        <div class="row">
            <div class="col-lg-4 col-sm-6 g-mb-30">
                <!-- Team Block -->
                <div class="u-info-v1-2">
                    <!-- Figure -->
                    <figure class="u-block-hover">
                        <!-- Figure Image -->
                        <img class="w-100" src="{{ asset('web/img/aboutus/companies/agroecologia.jpg') }}">
                        <!-- End Figure Image-->

                        <!-- Figure Caption -->
                        <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-pa-30">
                            <div class="u-block-hover__additional--fade u-block-hover__additional--fade-down g-flex-middle">
                                <!-- Figure Social Icons -->
                                <ul class="list-inline text-center g-flex-middle-item">
                                    <li class="list-inline-item align-middle g-mx-3">
                                        <a class="u-icon-v2 u-icon-size--sm g-font-size-default g-color-white g-color-primary--hover g-brd-white g-bg-white rounded-circle" target="_blank" href="https://www.facebook.com/agroecologico.jairomonroy">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </div>
                        </figcaption>
                        <!-- End Figure Caption -->
                    </figure>
                    <!-- End Figure -->
                    <!-- Figure Info -->
                    <div class="g-bg-white g-py-25">
                        <div class="g-mb-15">
                            <h4 class="h5 g-color-black g-mb-5">{{ __('companies.item-title-1__2') }}</h4>
                            <em class="d-block u-info-v1-2__item g-font-style-normal g-font-size-11 text-uppercase g-color-primary"></em>
                        </div>
                    </div>
                    <!-- End Figure Info-->
                </div>
                <!-- End Team Block -->
            </div>
            <div class="col-lg-4 col-sm-6 g-mb-30">
                <!-- Team Block -->
                <div class="u-info-v1-2">
                    <!-- Figure -->
                    <figure class="u-block-hover">
                        <!-- Figure Image -->
                        <img class="w-100" src="{{ asset('web/img/aboutus/companies/abejasyabejas.png') }}">
                        <!-- End Figure Image-->

                        <!-- Figure Caption -->
                        <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-pa-30">
                            <div class="u-block-hover__additional--fade u-block-hover__additional--fade-down g-flex-middle">
                                <!-- Figure Social Icons -->
                                <ul class="list-inline text-center g-flex-middle-item">
                                    <li class="list-inline-item align-middle g-mx-3">
                                        <a class="u-icon-v2 u-icon-size--sm g-font-size-default g-color-white g-color-primary--hover g-brd-white g-bg-white rounded-circle" target="_blank" href="https://abejasyabejas.wordpress.com/">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </div>
                        </figcaption>
                        <!-- End Figure Caption -->
                    </figure>
                    <!-- End Figure -->
                    <!-- Figure Info -->
                    <div class="g-bg-white g-py-25">
                        <div class="g-mb-15">
                            <h4 class="h5 g-color-black g-mb-5">{{ __('companies.item-title-2__2') }}</h4>
                            <em class="d-block u-info-v1-2__item g-font-style-normal g-font-size-11 text-uppercase g-color-primary"></em>
                        </div>
                    </div>
                    <!-- End Figure Info-->
                </div>
                <!-- End Team Block -->
            </div>
            <div class="col-lg-4 col-sm-6 g-mb-30">
                <!-- Team Block -->
                <div class="u-info-v1-2">
                    <!-- Figure -->
                    <figure class="u-block-hover">
                        <!-- Figure Image -->
                        <img class="w-100" src="{{ asset('web/img-temp/800x496/img1.jpg') }}">
                        <!-- End Figure Image-->

                        <!-- Figure Caption -->
                        <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-pa-30">
                            <div class="u-block-hover__additional--fade u-block-hover__additional--fade-down g-flex-middle">
                                <!-- Figure Social Icons -->
                                <ul class="list-inline text-center g-flex-middle-item">
                                    <li class="list-inline-item align-middle g-mx-3">
                                        <a class="u-icon-v2 u-icon-size--sm g-font-size-default g-color-white g-color-primary--hover g-brd-white g-bg-white rounded-circle" target="_blank" href="https://vymaps.com/CO/Apicultura-Los-Cerezos-459266/">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </div>
                        </figcaption>
                        <!-- End Figure Caption -->
                    </figure>
                    <!-- End Figure -->
                    <!-- Figure Info -->
                    <div class="g-bg-white g-py-25">
                        <div class="g-mb-15">
                            <h4 class="h5 g-color-black g-mb-5">{{ __('companies.item-title-3__2') }}</h4>
                            <em class="d-block u-info-v1-2__item g-font-style-normal g-font-size-11 text-uppercase g-color-primary"></em>
                        </div>
                    </div>
                    <!-- End Figure Info-->
                </div>
                <!-- End Team Block -->
            </div>
        </div>
        <!-- End Team Block -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.js') }}"></script>
@endsection

@section('footer')
    @include('web.template.footer')
@endsection
