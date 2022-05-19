@extends('layouts.app')

@section('title', 'Cidade Verde')

<head>
    <style>
        /*  <span class="metadata-marker" style="display: none;" data-region_tag="css"></span>       Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            /*width: 100%;
            /* The width is the width of the web page */
        }

    </style>
    <script>
        var map;
        var InforObj = [];
        var centerCords = {
            //lat: -25.344,
            //lng: 131.036
            lat: -24.00493396653848,
            lng: -46.412193202959386
        };
        var markersOnMap = [{
                placeName: "Canto do Forte (Ecoponto)",
                LatLng: [{
                    lat: -24.003783864970995,
                    lng: -46.40094018116111
                }]
            },
            {
                placeName: "Boqueirão (Ecoponto)",
                LatLng: [{
                    lat: -24.003346806199463,
                    lng: -46.412711046133424
                }]
            },
            {
                placeName: "Aviação (Ecoponto)",
                LatLng: [{
                    lat: -24.00028885024234,
                    lng: -46.42850389275239
                }]
            },
            {
                placeName: "Sítio do Campo (Ecoponto)",
                LatLng: [{
                    lat: -24.000367260276526,
                    lng: -46.42858972343861
                }]
            },
            {
                placeName: "Vila Sônia (Ecoponto)",
                LatLng: [{
                    lat: -24.002405904416424,
                    lng: -46.44777288085738
                }]
            }
            
        ];

        window.onload = function() {
            initMap();
        };

        function addMarkerInfo() {
            for (var i = 0; i < markersOnMap.length; i++) {
                var contentString = '<div id="content"><h6>' + markersOnMap[i].placeName +
                    '</h6></div>';

                const marker = new google.maps.Marker({
                    position: markersOnMap[i].LatLng[0],
                    map: map
                });

                const infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 200
                });

                marker.addListener('click', function() {
                    closeOtherInfo();
                    infowindow.open(marker.get('map'), marker);
                    InforObj[0] = infowindow;
                });
                // marker.addListener('mouseover', function () {
                //     closeOtherInfo();
                //     infowindow.open(marker.get('map'), marker);
                //     InforObj[0] = infowindow;
                // });
                // marker.addListener('mouseout', function () {
                //     closeOtherInfo();
                //     infowindow.close();
                //     InforObj[0] = infowindow;
                // });
            }
        }

        function closeOtherInfo() {
            if (InforObj.length > 0) {
                /* detach the info-window from the marker ... undocumented in the API docs */
                InforObj[0].set("marker", null);
                /* and close it */
                InforObj[0].close();
                /* blank the array */
                InforObj.length = 0;
            }
        }

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: centerCords
            });
            addMarkerInfo();
        }
    </script>
</head>

@section('content')

    <h5>Ecopontos Cadastrados</h5>
    <!--The div element for the map -->
    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?{{ env('GOOGLE_MAP_KEY') }}"></script>



@endsection
