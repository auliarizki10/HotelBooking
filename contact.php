<?php
include (".includes/header_user.php");
?>

<div class="">
<div class="col-md pt-4 px-4">
      <h1 class="fw-medium">Customer Service</h1>
      <div class="bs-stepper wizard-numbered mt-2 border-bottom">
        <div class="bs-stepper-header">
          <!-- Tombol Kirimi Kami Pesan -->
          <div class="step active" data-target="#account-details">
            <button type="button" class="step-trigger" data-bs-toggle="step" aria-selected="true">
              <span class="bs-stepper-circle"><i class='bx bx-message-rounded-dots'></i></span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Kirimi kami pesan</span><br>
                <span class="bs-stepper-subtitle">Untuk informasi lebih lanjut</span>
              </span>
            </button>
          </div>
          <!-- /Tombol Kirimi Kami Pesan -->

           <!-- Panah penghubung antar langkah -->
          <div class="">
            <i class="icon-base bx bx-chevron-right icon-md"></i>
          </div>
           <!-- /Panah penghubung antar langkah -->

           <!-- Hubungi kami -->
          <div class="step" data-target="#personal-info">
          <button type="button" class="step-trigger" data-bs-toggle="step" aria-selected="true">
              <span class="bs-stepper-circle"><i class='bx bx-phone'></i></span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Hubungi kami</span><br>
                <span class="bs-stepper-subtitle">Tim kami siap membantu Anda.</span>
              </span>
            </button>
          </div>
          <!-- /Hubungi kami -->

          <!-- Panah penghubung antar langkah (2)-->
          <div class="">
            <i class="icon-base bx bx-chevron-right icon-md"></i>
          </div>
          <!-- /Panah penghubung antar langkah (2)-->

          <!-- Hubungi Akomodasi -->
          <div class="step" data-target="#social-links">
          <button type="button" class="step-trigger" data-bs-toggle="step" aria-selected="true">
              <span class="bs-stepper-circle"><i class='bx bx-building-house'></i></span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Hubungi akomodasi</span><br>
                <span class="bs-stepper-subtitle">Detail fasilitas dan layanan.</span>
              </span>
            </button>
          </div>
          <!-- /Hubungi Akomodasi -->
        </div>

        <!-- BAGIAN KETERANGAN SINGKAT -->
        <div class="bs-stepper-content">
            <!-- Keterangan singkat: kirimi kami pesan -->
            <div id="account-details" class="content active dstepper-block">
              <div class="row g-6">
              <div class="p-2">
        <h6 class="mb-0" style="font-family: 'Poppins', sans-serif; line-height: 1.6;">
        Butuh bantuan terkait reservasi, fasilitas, atau pertanyaan lainnya? Kirimkan pesan Anda melalui email kami <span class="text-warning">hooking@gmail.com</span>, dan tim kami akan segera merespons untuk memastikan pengalaman menginap Anda berjalan lancar."
        </h6>
      </div>
              </div>
            </div>
            <!-- /Keterangan singkat: kirimi kami pesan -->

            <!-- Keterangan singkat: hubungi kami -->
            <div id="personal-info" class="content">
              <div class="row g-6">
                <div class="col-sm-6">
                <div class="p-2">
        <h6 class="mb-0" style="font-family: 'Poppins', sans-serif; line-height: 1.6;">
        Untuk kebutuhan mendesak terkait pemesanan atau layanan selama menginap, Anda dapat menghubungi kami kapan saja di <span class="text-warning">+62 812-3456-7890</span>. Tim kami siap membantu 24 jam.
        </h6>
      </div>
              </div>
            </div>
        </div>
        <!-- /Keterangan singkat: hubungi kami -->

        <!-- Keterangan singkat: hubungi akomodasi -->
        <div id="social-links" class="content">
          <div class="row g-6">
            <div class="col-sm-6">
              <div class="p-2">
                <h6 class="mb-0" style="font-family: 'Poppins', sans-serif; line-height: 1.6;">
                Hubungi kami untuk detail lengkap mengenai akomodasi dan layanan yang tersedia.
                </h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Keterangan singkat: hubungi akomodasi -->
      </div>
      <!--/ BAGIAN KETERANGAN SINGKAT -->
      </div>

      <!-- BAGIAN PERTANYAAN UMUM -->
      <h3 class="">Pertanyaan umum</h3>
      <div class="accordion mt-4" id="accordionStyle1">
        <!-- pertanyaan 1 -->
  <div class="accordion-item border">
    <div class="accordion-header mb-0">
      <button type="button" class="accordion-button collapsed text-dark fw-bold py-1 d-flex align-items-center gap-2 px-3 py-2 border border-dark"
              data-bs-toggle="collapse" data-bs-target="#accordionStyle1-1" aria-expanded="false">
        <!-- ikon bulat -->
        <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning"
              style="width: 30px; height: 30px;">
          <i class="bx bx-help-circle fs-2 text-dark"></i>
        </span>
        
        <!-- teks header -->
         <span>Bagaimana cara mengakses pemesanan online saya?</span>
      </button>
    </div>
    <!-- konten accordion -->
    <div id="accordionStyle1-1" class="accordion-collapse collapse" data-bs-parent="#accordionStyle1">
      <div class="accordion-body text-dark pt-2">
      Jika Anda sudah memiliki akun Pelanggan dan melakukan pemesanan secara online, silakan masukkan alamat email serta kata sandi Anda untuk masuk. Setelah masuk, klik ikon notifikasi di samping akun Anda untuk melihat daftar semua reservasi yang telah Anda buat secara online.
      </div>
    </div>
  </div>

  <!-- pertanyaan 2 -->
  <div class="accordion-item">
    <div class="accordion-header mb-0">
      <button type="button" class="accordion-button collapsed text-dark fw-bold py-1 d-flex align-items-center gap-2 px-3 py-2 border border-dark"
              data-bs-toggle="collapse" data-bs-target="#accordionStyle1-2" aria-expanded="false">
        <!-- ikon bulat -->
        <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning"
              style="width: 30px; height: 30px;">
          <i class="bx bx-help-circle fs-2 text-dark"></i>
        </span>
        <!-- teks header -->
        <span>Di mana saya dapat melakukan pembayaran untuk kamar yang dipesan?</span>
      </button>
    </div>
    <!-- konten accordion -->
    <div id="accordionStyle1-2" class="accordion-collapse collapse text-dark pt-2" data-bs-parent="#accordionStyle1">
      <div class="accordion-body">
      Pembayaran untuk kamar yang Anda pesan dapat dilakukan langsung di hotel pada saat check-in. Saat ini, kami belum menyediakan fasilitas pembayaran secara online, sehingga seluruh transaksi diselesaikan secara langsung di lokasi.
      </div>
    </div>
  </div>

  <!-- pertanyaan 3 -->
  <div class="accordion-item border mb-2">
        <div class="accordion-header mb-0">
          <button type="button" class="accordion-button collapsed text-dark fw-bold py-1 d-flex align-items-center gap-2 px-3 py-2 border border-dark"
                  data-bs-toggle="collapse" data-bs-target="#accordionStyle1-3" aria-expanded="false">
            <!-- ikon bulat -->
            <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning"
                  style="width: 30px; height: 30px;">
              <i class="bx bx-help-circle fs-2 text-dark"></i>
            </span>
            <!-- teks header -->
            <span>Bagaimana cara membatalkan reservasi yang sudah saya buat?</span>
          </button>
        </div>
        <!-- konten accordion -->
        <div id="accordionStyle1-3" class="accordion-collapse collapse text-dark pt-2" data-bs-parent="#accordionStyle1">
          <div class="accordion-body">
          Untuk saat ini, proses pembatalan belum tersedia secara langsung di website. Jika Anda ingin membatalkan reservasi, silakan hubungi nomor kami atau langsung ke bagian resepsionis hotel. Tim kami akan dengan senang hati membantu.
          </div>
    </div>
  </div>
    </div>
    <!-- /BAGIAN PERTANYAAN UMUM -->
    </div>
    </div>

<?php
include (".includes/footer_user.php");
?>