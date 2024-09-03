                <footer class="site-footer">
                    <div class="footer-wrap">
                        <div class="background-image">@include('Components.picture', array('classes' => $picture_classes, 'image' => $desktop_image,
                            'imageTablet' => $tablet_image,
                            'imageMobile' => $mobile_image))</div>

                        <div class="grid footer-menu">
                            <div class="grid col1">
                                <div class="footer-logo"><img src="{{ $footer_logo['url'] }}" alt="{{ $footer_logo['alt'] }}"></div>
                                <div class="company-info">
                                    <p class="company-name">{{ $company_name }}</p>
                                    <div> {!! $company_info  !!}</div>
                                </div>
                                <div class="grid phones-contacts">
                                    @foreach($contacts_items as $item)
                                        <div class="flex contact-item">
                                            <a href="{{ $item['contact_item']['url'] }}">{{ $item['contact_item']['title'] }}</a>
                                            <span>{{ $item['purpose'] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                                @if($footer_menu)
                                    <ul class="grid footer-menu-list">
                                        @foreach($footer_menu as $link)
                                            <li class="footer-menu-item"><a href="{{ $link['navigation_links']['url'] }}">{{ $link['navigation_links']['title'] }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                                <a class="flex catalog" href="{{ $footer_catalog_file['url'] }}"
                                    @switch($footer_catalog_file_link_action)
                                        @case(1)
                                    target="_blank"
                                        @break
                                    @case(2)
                                        download
                                    @break
                                        @default
                                    @break
                                        @endswitch>
                                    {{ $footer_catalog_text }} <img src="{{ $footer_catalog_icon['url'] }}" alt="{{ $footer_catalog_icon['alt'] }}">
                                </a>
                            </div>

                            <div class="col2">

                                <div class="form-wrap">
                                    {!! apply_shortcodes('[contact-form-7 id="216" title="Footer form"]') !!}
                                </div>

                                <div class="grid phones-contacts">
                                    @foreach($contacts_items as $item)
                                        <div class="flex contact-item">
                                            <a href="{{ $item['contact_item']['url'] }}">{{ $item['contact_item']['title'] }}</a>
                                            <span>{{ $item['purpose'] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="bottom-footer-block">
                            <p>{{ $footer_company_credentials_name }}</p>
                            <a href="{{ $privacy_policy_file['url'] }}"
                            @switch($privacy_policy_link_action)
                                @case(1)
                            target="_blank"
                                @break
                            @case(2)
                                download
                            @break
                                @default
                            @break
                                @endswitch>
                            {{ $privacy_policy_text }} 
                        </a>
                        </div>

                    </div>
                </footer>
            </div>

        <?php wp_footer(); ?>
        <link rel="stylesheet" id="highberry-font-css" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css?ver={{ _S_VERSION }}" media="all">
    </body>


</html>
