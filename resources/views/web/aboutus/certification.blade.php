@extends('web.template.main')

@section('title', __('events_agromakers.title-tab'))

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
                <h2 class="g-font-weight-700 g-font-size-40 g-font-size-70--md text-uppercase">{{ __('events_agromakers.title') }}</h2>
                <p class="g-font-size-24">{{ __('events_agromakers.sub-title') }}</p>
            </div>
        </div>
    </section>

    <section class="mt-5" id="go-to-content">
        <div class="container">
            <div class="text-center g-mb-70">
                <h2 class="text-uppercase g-line-height-1 g-font-weight-700 g-font-size-35 g-mb-30 g-color-primary">{{ __('events_agromakers.content-title') }}</h2>
                <p class="g-font-size-20 justified-content">{{ __('events_agromakers.content-text') }}</p>
            </div>
        </div>
    </section>
@endsection
<script src="{{ asset('web/plugins/dzsparallaxer/dzsparallaxer.js') }}"></script>
<script src="{{ asset('web/plugins/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
<script src="{{ asset('web/plugins/dzsparallaxer/advancedscroller/plugin.js') }}"></script>
@section('script')

@endsection

@section('footer')
    @include('web.template.footer')
@endsection
