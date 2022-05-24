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
