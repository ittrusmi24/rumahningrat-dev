const baseURL = document.querySelector('meta[name="base-url"]').getAttribute('content');
console.log(baseURL); // Output: Base URL aplikasi

function activateCarousel(sectionId, carouselId) {
    const section = $(sectionId);
    const carousel = $(carouselId);

    const position = section.position();
    const top = position.top;
    const outerHeight = section.outerHeight();

    if (top <= 80 && top > -outerHeight) {
        // Hide other carousels
        $('.owl-carousel').addClass('d-none');
        carousel.removeClass('d-none');
    }
}

var bounds = [
    [-6.397245, 107.068464],
    [-6.397245, 107.072861],
    [-6.400081, 107.072861],
    [-6.400081, 107.068464]
];
var center_point = [-6.398496, 107.071440];
var extendedBounds = L.latLngBounds(bounds).pad(1500 / 111320);
var map = L.map('map', {
    maxBounds: extendedBounds,
    maxBoundsViscosity: 1.0
}).setView(center_point, 18);

const key = 'R6nUJmbSNhAkmNyvEc52';
const mtLayer = L.maptilerLayer({
    apiKey: key,
    style: L.MaptilerStyle.DATAVIZ.LIGHT, // optional
}).addTo(map);


$(document).ready(function () {

    // $('.selectpicker').select2()

    const blok_select = new SlimSelect({
        select: '#blok',
        placeholder: 'Pilih Blok',
        allowDeselect: true
    })

    $('input[name="tgl_lahir"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        items: 1,
        navText: ["<i class='bi bi-caret-left-fill border-0'></i>",
            "<i class='bi bi-caret-right-fill border-0'></i>"
        ],
    })

    // scroll carousel active check
    let currentActiveCarousel = null;
    $('.container-group').on('scroll', function () {
        const carousels = [{
            section: '#aside-section-1',
            carousel: '#gallery-carousel-1'
        },
        {
            section: '#aside-section-2',
            carousel: '#gallery-carousel-2'
        },
        {
            section: '#aside-section-3',
            carousel: '#gallery-carousel-3'
        },
        {
            section: '#aside-section-4',
            carousel: '#gallery-carousel-4'
        },
        {
            section: '#aside-section-5',
            carousel: '#gallery-carousel-5'
        },
        {
            section: '#aside-section-6',
            carousel: '#gallery-carousel-6'
        },
        {
            section: '#aside-section-7',
            carousel: '#gallery-carousel-7'
        },
            // { section: '#aside-section-8', carousel: '#gallery-carousel-8' },
        ];

        for (const {
            section,
            carousel
        }
            of carousels) {
            if (activateCarousel(section, carousel)) {
                if (currentActiveCarousel !== carousel) {
                    currentActiveCarousel = carousel;
                }
                break;
            }
        }
    });

    // get data project
    // Ambil URL saat ini
    const url = window.location.href;

    // Ekstrak parameter terakhir dari URL
    const id = url.split('/').pop();

    // Kirim request AJAX
    // $.ajax({
    //     url: `/project/${id}`, // Sesuaikan endpoint API
    //     type: 'GET',
    //     dataType: 'json',
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika diperlukan CSRF
    //     },
    //     success: function (response) {
    //         $('#nama_project').text(response.data.project);
    //         $('#harga_project').text(`Rp. ${response.data.harga_jual}`);
    //         $('#project_tipe').text(response.data.project_tipe);
    //         $('#tipe_rumah').text(response.data.tipe_rumah);
    //         $('#alamat').text(response.data.alamat);

    //     },
    //     error: function (xhr, status, error) {
    //         console.error(`Error: ${error}`);
    //     }
    // });
    load_data_blok();
    load_svg();
});


