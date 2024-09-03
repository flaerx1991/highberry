@extends('Layouts.wrapper')
@section('content')
    <div class="breadcrumbs">
        <div class="m-auto content-max-width bread-wrap flex">
            <a class="posts-page-link" href="{{ get_post_type_archive_link(get_post_type()) }}"></a>
            <div class="post-name-date flex">
                <div class="post-name">{{ get_the_title() }}</div>
                <div class="post-date">{{ get_the_date() }}</div>
            </div>
        </div>
    </div>
@endsection