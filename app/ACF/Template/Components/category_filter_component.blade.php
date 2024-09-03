<ul class="categories-list">
    @foreach ($categories as $category)
        @if(isset($category['children']) && count($category['children']) > 0)
            <li class="menu-with-submenu">
                <a href="{!! get_term_link($category['term_id']) !!}">{{ $category['name'] }}</a>
                <div class="open-cat-list-icon">
                    @include('Components.sub-menu-arrow')
                </div>
                @include('Components.category_filter_component', ['categories' => $category['children']])
            </li>
        @else
            <li>
                <a href="{!! get_term_link($category['term_id']) !!}" >{{ $category['name'] }}</a>           
            </li>
        @endif
    @endforeach
</ul>