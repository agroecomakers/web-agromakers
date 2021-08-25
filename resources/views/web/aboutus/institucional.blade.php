@extends('web.template.main')

@section('title', __('institucional.title-tab'))

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
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('institucional.title') }}</h2>
                <p class="g-font-size-24">{{ __('institucional.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-my-50">
                <div class="col-12 text-center">
                    <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('institucional.content-title') }}</h2>
                    <!--<div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>-->
                    <p class="mb-0 g-font-size-20">{{ __('institucional.content-text') }}</p>
                </div>
            </div>
            <!-- Icon Blocks -->
            <div class="row">
                <div class="col-md-4 g-mb-30">
                    <!-- Icon Blocks -->
                    <div class="text-center">
                        <span class="u-icon-v2 g-width-80 g-height-80 g-font-weight-600 g-font-size-30 g-color-gray-dark-v3 g-brd-3 g-brd-primary g-rounded-50x g-mb-25"><i class="g-font-style-normal">1</i></span>
                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-gray-dark-v1 g-mb-15">{{ __('institucional.content-item-title-1__1') }}</h3>
                        <p class="mb-0">{{__('institucional.content-item-content-1__1')}}</p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-md-4 g-mb-30">
                    <!-- Icon Blocks -->
                    <div class="text-center">
                        <span class="u-icon-v2 g-width-80 g-height-80 g-font-weight-600 g-font-size-30 g-color-gray-dark-v3 g-brd-3 g-brd-primary g-rounded-50x g-mb-25"><i class="g-font-style-normal">2</i></span>
                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-gray-dark-v1 g-mb-15">{{ __('institucional.content-item-title-2__1') }}</h3>
                        <p class="mb-0">{{__('institucional.content-item-content-2__1')}}</p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-md-4">
                    <!-- Icon Blocks -->
                    <div class="text-center">
                        <span class="u-icon-v2 g-width-80 g-height-80 g-font-weight-600 g-font-size-30 g-color-gray-dark-v3 g-brd-3 g-brd-primary g-rounded-50x g-mb-25"><i class="g-font-style-normal">3</i></span>
                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-gray-dark-v1 g-mb-15">{{ __('institucional.content-item-title-3__1') }}</h3>
                        <p class="mb-0">{{__('institucional.content-item-content-3__1')}}</p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
            </div>
            <!-- End Icon Blocks -->

            <div class="row g-mb-70">
                <div class="col-lg-8 g-mb-30">
                    <img class="img-fluid w-100" src="{{ asset('web/img/aboutus/institucional/panoramica-de-bogota.jpg') }}" alt="Image Description">
                </div>
                <div class="col-lg-4 g-mb-30">
                    <div class="mb-5">
                        <h2 class="g-color-black mb-1">{{ __('institucional.content-item-title-1__2') }}</h2>
                        <p>{{ __('institucional.content-item-text-1__2') }}</p>
                    </div>
                    <div class="mb-5">
                        <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-25 g-px-30 g-py-12" href="https://bogota.gov.co/mi-ciudad/desarrollo-economico" target="_blank">{{ __('institucional.button-see-more') }}</a>
                    </div>
                </div>
            </div>
            <div class="row g-mb-70">
                <div class="col-lg-4 g-mb-30">
                    <div class="mb-5">
                        <h2 class="g-color-black mb-1">{{ __('institucional.content-item-title-2__2') }}</h2>
                        <p>{{ __('institucional.content-item-text-2__2') }}</p>
                    </div>
                    <div class="mb-5">
                        <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-25 g-px-30 g-py-12" href="https://bogota.gov.co/mi-ciudad/desarrollo-economico/mas-de-13500-canastas-vendidas-en-la-mercaton-campesina" target="_blank">{{ __('institucional.button-see-more') }}</a>
                    </div>
                </div>
                <div class="col-lg-8 g-mb-30">
                    <img class="img-fluid w-100" src="{{ asset('web/img/aboutus/institucional/mercados-campesinos-a-domicilio.jpg') }}" alt="Image Description">
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.js') }}"></script>

    <script>

        $(document).on('ready', function () {

        });
    </script>
@endsection

@section('footer')
    @include('web.template.footer')
@endsection
