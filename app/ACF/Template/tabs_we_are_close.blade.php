@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin tabs-we-are-close">
        <div class="m-auto content-max-width content-wrap">
            {!! ($we_are_close_heading) ? '<h2>' . $we_are_close_heading . '</h2>' : '' !!}
            <div class="grid we-are-close-tabs-repeater">
                @foreach ($we_are_close_repeater as $we_are_close_item)
                <div class="flex we-are-close-tabs-item">
                    <div class="green-circle-item"><img src="{{ $we_are_close_item['green_circle_image']['url'] }}" alt="{{ $we_are_close_item['green_circle_image']['alt'] }}"></div>
                    <div class="tab-info">
                        <div class="flex tab-info-text">
                            <p class="tab-number">{{ $we_are_close_item['number_tab'] }}</p>
                            <span class="tab-number-text">{{ $we_are_close_item['number_text'] }}</span>
                        </div>
                        <span class="name-tab-text">{{ $we_are_close_item['name_of_tab'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection