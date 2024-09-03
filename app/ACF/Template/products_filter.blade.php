@extends('Layouts.wrapper')
@section('content')
    <div class="products-filter">
        <div class="content-wrap">
            <div class="products-filter-wrap">
                <div class="filter-button-components">
                    <div class="filter-button">@include('Components.product-filter')</div>
                    <div class="prod-list">
                        @if(count($categories) > 0)
                            @include('Components.category_filter_component', ['categories' => $categories])
                        @endif
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection