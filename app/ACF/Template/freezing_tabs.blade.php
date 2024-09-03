@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin freezing-tabs">
        <div class="m-auto content-max-width content-wrap">
            <div class="production-cards">
                @foreach ($freezing_tabs_repeater as $freeze_tab)
                    <div class="production-cards-item">
                        <div class="card-first-col">
                            <p class="card-title">
                                {{ $freeze_tab['icon_heading'] }}
                            </p>
                            <div class="img-wrap">
                                <img src="{{ $freeze_tab['icon_image']['url'] }}" alt="{{ $freeze_tab['icon_image']['alt'] }}">
                            </div>
            
                        </div>
                        <div class="card-second-col">
                            <p class="card-second-title">{{ $freeze_tab['text_col_heading'] }}</p>
                            <div class="production-card-info">
                                {!! $freeze_tab['info_col'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection