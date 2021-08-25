@extends('web.template.main')

@section('title', __('events.title-tab'))

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.css') }}">

    <link rel="stylesheet" href="{{ asset('web/plugins/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css') }}">
@endsection

@section('content')
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}" style="margin-top: 6rem!important;">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_3--after" style="height: 130%; background-image: url('https://www.privatewallmag.com/wp-content/uploads/Ppal-tec-new-frontier.png'); transform: translate3d(0px, -78.0646px, 0px);"></div>
        <div class="u-bg-overlay_iiner">
            <div class="container g-color-white text-center g-bg-cover__inner g-py-170">
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('events.title') }}</h2>
                <p class="g-font-size-24">{{ __('events.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <!-- Info Blocks -->
        <div class="row no-gutters">
            <!-- Info Image -->
            <div class="col-lg-5 g-min-height-360 g-bg-size-cover g-bg-pos-center" data-bg-img-src="{{'web/img-temp/1200x960/img1.jpg'}}"></div>
            <!-- End Info Image -->

            <div class="col-lg-7 g-bg-gray-dark-v1 g-pt-100 g-pb-80 g-px-80">
                <header class="text-uppercase g-mb-35">
                    <div class="g-mb-30">
                        <h2 class="h2 g-color-white g-font-weight-700 mb-0">{{ __('events.content-title__1') }}</h2>
                    </div>
                    <div class="g-width-70 g-brd-bottom g-brd-2 g-brd-primary"></div>
                </header>

                <p class="g-color-white-opacity-0_7 g-mb-65">{{ __('events.content-text__1') }}</p>

                <div class="row align-items-stretch">
                    <div class="col-sm-6 g-mb-30">
                        <!-- Article -->
                        <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                            <div class="g-flex-middle-item">
                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">{{ __('events.item-title-1__1') }}</h4>
                                <p class="g-color-white-opacity-0_7 mb-0">{{ __('events.item-text-1__1') }}</p>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-sm-6 g-mb-30">
                        <!-- Article -->
                        <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                            <div class="g-flex-middle-item">
                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">{{ __('events.item-title-2__1') }}</h4>
                                <p class="g-color-white-opacity-0_7 mb-0">{{ __('events.item-text-2__1') }}</p>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>

                <div class="row align-items-stretch">
                    <div class="col-sm-6 g-mb-30">
                        <!-- Article -->
                        <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                            <div class="g-flex-middle-item">
                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">{{ __('events.item-title-3__1') }}</h4>
                                <p class="g-color-white-opacity-0_7 mb-0">{{ __('events.item-text-3__1') }}</p>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-sm-6 g-mb-30">
                        <!-- Article -->
                        <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                            <div class="g-flex-middle-item">
                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">{{ __('events.item-title-4__1') }}</h4>
                                <p class="g-color-white-opacity-0_7 mb-0">{{ __('events.item-text-4__1') }}</p>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Blocks -->
    </section>
    <section class="container">
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('events.content-title__2') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Cube Portfolio Blocks - Filter -->
                <ul id="filterControls" class="d-block list-inline text-center g-mb-50">
                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2 cbp-filter-item-active" role="button" data-filter="*">{{ __('events.item-category-1__2') }}</li>
                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".webminars">{{ __('events.item-category-2__2') }}</li>
                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".workshop">{{ __('events.item-category-3__2') }}</li>
                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".events">{{ __('events.item-category-4__2') }}</li>
                </ul>
                <!-- End Cube Portfolio Blocks - Filter -->

                <div id="grid-container">
                    <!-- Cube Portfolio Blocks - Item -->
                    <div class="cbp-item events">
                        <div class="cbp-item-wrapper">
                            <div class="u-block-hover g-parent">
                                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/events/bogota2019-agromakers.svg') }}">
                                <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                    <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                        <li class="list-inline-item">
                                            <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="http://bogota2019.agromakers.org">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('events.item-1__2') }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Cube Portfolio Blocks - Item -->
                    <!-- Cube Portfolio Blocks - Item -->
                    <div class="cbp-item webminars">
                        <div class="cbp-item-wrapper">
                            <div class="u-block-hover g-parent">
                                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/events/cornare.jpeg') }}">
                                <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                    <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                        <li class="list-inline-item">
                                            <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.cornare.gov.co/noticias-corporativas/cornare-propicia-espacios-de-participacion-socio-ambiental-asertiva/">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('events.item-2__2') }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Cube Portfolio Blocks - Item -->
                    <!-- Cube Portfolio Blocks - Item -->
                    <div class="cbp-item webminars">
                        <div class="cbp-item-wrapper">
                            <div class="u-block-hover g-parent">
                                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web\img-temp\800x869\img1.jpg') }}">
                                <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                    <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                        <li class="list-inline-item">
                                            <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="https://www.youtube.com/embed/3whDWIAUmyQ?autoplay=1">
                                                <i class="fa fa-camera"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('events.item-3__2') }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Cube Portfolio Blocks - Item -->
                    <!-- Cube Portfolio Blocks - Item -->
                    <div class="cbp-item webminars">
                        <div class="cbp-item-wrapper">
                            <div class="u-block-hover g-parent">
                                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/events/4-Revolución-en-el-Agro.jpg') }}">
                                <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                    <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                        <li class="list-inline-item">
                                            <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.facebook.com/watch/live/?v=740251886724410&ref=watch_permalink">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('events.item-4__2') }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Cube Portfolio Blocks - Item -->
                    <!-- Cube Portfolio Blocks - Item -->
                    <div class="cbp-item webminars">
                        <div class="cbp-item-wrapper">
                            <div class="u-block-hover g-parent">
                                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/events/Foro-de-integracion-agro-productiva.jpg') }}">
                                <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                    <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                        <li class="list-inline-item">
                                            <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSducC0TF9psJ5UM84Hq4rSbvUG5q8ZNzd0FC45qYTKFG8U1bg/viewform">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('events.item-5__2') }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Cube Portfolio Blocks - Item -->
                    <!-- Cube Portfolio Blocks - Item -->
                    <div class="cbp-item webminars">
                        <div class="cbp-item-wrapper">
                            <div class="u-block-hover g-parent">
                                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/events/Foro-de-integracion-agro-productiva-2.jpg') }}">
                                <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/events/Foro-de-integracion-agro-productiva-3.jpg') }}">
                                <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                                    <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                        <li class="list-inline-item">
                                            <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.facebook.com/105367431174968/posts/147470913631286/?sfnsn=mo&d=n&vh=e">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                                <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('events.item-6__2') }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Cube Portfolio Blocks - Item -->
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
