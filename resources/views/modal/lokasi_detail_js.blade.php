<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#getDetailLokasi').on('click', function() {
            $('#modalDetailLokasi').modal('show');
            id_project = "{{ $id_project ?? '' }}";
            $.ajax({
                url: "{{ url('project') }}/" + id_project, // Ganti dengan endpoint Anda
                method: 'GET',
                contentType: "application/json",
                beforeSend: function() {},
                success: function(response) {
                    jsonResponseRumah = JSON.parse(response);
                    var map = L.map('map_lokasi', {
                        attributionControl: false
                    }).setView([jsonResponseRumah.data.latitude,
                        jsonResponseRumah.data.longitude
                    ], 13);
                    // https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png
                    // https://tile.openstreetmap.org/{z}/{x}/{y}.png
                    L.tileLayer(
                        'https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png'
                        ).addTo(
                        map);

                    const htmlPopup = `
                        <div style="text-align: center;">
                            <p class="m-0">${jsonResponseRumah.data.title_satu}</p>
                            <p class="m-0">${jsonResponseRumah.data.title_dua}</p>
                        </div>
                    `;

                    L.marker([jsonResponseRumah.data.latitude,
                            jsonResponseRumah.data.longitude
                        ]).addTo(map)
                        .bindPopup(htmlPopup)
                        .openPopup();
                    // createHomepageOSM(jsonResponseRumah.data);

                    $('#video_presentation').attr('src', jsonResponseRumah.data.link_video
                        .replace(/\s/g,
                            '%20'));

                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
