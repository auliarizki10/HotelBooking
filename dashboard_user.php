<?php
include (".includes/header_user.php");
$title = "Dashboard";
include '.includes/toast_notification.php';
?>

<!-- video hotel -->
<div class="position-fixed top-0 start-0 w-100 h-100">
  <div class="row m-0 h-100">
    <div class="col-12 p-0 position-relative video-wrapper">
      <video src="assets/vid/vdhotel.mp4" autoplay muted loop class="video-bg"></video>
      <div class="position-fixed top-50 start-50 translate-middle w-100 ps-4">
        <h1 class="text-warning" style="font-family: 'spicy rice', sans-serif;
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
<div class="card p-0 mb-6 rounded" style="margin-top: 300px;">
  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center py-6 mt-4">
    <!-- navigasi mini -->

<!-- <div class="nav-align-top">
  <ul class="nav border-bottom justify-content-start" id="custom-nav">
    <li class="nav-item">
      <button type="button" class="nav-link button_menyala active py-1 px-2 fs-6 text-nowrap" data-target="section-home">
        <span class="d-none d-sm-inline-flex align-items-center">Home</span>
      </button>
    </li>
    <li class="nav-item">
      <button type="button" class="nav-link button_menyala py-1 px-2 fs-6 text-nowrap" data-target="section-profile">
        <span class="d-none d-sm-inline-flex align-items-center">Profile</span>
      </button>
    </li>
    <li class="nav-item">
      <button type="button" class="nav-link button_menyala py-1 px-2 fs-6 text-nowrap" data-target="section-messages">
        <span class="d-none d-sm-inline-flex align-items-center">Messages</span>
      </button>
    </li>
  </ul>
  
  <div class="pt-3">
    <div id="section-home" class="mb-5">
      <div class="p-2">
        <h6 class="mb-0" style="font-family: 'Poppins', sans-serif; line-height: 1.6;">
          Hooking Hotel terletak langsung di tepi pantai, menawarkan kemegahan dan kenyamanan dalam satu paket eksklusif. 
          Dengan arsitektur modern dan ruang-ruang yang luas, hotel ini menghadirkan suasana mewah yang berbeda dari resor 
          alam pada umumnya. Bangunannya yang kokoh dan berkelas dirancang untuk kamu yang mencari pengalaman menginap 
          tanpa kompromi, lengkap dengan pemandangan laut terbuka dan layanan terbaik.
        </h6>
      </div>
    </div>

    <div id="section-profile" class="mb-5" style="margin-top: 300px;">
      <div class="col">
        <div class="h-50" style="z-index: 1;">
          <img class="card-img-top" src="" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural lead-in to additional content.
              This content is a little bit longer.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div id="section-messages">
      <p>
        Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
        bears cake chocolate.
      </p>
      <p class="mb-0">
        Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
        sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
        jelly.
      </p>
    </div>
  </div>
</div> -->

