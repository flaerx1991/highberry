@extends('Layouts.wrapper')
@section('content')
    <div class="secondary-pages-banner">
        <div class="content-wrap">
            <div class="banner-template">
                <div class="widescreenimg"> @include('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                                                                            'imageTablet' => $tablet_image,
                                                                                                            'imageMobile' => $mobile_image))
                </div>
                <div class="pagename-col-pad">
                    <div class="page-name-col">
                        @if (is_archive())
                            @if(is_post_type_archive('news'))
                            <h1>{{  $news_heading  }}</h1>
                            @elseif(is_post_type_archive('article'))
                            <h1>{{  $article_heading  }}</h1>
                            @else
                            @endif
                        @else
                            <h1>{{ ( get_the_title() ) }}</h1>
                        @endif
                       
                        @if ($banner_info)
                            <div class="page-info">
                                {!! $banner_info !!} 
                            </div>
                        @endif
                        @if ($banner_tabs_items)
                            <div class="grid banner-tabs-repeater">
                                @foreach ($banner_tabs_items as $banner_tab_item)
                                    <div class="flex banner-tabs-item">
                                        <div class="green-circle-item"><img src="{{ $banner_tab_item['tab_img']['url'] }}" alt="{{ $banner_tab_item['tab_img']['alt'] }}"></div>
                                        <div class="tab-info">
                                            <div class="flex tab-info-text">
                                                <p class="tab-number">{{ $banner_tab_item['tab_number'] }}</p>
                                                <span class="tab-number-text">{{ $banner_tab_item['tab_text'] }}</span>
                                            </div>
                                            <span class="name-tab-text">{{ $banner_tab_item['tab_name'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection