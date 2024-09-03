@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin-full raising-slider">
        <div class="m-auto content-wrap">
            <div class="swiper production-slider">
                <div class="swiper-wrapper slider-raise">
                    @foreach ($raising_slide as $raising_item)
                        <div class="swiper-slide slide" data-imgurl="{{ $raising_item['product_image']['url'] }}" data-productname="{{ $raising_item['product_name'] }}" data-icon1="{{ $raising_item['product_icon1']['url'] }}" data-textinf1="{!! $raising_item['product_info1'] !!}" data-icon2="{{ $raising_item['product_icon2']['url'] }}" data-textinf2="{!! $raising_item['product_info2'] !!}">
                            <div class="img-wrap"><img src="{{ $raising_item['product_image']['url'] }}" alt="{{ $raising_item['product_image']['alt'] }}"></div>
                            <div class="slide-name">{{ $raising_item['product_name'] }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
        
                <div class="buttons-wrap">
                    <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/raising-slider-prev-arrow.svg" alt=""></div>
                    <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/raising-slider-next-arrow.svg" alt=""></div>
                </div>
        
            </div>
        </div>
    </div>
@endsection

