@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin after-slider-textblock">
        <div class="m-auto content-wrap">
            <div class="flex after-slider-block">
                <h2>{{ $after_slider_heading }}</h2>
                <div class="flex two-cols-info">
                    <div class="img-col"><img src="{{ $after_slider_img['url'] }}" alt="{{ $after_slider_img['alt'] }}"></div>
                    <div class="text-col-block">
                        <div class="know-more-link text-col">{!! $after_slider_info !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection