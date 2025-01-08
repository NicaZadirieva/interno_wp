function initializeSwiper(swiperClass) {
  var swiper = new Swiper(swiperClass, {
    loop: false,
    effect: "coverflow",
    coverFlowEffect: {
      rotate: 30,
      slideShadows: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}
