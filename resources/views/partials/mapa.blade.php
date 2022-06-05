<!-- Mapa -->
<section id="mapa">
    <div id="mymap"></div>

    <script type="text/javascript">

        var locations = <?php print_r(json_encode($locations)); ?>;

        var mymap = new GMaps({
            el: '#mymap',
            lat: -24.005833,
            lng: -46.402778,
            zoom: 11
        });


        $.each(locations, function(index, value) {
            mymap.addMarker({
                lat: value.lat,
                lng: value.lng,
                title: value.name,
                click: function(e) {
                    alert(value.address);
                }
            });
        });
    </script>

    

    

</section>

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initialize&language=pt-BR&region=BR" async defer></script>
<script src="/js/mapInput.js"></script>
<script>
</script>
@endsection
