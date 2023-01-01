// Bootsrap JS
import './bootstrap';

// Summernote
// import 'summernote/dist/summernote-bs5'
// $(document).ready(function (){
//     $(#content).summernote();
// });



// Swiper JS
import {Swiper, Navigation, Pagination} from 'swiper';
const swiper = new Swiper(".container-fluid", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    centerSlide: true,
    fade: true,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
        slidesPerView: 1,
        },
        800: {
        slidesPerView: 2,
        },
        1000: {
        slidesPerView: 3,
        },
    },
});

//import './editor';

// Alpine js
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

