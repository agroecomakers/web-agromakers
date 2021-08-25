@extends('web.template.main')

@section('title', __('map.title-tab'))

@section('style')

@endsection

@section('content')
    <section class="container-fluid g-mt-50" style="margin-top: 10rem!important;">
        <div class="row">
            <div class="col-12">
                <div class="embed-responsive" style="height: 80vh; width: 100%">
                    <iframe class="embed-responsive-item" src="http://agromakers.org:3838/interactiveBlightMap"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection

@section('footer')
    @include('web.template.footer')
@endsection
