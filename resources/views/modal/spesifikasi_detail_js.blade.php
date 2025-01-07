<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#getSpesifikasiDetail').on('click', function() {
            id_project = "{{ $id_project ?? '' }}";
            $.ajax({
                url: "{{ url('fasilitas') }}/" + id_project, // Ganti dengan endpoint Anda
                method: 'GET',
                contentType: "application/json",
                beforeSend: function() {
                    $('#detail_spesifikasi_fasilitas').addClass('placeholder-glow').empty()
                        .append(`
                                <div class="item-fasilitas placeholder">
                                </div>
                                <div class="item-fasilitas placeholder">
                                </div>
                                <div class="item-fasilitas placeholder">
                                </div>
                                <div class="item-fasilitas placeholder">
                                </div>
                                <div class="item-fasilitas placeholder">
                                </div>`);
                },
                success: function(response) {
                    html_fasilitas = '';
                    jsonResponseFasilitas = JSON.parse(response);
                    for (let index = 0; index < jsonResponseFasilitas.data
                        .length; index++) {
                        html_fasilitas += `
                                <div class="item-fasilitas">
                                    <div>
                                        ${jsonResponseFasilitas.data[index].icon}
                                    </div>

                                    <div class="card-text">
                                        ${jsonResponseFasilitas.data[index].fasilitas}
                                    </div>
                                </div>
                                `
                    }
                    $('#detail_spesifikasi_fasilitas').removeClass('placeholder-glow')
                        .empty().append(html_fasilitas);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });

            $.ajax({
                url: "{{ url('project') }}/" + id_project, // Ganti dengan endpoint Anda
                method: 'GET',
                contentType: "application/json",
                beforeSend: function() {
                    $('#detail_spesifikasi_denah').addClass('placeholder-glow').empty()
                        .append(
                            `<div class="placeholder" style="min-height:200px;width:100%;    border-radius: 10px;"></div>`
                        );
                    $('#detail_spesifikasi_poin_plus').addClass('placeholder-glow').empty()
                        .append(
                            `<div class="placeholder" style="height: 100px;width:100%;border-radius: 10px;"></div>`
                        );
                    $('#detail_spesifikasi_rumah').addClass('placeholder-glow').empty()
                        .append(
                            `<div class="placeholder" style="height: 300px;width:100%;border-radius: 10px;"></div>`
                        );
                },
                success: function(response) {
                    html_fasilitas = '';
                    jsonResponseDetailRumah = JSON.parse(response);
                    console.log(jsonResponseDetailRumah);
                    console.log(jsonResponseDetailRumah.data);
                    $('#detail_spesifikasi_denah').empty().append(`<img id="img_spesifikasi_gambar_denah" src="https://trusmicorp.com/files/rsp/foto_project/${jsonResponseDetailRumah
                        .data.denah}" class="img-fluid" alt="" loading="lazy">`);



                    // Poin Plus
                    if (jsonResponseDetailRumah.data.poin_plus && jsonResponseDetailRumah
                        .data
                        .poin_plus != '') {
                        $data_poin_plus = jsonResponseDetailRumah.data.poin_plus.split('>');
                        $list_poin_plus = `<table class="table-borderless text-dark" style="width:100%;font-size:small;">
                    <tbody style="vertical-align:baseline;">`;
                        for (var i = 0; i < $data_poin_plus.length; i++) {
                            if ($data_poin_plus[i] !== '') {
                                $list_poin_plus += '<tr>'
                                $list_poin_plus +=
                                    '<td><i class="fas fa-check ms-1 me-1"></i></td>'
                                $list_poin_plus += '<td>' + toCamelCase($data_poin_plus[
                                    i]) + '</td>';
                                $list_poin_plus += '</tr>'
                            }
                        }
                        $('#detail_spesifikasi_poin_plus').html($list_poin_plus);
                    }



                    // Spesifikasi
                    array_spesifikasi = convertToSpecsArray(jsonResponseDetailRumah.data
                        .spesifikasi);

                    list_spesifikasi = `<table class="table-borderless" style="width:100%;">
                    <tbody>`;
                    for (var i = 0; i < array_spesifikasi.length; i++) {
                        list_spesifikasi += `
                                <tr>
                                    <td class="text-dark">${Object.keys(array_spesifikasi[i])[0]}</td>
                                    <td class="text-muted text-end">${Object.values(array_spesifikasi[i])[0]}</td>
                                </tr>`;
                    }
                    list_spesifikasi += `</tbody>
                    </table>`;
                    console.log(list_spesifikasi);
                    $('#detail_spesifikasi_rumah').empty().append(list_spesifikasi);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });

        function toCamelCase(str) {
            return str.split(' ').map((word, index) => {
                if (index == 0) {
                    return word.toLowerCase();
                }
                return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
            }).join(' ');
        }


        function convertToSpecsArray(input) {

            if (input == null) {
                return [];
            }

            // Split the input string into lines
            const lines = input.split(/\r?\n/);

            // Create an array to hold the key-value pairs
            const specsArray = [];

            // Loop through each line
            lines.forEach(line => {
                // Split each line by the colon (":")
                const [key, value] = line.split(":");

                // Trim any whitespace and add to the array as an object
                if (key && value) {
                    specsArray.push({
                        [key.trim()]: value.trim()
                    });
                }
            });

            return specsArray;
        }

    });
</script>
