@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin post-without-cat-single">
        <div class="m-auto content-wrap content-max-width">            
            <div class="post-single-page">
               <div class="main-info">
                    {!! $post_description !!}
               </div>
               <div class="list-and-image">
                    <div class="post-list"> {!! $post_list_items !!}</div>
                    <div class="img-wrap"><img src="{{ $post_item_img['url'] }}" alt="{{ $post_item_img['url']['alt'] }}"></div>
               </div>
            </div>
        </div>
    </div>
@endsection