function load_data_blok() {
    $.ajax({
        url: baseURL+`/dummy.json`,
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            // console.log(value);
            // KASIH WARNA

            // resume status
            total_akad = 0;
            total_booking_cash = 0;
            total_booking = 0;
            total_bank = 0;
            total_sp3k = 0;
            total_kosong = 0;
            total_not_sale = 0;
            total_pindah_blok = 0;

            // resume progres
            total_persen_0 = 0;
            total_persen_10 = 0;
            total_persen_30 = 0;
            total_persen_60 = 0;
            total_persen_85 = 0;
            total_persen_100 = 0;

            // resume indicator
            total_ontime = 0;
            total_late = 0;
            total_no_spk = 0;


            total_unit = 0;

            response.forEach(value => {
                $('#select_blok').append(`<option value="${value.blok}">${value.blok}</option>`);

                var defs = document.createElementNS("http://www.w3.org/2000/svg", "defs");
                var gradient = document.createElementNS("http://www.w3.org/2000/svg", "linearGradient");
                gradient.setAttribute("id", `myGradient-${value.blok}`);

                var descText = $(`#${value.blok}`).find('desc').text().replace(/\s+/g, '');
                var descArray = descText.split(',');

                $(`#path`).css("fill", `#D3D3D3`);

                if (descArray[1] == 'U') {
                    // UTARA
                    gradient.setAttribute("x1", "0%");
                    gradient.setAttribute("y1", "0%");
                    gradient.setAttribute("x2", "0%");
                    gradient.setAttribute("y2", "100%");

                } else if (descArray[1] == 'S') {
                    // SELATAN
                    gradient.setAttribute("x1", "0%");
                    gradient.setAttribute("y1", "100%");
                    gradient.setAttribute("x2", "0%");
                    gradient.setAttribute("y2", "0%");

                } else if (descArray[1] == 'B') {
                    // BARAT
                    gradient.setAttribute("x1", "0%");
                    gradient.setAttribute("y1", "0%");
                    gradient.setAttribute("x2", "100%");
                    gradient.setAttribute("y2", "0%");

                } else if (descArray[1] == 'T') {
                    // TIMUR
                    gradient.setAttribute("x1", "100%");
                    gradient.setAttribute("y1", "0%");
                    gradient.setAttribute("x2", "0%");
                    gradient.setAttribute("y2", "0%");

                }


                // Warna pertama (STATUS)
                var stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
                stop1.setAttribute("offset", "50%");

                if (value.status == 'Not Sale') {
                    stop1.setAttribute("stop-color", "#C3C28E");
                    total_not_sale++;

                } else if (value.status == 'Akad') {
                    stop1.setAttribute("stop-color", "#B3E5BE");
                    total_akad++;

                } else if (value.status == 'Booking Cash') {
                    stop1.setAttribute("stop-color", "#45b6fe");
                    total_booking_cash++;

                } else if (value.status == 'Booking') {
                    stop1.setAttribute("stop-color", "#FD8A8A");
                    total_booking++;

                } else if (value.status == 'SP3K') {
                    stop1.setAttribute("stop-color", "#FDFFAE");
                    total_sp3k++;

                } else if (value.status == 'Kosong') {
                    stop1.setAttribute("stop-color", "white");
                    total_kosong++;

                } else if (value.status == 'Pindah Blok') {
                    stop1.setAttribute("stop-color", "#990066");
                    total_pindah_blok++;

                } else { // Bank
                    stop1.setAttribute("stop-color", "#B983FF");
                    total_bank++;

                }

                // // Resume Status
                // $('#total_akad').html(total_akad);
                // $('#total_booking_cash').html(total_booking_cash);
                // $('#total_booking').html(total_booking);
                // $('#total_bank').html(total_bank);
                // $('#total_sp3k').html(total_sp3k);
                // $('#total_kosong').html(total_kosong);
                // $('#total_not_sale').html(total_not_sale);
                // $('#total_pindah_blok').html(total_pindah_blok);



                // Warna kedua (PROGRES)
                var stop2 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
                stop2.setAttribute("offset", "50%");

                // console.info(parseInt(value.progres));

                if (parseInt(value.progres) < 10) {
                    stop2.setAttribute("stop-color", "#B9F3FC");
                    total_persen_0++;

                } else if (parseInt(value.progres) >= 10 && parseInt(value.progres) < 30) {
                    stop2.setAttribute("stop-color", "#9F8772");
                    total_persen_10++;

                } else if (parseInt(value.progres) >= 30 && parseInt(value.progres) < 60) {
                    stop2.setAttribute("stop-color", "#B7B7B7");
                    total_persen_30++;

                } else if (parseInt(value.progres) >= 60 && parseInt(value.progres) < 85) {
                    stop2.setAttribute("stop-color", "#1572A1");
                    total_persen_60++;

                } else if (parseInt(value.progres) >= 85 && parseInt(value.progres) < 100) {
                    stop2.setAttribute("stop-color", "#FAAB78");
                    total_persen_85++;

                } else if (parseInt(value.progres) > 99) {
                    stop2.setAttribute("stop-color", "#FF8DC7");
                    total_persen_100++;

                } else {
                    stop2.setAttribute("stop-color", "black");

                    // console.info(`${value.blok} - ${parseInt(value.progres)}`)
                }

                gradient.append(stop1);
                gradient.append(stop2);
                defs.append(gradient);
                // Menambahkan elemen gradient ke dalam SVG
                $(`svg`).append(defs);
                // a08.css('fill', 'red');
                // Mengatur atribut fill elemen path dengan URL gradient yang diinginkan
                $(`#${value.blok} path`).css("fill", `url(#myGradient-${value.blok})`);

                // Resume Progres
                // $('#total_persen_0').html(total_persen_0);
                // $('#total_persen_10').html(total_persen_10);
                // $('#total_persen_30').html(total_persen_30);
                // $('#total_persen_60').html(total_persen_60);
                // $('#total_persen_85').html(total_persen_85);
                // $('#total_persen_100').html(total_persen_100);



                // INDIKATOR
                if (value.status_ontime == 'Ontime') {
                    $(`#${value.blok}-i`).css('fill', '#ADFF2F');
                    total_ontime++;

                } else if (value.status_ontime == 'Late') {
                    $(`#${value.blok}-i`).css('fill', 'red');
                    total_late++;

                } else { // -

                    $(`#${value.blok}-i`).css('fill', 'grey');
                    total_no_spk++;

                }

                // Resume Progres
                // $('#total_ontime').html(total_ontime);
                // $('#total_late').html(total_late);
                // $('#total_no_spk').html(total_no_spk);


                // total_unit++;
                // $('#total_unit').html(total_unit);
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error loading JSON:', textStatus, errorThrown);
        }
    });
}

function load_svg(bounds) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', baseURL+'/assets/siteplan/bekasi_new.svg', false); // false makes it synchronous
    xhr.send(null);

    if (xhr.status === 200) {
        var svgElement = document.createElement('div');
        svgElement.innerHTML = xhr.responseText;

        // Pastikan menggunakan bounds yang dikirim sebagai parameter
        svgOverlay = L.svgOverlay(svgElement.firstElementChild, bounds).addTo(map);

        var svgDocument = $(svgElement.firstElementChild);
    } else {
        console.error('Error loading SVG:', xhr.statusText);
    }
}

