const swiper = new Swiper("#ba-swiper", {
    slidesPerView: 1,
    initialSlide: 1,
    loop: true,
    watchOverflow: false, // ignore if there are not enough slides
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});