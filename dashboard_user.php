<?php
include (".includes/header_user.php");
$title = "Dashboard";
?>

<!-- video hotel -->
<div class="position-fixed top-0 start-0 w-100 h-100">
  <div class="row m-0 h-100">
    <div class="col-12 p-0 position-relative video-wrapper">
      <video src="assets/vid/vdhotel.mp4" autoplay muted loop class="video-bg"></video>
      <div class="position-absolute top-50 start-50 translate-middle w-100 ps-4">
        <h1 class="text-primary" style="font-family: 'spicy rice', sans-serif;
    text-shadow: 2.5px 2.5px 2.5px rgb(35, 29, 36);">HOOKING</h1>
        <h5 class="text-white" style="text-shadow: 2.5px 2.5px 2.5px rgb(35, 29, 36);">Ini adalah deskripsi singkat atau penjelasan yang diletakkan di dalam 
          <br>video agar terlihat profesional dan mudah dipahami.</h5>
        <div class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
  <div class="read-only-ratings raty mb-2" data-read-only="true" data-score="5" data-number="5" title="good" style="pointer-events: none;">
    <!-- 5 Bintang Penuh dengan Warna Kuning -->
    <img alt="1" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="2" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="3" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="4" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="5" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
  </div>

      </div>
    </div>
  </div>
</div>
</div>
<!-- /video hotel -->

<!-- ringkasan hotel -->
<div class="card p-0 mb-6 rounded" style="margin-top: 380px;">
  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center py-6 mt-4">
  <span class="card-title mb-1 h1">
      <span class="text-primary text-nowrap" style="font-family: 'spicy rice', sans-serif; text-shadow: 2.5px 2.5px 2.5px rgb(36, 29, 29);">WELCOME TO HOOKING</span>
    </span>
    <div class="card-body">
      <p class="demo-inline-spacing mt-0">
        <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          About Hooking
        </button>
      </p>
      <!-- Konten tersembunyi -->
      <div class="collapse" id="collapseExample">
        <div class="d-grid d-sm-flex p-4 border">
          <img src="assets/img/hotel/hotel.jpg" alt="collapse-image" height="125" class="me-6 mb-sm-0 mb-2">
          <h6 class="mb-0" style="font-family: 'Poppins', sans-serif;">
            Hooking Hotel terletak langsung di tepi pantai, menawarkan kemegahan dan kenyamanan dalam satu paket eksklusif. Dengan arsitektur modern dan ruang-ruang yang luas, hotel ini menghadirkan suasana mewah yang berbeda dari resor alam pada umumnya. Bangunannya yang kokoh dan berkelas dirancang untuk kamu yang mencari pengalaman menginap tanpa kompromi, lengkap dengan pemandangan laut terbuka dan layanan terbaik.
          </h6>
        </div>
      </div>
    </div>

    <div class="col-12">
  <h2 class="text-muted mt-4">FASILITAS</h2>
  <div class="swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-watch-progress" id="swiper-3d-coverflow-effect">
    <div class="swiper-wrapper" id="swiper-wrapper-7b5b256718fa5355" aria-live="polite" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-82px, 0px, 0px); transition-delay: 0ms;">
      
      <div class="swiper-slide swiper-slide-visible swiper-slide-prev" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(50deg) scale(1); z-index: 0;" role="group" aria-label="1 / 5">
        <img src="assets/img/hotel/hotel.jpg" alt="Slide 1" class="img-fluid" style="width: 200%; height: auto;">
        <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 1; transition-duration: 0ms;"></div>
        <div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 0ms;"></div>
      </div>

      <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 1;" role="group" aria-label="2 / 5">
        <img src="assets/img/hotel/service.jpg" alt="Slide 2" class="img-fluid">
        <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 0ms;"></div>
        <div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 0ms;"></div>
      </div>

      <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(-50deg) scale(1); z-index: 0;" role="group" aria-label="3 / 5">
        <img src="assets/img/kamar/DELUXE.jpg" alt="Slide 3" class="img-fluid">
        <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 0ms;"></div>
        <div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 1; transition-duration: 0ms;"></div>
      </div>

      <div class="swiper-slide" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(-100deg) scale(1); z-index: -1;" role="group" aria-label="4 / 5">
        <img src="assets/img/illustrations/girl-doing-yoga-light.png" alt="Slide 4" class="img-fluid">
        <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 0ms;"></div>
        <div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 2; transition-duration: 0ms;"></div>
      </div>

      <div class="swiper-slide" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -300px) rotateX(0deg) rotateY(-150deg) scale(1); z-index: -2;" role="group" aria-label="5 / 5">
        <img src="assets/img/kamar/single.jpg" alt="Slide 5" class="img-fluid">
        <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 0ms;"></div>
        <div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 3; transition-duration: 0ms;"></div>
      </div>

    </div>
    <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal">
      <span class="swiper-pagination-bullet"></span>
      <span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span>
      <span class="swiper-pagination-bullet"></span>
      <span class="swiper-pagination-bullet"></span>
      <span class="swiper-pagination-bullet"></span>
    </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
  </div>
</div>
  </div>
</div>

<div class="card p-0 mb-6">
  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center py-6 mt-4 bg-navbar-theme">

</div>
</div>

</>
</div>

<?php
include (".includes/footer.php");
 