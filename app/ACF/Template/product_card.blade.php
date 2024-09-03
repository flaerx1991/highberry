@extends('Layouts.wrapper')
@section('content')
    <div class="product-card">
        <div class="content-wrap">
            <div class="slider-and-additional-info">
                <div class="product-card-slider">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            @foreach ($product_images_slider as $prod_card_img)
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container"> 
                                        <img src="{{ $prod_card_img['product_card_slide_img']['url'] }}"
                                        alt="{{ $prod_card_img['product_card_slide_img']['alt'] }}"> 
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="slider-arrows-container">
                            <div class="swiper-button-prev-img prod-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/prod-prev-arrow.svg" alt=""></div>
                            <div class="swiper-button-next-img prod-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/prod-next-arrow.svg" alt=""></div>
                        </div>
                    </div>
                    <div  class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach ($product_images_slider as $prod_card_img)
                                <div class="swiper-slide">
                                    <div class="swiper-slide-container"> 
                                        <img src="{{ $prod_card_img['product_card_slide_img']['url'] }}" 
                                        alt="{{ $prod_card_img['product_card_slide_img']['alt'] }}"> 
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div class="main-product-info">
                        <h3>{{ $heading }}</h3>
                        <div class="additional-product-description">{!! $product_card_description !!}</div>
                    </div>
                    <div class="additional-info-product-tabs">
                        @foreach ($product_card_additional_info_items as $add_tab_info)
                            <div class="add-info-product-item">
                                <div class="green-circle-item"><img src="{{ $add_tab_info['item_icon']['url'] }}" alt="{{ $add_tab_info['item_icon']['alt'] }}"></div>
                                <div class="text-info">
                                    <p class="top-text">{{ $add_tab_info['item_name'] }}</p>
                                    <p class="bottom-text">{{ $add_tab_info['item_info'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
        
                </div>
            </div>
            @if ($relative_products)
                <div class="additional-products-slider">
                    <h3>{{ $additional_products_slider_title }}</h3>
                    <div class="swiper-container additional-products-slider-wrap">
                        <div class="swiper-wrapper">
                            @foreach ($relative_products as $relative_product)
                                <?php $isLinkActive = isset($relative_product['activate_product_url']) && $relative_product['activate_product_url']?>
                                <div class="swiper-slide">
                                    <div class="prod-item">
                                        <a href="{{ ($isLinkActive) ? $relative_product['link'] : '' }}" style="{!! ($isLinkActive) ? '' : 'pointer-events:none' !!}" >
                                            <div class="img-wrap"><img src="{{ $relative_product['product_tab_square_image']['url'] }}" alt="{{ $relative_product['product_tab_square_image']['alt'] }}"></div>
                                            <div class="prod-name">
                                                <p>{{ $relative_product['title'] }}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="slider-prod-arrows-container">
                        <div class="swiper-button-prev-prod"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/prev-arrow-prod-card.svg" alt=""></div>
                        <div class="swiper-button-next-prod"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/next-arrow-prod-card.svg" alt=""></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

