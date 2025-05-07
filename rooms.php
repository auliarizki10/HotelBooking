<?php
include (".includes/header_user.php");
$title = "Dashboard";
?>
<div class="col-12">
  <div id="swiper-gallery">
    <!--  -->
    <div class="swiper gallery-top">
      <div class="swiper-wrapper">
      <div class="swiper-slide">
          <img src="assets/img/kamar/single2.jpeg" alt="Slide 1" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/double.jpeg" alt="Slide 2" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/deluxe.jpeg" alt="Slide 3" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/single.jpeg" alt="Slide 4" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/DELUXE.jpg" alt="Slide 5" class="img-fluid" />
        </div>
      </div>

      <!-- -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    <!--  -->
    <div class="swiper gallery-thumbs mt-2">
      <div class="swiper-wrapper">
      <div class="swiper-slide">
          <img src="assets/img/kamar/single2.jpeg" alt="Thumb 1" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/double.jpeg" alt="Thumb 2" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/deluxe.jpeg" alt="Thumb 3" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/single.jpeg" alt="Thumb 4" class="img-fluid" />
        </div>
        <div class="swiper-slide">
          <img src="assets/img/kamar/double.jpg" alt="Thumb 5" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /BG awal -->

<!-- judul di tengah BG-->
<h1 class="position-absolute top-50 start-50 translate-middle text-white z-3 fw-bold fs-1"> OUR ROOMS</h1>
<!-- /judul di tengah BG-->

<div class="card p-0 mb-6" style="margin-top: 420px;">
<ul class="list-group mb-4">
              <!-- Modal Start -->
<div class="modal fade" id="isidata" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <!-- Form di dalam Modal -->
        <form method="POST" action="proses_post.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="post_title" placeholder="Reasya Chavilette" required>
          </div>

          <div class="mb-3">
            <label for="kontak" class="form-label">Kontak</label>
            <input type="text" class="form-control" id="basic-default-company" placeholder="08xxxxxxxxxx">
           </div>

           <div class="mb-3">
           <label for="email" class="form-label">Email</label>
              <input type="text" id="basic-default-email" class="form-control" placeholder="@example.com">
            </div>

            <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select class="form-select" name="category_id" required>
              <option value="" selected disabled>Pilih salah satu</option>
              
            
            </select>
          </div>

            <div class="mb-3">
            <label class="form-label" for="checkin">Tanggal Check-In</label>
            <input type="date" id="checkin" class="form-control" name="checkin">
          </div>

          <div class="mb-3">
            <label class="form-label" for="checkout">Tanggal Check-Out</label>
            <input type="date" id="checkout" class="form-control" name="checkout">
          </div>

          <div class="mb-3 text-end">
          <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->
 </ul>
</div>

<?php
include (".includes/footer_user.php");
?>