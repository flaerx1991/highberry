
<ul class="submenu">
    @foreach($items as $item)
        @if($item['menu_item'])
            <li class="submenu-item line-height-1_3">
                <div>
                    <a href="{{ $item['menu_item']['url'] }}">{{ $item['menu_item']['title'] }}</a>
                    @if(isset($item['has_sub_menu']) && $item['has_sub_menu'])
                        @include('Components.sub-menu-arrow')
                    @endif
                </div>
                @if(isset($item['has_sub_menu']) && $item['has_sub_menu'])
                    @include('Components.header_sub_menu', ['items' => $item['sub_menu']])
                @endif
            </li>
        @endif
    @endforeach
</ul>