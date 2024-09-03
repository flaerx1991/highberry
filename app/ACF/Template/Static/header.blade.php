<!doctype html>
<html @php(language_attributes())>
<head>
    <meta charset="@php(bloginfo( 'charset' ))">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Condensed&display=swap" rel="stylesheet">
   
    @php(wp_head())
</head>

<body @php(body_class((is_front_page()) ? '' : 'sec-page'))>
    <div id="page" class="site">
        @if(!isset($_SESSION['first_enter']))
            @include('Components.preloader')
            @php($_SESSION['first_enter'] = true)
        @endif
        <header class="site-header {!! (is_front_page()) ? '' : 'other-page' !!}" id="header">
            <div class="header-menu-wrap ">
                <div class="flex header-visible-part">
                    <div class="flex left-col">
                        <div class="logo">
                            <a href="{{ $logo_link['url'] }}"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo-grain-stream.svg" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="flex right-col">
                        <div class="flex media-links-col">
                           <a href="#" class="media-header-url"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a>
                           <a href="#" class="media-header-url"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a>
                        </div>
                        <div class="flex language-menu-col">
                           <div class="language-selector">
                              <p class="language current-language">UA</p>
                              <p class="language">EN</p>
                          </div>
                          <div class="mobile-burger">
                              <p>Меню</p>
                              @include('Components.menu-burger-button')
                           </div>
                        </div>
                    </div> 
                </div>               
                <div class="menu-wrapper">
                    <div id="sideNav" class="menu">
                     <div class="languages">
                        <div class="language-selector">
                           <p class="language current-language">UA</p>
                           <p class="language">EN</p>
                        </div>                        
                        <div class="mobile-languages">
                           <a href="{{ $logo_link['url'] }}">@include('Components.home-menu-button')</a> 
                           <div class="close-menu">
                              @include('Components.close-menu-button')
                           </div>
                        </div>
                     </div>
                    @if($navigation)
                       <ul class="menu-ul">
                        @foreach($navigation as $item)
                          <li class="menu-item">
                             <a href="{{ $item['menu_item']['url'] }}">{{ $item['menu_item']['title'] }}</a>
                              <div class="open-menu-icon">
                                 @if(isset($item['has_sub_menu']) && $item['has_sub_menu'])
                                    @include('Components.sub-menu-arrow')
                                 @endif
                              </div>
                              @if(isset($item['has_sub_menu']) && $item['has_sub_menu'])
                                    @include('Components.header_sub_menu', ['items' => $item['sub_menu']])
                              @endif
                          </li>
                        @endforeach                     
                       </ul>
                     @endif
                       <div class="phones-info">
                           @if($nav_contacts)
                              <div class="flex contacts">
                                 @foreach($nav_contacts as $contact_item)
                                    <div class="flex con-item">
                                       <a href="{{ $contact_item['contact_link']['url'] }}">{{ $contact_item['contact_link']['title'] }}</a>
                                       <span>{{ $contact_item['purpose'] }}</span>
                                    </div>
                                 @endforeach    
                              </div>
                           @endif
                       </div>
                    </div>
                 </div>                
            </div>
        </header>