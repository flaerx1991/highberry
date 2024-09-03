@extends('Layouts.wrapper')
@section('content')
    <div class="secondary-pages-banner post-banner">
        <div class="content-wrap">
            <div class="banner-template">
                <div class="widescreenimg"> @include('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                                                                            'imageTablet' => $tablet_image,
                                                                                                            'imageMobile' => $mobile_image))
                </div>
                
                <div class="pagename-col-pad">
                    <div class="page-name-col"> 
                                        
                        @if (is_tax())
                            <h1>{{ single_cat_title()  }}</h1>
                        @elseif(is_archive())
                            @if(is_post_type_archive('products'))
                            <h1>{{  $products_heading  }}</h1>
                            @else
                            @endif
                        @else
                            <h1> {{ $heading }}</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
