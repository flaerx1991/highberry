@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin activities-cards posts-grid-without-cat"> 
        <div class="m-auto content-wrap">            
            <div class="raising-cards">
                @foreach ($items as $item)
                    <div class="raising-card-item">
                        @if ($item['post_item_img'])
                            <div class="img-col"><img src="{{ $item['post_item_img']['url'] }}" alt="{{ $item['post_item_img']['alt'] }}"></div>
                        @endif
                       
                        <div class="raising-card-info">
                            <div class="card-logo"><img src="{{ $item['post_icon']['url'] }}" alt="{{ $item['post_icon']['alt'] }}"></div>
                            <p class="name-of-card">{{ $item['title'] }}</p>
                            <div class="add-info know-more-link">
                                {!! wp_trim_words($item['post_description'], 45, '...') !!}
                                <a href="{{ $item['link'] }}">{{ $item['link_text']}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection