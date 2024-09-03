@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin mission-and-values-banner">
        <div class="m-auto content-wrap">
           <div class="grid mission-banner">
                <div class="img-col"><img src="{{ $banner_logo['url'] }}" alt="{{ $banner_logo['alt'] }}"></div>
                <div class="info-col">
                     <h2>{{ $banner_heading }}</h2>
                     <p>{{ $banner_info }}</p>
                </div>
           </div>

        </div>
    </div>
@endsection
