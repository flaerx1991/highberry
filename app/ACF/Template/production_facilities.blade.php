@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin production-facilities">
        <div class="m-auto content-wrap">
            {!! ($pr_heading) ? '<h2>' . $pr_heading . '</h2>' : '' !!}
            <div class="pr-wrap">
                <div class="grid pr-content">
                    <div class="grid first-col">
                        <div class="img-col"><img src="{{ $pr_image['url'] }}" alt="{{ $pr_image['alt'] }}"></div>
                        <div class="grid tabs-col">
                            @foreach ($pr_tabs as $pr_tab)
                                <div class="flex banner-tabs-item">
                                    <div class="green-circle-item"><img src="{{ $pr_tab['pr_icon']['url'] }}" alt="{{ $pr_tab['pr_icon']['alt'] }}"></div>
                                    <div class="tab-info">
                                        <div class="flex tab-info-text">
                                            <p class="tab-number">{{ $pr_tab['pr_number'] }}</p>
                                            <span class="tab-number-text">{{ $pr_tab['pr_number_text'] }}</span>
                                        </div>
                                        <span class="name-tab-text">{{ $pr_tab['pr_tab_name'] }}</span>
                                        <span class="add-tab-text">{{ $pr_tab['pr_add_text'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
    
                    <div class="second-col">
                        {!! $pr_info !!}
                    </div>
               </div>
            </div>
        </div>
    </div>
@endsection