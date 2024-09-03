@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin-full main-slider">
        <div class="m-auto content-wrap">
            <div class="swiper product-slider">
                <div class="swiper-wrapper swiper-wr">
                    @foreach ($slide_repeater as $slide_item)
                    <?php $isLinkActive = isset($slide_item['slide_product_link']) && $slide_item['slide_product_link']; ?>
                        <div class="swiper-slide slide" data-category="{{ $slide_item['slide_product_category'] }}" data-products="{!! $slide_item['slide_product_items'] !!}" data-url="{{ ($isLinkActive) ? $slide_item['slide_product_link']['url'] : '' }}" data-link-title="{{ ($isLinkActive) ? $slide_item['slide_product_link']['title'] : '' }}">
                            <div class="img-wrap">
                                <img src="{{ $slide_item['slide_img']['url'] }}" alt="{{ $slide_item['slide_img']['alt'] }}">
                            </div>
                            <div class="info-wrap">
                                <div class="product-category-mob"> <p>{{ $slide_item['slide_product_category'] }}</p></div>
                                <div class="slide-heading-mob"> <h2>{{ $main_slider_heading }}</h2></div>
                                <div class="mobile-prod-list know-more-link">{!! $slide_item['slide_product_items']  !!} 
                                    @if ($isLinkActive)
                                        <a href="{{ $slide_item['slide_product_link']['url'] }}"> {{ $slide_item['slide_product_link']['title'] }} </a> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="heading-slider"> <h2>{{ $main_slider_heading }}</h2></div>
                <div class="swiper-pagination"></div>
                <div class="buttons-wrap">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
@endsection