const swiper = new Swiper('.swiper', {
    slidesPerView: 4,
    direction: 'horizontal',
    spaceBetween: 40,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        601: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        901: {
            slidesPerView: 4,
        }
    }
});


const swiperButtonsNext = document.querySelectorAll(".swiper-button-next")
swiperButtonsNext.forEach((item) => {
    item.classList.remove("swiper-button-disabled");
})