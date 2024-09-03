@extends('Layouts.wrapper')
@section('content')
    <div class="contacts-map">
        <div class="st-margin-full content-max-full-width content-wrap">
            <div class="map-wrap">
                <div id="contacts_map"></div>
            </div>
            <script>
                var map;
                function initMap(){
                    map = new google.maps.Map(document.getElementById("contacts_map"), {
                        mapId: "ae04b67ac6fe3fbb",
                    });

                    @foreach($locations as $loc)
                        let marker{{$loop->index}} = new google.maps.Marker({
                            position: {lat: {{ $loc['latitude'] }}, lng: {{ $loc['longitude'] }}},
                            icon: "{{ $marker_icon['url'] }}",
                        });
                        marker{{$loop->index}}.setMap(map);
                    @endforeach

                    var bounds = new google.maps.LatLngBounds(new google.maps.LatLng({lat: 51.173584, lng: 24.407839}),
                        new google.maps.LatLng({lat: 47.518416, lng: 37.031130}));
                    map.fitBounds(bounds);
                }
            </script>
            <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIQEPwnGbYdqVcugonBbGeWs-fwFzRh1c&libraries=places&callback=initMap"></script>
        </div>
    </div>
@endsection