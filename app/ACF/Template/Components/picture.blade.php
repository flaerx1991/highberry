{{--@php--}}
{{--    global $currentSiteName;--}}
{{--    $image_info = getimagesize(str_replace($currentSiteName, "", $image['url']));--}}
{{--@endphp--}}
<picture class="{{ $classes }}">
{{--    <source srcset="{{ $imageWebp['url'] }}" type='image/webp'>--}}
    <source media="(min-width: 1200px)" srcset="{{ $image['url'] }}" type='image/png'>

{{--    <source srcset="{{ $imageTabletWebp['url'] }}" type='image/webp'>--}}
    <source media="(min-width: 768px)" srcset="{{ $imageTablet['url'] }}" type='image/png'>

{{--    <source srcset="{{ $imageModileWebp['url'] }}" type='image/webp'>--}}
    <source srcset="{{ $imageMobile['url'] }}" type='image/png'>

    <img src="{{ $imageMobile['url'] }}" class="img-fluid" alt="{{ $imageMobile['alt'] }}" width="4096" height="2304">
{{--{{ $image_info[3] }}--}}
</picture>