// format rupiah
function formatRupiah(angka) {
    var rupiah = '';
    var angkarev = angka.toString().split('').reverse().join('');
    for (var i = 0; i < angkarev.length; i++) {
        if (i % 3 == 0) {
            rupiah += angkarev.substr(i, 3) + '.';
        }
    }
    return 'Rp ' + rupiah.split('', rupiah.length - 1).reverse().join('');
}

$('#blok').change(function (e) {
    e.preventDefault();
    var blok = $(this).val();
    let harga = $(this).find(':selected').data('harga'),
        nominal = $(this).find(':selected').data('nominal')
    harga = formatRupiah(harga)
    price = formatRupiah(nominal)
    $('#harga_blok').text(harga);
    $('#price').text(price);
    $('#nominal_booking').val(nominal);

    clearInterval(blinkInterval);

    // Clear all blue strokes pada semua blok
    $('g').css({
        'stroke': '',
        'stroke-width': ''
    });

    var selectedBlok = $(`#${blok}`);
    if (selectedBlok.length && svgOverlay) {
        var bbox = selectedBlok[0].getBBox();
        var bounds = svgOverlay.getBounds();
        var svgWidth = svgOverlay._image.viewBox.baseVal.width;
        var svgHeight = svgOverlay._image.viewBox.baseVal.height;
        var scaleX = (bounds.getEast() - bounds.getWest()) / svgWidth;
        var scaleY = (bounds.getNorth() - bounds.getSouth()) / svgHeight;
        var centerX = bbox.x + bbox.width / 2;
        var centerY = bbox.y + bbox.height / 2;
        var adjustmentFactor = 0; // Sesuaikan jika perlu
        var adjustedCenterY = centerY + bbox.height * adjustmentFactor;

        var lat = bounds.getSouth() + (svgHeight - adjustedCenterY) * scaleY;
        var lng = bounds.getWest() + centerX * scaleX;

        // Terbang ke blok yang dipilih
        map.flyTo([lat, lng], 22, {
            animate: true,
            duration: 1.5
        });

        let isHighlighted = false;

        // Mulai animasi kedip
        blinkInterval = setInterval(function () {
            if (isHighlighted) {
                selectedBlok.css({
                    'stroke': 'blue',
                    'stroke-width': '2',
                    'stroke-opacity': 1 // Full opacity
                });
            } else {
                selectedBlok.css({
                    'stroke': 'blue',
                    'stroke-width': '2',
                    'stroke-opacity': 0.3 // Kedip dengan opacity rendah
                });
            }
            isHighlighted = !isHighlighted;
        }, 500); // Kedip setiap 0.5 detik
    }
});

