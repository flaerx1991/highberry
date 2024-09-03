@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin-full main-accordion">
        <div class="m-auto content-wrap">
            {!! ($main_accordion_heading) ? '<h2>' . $main_accordion_heading . '</h2>' : '' !!}
           <div class="flex main-accordion-cols">
                <div id="tab-img" class="main-accordion-picture-col"></div>
                <div class="main-accordion-list-col"> 
                    {!! ($accordion_heading) ? '<h3>' . $accordion_heading . '</h3>' : '' !!}
                    <ul class="service-tabs">
                        @foreach ($main_accordion_repeater as $accordion_item)
                            <li class="service-tabs-item" data-id="{{ $accordion_item['main_accordion_img']['url'] }}"> 
                                <span class="service-tabs-title">{{ $accordion_item['main_accordion_item_heading'] }}</span> 
                                <div class="know-more-link service-tabs-inner">
                                    {!! $accordion_item['main_accordion_item_description'] !!}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
           </div>
        </div>
    </div>
@endsection