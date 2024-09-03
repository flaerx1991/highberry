@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin-desktop-mid gallery-slider-sec">
        <div class="m-auto content-wrap">
            <div class="swiper gallery-slider">
                <div class="swiper-wrapper slider-raise">
                    @foreach ($gallery_slides as $gallery_slide)
                        <div class="swiper-slide slide">
                            <div class="img-wrap"><img src="{{ $gallery_slide['gallery_item_image']['url'] }}" alt="{{ $gallery_slide['gallery_item_image']['alt'] }}"></div>
                            <div class="slide-name"><p>{{ $gallery_slide['gallery_item_name'] }}</p></div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                
                
                <div class="buttons-wrap">
                    <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/raising-slider-prev-arrow.svg" alt=""></div>
                    <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/raising-slider-next-arrow.svg" alt=""></div>
                </div>
                
            </div>
            <div class="swiper gallery-slider-thumbs">
                <div class="swiper-wrapper slider-thumbs-gallery">
                    @foreach ($gallery_slides as $gallery_slide)
                        <div class="swiper-slide slide">
                            <div class="img-wrap"><img src="{{ $gallery_slide['gallery_item_image']['url'] }}" alt="{{ $gallery_slide['gallery_item_image']['alt'] }}"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if ($gallery_videos)
                <div class="videos-wrap">
                    @foreach($gallery_videos as $gallery_video_item)
                        <div class="gallery-videos">
                            <div class="gallery-video-wrap">
                                <div id="gallery-video" class="video" data-video-id="{{ $gallery_video_item['gallery_video_id'] }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
          
           
        </div>
    </div>
@endsection

