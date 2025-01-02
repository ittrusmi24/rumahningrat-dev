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

    $('.selectpicker').select2()

    $('#tgl_lahir').datepicker({
        uiLibrary: 'bootstrap5'
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