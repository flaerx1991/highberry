@extends('Layouts.wrapper')
@section('content')
    <div class="two-text-cols  {{ $additional_class }}">
        <div class="m-auto content-wrap">
            <div class="grid two-text-cols-wrap">

                <div class="text-col">{!! $first_text_col !!}</div>
                @if ($second_text_col)
                    <div class="know-more-link text-col">{!! $second_text_col !!}</div>
                @endif
                
            </div>
        </div>
    </div>
@endsection