<div class="container my-4">
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Restoran -->
    <div class="col">
      <div class="card h-100 text-center">
        <img src="assets/img/fasilitas/restoran.jpg" class="card-img-top" alt="Restoran">
        <div class="card-body">
          <h5 class="card-title">Restoran</h5>
          <div>
            <i class="bi bi-cup-straw fs-3"></i><small class="ms-2">Minuman Segar</small><br>
            <i class="bi bi-egg-fried fs-3"></i><small class="ms-2">Makanan Hangat</small><br>
            <i class="bi bi-people fs-3"></i><small class="ms-2">Area Bersama</small><br>
            <i class="bi bi-clock fs-3"></i><small class="ms-2">Jam Operasional</small><br>
            <i class="bi bi-sunrise fs-3"></i><small class="ms-2">Sarapan Pagi</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Kolam Renang -->
    <div class="col">
      <div class="card h-100 text-center">
        <img src="assets/img/fasilitas/kolam_renang.jpg" class="card-img-top" alt="Kolam Renang" style="width: 100%; height: auto;">
        <div class="card-body">
          <h5 class="card-title">Kolam Renang</h5>
          <div>
            <i class="bi bi-water fs-3"></i><small class="ms-2">Air Bersih</small><br>
            <i class="bi bi-person fs-3"></i><small class="ms-2">Bisa untuk Anak</small><br>
            <i class="bi bi-brightness-high fs-3"></<small class="ms-2">Tersedia Outdoor</small><br>
            <i class="bi bi-clock-history fs-3"></i><small class="ms-2">Jam Tertentu</small><br>
            <i class="bi bi-umbrella fs-3"></i><small class="ms-2">Kursi & Payung</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Gym -->
    <div class="col">
      <div class="card h-100 text-center">
        <img src="gambar/gym.jpg" class="card-img-top" alt="Gym">
        <div class="card-body">
          <h5 class="card-title">Gym / Fitness</h5>
          <div>
            <i class="bi bi-dumbbell fs-3"></i><small>Alat Kebugaran</small><br>
            <i class="bi bi-person-running fs-3"></i><small>Aktivitas Olahraga</small><br>
            <i class="bi bi-clock fs-3"></i><small>24 Jam</small><br>
            <i class="bi bi-fan fs-3"></i><small>Ventilasi/AC</small><br>
            <i class="bi bi-droplet-half fs-3"></i><small>Handuk Disediakan</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Parkir -->
    <div class="col">
      <div class="card h-100 text-center">
        <img src="gambar/parkir.jpg" class="card-img-top" alt="Parkir">
        <div class="card-body">
          <h5 class="card-title">Parkir</h5>
          <div>
            <i class="bi bi-car-front fs-3"></i><small>Parkir Luas</small><br>
            <i class="bi bi-cone-striped fs-3"></i><small>Area Aman</small><br>
            <i class="bi bi-sign-stop fs-3"></i><br><small>Petunjuk Jelas</small><br>
            <i class="bi bi-lock-fill fs-3"></i><br><small>Keamanan Terjamin</small><br>
            <i class="bi bi-camera-video fs-3"></i><br><small>CCTV Aktif</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Wi-Fi -->
    <div class="col">
      <div class="card h-100 text-center">
        <img src="gambar/wifi.jpg" class="card-img-top" alt="Wi-Fi">
        <div class="card-body">
          <h5 class="card-title">Wi-Fi</h5>
          <div>
            <i class="bi bi-wifi fs-3"></i><br><small>Sinyal Kuat</small><br>
            <i class="bi bi-laptop fs-3"></i><br><small>Cocok Kerja</small><br>
            <i class="bi bi-shield-check fs-3"></i><br><small>Koneksi Aman</small><br>
            <i class="bi bi-router fs-3"></i><br><small>Router Modern</small><br>
            <i class="bi bi-lightning fs-3"></i><br><small>Kecepatan Tinggi</small>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

 
  <div class="col-xl-6" style="margin-top: 150px;">
  <div class="card">
    <h5 class="card-header">Custom Option Radios With Icons</h5>
    <div class="card-body">
      <div class="row g-3">
      <div class="col-md mb-4">
          <span class="custom-option-body d-flex flex-column align-items-center">
           <!-- Icon -->
            <div class="icon-wrapper p-3 rounded">
              <i class="bx bx-rocket fs-1" style="color: orange;"></i>
            </div>
           <!-- Text -->
           <div class="text-bg px-3 py-2 mt-2 rounded">
              <h6 class="custom-option-title fw-bold d-block text-center text-warning">Starter</h6>
              <p class="d-block text-center text-warning">Cake sugar plum fruitcake I love sweet roll jelly-o.</p>
          </div>
          </span>
      </div>

      <div class="col-md mb-4">
          <span class="custom-option-body d-flex flex-column align-items-center">
           <!-- Icon -->
            <div class="icon-wrapper p-3 rounded">
              <i class="bx bx-user fs-1" style="color: orange;"></i>
            </div>
           <!-- Text -->
           <div class="text-bg px-3 py-2 mt-2 rounded">
              <h6 class="custom-option-title fw-bold d-block text-center text-warning">Starter</h6>
              <p class="d-block text-center text-warning">Cake sugar plum fruitcake I love sweet roll jelly-o.</p>
          </div>
          </span>
      </div>

      <div class="col-md mb-4">
          <span class="custom-option-body d-flex flex-column align-items-center">
           <!-- Icon -->
            <div class="icon-wrapper p-3 rounded">
              <i  class="bx bx-crown fs-1" style="color: orange;"></i>
            </div>
           <!-- Text -->
           <div class="text-bg px-3 py-2 mt-2 rounded">
              <h6 class="custom-option-title fw-bold d-block text-center text-warning">Starter</h6>
              <p class="d-block text-center text-warning">Cake sugar plum fruitcake I love sweet roll jelly-o.</p>
          </div>
          </span>
      </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>

<?php
include (".includes/footer_user.php");
?>