const ulasan = document.getElementById('ulasan-container');

let isDragging = false;
let startX;
let scrollLeft;

ulasan.addEventListener('mousedown', (e) => {
    isDragging = true;
    ulasan.classList.add('dragging');
    startX = e.pageX - ulasan.offsetLeft;
    scrollLeft = ulasan.scrollLeft;
});

ulasan.addEventListener('mouseleave', () => {
    isDragging = false;
    ulasan.classList.remove('dragging');
});

ulasan.addEventListener('mouseup', () => {
    isDragging = false;
    ulasan.classList.remove('dragging');
});

ulasan.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - ulasan.offsetLeft;
    const walk = (x - startX) * 2;
    ulasan.scrollLeft = scrollLeft - walk;
});

function validasiBook() {
    let nama = $('#nama').val(),
        no_hp = $('#no_hp').val(),
        tgl_lahir = $('#tgl_lahir').val(),
        jenis_kl = $('#jenis_kl').find(":selected").val(),
        no_ktp = $('#no_ktp').val(),
        alamat = $('#alamat_book').val(),
        pendapatan = $('#pendapatan').val(),
        status = $('#status').find(":selected").val(),
        no_ktp_psg = $('#no_ktp_psg').val(),
        payment = $("input[name='payment']:checked").val(),
        bank = $("input[name='bank']:checked").val()

    if (nama == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Nama belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#nama').focus()
    } else if (no_hp == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "No HP belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#no_hp').focus()
    } else if (tgl_lahir == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Tanggal lahir belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#tgl_lahir').focus()
    } else if (jenis_kl == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Tanggal lahir belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#jenis_kl').focus()
    } else if (no_ktp == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "No KTP belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#no_ktp').focus()
    } else if (alamat == '' || alamat == null) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Alamat belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#alamat_book').focus()
    } else if (pendapatan == '' || pendapatan == null) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Pendapatan belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#pendapatan').focus()
    } else if (status == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Status belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#status').focus()
    } else if (no_ktp_psg == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "No KTP Peserta belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#no_ktp_psg').focus()
    } else if (payment == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Payment belum dipilih!",
            showConfirmButton: false,
            timer: 1000
        });
        $("input[name='payment']").focus()
    } else if (bank == '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Bank belum dipilih!",
            showConfirmButton: false,
            timer: 1000
        });
        $("input[name='bank']").focus()
    } else {
        var form = $('#formBooking')[0]; // Ambil elemen DOM dari jQuery
        var formData = new FormData(form); // Buat objek FormData
        // Ambil nilai dari input dengan id "blok"
        var blokValue = $('#blok').val();

        // Tambahkan nilai ke FormData
        formData.append('blok', blokValue);
        $.ajax({
            url: `${baseURL}/simpan_booking`, // Sesuaikan endpoint API
            type: 'POST',
            dataType: 'json',
            data: formData,
            processData: false, // Jangan proses data
            contentType: false, // Jangan tetapkan content-type secara otomatis
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika diperlukan CSRF
            },
            success: function (response) {
                console.log(response);
                if (response.status) {
                    Swal.fire({
                        icon: "success",
                        title: "Berhasil",
                        text: response.message,
                        showConfirmButton: false,
                        timer: 1000
                    });

                    $('#formBooking')[0].reset();
                } else {
                    Swal.fire({
                        icon: "warning",
                        title: "Reject!",
                        text: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error(`Error: ${error}`);
            }
        });
    }

}
