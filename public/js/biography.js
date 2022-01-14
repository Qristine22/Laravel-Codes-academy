const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    direction: 'horizontal',
    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    pagination: {
        el: '.swiper-pagination',
    },
});