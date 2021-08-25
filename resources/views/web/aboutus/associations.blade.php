@extends('web.template.main')

@section('title', __('associations.title-tab'))

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
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('associations.title') }}</h2>
                <p class="g-font-size-24">{{ __('associations.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="mt-5" id="go-to-content">
        <div class="container g-pb-50">
            <div class="row justify-content-center g-mb-60">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('associations.content-title') }}</h2>
                        <p class="mb-0 g-font-size-20">{{ __('associations.content-text') }}</p>
                    </div>
                </div>
            </div>
            <!-- Static Process -->
            <div class="row">
                <div class="col-sm-6 col-lg-3 g-mb-60">
                    <!-- Static Process -->
                    <div class="text-center">
                        <i class="u-dot-line-v1-2 g-brd-transparent--before g-brd-gray-light-v2--after g-mb-20">
                            <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                        </i>
                        <h3 class="h5 g-color-black mb-20">{{ __('associations.item-title-1__1') }}</h3>
                        <p class="mb-0">{{ __('associations.item-text-1__1') }}</p>
                    </div>
                    <!-- End Static Process -->
                </div>
                <div class="col-sm-6 col-lg-3 g-mb-60">
                    <!-- Static Process -->
                    <div class="text-center">
                        <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                            <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                        </i>
                        <h3 class="h5 g-color-black mb-20">{{ __('associations.item-title-2__1') }}</h3>
                        <p class="mb-0">{{ __('associations.item-text-2__1') }}</p>
                    </div>
                    <!-- End Static Process -->
                </div>
                <div class="col-sm-6 col-lg-3 g-mb-60">
                    <!-- Static Process -->
                    <div class="text-center">
                        <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                            <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                        </i>
                        <h3 class="h5 g-color-black mb-20">{{ __('associations.item-title-3__1') }}</h3>
                        <p class="mb-0">{{ __('associations.item-text-3__1') }}</p>
                    </div>
                    <!-- End Static Process -->
                </div>
                <div class="col-sm-6 col-lg-3 g-mb-60">
                    <!-- Static Process -->
                    <div class="text-center">
                        <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-transparent--after g-mb-20">
                            <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                        </i>
                        <h3 class="h5 g-color-black mb-20">{{ __('associations.item-title-4__1') }}</h3>
                        <p class="mb-0">{{ __('associations.item-text-4__1') }}</p>
                    </div>
                    <!-- End Static Process -->
                </div>
            </div>
            <!-- End Static Process -->
            <div class="row g-mb-60">
                <div class="col-lg-12 text-center">
                    <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('associations.content-title__2') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Cube Portfolio Blocks - Filter -->
                    <ul id="filterControls" class="d-block list-inline text-center g-mb-50">
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2 cbp-filter-item-active" role="button" data-filter="*">{{ __('associations.item-1__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".ecologicas">{{ __('associations.item-2__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".productores">{{ __('associations.item-3__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".cafe">{{ __('associations.item-4__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".cacao">{{ __('associations.item-5__2') }}</li>
                        <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".miel">{{ __('associations.item-6__2') }}</li>
                    </ul>
                    <!-- End Cube Portfolio Blocks - Filter -->

                    <div id="grid-container">
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item ecologicas">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/aboutus/associations/ecolombiasf.jpg') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.facebook.com/ECOLOMBIASF/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">ECOLOMBIA</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item ecologicas productores">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/aboutus/associations/aracsubachoque.jpg') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://aracsubachoque.com/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Subachoque</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item productores cafe">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img-temp/800x496/img1.jpg') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://directorio-empresas.einforma.co/informacion-empresa/asociacion-agropecuaria-mezon-neiva">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Asociacion Agropecuaria El Mezon De Neiva</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item productores cacao">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/aboutus/associations/suroriente-de-boyaca.jpg') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.corpochivor.gov.co/2018/05/18/suroriente-de-boyaca-brillo-en-la-primera-feria-de-cacao-del-departamento/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Suroriente de Boyacá</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item productores miel">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/aboutus/associations/colmiel.jpg') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="http://colmiel.blogspot.com/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Colmiel</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item productores miel">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img-temp/800x496/img1.jpg') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="http://asoapicol2009.blogspot.com/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Asoapicol</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item productores miel">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/aboutus/associations/asoapiboy.png') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.facebook.com/Asoapiboy/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">Asoapiboy</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Cube Portfolio Blocks - Item -->
                        <!-- Cube Portfolio Blocks - Item -->
                        <div class="cbp-item productores miel">
                            <div class="cbp-item-wrapper">
                                <div class="u-block-hover g-parent">
                                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/aboutus/associations/coapihuila.jpg') }}">
                                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                            <li class="list-inline-item">
                                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.facebook.com/coapihuila/">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">CoApi</h3>
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
