<?php
include (".includes/header_user.php");
$title = "Dashboard";
// menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>
<div class="col-12">
  <div id="swiper-gallery">

    <!-- bagian swiper gambar utama (gambar besar) -->
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
          <img src="assets/img/kamar/dbl.jpeg" alt="Slide 5" class="img-fluid" />
        </div>
      </div>

      <!-- tombol kanan kiri -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>

      <!-- /tombol kanan kiri pada gambar-->
    </div>
    <!-- /bagian swiper gambar utama (gambar besar) -->

    <!-- bagian swiper gambar kecil -->
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
          <img src="assets/img/kamar/dbl.jpeg" alt="Thumb 5" class="img-fluid" />
        </div>
      </div>
    </div>
    <!-- /bagian swiper gambar kecil -->
  </div>
</div>

<div class="card p-0 mb-6" style="margin-top: 150px;">
<ul class="list-group mb-4">
<?php 
  $query = "SELECT kamar.*, categories.category_name FROM kamar LEFT JOIN categories ON kamar.category_id = categories.category_id";
  $exec = mysqli_query($conn, $query);
  while ($kamar = mysqli_fetch_assoc($exec)) :
  ?>
  <li class="list-group-item d-flex align-items-center">
        <img src="<?= $kamar['image_path']; ?>" alt="<?= $kamar['category_name']; ?>" style="width: 230px" class="me-3 rounded">
        <div>
          <h4 class="mb-1"><?= $kamar['category_name']; ?></h4>
          <p>Rp <?= number_format($kamar['harga'], 0, ',', '.'); ?></p>
          <p>Status : <?=$kamar['status']; ?> </p>
        </div>
        <div class="ms-auto">
          <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#isidata">BOOK NOW</button>
        </div>
      </li>
<?php endwhile; ?>
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
        <form method="POST" action="proses_pemesanan.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Reasya Chavilette" required>
          </div>

          <div class="mb-3">
            <label for="kontak" class="form-label">Kontak</label>
            <input type="text" name="kontak" class="form-control" id="basic-default-company" placeholder="08xxxxxxxxxx" required>
           </div>

           <div class="mb-3">
           <label for="email" class="form-label">Email</label>
              <input type="text" name="email" id="basic-default-email" class="form-control" placeholder="@example.com" required>
            </div>

            <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select class="form-select" name="category_id" required>
              <option value="" selected disabled>Pilih salah satu</option>
                <?php
                  //mengambil data kategori dari database
                  $queryCategories = "SELECT * FROM categories";
                  $resultCategories = $conn->query($queryCategories);
                  //menambahkan opsi ke dropdown
                  if ($resultCategories->num_rows > 0) {
                    while ($row = $resultCategories->fetch_assoc()) {
                      //menandai kategori yang sudah dipilih
                      $selected = ($row["category_id"] == $kamar['category_id']) ? "selected" : "";
                      echo "<option value='" . $row["category_id"] . "' $selected>" . $row["category_name"] . "</option>";
                    }
                  }
                ?>
            </select>
          </div>
          
          <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" required>
          </div>

            <div class="mb-3">
            <label class="form-label" for="checkin">Tanggal Check-In</label>
            <input type="date" id="checkin" class="form-control" name="check_in" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="checkout">Tanggal Check-Out</label>
            <input type="date" id="checkout" class="form-control" name="check_out" required>
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