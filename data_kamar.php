<?php
//memasukkan header halaman
include '.includes/header.php';
//menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
<!--Tabel data kamar-->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Kamar</h4>
            <!--Tombol untuk menambah kamar baru--> 
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategory">Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table id="datatable" class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th width="50px">#</th>
                        <th>Gambar</th>
                        <th>Tipe</th>
                        <th>Harga Kamar Per Malam</th>
                        <th>Status</th>
                        <th width="150px">Pilihan</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <!--Mengambil data kamar dari database--> 
                    <?php
                    $index = 1;
                    $query = "SELECT kamar.*, categories.category_name FROM kamar LEFT JOIN categories ON kamar.category_id = categories.category_id"; //query untuk mengambil data kamar
                    $exec = mysqli_query($conn, $query); //menjalankan query
                    while ($kamar = mysqli_fetch_assoc($exec)) : //perulangan untuk menampilkan setiap baris query
                    ?>
                     <tr>
                        <!-- Menampilkan nomor, gambar kamar, tipe kamar, harga kamar, status kamar, serta opsi edit dan delete -->
                        <td><?= $index++; ?></td>
                        <td><img src="<?= $kamar['image_path']; ?>" width="200px"></td>
                        <td><?= $kamar['category_name']; ?></td>
                        <td>Rp <?= number_format ($kamar['harga'], 0, ',', '.'); ?></td>
                        <td><?= $kamar['status']; ?></td>
                        <td>
                            <!-- dropdown untuk opsi edit dan delete-->
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <!-- opsi edit -->
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editKamar_<?= $kamar['kamar_id']; ?>"><i class="bx bx-edit-alt me-2"></i> Edit </a>
                                    <!-- opsi delete -->
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteKamar_<?= $kamar['kamar_id']; ?>"><i class="bx bx-trash me-2"></i> Delete </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal untuk Hapus Data Kamar-->
                    <div class="modal fade" id="deleteKamar_<?= $kamar['kamar_id']; ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">  
                                   <h5 class="modal-title">Hapus Data Kamar?</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"> </button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="proses_datakamar.php" method="POST">
                                        <div>
                                            <p>Tindakan ini tidak bisa dibatalkan.</p>
                                            <input type="hidden" name="kamar_id" value="<?= $kamar['kamar_id']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <!-- tombol batal -->
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                                            <!-- tombol hapus -->
                                            <button type="submit" name="delete" class="btn btn-primary">Hapus</button>
                                        </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal untuk Update Data Kamar-->
                    <div id="editKamar_<?= $kamar['kamar_id']; ?>" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Data Kamar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="proses_datakamar.php" method="POST" enctype="multipart/form-data">
                                    <!-- Input tersembunyi untuk menyimpan ID kamar -->
                                    <input type="hidden" name="kamar_id" value="<?= $kamar['kamar_id']; ?>">

                                    <!-- input untuk mengunggah gambar -->
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Unggah Gambar</label>
                                            <input class="form-control" type="file" id="formFile" name="image_path" accept="image/*" value="<?= $kamar['image_path']; ?>">
                                            <?php if (!empty($kamar['image_path'])): ?>
                                                <!-- menampilkan gambar yang sudah diunggah -->
                                                <div class="mt-2">
                                                    <img src="<?= $kamar['image_path']; ?>" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <!-- dropdown untuk memilih tipe kamar -->
                                    <div class="mb-3">
                                        <label for="tipe" class="form-label">Tipe Kamar</label>
                                        <select class="form-select" id="category_id" name="category_id" required>
                                            <option value="" selected disabled>Pilih Salah Satu</option>
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

                                    <!-- input harga kamar -->
                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" class="form-control" name="harga" value="<?= $kamar['harga']; ?>" required>
                                        </div>
                         
                                    <!-- dropdown untuk mengubah status kamar-->
                                        <div class="mb-3">
                                            <label for="kamar_id" class="form-label">Status</label>
                                             <select class="form-select" name="status" required>
                                                <!--mengambil data status dari database untuk mengisi opsi dropdown -->
                                                <option value="" selected disabled>Pilih salah satu</option>
                                                <option value="tersedia" <?=$kamar['status'] == 'tersedia' ? 'selected' : ''  ?>>Tersedia</option>
                                                <option value="tidak tersedia" <?=$kamar['status'] == 'tidak tersedia' ? 'selected' : ''  ?>>Tidak Tersedia</option>
                                            </select>
                                        </div>
                                    <div class="modal-footer">
                                        <!-- tombol batal -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <!-- tombol update -->
                                        <button type="submit" name="update" class="btn btn-warning">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php endwhile; ?>
                </tbody>
                </table>
            </div>
        </div>

<!-- Form Tambah Data Kamar -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Tambah Data Kamar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <!-- Form di dalam Modal -->
        <form method="POST" action="proses_datakamar.php" enctype="multipart/form-data">
            <!-- input untuk mengunggah gambar -->
            <div class="mb-3">
                <label for="formFile" class="form-label">Unggah Gambar</label>
                <input class="form-control" type="file" id="formFile" name="image" accept="image/*">
            </div>

            <!-- dropdown untuk memilih tipe kamar -->
            <div class="mb-3">
                <label for="category_id" class="form-label">Tipe</label>
                <select class="form-select" name="category_id" required>
                    <!--mengambil data kategori dari database untuk mengisi opsi dropdown -->
                    <option value="" selected disabled>Pilih salah satu</option>
                    <?php
                    $query = "SELECT * FROM categories"; //query untuk mengambil data kategori
                    $result = $conn->query($query); //menjalankan query
                    if ($result->num_rows > 0) { // jika terdapat data kategori
                        while ($row = $result->fetch_assoc()) { //iterasi setiap kategori
                        echo "<option value='" . $row["category_id"] . "'>" . $row["category_name"] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <!-- input untuk harga kamar -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>
                         
            <!-- dropdown untuk mengubah status kamar-->
            <div class="mb-3">
                <label for="kamar_id" class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    <!--mengambil data status dari database untuk mengisi opsi dropdown -->
                    <option value="" selected disabled>Pilih Status Kamar</option>
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>

            <!-- tombol submit -->
             <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Form Tambah Data Kamar -->
    </div>
</div>
<?php include '.includes/footer.php'; ?>