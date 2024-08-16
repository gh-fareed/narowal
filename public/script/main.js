const swiper = new Swiper('.swiper-container', {
    loop: true, // Loop through slides
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 25000, // Auto-slide every 5 seconds
        disableOnInteraction: false, // Continue autoplay after user interactions
    }
});

// second slider 
var swiper2 = new Swiper('.swiper-container2', {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay:false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});

document.addEventListener('DOMContentLoaded', function () {
    var swiper3 = new Swiper('.swiper-container3', {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
});