@extends('Layouts.wrapper')
@section('content')
<div class="video-lighthouse-button">
    <div class="showreel-video">
        <div class="showreel-button-wrap">
            <div class="showreel-button">
                <div class="showreel-img-wrap">
                    <img src="{{ $button_icon['url'] }}" alt="{{ $button_icon['alt'] }}">
                </div>
                <p>{{ $button_text }}</p>
            </div>
        </div>
        <div class="video-banner">
            <div class="video-wrap" id="showreel-video"  data-video-id="{{ $showreel_video_id }}"></div>
        </div>
    </div>
</div>
@endsection

