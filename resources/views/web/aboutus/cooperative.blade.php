@extends('web.template.main')

@section('title', __('cooperative.title-tab'))

@section('style')
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.css') }}">
@endsection

@section('content')
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}" style="margin-top: 6rem!important;">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_3--after" style="height: 130%; background-image: url('{{ asset('web/img/aboutus/cooperative/digitalcooperativebanner.jpg') }}'); transform: translate3d(0px, -78.0646px, 0px);"></div>
        <div class="u-bg-overlay_iiner">
            <div class="container g-color-white text-center g-bg-cover__inner g-py-170">
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('cooperative.title') }}</h2>
                <p class="g-font-size-24">{{ __('cooperative.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="mt-5" id="go-to-content">
        <div class="container">
            <div class="row">
                <div class="col-12 g-px-50 g-px-10--md text-center">
                    <h2 class="text-upercase g-line-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary" >{{ __('cooperative.content-title0') }}</h2>
                    <p class="g-font-size-20 justified-content">{{ __('cooperative.content-text0') }}</p>

                    <img class="img-fluid" src="{{ asset('web/img/aboutus/cooperative/miCampoAllUsers.jpg') }}" alt="miCampoAllUsers"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 g-mt-70 text-center">
                    <h2 class="text-upercase g-ltext- ine-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('cooperative.content-title') }}</h2>
                </div>
                <div class="col-12">
                    <div class="embed-responsive embed-responsive-16by9 g-mb-30">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/gr5UrOvJxfg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center g-mb-60">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h2 class="text-upercase g-line-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('cooperative.content-title__2') }}</h2>
                        <!--<div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>-->
                        <p class="lead mb-0">{{ __('cooperative.content-text__2') }}</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 g-mb-30">
                    <div class="media g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover g-bg-white g-rounded-4 g-transition-0_3 g-pa-20">
                        <div class="d-flex mr-4">
                            <img class="g-width-70 g-height-70 rounded-circle" src="{{ asset('web/img/icons/farm.png') }}" alt="Image description">
                        </div>
                        <div class="media-body">
                            <blockquote class="lead g-mb-15">{{ __('cooperative.content-item-1__2') }}</blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 g-mb-30">
                    <div class="media g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover g-bg-white g-rounded-4 g-transition-0_3 g-pa-20">
                        <div class="d-flex mr-4">
                            <img class="g-width-70 g-height-70 rounded-circle" src="{{ asset('web/img/icons/open-source.png') }}" alt="Image description">
                        </div>
                        <div class="media-body">
                            <blockquote class="lead g-mb-15">{{ __('cooperative.content-item-2__2') }}</blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 g-mb-30">
                    <div class="media g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover g-bg-white g-rounded-4 g-transition-0_3 g-pa-20">
                        <div class="d-flex mr-4">
                            <img class="g-width-70 g-height-70 rounded-circle" src="{{ asset('web/img/icons/reading.png') }}" alt="Image description">
                        </div>
                        <div class="media-body">
                            <blockquote class="lead g-mb-15">{{ __('cooperative.content-item-3__2') }}</blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 g-mb-30">
                    <div class="media g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover g-bg-white g-rounded-4 g-transition-0_3 g-pa-20">
                        <div class="d-flex mr-4">
                            <img class="g-width-70 g-height-70 rounded-circle" src="{{ asset('web/img/icons/certificate.png') }}" alt="Image description">
                        </div>
                        <div class="media-body">
                            <blockquote class="lead g-mb-15">{{ __('cooperative.content-item-4__2') }}</blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 g-mb-30">
                    <div class="media g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover g-bg-white g-rounded-4 g-transition-0_3 g-pa-20">
                        <div class="d-flex mr-4">
                            <img class="g-width-70 g-height-70 rounded-circle" src="{{ asset('web/img/icons/blog.png') }}" alt="Image description">
                        </div>
                        <div class="media-body">
                            <blockquote class="lead g-mb-15">{{ __('cooperative.content-item-5__2') }}</blockquote>
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
