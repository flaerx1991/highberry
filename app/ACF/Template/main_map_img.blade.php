@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin main-map-img">
        <div class="m-auto content-max-width content-wrap">
            {!! ($map_heading) ? '<h2>' . $map_heading . '</h2>' : '' !!}
            <div class="flex we-are-close-img">
                @include('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                              'imageTablet' => $tablet_image,
                                                              'imageMobile' => $mobile_image))
            </div>
        </div>
    </div>
@endsection