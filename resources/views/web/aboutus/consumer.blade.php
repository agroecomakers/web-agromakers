@extends('web.template.main')

@section('title', __('consumer.title-tab'))

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/fancybox/jquery.fancybox.min.css') }}">
@endsection

@section('content')
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}" style="margin-top: 6rem!important;">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_3--after" style="height: 130%; background-image: url('{{ asset('web/img-temp/1200x960/img1.jpg') }}'); transform: translate3d(0px, -78.0646px, 0px);"></div>
        <div class="u-bg-overlay_iiner">
            <div class="container g-color-white text-center g-bg-cover__inner g-py-170">
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('consumer.title') }}</h2>
                <p class="g-font-size-24">{{ __('consumer.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="container g-mt-50">
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('consumer.content-title__1') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('consumer.content-text__1') }}</p>
            </div>
        </div>
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('consumer.content-title__2') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('consumer.content-text__2') }}</p>
            </div>
        </div>

        <div class="row g-mb-70">
            <div class="col-lg-8 g-mb-30">
                <article class="u-shadow-v21 g-bg-size-cover g-bg-pos-bottom-center text-center" style="background-image: url('{{ asset('web/img/ressources/learn/cursohuertaorganica.jpg') }}');">
                    <div class="g-pos-rel g-z-index-1 g-px-50 g-py-200">
                        <a class="js-fancybox d-block" href="javascript:;" data-src="https://www.youtube.com/embed/-ehlyezOtxg?autoplay=1">
                            <span class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-font-size-18 g-rounded-50x g-cursor-pointer"><i class="g-pos-rel g-left-2 fa fa-play"></i></span>
                        </a>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('consumer.item-title-1__1') }}</h2>
                    <p>{{ __('consumer.item-text-1__1') }}</p>
                </div>
            </div>
        </div>
        <div class="row g-mb-70">
            <div class="col-lg-4 g-mb-30">
                <div class="mb-5">
                    <h2 class="g-color-black mb-1">{{ __('consumer.item-title-2__1') }}</h2>
                    <p>{{ __('consumer.item-text-2__1') }}</p>
                </div>
            </div>
            <div class="col-lg-8 g-mb-30">
                <article class="u-shadow-v21 g-bg-size-cover g-bg-pos-bottom-center text-center" style="background-image: url('{{ asset('web/img/aboutus/eresconsumidor/mercadocampesino2.jpg') }}')">
                    <div class="g-pos-rel g-z-index-1 g-px-50 g-py-200">
                        <a href="http://www.desarrolloeconomico.gov.co/calendario/mercado-campesino" target="_blank">
                            <span class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-font-size-18 g-rounded-50x g-cursor-pointer"><i class="g-pos-rel g-left-2 fa fa-link"></i></span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.js') }}"></script>
    <script src="{{ asset('web/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

    <script src="{{ asset('web/js/hs.popup.js') }}"></script>

    <script >
        $(document).ready(function () {
            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');
        });
    </script>

@endsection

@section('footer')
    @include('web.template.footer')
@endsection
