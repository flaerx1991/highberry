@extends('Layouts.wrapper')
@section('content')
    <div class="video-full-screen-banner-youtube">
        <div class="video-wrap">
            <div class="content-wrap">
                <img class="logo" src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}">
                <h1>{{ $text }}</h1>
            </div>
            <img class="poster" src="{{ $poster_image['url'] }}" alt="{{ $poster_image['alt'] }}">
            <div class="player" data-video-id="{{ $video_id }}"></div>

            <div class="video-lighthouse-button video-lighthouse-button-banner">
                <div class="showreel-video">
                    <div class="showreel-button-wrap">
                        <div class="showreel-button">
                            <div class="showreel-img-wrap">
                                <img src="{{ $full_banner_video_icon['url'] }}" alt="{{ $full_banner_video_icon['alt'] }}">
                            </div>
                            <p>{{ $full_banner_video_button_title }}</p>
                        </div>
                    </div>
                    <div class="video-banner">
                        <div class="video-wrap" id="showreel-video"  data-video-id="{{ $full_banner_video_id }}"></div>
                    </div>
                </div>
            </div>
            <img class="next-section-button"
                 src="{{ $next_section_button_image['url'] }}"
                 alt="{{ $next_section_button_image['alt'] }}"
                 onclick="scrollToSection(this.parentNode.parentNode.parentNode{!! ($section_id) ? ' ,' . $section_id : '' !!})">
        </div>
    </div>
@endsection