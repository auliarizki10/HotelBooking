<?php
include (".includes/header_user.php");
$title = "Dashboard";
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
<div class="card p-0 mb-6 rounded" style="margin-top: 400px;">
  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center py-6 mt-4">
  
  <div class="p-0 mb-6 rounded" style="margin-top: 300px;">
  <div class="d-flex flex-column align-items-center justify-content-center text-center py-6 mt-4">
    <div class="container my-4">

      <!-- Baris Pertama: 3 Kolom -->
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Restoran -->
        <div class="col">
  <div class="card text-center">
    <img src="assets/img/fasilitas/restoran.jpg" class="card-img-top" alt="Restoran">
    <div class="card-body">
      <h5 class="card-title">Restoran</h5>
        <div class="d-flex justify-content-center align-items-center mb-2">
          <i class="bi bi-cup-straw fs-3 me-2"></i>
          <p class="mb-0">Minuman Segar</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
          <i class="bi bi-egg-fried fs-3 me-2"></i>
          <p class="mb-0">Makanan Hangat</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
          <i class="bi bi-people fs-3 me-2"></i>
          <p class="mb-0">Area Bersama</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
          <i class="bi bi-clock fs-3 me-2"></i>
          <p class="mb-0">Jam Operasional</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
          <i class="bi bi-sunrise fs-3 me-2"></i>
          <p class="mb-0">Sarapan Pagi</p>
        </div>
    </div>
  </div>
</div>

        <!-- Kolam Renang -->
        <div class="col">
  <div class="card text-center">
    <img src="assets/img/fasilitas/kolam_renang.jpg" class="card-img-top" alt="kolam renang">
    <div class="card-body">
      <h5 class="card-title">Kolam Renang</h5>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-water fs-3 me-2"></i>
        <p class="mb-0">Air Bersih</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-person fs-3 me-2"></i>
        <p class="mb-0">Bisa untuk Anak</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-brightness-high fs-3 me-2"></i>
        <p class="mb-0">Tersedia Outdoor</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-clock-history fs-3 me-2"></i>
        <p class="mb-0">Jam Tertentu</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-umbrella fs-3 me-2"></i>
          <p class="mb-0">Kursi & Payung</p>
        </div>
    </div>
  </div>
</div>

        <!-- Gym -->
      <div class="col">
  <div class="card text-center">
    <img src="assets/img/fasilitas/gym.jpg" class="card-img-top" alt="Gym">
    <div class="card-body">
      <h5 class="card-title">Gym / Fitness</h5>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-activity fs-3 me-2"></i>
        <p class="mb-0">Alat Kebugaran</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-heart-pulse fs-3 me-2"></i>
        <p class="mb-0">Aktivitas Olahraga</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-clock fs-3 me-2"></i>
        <p class="mb-0">24 Jam</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-fan fs-3 fs-3 me-2"></i>
        <p class="mb-0">Ventilasi/AC</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-droplet-half fs-3 me-2"></i>
          <p class="mb-0">Handuk Disediakan</p>
        </div>
    </div>
  </div>
</div>
        <!-- Parkir -->
        <div class="col">
  <div class="card text-center">
    <img src="assets/img/fasilitas/parkir.jpg" class="card-img-top" alt="Parkir">
    <div class="card-body">
      <h5 class="card-title">Parkir</h5>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-car-front fs-3 me-2"></i>
        <p class="mb-0">Parkir Luas</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-cone-striped fs-3 me-2"></i>
        <p class="mb-0">Area Aman</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-sign-stop fs-3 me-2"></i>
        <p class="mb-0">Petunjuk Jelas</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-lock-fill fs-3 fs-3 me-2"></i>
        <p class="mb-0">Keamanan Terjamin</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-camera-video fs-3 me-2"></i>
          <p class="mb-0">CCTV Aktif</p>
        </div>
    </div>
  </div>
</div>

        <!-- Wi-Fi -->
        <div class="col mx-6">
  <div class="card text-center">
    <img src="assets/img/fasilitas/wipi.jpg" class="card-img-top" alt="Wi-Fi">
    <div class="card-body">
      <h5 class="card-title">Wi-Fi</h5>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-wifi fs-3 me-2"></i>
        <p class="mb-0">Sinyal Kuat</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-laptop fs-3 me-2"></i>
        <p class="mb-0">Cocok Kerja</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-shield-check fs-3 me-2"></i>
        <p class="mb-0">Koneksi Amans</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-router fs-3 fs-3 me-2"></i>
        <p class="mb-0">Router Modern</p>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-2">
        <i class="bi bi-lightning fs-3 me-2"></i>
          <p class="mb-0">Kecepatan Tinggi</p>
        </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>

<?php include(".includes/footer_user.php"); ?>

    
</div>
</div>