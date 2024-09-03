@extends('Layouts.wrapper')
@section('content')
    <div class="st-margin vacansies-work-with-us">
        <div class="m-auto content-max-width content-wrap">
           <div class="grid work-with-us">

                <div class="grid form-col">
                    <div class="img-wrap"><img src="{{ $form_vacansies_logo['url'] }}" alt=""></div>
                    <div class="form-vacansies-wrap">
                        {!! ($form_heading) ? '<h4>' . $form_heading . '</h4>' : '' !!}
                        {!! apply_shortcodes('[contact-form-7 id="444" title="Vacancies Form"]') !!}
                    </div>
                </div>

                <div class="info-work-with-us">
                    <div class="text-heading">{{ $additional_info_heading }}</div>
                    <div class="grid work-with-us-addtional-info">
                        @foreach ($additional_info_tabs as $ad_info)
                            <div>
                                {!! $ad_info["company_info"] !!}
                            </div>
                        @endforeach
                    </div>
                </div>
           </div>
           
        </div>
    </div>
@endsection