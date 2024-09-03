@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin mission-and-values-cards">
        <div class="m-auto content-wrap">
            <div class="mv-cards">
                @foreach ($mv_cards as $mv_item)
                    <div class="mv-card-item">
                        <div class="card-logo"><img src="{{ $mv_item['mv_icon']['url'] }}" alt="{{ $mv_item['mv_icon']['alt'] }}"></div>
                        <p class="name-of-card">{{ $mv_item['mv_heading'] }}</p>
                        <div class="add-info">
                            {!! $mv_item['mv_info'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

