// swiper halaman rooms user
document.addEventListener('DOMContentLoaded', function () {
  // Inisialisasi Swiper thumbnails
  const galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });

  // Inisialisasi Swiper utama
  const galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });

  // Inisialisasi Stepper pada halaman contact user
  const stepperElement = document.querySelector('.bs-stepper');
  if (stepperElement) {
    const stepper = new Stepper(stepperElement, {
      linear: false,
      animation: true
    });
  }
});
