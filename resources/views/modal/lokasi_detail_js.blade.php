<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#getSelengkapnya').on('click', function() {
            id_project = "{{ $id_project ?? '' }}";
            $.ajax({
                url: "{{ url('project') }}/" + id_project, // Ganti dengan endpoint Anda
                method: 'GET',
                contentType: "application/json",
                beforeSend: function() {},
                success: function(response) {
                    jsonResponseRumah = JSON.parse(response);
                    console.log('create osm map');
                    console.log(jsonResponseRumah.data);
                    createHomepageOSM(jsonResponseRumah.data);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });

    var map;
    var dataPoi = []; // untuk menyimpan data POI
    var circle; // Untuk menyimpan referensi ke lingkaran
    var markers = []; // Untuk menyimpan referensi ke marker

    function createHomepageOSM(data) {
        console.log(data);
        if (document.getElementById('property-detail-map') != null) {
            var data = [];
            // MAP                       
            if (data.latitude != null) {
                latitude = data.latitude;
                longitude = data.longitude;
                map = L.map('property-detail-map', {
                    center: [latitude, longitude],
                    zoom: 15,
                    scrollWheelZoom: false,
                    attributionControl: false
                });
                L.tileLayer(
                    'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                        subdomains: 'abcd',
                        maxZoom: 19
                    }).addTo(map);
                var markers = L.layerGroup({
                    showCoverageOnHover: false
                });

                rumah_img =
                    "{{ asset('assets/img/property-types/rumah_icon.png') }}";
                var _icon = L.divIcon({
                    html: `<img src="${rumah_img}">`,
                    iconSize: [40, 48],
                    iconAnchor: [20, 48],
                    popupAnchor: [0, -48]
                });
                var title = data.project;
                var marker = L.marker(new L.LatLng(data.latitude, data
                    .longitude), {
                    title: title,
                    icon: _icon
                });
                markers.addLayer(marker);
                // END MAP

            }
        }
    }
</script>
