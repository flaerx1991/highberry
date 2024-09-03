@extends('Layouts.wrapper')
@section('content')
    @php($count = isset($category['children']) ? count($category['children']) : count($category['products']))

    <?php 
        $addClass = '';
        switch ($count) {
            case $count == 1:
                $addClass = ' one-col';
            break;
            case $count > 2:
                $addClass = ' more-col';
            break;
            default:
        }
    ?>
    <?php 
      
        global $post;
        // $ma = get_post();
        $post_slug = $post->post_name;
        // dump($post_slug);

    ;?>
    <div class="categories-product-grid">
        <div class="categories-wrap">
            <a href="{{ get_term_link($category['term_id']) }}" class="cat-tog">
                {{-- <img src="" alt=""> --}}
                <h3>{{ $category['name'] }}</h3>
            </a> 
            <div class="subcategory-grid {{ $addClass }}">
                @if(isset($category['children']))
                    @foreach ($category['children'] as $child_category)
                        <div class="subcategory-item">
                            <a href="{{ get_term_link($child_category['data']['term_id']) }}">
                                <div class="img-wrap"><img src="{{ $child_category['image']['url'] }}" alt=""></div>
                                <div class="subcategory-name">
                                    <p>{{ $child_category['data']['name'] }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                @elseif(isset($category['products']))
                    @foreach ($category['products'] as $product)
                        <?php $isLinkActive = isset($product['activate_product_url']) && $product['activate_product_url']; ?>
                        <div class="subcategory-item">
                            <a href="{{ ($isLinkActive) ? $product['link'] : '' }}" style="{!! ($isLinkActive) ? '' : 'pointer-events:none' !!}" >
                                <div class="img-wrap"><img src="{{ $product['product_tab_square_image']['url'] }}" alt=""></div>
                                <div class="subcategory-name">
                                    <p>{{ $product['title'] }}</p>
                                </div>
                                @if(isset($product['product_ingredients']))
                                    <div class="product-ingredients">
                                        {!! $product['product_ingredients'] !!}
                                    </div>
                                @endif
                                
                                @if($product['product_card_additional_info_items'])
                                <?php 
      
                                    $cont_prod_tabs = count($product['product_card_additional_info_items']);
                        
                                ;?>
                                    <div class="additional-info-product-tabs" style="{!! ($cont_prod_tabs == 1) ? 'margin-top:0;' : '' !!}">
                                       
                                        @foreach ($product['product_card_additional_info_items'] as $additional_tabs_prod)
                                        
                                            <div class="add-info-product-item">
                                                <div class="green-circle-item"><img src="{{ $additional_tabs_prod['item_icon']['url'] }}" alt="{{ $additional_tabs_prod['item_icon']['alt'] }}"></div>
                                                <div class="text-info">
                                                    <p class="top-text">{{ $additional_tabs_prod['item_name'] }}</p>
                                                    <p class="bottom-text">{{ $additional_tabs_prod['item_info'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
