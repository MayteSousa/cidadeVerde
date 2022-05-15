@extends('layouts.app')

@section('title', ' - Mapa Pontos de Coleta')
    
<head>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 400px;

        }
    </style>
</head>
    
@section('content')

    <div class="card">
        <div class="card-header">
            <p class="card-title">Mapa Pontos de Coleta</p>
        </div>

        <div class="container mt-5">
            
            <div id="map"></div>
        </div>
    
        <script type="text/javascript">
            function initMap() {
            const myLatLng = { lat: -24.00493396653848, lng: -46.412193202959386 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: myLatLng,
            });
    
            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "Fatec PG",
            });
            }
    
            window.initMap = initMap;
        </script>
    <!--
        <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?
            key={{ env('GOOGLE_MAP_KEY') }}
            &callback=initMap"
        >  
        </script>
-->

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
  

    </div>
@endsection
