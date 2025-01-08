<script src="{{ asset('assets/js/datatable/dataTables.js') }}"></script>
<script src="{{ asset('assets/js/datatable/dataTables.bootstrap5.js') }}"></script>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#getDekatDengan').on('click', function() {
            $('#modalDekatDengan').modal('show');
            id_project = "{{ $id_project ?? '' }}";
            $.ajax({
                url: "{{ url('fasilitas_sekitar') }}/" +
                    id_project, // Ganti dengan endpoint Anda
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
                                            <td>${jsonResponseRumah.data[index].poi_name}</td>
                                            <td style="max-width: 100px;">${jsonResponseRumah.data[index].address}</td>
                                        </tr>`;
                    }
                    $('#tbody_dekat_dengan').empty().append(html_fasilitas_sekitar);
                    $('#table_dekat_dengan').DataTable({
                        pageLength: 5,
                        "bLengthChange": false,
                        "bDestroy": true
                    });
                    $('#table_dekat_dengan').show();
                    $('#loader_table_dekat_dengan').hide();
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
