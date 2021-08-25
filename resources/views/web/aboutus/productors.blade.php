@extends('web.template.main')

@section('title', __('productors.title-tab'))

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.css') }}">

    <link rel="stylesheet" href="{{ asset('web/plugins/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css') }}">
@endsection

@section('content')
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}" style="margin-top: 6rem!important;">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_3--after" style="height: 130%; background-image: url('{{ asset('web/img-temp/1200x960/img1.jpg') }}'); transform: translate3d(0px, -78.0646px, 0px);"></div>
        <div class="u-bg-overlay_iiner">
            <div class="container g-color-white text-center g-bg-cover__inner g-py-170">
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('productors.title') }}</h2>
                <p class="g-font-size-24">{{ __('productors.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="mt-5" id="go-to-content">
        <div class="container g-pb-50">
            <div class="row justify-content-center g-mb-60">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('productors.content-title') }}</h2>
                        <!--<div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>-->
                        <p class="mb-0 g-font-size-20">{{ __('productors.content-text') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 g-mb-50">
                    <img class="img-fluid" src=" {{ asset('web/img/aboutus/eresproductor/Indicadores.jpg') }}">
                </div>
                <div class="col-lg-6">
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled g-font-size-20 mb-0">
                                    <li class="d-flex mb-3">
                                        <i class="g-color-primary g-mt-5 g-mr-10 icon-check"></i>
                                        {{ __('productors.content-item-1__1') }}
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="g-color-primary g-mt-5 g-mr-10 icon-check"></i>
                                        {{ __('productors.content-item-2__1') }}
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="g-color-primary g-mt-5 g-mr-10 icon-check"></i>
                                        {{ __('productors.content-item-3__1') }}
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="g-color-primary g-mt-5 g-mr-10 icon-check"></i>
                                        {{ __('productors.content-item-4__1') }}
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="g-color-primary g-mt-5 g-mr-10 icon-check"></i>
                                        {{ __('productors.content-item-5__1') }}
                                    </li>
                                    <li class="d-flex mb-3">
                                        <i class="g-color-primary g-mt-5 g-mr-10 icon-check"></i>
                                        {{ __('productors.content-item-6__1') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('productors.content-title__2') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Cube Portfolio Blocks - Filter -->
                    <ul id="filterControls" class="d-block list-inline text-center g-mb-50">
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2 cbp-filter-item-active" role="button" data-filter="*">{{ __('productors.content-item-1__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".agroecologicos">{{ __('productors.content-item-2__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".hortalizas">{{ __('productors.content-item-3__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".organicos">{{ __('productors.content-item-4__2') }}</li>
                    </ul>
                    <!-- End Cube Portfolio Blocks - Filter -->

                    <div id="grid-container">
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item agroecologicos hortalizas">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://www.organicoslalulu.com/wp-content/uploads/2018/06/logo-La-Lulu.png">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.organicoslalulu.com">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Orgánicos la lulu</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->

                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item agroecologicos hortalizas">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://lh3.googleusercontent.com/k5EOzrNmg-wYOAtcN_85lLYMyeTlacRqAHbw8fq63Qv6OFud5by7xJ5Tpwed2jGqAYkDwRI2XWvAajawweh8S-GH7TyKs0XfQ9CTg8La9-fmSD3c31_-0oi6m817=w1596">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe8g_PWSwjROq60CUrZM6k9Z3zZ0gTLSHXJ3nS1ZxkogWmKEg/viewform">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">UtopíaBio</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->

                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item organicos">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="https://www.palmixtex.com/images/main/logo-brand.png">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.palmixtex.com/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Palm Mixtex</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->

                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item organicos">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src=" {{ asset('web/img/aboutus/eresproductor/fertiorganicos.png') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.facebook.com/FertiorganicosLaVilla">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Fertiorganicos</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->
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

    <script src="{{ asset('web/plugins/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

    <script>

        $(document).on('ready', function () {
            // initialization of cubeportfolio
            $('#grid-container').cubeportfolio({
                filters: '#filterControls',
                mediaQueries:
                    [
                        {"width": 1500, "cols": 3},
                        {"width": 1100, "cols": 3},
                        {"width": 800, "cols": 3},
                        {"width": 480, "cols": 2},
                        {"width": 300, "cols": 1}
                    ],
            });
        });
    </script>
@endsection

@section('footer')
    @include('web.template.footer')
@endsection
