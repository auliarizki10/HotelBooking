<?php
include (".includes/header_user.php");
$title = "Dashboard";
?>

<div class="position-fixed top-0 start-0 w-100 h-100">
  <div class="row m-0 h-100">
    <!-- video hotel -->
    <div class="col-12 p-0 position-relative video-wrapper">
      <video src="assets/vid/vdhotel.mp4" autoplay muted loop class="video-bg"></video>
      <!-- /video hotel -->

      <!-- TEXT PADA VIDEO -->
      <div class="position-fixed top-50 start-50 translate-middle w-100 ps-4">
        <h1 class="text-warning" style="font-family: 'Lora', serif;
    text-shadow: 2.5px 2.5px 2.5px rgb(35, 29, 36); font-size: 60px;">HOOKING</h1>
        <h5 class="text-white" style="text-shadow: 2.5px 2.5px 2.5px rgb(35, 29, 36); font-size: 20px;">Hotel Booking terkeren semuka bumi dengan harga gokil berkualitas.</h5>
      <!-- TEXT PADA VIDEO -->

      <!-- BINTANG DIBAWAH TEXT PADA VIDEO -->
        <div class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
  <div class="read-only-ratings raty mb-2" data-read-only="true" data-score="5" data-number="5" title="good" style="pointer-events: none;">
    <!-- 5 Bintang Penuh dengan Warna Kuning -->
    <img alt="1" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='26' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="2" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='26' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="3" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='26' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="4" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='26' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
    <img alt="5" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='26' %3E%3Cpath fill='%23FFD700' d='M21.947 9.179a1 1 0 0 0-.868-.676l-5.701-.453l-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107l-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4l4.536-4.082c.297-.268.406-.686.278-1.065'/%3E%3C/svg%3E">
  </div>
      </div>
      <!-- BINTANG DIBAWAH TEXT PADA VIDEO -->
    </div>
  </div>
</div>
</div>

<!-- ringkasan hotel -->
<div class="card p-0 mb-6 rounded" style="margin-top: 400px;">
  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center py-6 mt-4">
  <div class="container">
    <!-- text about hooking -->
    <div>
    <h3 class="fw-semibold position-relative d-inline-block" style="font-family: 'Poppins', sans-serif;">
  About Hooking
  <span class="position-absolute start-0 bottom-0 w-100" style="height: 3px; background-color: #ffc107;"></span>
</h3>
    </div>
    <!-- /text about hooking -->

    <!-- deskripsi tentang hotel -->
  <div class="">
    <h3 class="fs-6 text-center">
      Hotel Hooking terletak langsung di tepi pantai, menawarkan kemegahan dan kenyamanan dalam satu paket eksklusif.
      Dengan arsitektur modern <br> dan ruang-ruang yang luas, hotel ini menghadirkan suasana mewah yang berbeda dari resor alam pada umumnya. 
      Bangunannya yang kokoh dan berkelas dirancang untuk kamu yang mencari pengalaman menginap dengan fasilitas lengkap, pemandangan laut terbuka, dan layanan bintang lima.
    </h3>
  </div>
  <!-- /deskripsi tentang hotel -->
  
  <div class="p-0 mb-6 rounded" style="margin-top: 20px;">
  <div class="d-flex flex-column align-items-center justify-content-center text-center py-6 mt-4">
    <div class="container my-4">
      <!-- text fasilitas -->
    <h3 class="fw-semibold position-relative d-inline-block mb-4" style="font-family: 'Poppins', sans-serif;">
  Fasilitas
  <span class="position-absolute start-0 bottom-0 w-100" style="height: 3px; background-color: #ffc107;"></span>
