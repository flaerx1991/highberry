@extends('Layouts.wrapper')
@section('content')
<div class="main-video-before-footer">
    <div class="before-footer-video-wrap">
      <div class="toggle-play-button">
        <img class="playbutton" src="<?php echo get_template_directory_uri(); ?>/assets/icons/video-before-footer-play-button.svg" alt="">
      </div>
      <div id="before-footer-video" class="video" data-video-id="{{ $video_id }}">
      </div>
    </div>
</div>
@endsection