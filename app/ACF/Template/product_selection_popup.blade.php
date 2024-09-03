@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin product-selection-popup {!! (is_front_page()) ? '' : 'pop-up-padding' !!}">
        <div class="m-auto content-wrap">
            {!! ($product_popup_heading) ? '<h2>' . $product_popup_heading . '</h2>' : '' !!}
           <div class="grid product-selection-popup-grid">
                <div class="product-selection-list-up list-grid">
                    <ul class="flex product-list-up list">
                        @foreach ($product_popup_repeater_upper as $product)
                            <li class="product-list-item">
                                <div class="icon-button"><img src="{{ $product['product_icon']['url'] }}" alt="{{ $product['product_icon']['alt'] }}"></div> 
                                <div class="selection-pop-up">
                                    <div class="popup-inner">
                                        <div class="popup-item">{{ $product['product_name'] }}</div>
                                        <div class="divider"></div>
                                        <div class="popup-item">{{ $product['product_quantity'] }}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach  
                    </ul>
                </div>
                <div class="product-selection-img-medium"><img src="{{ $products_image['url'] }}" alt="{{ $products_image['alt'] }}"></div>
                <div class="product-selection-list-down list-grid">
                    <ul class="flex product-list-down list">
                        @foreach ($product_popup_repeater_down as $product)
                            <li class="product-list-item">
                                <div class="icon-button"><img src="{{ $product['product_icon']['url'] }}" alt="{{ $product['product_icon']['alt'] }}"></div> 
                                <div class="selection-pop-up">
                                    <div class="popup-inner">
                                        <div class="popup-item">{{ $product['product_name'] }}</div>
                                        <div class="divider"></div>
                                        <div class="popup-item">{{ $product['product_quantity'] }}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach  
                    </ul>
                </div>
           </div>
        </div>
    </div>
@endsection