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
                        <th>Harga</th>
                        <th width="150px">Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <!--Mengambil data kamar dari database--> 
                    <?php
                    $index = 1;
                    $query = "SELECT tipe, harga, status FROM kamar";
                    $exec = mysqli_query($conn, $query);
                    while ($kamar = mysqli_fetch_assoc($exec)) :
                    ?>
                     <tr>
                        <!-- Menampilkan nomor, tipe kamar, harga kamar, dan status kamar -->
                        <td><?= $index++; ?></td>
                        <td><?= $kamar['kamar_id']; ?></td>
                        <td>Rp <?= number_format ($kamar['harga'], 0, ',', '.'); ?></td>
                        <td><?= $kamar['status']; ?></td>
                        <td>
                            <!-- dropdown untuk opsi edit dan delete-->
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editKamar_<?= $kamar['kamar_id']; ?>"><i class="bx bx-edit-alt me-2"></i> Edit </a>
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
                                            <input type="hidden" name="kamarID" value="<?= $kamar['kamar_id']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
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
                                    <form action="proses_datakamar.php" method="POST">
                                    <!-- Input tersembunyi untuk menyimpan ID kamar -->
                                    <input type="hidden" name="kamarID" value="<?= $kamar['kamar_id']; ?>">
                                    <div class="form-group">
                                    <label>Nama Kategori Kamar</label>
                                    <!-- Input untuk nama kategori kamar -->
                                    <input type="text" value="<?= $kamar['tipe']; ?>" name="tipe" class="form-control">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
        <h5 class="modal-title">Form Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <!-- Form di dalam Modal -->
        <form method="POST" action="proses_post.php" enctype="multipart/form-data">
                        <!-- input untuk mengunggah gambar -->
                            <div class="mb-3">
                            <label for="formFile" class="form-label">Unggah Gambar</label>
                            <input class="form-control" type="file" name="image" accept="image/*">
                          </div>

                          <!-- dropdown untuk memilih tipe kamar -->
                          <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
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

                        <!-- input untuk judul postingan -->
                         <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" name="post_title" required>
                         </div>
                         
                           <!-- dropdown untuk mengubah status kamar-->
                          <div class="mb-3">
                            <label for="status_id" class="form-label">Kategori</label>
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