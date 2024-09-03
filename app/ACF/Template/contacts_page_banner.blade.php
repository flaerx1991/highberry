@extends('Layouts.wrapper')
@section('content')
    <div class="secondary-pages-banner contacts-banner">
        <div class="content-wrap">
            <div class="banner-template">
                <div class="widescreenimg"> @include('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                                                                                                            'imageTablet' => $tablet_image,
                                                                                                            'imageMobile' => $mobile_image))
                </div>
                <div class="pagename-col-pad">
                    <div class="page-name-col">                   
                            <h1>{{ ( get_the_title() ) }}</h1> 
                    </div>
                </div>

                <div class="contacts-banner-wrap">
                    <div class="contacts-info-banner">
                        <div class="first-info-col regular-col grid">
                            <p class="info-col-title"> {{ $first_info_col_title }}</p>
                            <div class="contacts-info-wrap grid">
                                <div class="contacts-items grid">
                                    @foreach ($contact_address_page_items as $con_item)
                                        <div class="contacts-item flex">
                                            <div class="green-circle-item"><img src="{{ $con_item['contact_address_icon']['url'] }}" alt="{{ $con_item['contact_address_icon']['alt'] }}"></div>
                                            <a href="{{ $con_item['contacts_address_item']['url'] }}">{{ $con_item['contacts_address_item']['title'] }}</a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="img-wrap"><img src="{{ $contacts_logo['url'] }}" alt="{{ $contacts_logo['alt'] }}"></div>
                            </div>
                        </div>
                        <div class="second-info-col regular-col">
                            <p class="info-col-title"> {{ $second_info_col_title }}</p>
                            <div class="contacts-info-wrap grid">
                                <div class="contacts-items grid">
                                    @foreach ($contact_phones_page_items as $cont_item)
                                        <div class="contacts-item flex">
                                            <div class="green-circle-item"><img src="{{ $cont_item['contacts_phones_icon']['url'] }}" alt="{{ $cont_item['contacts_phones_icon']['alt'] }}"></div>
                                           
                                            <div class="add-info-wrap">
                                                <a href="{{ $cont_item['contacts_phones_item']['url'] }}">{{ $cont_item['contacts_phones_item']['title'] }}</a>
                                                <div class="add-info-contacts">{!! $cont_item['contacts_addinfo'] !!}</div>
                                            </div>
                                            
                                        </div>
                                    @endforeach
                                </div>
                                <div class="contacts-page-form">
                                    <div class="contacts-form-wrap form-wrap">
                                        <p class="form-heading">{{ $form_heading }}</p>
                                        {!! apply_shortcodes('[contact-form-7 id="216" title="Footer form"]') !!}
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection