function activateCarousel(sectionId, carouselId) {
    const section = $(sectionId);
    const carousel = $(carouselId);

    const position = section.position();
    const top = position.top;
    const outerHeight = section.outerHeight();

    if (top <= 300 && top > -outerHeight) {
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


$('#blok').change(function (e) {
    e.preventDefault();
    let harga = $(this).find(':selected').data('harga')
    harga = `Rp. ${harga}`
    $('#harga_blok').text(harga);
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
            title: "Nama belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#nama').focus()
    } else if (no_hp == '') {
        Swal.fire({
            icon: "error",
            title: "No HP belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#nama').focus()
    } else if (tgl_lahir) {
        Swal.fire({
            icon: "error",
            title: "Tanggal lahir belum diisi!",
            showConfirmButton: false,
            timer: 1000
        });
        $('#tgl_lahir').focus()
    }

}
