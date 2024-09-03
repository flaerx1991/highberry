@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin activities-cards {{ $cards_additional_class }}">
        <div class="m-auto content-wrap">
            {!! ($activities_cards_heading) ? '<h2>' . $activities_cards_heading . '</h2>' : '' !!}
            <div class="img-wrap">  {!! ($additional_image) ? '<img src="' . $additional_image['url'] .'" src="' . $additional_image['alt'] .'" >' : '' !!}</div>
            
            <div class="raising-cards">
                @foreach ($cards_items as $item)
                    <div class="raising-card-item">
                        @if ($item['card_img'])
                            <div class="img-col"><img src="{{ $item['card_img']['url'] }}" alt="{{ $item['card_img']['alt'] }}"></div>
                        @endif
                       
                        <div class="raising-card-info">
                            <div class="card-logo"><img src="{{ $item['card_icon']['url'] }}" alt="{{ $item['card_icon']['alt'] }}"></div>
                            <p class="name-of-card">{{ $item['card_title'] }}</p>
                            <div class="add-info">
                                {!! $item['card_info'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection