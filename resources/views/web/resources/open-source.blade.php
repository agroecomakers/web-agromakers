@extends('web.template.main')

@section('title', __('open-source.title-tab'))

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.css') }}">
@endsection

@section('content')
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}" style="margin-top: 6rem!important;">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_3--after" style="height: 130%; background-image: url('{{ asset('web/img/resources/open-source/Farmbot.jpg') }}'); transform: translate3d(0px, -78.0646px, 0px);"></div>
        <div class="u-bg-overlay_iiner">
            <div class="container g-color-white text-center g-bg-cover__inner g-py-170">
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('open-source.title') }}</h2>
                <p class="g-font-size-24">{{ __('open-source.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="container g-mt-50">
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('open-source.content-title__1') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('open-source.content-text__1') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="text-center">
                    <span class="d-block g-color-primary g-font-size-35 g-mb-5"><i class="fa fa-book"></i></span>
                    <h3 class="h5 g-color-black text-uppercase mb-3">{{ __('open-source.item-title-1__1') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-1__1') }}</p>
                </div>
                <!-- End Icon Blocks -->
            </div>
            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="text-center">
                    <span class="d-block g-color-primary g-font-size-35 g-mb-5"><i class="fa fa-lightbulb-o"></i></span>
                    <h3 class="h5 g-color-black text-uppercase mb-3">{{ __('open-source.item-title-2__1') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-2__1') }}</p>
                </div>
                <!-- End Icon Blocks -->
            </div>
            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="text-center">
                    <span class="d-block g-color-primary g-font-size-35 g-mb-5"><i class="fa fa-clock-o"></i></span>
                    <h3 class="h5 g-color-black text-uppercase mb-3">{{ __('open-source.item-title-3__1') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-3__1') }}</p>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 g-mb-30">
                <img class="img-fluid w-100" src="{{ asset('web/img-temp/800x496/img1.jpg') }}" alt="Image Description">
            </div>
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('open-source.content-title__2') }}</h2>
                    <p>{{ __('open-source.content-text__2') }}</p>
                </div>
                <div class="mb-5">
                    <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-25 g-px-30 g-py-12" href="https://github.com/sercami97/EstacionMeteorologica" target="_blank">{{ __('open-source.button-see-more') }}</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('open-source.content-title__3') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('open-source.content-text__3') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/Vending.jpg') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.instagram.com/p/B7TEl2AJsL9/?igshid=1ctu6p1opl22o">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-1__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-1__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/Farmbot.jpg') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://farm.bot">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-2__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-2__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/open-source-vending-soft.jpg') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://blog.capterra.com/free-online-food-ordering-software/">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-3__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-3__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/IoT-Automatic-Plant-Watering-System.jpg') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.instructables.com/id/IoT-Automatic-Plant-Watering-System/">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-4__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-4__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/garden-cultivation.JPG') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="http://planetwhizbang.blogspot.com">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-5__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-5__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/RC-Robot-Tractor.jpg') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.instructables.com/id/RC-Robot-tractor">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-6__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-6__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/farmos.jpg') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://farmos.org">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-7__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-7__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/BuzzBox.webp') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://www.osbeehives.com">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-8__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-8__3') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('web/img/resources/open-source/The-Growroom.jpeg') }}">
                    <div class="d-flex w-100 h-100 g-bg-black-opacity-0_6 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in u-block-hover__additional--fade u-block-hover__additional--fade-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" target="_blank" href="https://medium.com/space10/space10-open-sources-the-growroom-aa7ca6621715">
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
                    <h3 class="h5 g-color-black g-font-weight-700 mb-1">{{ __('open-source.item-title-9__3') }}</h3>
                    <p class="g-color-gray-dark-v4">{{ __('open-source.item-text-9__3') }}</p>
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
