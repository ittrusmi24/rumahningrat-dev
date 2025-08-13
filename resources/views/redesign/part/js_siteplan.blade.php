<script>
    $(document).ready(function () {
        $('#map').find('a').remove();
        add_legend(map);
        setTimeout(function () {
            load_svg(bounds);
            load_data_blok();
            // map.invalidateSize();
        }, 1000);

        $('svg').css('pointer-events', 'all');
    });

    let map;
    let isMapInitialized = false;
    var bounds = [
        [-6.397245, 107.068464],
        [-6.397245, 107.073010],
        [-6.400081, 107.073010],
        [-6.400081, 107.068464]
    ];
    var center_point = [-6.398496, 107.071440];
    var extend = 1;
    var extendedBounds = L.latLngBounds(bounds).pad(extend);

    map = L.map('map', {
        maxBounds: extendedBounds,
        maxBoundsViscosity: 1.0
    }).setView(center_point, 18);

    const key = 'hP3RiELhMtFKqQl5dB60';
    const mtLayer = L.maptilerLayer({
        apiKey: key,
        style: L.MaptilerStyle.OUTDOOR,
    }).addTo(map);

    function add_legend(map) {
        var legend = L.control({
            position: 'bottomright'
        });

        legend.onAdd = function () {
            // Menggunakan kelas Tailwind untuk container utama
            // 'card' -> bg-white, rounded-md, p-2, border
            var div = L.DomUtil.create('div', 'legend bg-white/50 p-2 rounded-md backdrop-blur-sm text-center border border-gray-200');

            // 'd-flex flex-column p-1' -> 'flex flex-col p-1'
            var legendContent = $('<div>').addClass('legend-content flex flex-col p-1');

            // 'd-flex flex-column align-items-start' -> 'flex flex-col items-start'
            var statusRow = $('<div>').addClass('flex flex-col items-start');

            var statusItems = [
                { color: 'white', border: '1px solid #ccc', text: 'Kosong' },
                { color: 'yellow', text: 'Waiting List' },
                { color: '#39ff14', text: 'Terboking' },
                { color: '#FD8A8A', text: 'Terjual' },
                { color: '#458BC9', text: 'Not Sale' }
            ];

            function appendItems(items, container) {
                items.forEach(function (item) {
                    // 'd-flex align-items-center mb-1' -> 'flex items-center mb-1'
                    var legendItem = $('<div>').addClass('flex items-center mb-1 item_legends');

                    // 'me-2' -> 'mr-2'. Ditambahkan w-4 h-4 untuk ukuran kotak.
                    var box = $('<span>').addClass('legend-box inline-block w-4 h-4 mr-2 rounded-sm').css({
                        background: item.color,
                        border: item.border || 'none'
                    });

                    // 'small' -> 'text-sm'
                    legendItem.append(box).append(`<span class="text-sm">${item.text}</span>`);
                    container.append(legendItem);
                });
            }

            appendItems(statusItems, statusRow);
            legendContent.append(
                ``
            );
            legendContent.append(statusRow);

            $(div).append(legendContent);

            return div;
        };

        legend.addTo(map);
    }

    // Pastikan Anda sudah menyertakan script SVG.js di HTML Anda
    let svgContainer = null;
    let leafletBounds = null;
    // var draw = null;

    function load_svg(bounds) {
        const svgUrl = `{{ url('/assets/siteplan/') . '/bekasi_new.svg' }}`;

        fetch(svgUrl)
            .then(response => {
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                return response.text();
            })
            .then(svgText => {
                // draw = SVG(svgText);
                // console.log(draw);

                var svgElement = document.createElement('div');
                svgElement.innerHTML = svgText;

                L.svgOverlay(svgElement.firstElementChild, bounds).addTo(map);

            })
            .catch(error => {
                console.error('Gagal memuat atau memproses SVG:', error);
            });
    }


    $('svg').on('click', function (event) {
        // Hapus overlay dari elemen yang sebelumnya dipilih (jika ada)
        if (currentOverlay) {
            currentOverlay.css({
                fill: '',
                'fill-opacity': ''
            });
            currentOverlay = null;
        }

        // Reset styling pada semua elemen <g>
        $('g').css({
            stroke: '',
            'stroke-width': ''
        });

        const target = event.target;
        console.log(target);

        let selectedBlok;
        let blokId;

        if (target.tagName === 'path') {
            // Jika klik pada elemen path, ambil parent <g>
            const parentG = $(target).closest('g');
            blokId = parentG.attr('id');
            selectedBlok = $(`#${blokId}`);
        } else if (target.tagName === 'text' || target.tagName === 'tspan') {
            // Jika klik pada elemen text atau tspan, gunakan teks sebagai id
            const textContent = $(target).text().trim();
            blokId = textContent;
            selectedBlok = $(`g[id="${blokId}"]`);
        }

        if (selectedBlok && selectedBlok.length) {
            const blok_s = selectedBlok[0].id;
            console.log("Blok yang dipilih:", blok_s);

            // Terapkan overlay hitam di atas elemen yang dipilih
            selectedBlok.css({
                fill: 'black',
                'fill-opacity': 0.5,
                stroke: 'blue',
                'stroke-width': '2'
            });

            // Simpan elemen yang sedang memiliki overlay agar bisa direset saat klik berikutnya
            currentOverlay = selectedBlok;

            // Jika objek blok_select tersedia (misalnya dari Slim Select), set nilai yang sesuai
            if (typeof blok_select !== 'undefined' && blok_select) {
                blok_select.setSelected(blok_s.toUpperCase());
            } else {
                // Swal.fire({
                //     icon: "warning",
                //     title: "Opps!",
                //     text: "Blok tersebut sudah terjual!",
                //     showConfirmButton: true,
                //     timer: 3000
                // });
                // console.warn("Slim Select tidak ditemukan.");
            }
        }
    });



    function load_data_blok() {
        var id_project = 70;
        $.ajax({
            url: `{{ url('/status_blok/') }}/` + id_project,
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                console.log(response);

                $('svg text').each(function () {
                    const textContent = $(this).text()
                        .trim(); // Ambil teks dan hilangkan spasi di awal/akhir
                    const cleanText = textContent.replace(/\s+/g, ''); // Hilangkan semua spasi

                    if (cleanText.length <= 4 && !textContent.startsWith('ROW') && !textContent
                        .startsWith('NS')) {
                        // Sembunyikan elemen jika panjang teks <= 4 dan tidak diawali dengan "ROW"
                        $(this).css('display', 'none');
                    }
                });
                $('svg [id$="-I"]').css('display', 'none');
                $('svg g').css('pointer-events', 'none');
                $('svg g').css('cursor', 'pointer');
                $('svg text').css('cursor', 'pointer');
                $('svg text').css('pointer-events', 'none');

                response.forEach(value => {
                    $('svg g').each(function () {
                        const gId = $(this).attr('id');
                        if (gId == value.blok && value.status != 'Not Sale') {
                            $(this).css('pointer-events', 'visiblePainted');
                            $(this).find('path').css('pointer-events', 'all');
                            $(this).find('path').addClass('clickable');
                        }
                    });

                    // Tangani elemen <text> dengan nilai teks
                    $('svg text').each(function () {
                        const textContent = $(this).text().trim();
                        if (textContent == value.blok && value.status != 'Not Sale') {
                            $(this).css('pointer-events', 'all');
                            $(this).addClass('clickable');
                            // $(`svg text`).text(`${value.blok}`).addClass('clickable');
                        }
                    });
                    const blokText = value.blok; // Ambil nama blok dari response
                    const status = value.status; // Ambil status dari response
                    const textElement = $(`svg text:contains(${blokText})`);
                    const indicatorElement = $(`svg #${blokText}-I`);
                    textElement.css('display', 'none');
                    if (textElement.length > 0) {
                        if (status !== 'Not Sale') {
                            textElement.css('display', 'block');
                        } else {
                            textElement.css('display', 'none');
                        }
                    } else {
                        // sticky.removeClass('d-none');
                    }
                    indicatorElement.css('display', 'none');
                    if (indicatorElement.length > 0) {
                        if (status !== 'Not Sale') {
                            indicatorElement.css('display', 'block');
                        } else {
                            indicatorElement.css('display', 'none');
                        }
                    } else {
                        indicatorElement.css('display', 'none');
                    }

                    var defs = document.createElementNS("http://www.w3.org/2000/svg", "defs");
                    var gradient = document.createElementNS("http://www.w3.org/2000/svg",
                        "linearGradient");
                    gradient.setAttribute("id", `myGradient-${value.blok}`);



                    // $(`#path`).css("fill", `#B8B8B8`);

                    // Warna pertama (STATUS)
                    var stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
                    stop1.setAttribute("offset", "50%");

                    if (value.status == 'Not Sale') {
                        stop1.setAttribute("stop-color", "#458BC9");

                    } else if (value.status == 'Terboking') {
                        stop1.setAttribute("stop-color", "#39ff14");
                    } else if (value.status == 'Terjual') {
                        stop1.setAttribute("stop-color", "#FD8A8A");
                    } else if (value.status == 'Waiting List') {
                        stop1.setAttribute("stop-color", "yellow");
                        // } else if (value.status == 'Booking' || value.status == 'Akad' || value
                        //     .status == 'Booking Cash' || value.status == 'SP3K' || value.status ==
                        //     'Pindah Blok' || value.status == 'Bank') {
                        //     stop1.setAttribute("stop-color", "#FD8A8A");
                    } else if (value.status == 'Kosong') {
                        stop1.setAttribute("stop-color", "white");
                    } else {
                        stop1.setAttribute("stop-color", "#458BC9");
                    }


                    gradient.append(stop1);
                    // gradient.append(stop2);
                    defs.append(gradient);
                    // Menambahkan elemen gradient ke dalam SVG
                    $(`svg`).append(defs);
                    // Mengatur atribut fill elemen path dengan URL gradient yang diinginkan
                    $(`#${value.blok} path`).css("fill", `url(#myGradient-${value.blok})`);
                    $(`svg g[data-name="${value.blok}"] path`).css("fill",
                        `url(#myGradient-${value.blok})`);

                    // INDIKATOR
                    if (value.status_ontime == 'Ontime') {
                        $(`#${value.blok}-i`).css('fill', '#ADFF2F');
                        // total_ontime++;

                    } else if (value.status_ontime == 'Late') {
                        $(`#${value.blok}-i`).css('fill', 'red');
                        // total_late++;

                    } else { // -

                        $(`#${value.blok}-i`).css('fill', 'grey');
                        // total_no_spk++;

                    }

                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error loading JSON:', textStatus, errorThrown);
            }
        });

    }



</script>