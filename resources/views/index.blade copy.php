@extends('layouts.app')

@section('title', 'Cidade Verde')
<head>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 400px;

        }
    </style>
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
                
                <div id="map"></div>
            </div>
        
            <script type="text/javascript">
                function initMap() {
                const myLatLng = { lat: -24.00493396653848, lng: -46.412193202959386 };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
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

    
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
      
    
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