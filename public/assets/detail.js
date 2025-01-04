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

});

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
    let harga = $(this).find(':selected').data('harga'),
        nominal = $(this).find(':selected').data('nominal')
    harga = formatRupiah(harga)
    price = formatRupiah(nominal)
    $('#harga_blok').text(harga);
    $('#price').text(price);
    $('#nominal_booking').val(nominal);
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