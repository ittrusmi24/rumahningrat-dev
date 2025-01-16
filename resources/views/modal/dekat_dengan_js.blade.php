<script src="{{ asset('assets/js/datatable/dataTables.js') }}"></script>
<script src="{{ asset('assets/js/datatable/dataTables.bootstrap5.js') }}"></script>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



    });

    function getDekatDengan(category_id) {
        $('#modalDekatDengan').modal('show');
        id_project = "{{ $id_project ?? '' }}";
        $.ajax({
            url: "{{ url('fasilitas_sekitar') }}/" +
                id_project + "/" + category_id, // Ganti dengan endpoint Anda
            method: 'GET',
            contentType: "application/json",
            beforeSend: function() {
                $('#table_dekat_dengan').hide();
                $('#loader_table_dekat_dengan').show();
            },
            success: function(response) {
                jsonResponseRumah = JSON.parse(response);
                console.log(jsonResponseRumah);
                html_fasilitas_sekitar = '';
                for (let index = 0; index < jsonResponseRumah.data
                    .length; index++) {
                    html_fasilitas_sekitar += `
                                        <tr>
                                            <td style="line-height: normal;">
                                                <p class="mb-0">${jsonResponseRumah.data[index].poi_name}</p>
                                                <span class="small text-muted">Alamat : ${jsonResponseRumah.data[index].address}</span>
                                            </td>
                                        </tr>`;
                }
                $('#table_dekat_dengan').DataTable().clear().destroy();
                $('#tbody_dekat_dengan').empty().append(html_fasilitas_sekitar);
                $('#table_dekat_dengan').DataTable({
                    pageLength: 5,
                    "bLengthChange": false,
                    "bDestroy": true,
                    "searching": false
                });
                $('#table_dekat_dengan').show();
                $('#loader_table_dekat_dengan').hide();
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }


    function getDekatDenganDetail(category_id) {
        id_project = "{{ $id_project ?? '' }}";
        $.ajax({
            url: "{{ url('fasilitas_sekitar') }}/" +
                id_project + "/" + category_id, // Ganti dengan endpoint Anda
            method: 'GET',
            contentType: "application/json",
            beforeSend: function() {
                $('#table_dekat_dengan').hide();
                $('#loader_table_dekat_dengan').show();
            },
            success: function(response) {
                jsonResponseRumah = JSON.parse(response);
                console.log(jsonResponseRumah);
                html_fasilitas_sekitar = '';
                for (let index = 0; index < jsonResponseRumah.data
                    .length; index++) {
                    html_fasilitas_sekitar += `
                                        <tr>
                                            <td style="line-height: normal;">
                                                <p class="mb-0">${jsonResponseRumah.data[index].poi_name}</p>
                                                <span class="small text-muted">Alamat : ${jsonResponseRumah.data[index].address}</span>
                                            </td>
                                        </tr>`;
                }
                $('#table_dekat_dengan').DataTable().clear().destroy();
                $('#tbody_dekat_dengan').empty().append(html_fasilitas_sekitar);
                $('#table_dekat_dengan').DataTable({
                    pageLength: 5,
                    "bLengthChange": false,
                    "bDestroy": true,
                    "searching": false
                });
                $('#table_dekat_dengan').show();
                $('#loader_table_dekat_dengan').hide();
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }
</script>
