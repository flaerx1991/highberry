@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin partners">
        <div class="m-auto content-wrap">
            <h2>{{$partners_heading}}</h2>
            <div class="partners-list">
                @foreach ($partners_list as $item)
                    <div class="partner">
                        <a href="{{$item['partner_url']['url']}}" class="partner-link">
                            <img src="{{$item['partner_logo']['url']}}" alt="{{$item['partner_logo']['alt']}}">
                        </a>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>
@endsection
