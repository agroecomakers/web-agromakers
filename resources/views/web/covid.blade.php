@extends('web.template.main')

@section('title', __('covid.title-tab'))

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.css') }}">

    <link rel="stylesheet" href="{{ asset('web/plugins/slick-carousel/slick/slick.css') }}">
@endsection

@section('content')
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}" style="margin-top: 6rem!important;">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_3--after" style="height: 130%; background-image: url('{{ asset('web/img/aboutus/covid/covid-banner-1200.jpg') }}'); transform: translate3d(0px, -78.0646px, 0px);"></div>
        <div class="u-bg-overlay_iiner">
            <div class="container g-color-white text-center g-bg-cover__inner g-py-170">
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('covid.title') }}</h2>
                <p class="g-font-size-24">{{ __('covid.sub-title') }}</p>
            </div>
        </div>
    </section>


    <section class="container g-mt-50">
        <div class="row justify-content-center g-mb-60">
            <div class="col-12 text-center">
                <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('covid.content-title__1') }}</h2>
                <p class="mb-0 g-font-size-20">{{ __('covid.content-text__1') }}</p>
            </div>
        </div>
    </section>

    <section class="container-fluid g-mb-50">
        <!-- Dynamic Process -->
        <div class="js-carousel g-pb-50 g-pb-0--md g-pt-130--md"
             data-infinite="true"
             data-pagi-classes="u-carousel-indicators-v6 text-center g-width-780--md">
            <div class="js-slide" data-title="{{ __('covid.item-title-1__1') }}">
                <div class="container-fluid">
                    <div class="g-max-width-800 mx-auto">
                        <img class="d-inline-block" width="100%" src="{{ asset('web/img/aboutus/covid/Covid1-2-400.jpg') }}" alt="Image description">
                    </div>
                </div>

                <div class="container text-center g-max-width-550">
                    <h4 class="g-font-size-25 text-uppercase g-font-weight-700 g-color-primary g-mb-20">{{ __('covid.item-title-1__1') }}</h4>
                    <p class="g-font-size-15 g-color-black g-mb-40">{{ __('covid.item-text-1__1') }}</p>
                </div>
            </div>
            <div class="js-slide" data-title="{{ __('covid.item-title-2__1') }}">
                <div class="container-fluid">
                    <div class="g-max-width-800 mx-auto">
                        <img class="d-inline-block" width="100%" src="{{ asset('web/img/aboutus/covid/Covid3-4-400.jpg') }}" alt="Image description">
                    </div>
                </div>

                <div class="container text-center g-max-width-550">
                    <h4 class="g-font-size-25 text-uppercase g-font-weight-700 g-color-primary g-mb-20">{{ __('covid.item-title-2__1') }}</h4>
                    <p class="g-font-size-15 g-color-black g-mb-40">{{ __('covid.item-text-2__1') }}</p>
                </div>
            </div>
            <div class="js-slide" data-title="{{ __('covid.item-title-3__1') }}">
                <div class="container-fluid">
                    <div class="g-max-width-800 mx-auto">
                        <img class="d-inline-block" width="100%" src="{{ asset('web/img/aboutus/covid/Covid5-6-400.jpg') }}" alt="Image description">
                    </div>
                </div>

                <div class="container text-center g-max-width-550">
                    <h4 class="g-font-size-25 text-uppercase g-font-weight-700 g-color-primary g-mb-20">{{ __('covid.item-title-3__1') }}</h4>
                    <p class="g-font-size-15 g-color-black g-mb-40">{{ __('covid.item-text-3__1') }}</p>
                </div>
            </div>
            <div class="js-slide" data-title="{{ __('covid.item-title-4__1') }}">
                <div class="container-fluid">
                    <div class="g-max-width-800 mx-auto">
                        <img class="d-inline-block" width="100%" src="{{ asset('web/img/aboutus/covid/Covid7-8-400.jpg') }}" alt="Image description">
                    </div>
                </div>

                <div class="container text-center g-max-width-550">
                    <h4 class="g-font-size-25 text-uppercase g-font-weight-700 g-color-primary g-mb-20">{{ __('covid.item-title-4__1') }}</h4>
                    <p class="g-font-size-15 g-color-black g-mb-40">{{ __('covid.item-text-4__1') }}</p>
                </div>
            </div>
        </div>
        <!-- End Dynamic Process -->
        </section>
@endsection

@section('script')
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.js') }}"></script>

    <script src="{{ asset('web/plugins/appear.js') }}"></script>
    <script src="{{ asset('web/plugins/slick-carousel/slick/slick.min.js') }}"></script>

    <script src="{{ asset('web/js/hs.carousel.js') }}"></script>

    <script>
        $(document).on('ready', function () {
            // initialization of carousel
            $('#carousel5').on('click', '.js-thumb', function (e) {
                e.stopPropagation();
                var i = $(this).data('slick-index');

                if ($('#carousel5').slick('slickCurrentSlide') !== i) {
                    $('#carousel5').slick('slickGoTo', i);
                }
            });

            $.HSCore.components.HSCarousel.init('.js-carousel');
        });
    </script>
@endsection

@section('footer')
    @include('web.template.footer')
@endsection