</h3>
<!-- /text fasilitas -->

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card Restoran -->
        <div class="col">
  <div class="card text-center">
    <img src="assets/img/fasilitas/restoran.jpg" class="card-img-top" alt="Restoran">
    <div class="card-body shadow-lg">
      <h5 class="card-title">Restoran</h5>
      <div class="d-flex justify-content-center mb-2">
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
</div>
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-cup-straw fs-4 me-2"></i>
          <small class="mb-0">Minuman Segar</small>
        </div>
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-egg-fried fs-4 me-2"></i>
          <p class="mb-0">Makanan Hangat</p>
        </div>
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-people fs-4 me-2"></i>
          <p class="mb-0">Area Bersama</p>
        </div>
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-clock fs-4 me-2"></i>
          <p class="mb-0">Jam Operasional</p>
        </div>
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-sunrise fs-4 me-2"></i>
          <p class="mb-0">Sarapan Pagi</p>
        </div>
        <div class="position-absolute bottom-0 end-0 m-3 d-flex align-items-center" style="font-size: 0.85rem;">
        <div class="d-flex align-items-center justify-content-end">
  <span class="badge bg-success me-2" style="font-size: 0.85rem;">9.0</span>
  <div class="d-flex flex-column align-items-start text-muted" style="font-size: 0.75rem; line-height: 1.2;">
    <span>Sangat Bagus</span>
    <small>2 ulasan</small>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- /Card Restoran -->

        <!-- Card Kolam Renang -->
        <div class="col">
  <div class="card text-center">
    <img src="assets/img/fasilitas/kolam_renang.jpg" class="card-img-top" alt="kolam renang">
    <div class="card-body shadow-lg">
      <h5 class="card-title">Kolam Renang</h5>
      <div class="d-flex justify-content-center mb-2">
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
</div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-water fs-4 me-2"></i>
        <p class="mb-0">Air Bersih</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-person fs-4 me-2"></i>
        <p class="mb-0">Bisa untuk Anak</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-brightness-high fs-4 me-2"></i>
        <p class="mb-0">Tersedia Outdoor</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-clock-history fs-4 me-2"></i>
        <p class="mb-0">Jam Tertentu</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-umbrella fs-4 me-2"></i>
          <p class="mb-0">Kursi & Payung</p>
        </div>
        <div class="position-absolute bottom-0 end-0 m-3 d-flex align-items-center" style="font-size: 0.85rem;">
        <div class="d-flex align-items-center justify-content-end">
  <span class="badge bg-success me-2" style="font-size: 0.85rem;">9.0</span>
  <div class="d-flex flex-column align-items-start text-muted" style="font-size: 0.75rem; line-height: 1.2;">
    <span>Sangat Bagus</span>
    <small>2 ulasan</small>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- /Card Kolam Renang -->

        <!-- Card Gym -->
      <div class="col">
  <div class="card text-center shadow-lg">
    <img src="assets/img/fasilitas/gym.jpg" class="card-img-top" alt="Gym">
    <div class="card-body">
      <h5 class="card-title">Gym / Fitness</h5>
      <div class="d-flex justify-content-center mb-2">
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
</div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-activity fs-4 me-2"></i>
        <p class="mb-0">Alat Kebugaran</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-heart-pulse fs-4 me-2"></i>
        <p class="mb-0">Aktivitas Olahraga</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-clock fs-4 me-2"></i>
        <p class="mb-0">24 Jam</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-fan fs-4 me-2"></i>
        <p class="mb-0">Ventilasi/AC</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-droplet-half fs-4 me-2"></i>
          <p class="mb-0">Handuk Disediakan</p>
        </div>
        <div class="position-absolute bottom-0 end-0 m-3 d-flex align-items-center" style="font-size: 0.85rem;">
        <div class="d-flex align-items-center justify-content-end">
  <span class="badge bg-success me-2" style="font-size: 0.85rem;">9.0</span>
  <div class="d-flex flex-column align-items-start text-muted" style="font-size: 0.75rem; line-height: 1.2;">
    <span>Sangat Bagus</span>
    <small>2 ulasan</small>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- /Card Gym -->

        <!-- Card Parkir -->
        <div class="col">
  <div class="card text-center">
    <img src="assets/img/fasilitas/parkir.jpg" class="card-img-top" alt="Parkir">
    <div class="card-body shadow-lg">
      <h5 class="card-title">Parkir</h5>
      <div class="d-flex justify-content-center mb-2">
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
</div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-car-front fs-4 me-2"></i>
        <p class="mb-0">Parkir Luas</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-cone-striped fs-4 me-2"></i>
        <p class="mb-0">Area Aman</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-sign-stop fs-4 me-2"></i>
        <p class="mb-0">Petunjuk Jelas</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-lock-fill fs-4 me-2"></i>
        <p class="mb-0">Keamanan Terjamin</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-camera-video fs-4 me-2"></i>
          <p class="mb-0">CCTV Aktif</p>
        </div>
        <div class="position-absolute bottom-0 end-0 m-3" style="font-size: 0.85rem; text-align: right;">
        <div class="d-flex align-items-center justify-content-end">
  <span class="badge bg-success me-2" style="font-size: 0.85rem;">9.0</span>
  <div class="d-flex flex-column align-items-start text-muted" style="font-size: 0.75rem; line-height: 1.2;">
    <span>Sangat Bagus</span>
    <small>2 ulasan</small>
  </div>
</div>

      </div>
    </div>
  </div>
</div>
<!-- /Card Parkir -->

        <!-- Card Wi-Fi -->
        <div class="col mx-6">
  <div class="card text-center">
    <img src="assets/img/fasilitas/wipi.jpg" class="card-img-top" alt="Wi-Fi">
    <div class="card-body shadow-lg">
      <h5 class="card-title">Wi-Fi</h5>
      <div class="d-flex justify-content-center mb-2">
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
  <i class="bx bxs-heart text-danger me-1"></i>
</div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-wifi fs-4 me-2"></i>
        <p class="mb-0">Sinyal Kuat</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-laptop fs-4 me-2"></i>
        <p class="mb-0">Cocok Kerja</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-shield-check fs-4 me-2"></i>
        <p class="mb-0">Koneksi Amans</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-router fs-4 me-2"></i>
        <p class="mb-0">Router Modern</p>
        </div>
        <div class="d-flex align-items-center mb-2">
        <i class="bi bi-lightning fs-4 me-2"></i>
          <p class="mb-0">Kecepatan Tinggi</p>
        </div>
        <div class="position-absolute bottom-0 end-0 m-3" style="font-size: 0.85rem; text-align: right;">
        <div class="d-flex align-items-center justify-content-end">
  <span class="badge bg-success me-2" style="font-size: 0.85rem;">9.0</span>
  <div class="d-flex flex-column align-items-start text-muted" style="font-size: 0.75rem; line-height: 1.2;">
    <span>Sangat Bagus</span>
    <small>2 ulasan</small>
  </div>
</div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<!-- /Card Wi-Fi -->

<!-- footer -->
<?php include(".includes/footer_user.php"); ?>
<!-- /footer -->
</div>  
</div>
</div>
</div>
</div>