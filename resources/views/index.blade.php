@extends('layouts.app')

@section('title', 'Cidade Verde')
<head>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
        /*  <span class="metadata-marker" style="display: none;" data-region_tag="css"></span>       Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
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
      <!-- Header -->
        <section id="header">
            <div class="inner">
                <span class="icon solid major fa-cloud"></span>
                <h1>
                    <strong>Cidade Verde</strong><br />
                </h1>
                  <p>Reuze, Reduza, Recicle</p>
                <ul class="actions special">
                    <li><a href="#mapa" class="button scrolly">Iniciar</a></li>
                </ul>
            </div>
        </section>

      <!-- Mapa -->
      <section id="mapa">
        <div class="card">
    
            <div class="container mt-5">
                
              
        
            <!--<h5>Ecopontos Cadastrados</h5> -->
            <!--The div element for the map -->
            <div id="map"></div>
        
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?{{ env('GOOGLE_MAP_KEY') }}"></script>
      
    
        </div>
    
      </section>

      <!-- One -->
            <section id="one" class="main style1">
                <div class="container">
                    <div class="row gtr-100">
                        <div class="col-6 col-12-medium">
                            <header class="major">
                                <h2>Quem Somos<br /></h2>
                            </header>
                            <p>Somos uma associação sem fins lucrativos, com o objetivo de evitar o descarte de materiais inservíveis e itens recicláveis, que não possuem mais utilidade, em locais irregulares causando transtornos urbanos como obstruções na rede de drenagem, aspecto de local sujo, além de servir como criadouros de insetos. Indicamos estabelecimentos que recebem Vidros, plásticoas, metais, madeiras, pilhas, óleo de cozinha, pneus, restos de móveis, dentre outros itens.</p>
                        </div>

                        <div class="col-6 col-12-medium imp-medium">
                            <span class="image fit"><img src="{{ asset('images/fundo.png') }}" alt="" /></span>
                        </div>
                    </div>
                </div>
            </section>
@endsection