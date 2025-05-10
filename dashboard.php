<?php
include (".includes/header.php");
$title = "Dashboard";
//menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Card untuk menampilkan tabel pemesanan -->
    <div class="card">
        <!-- Tabel dengan baris yang dapat di hover -->
         <div class="card">
            <!-- Header tabel -->
             <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Semua Pesanan</h4>
            </div>
             <div class="card-body">
                 <!-- Tabel responsif -->
                  <div class="table-responsive text-nowrap">
                    <table id="datatable" class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th width="50px">#</th>
                                <th>Nama Tamu</th>
                                <th>Tipe Kamar</th>
                                <th>Harga Kamar / Malam</th>
                                <th>Tanggal Check-in</th>
                                <th>Tanggal Check-out</th>
                                <th width="150px">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <!-- menampilkan data dari tabel database -->
                             <?php
                             $index = 1; // variabel untuk nomor urut
                             // query untuk mengambil data dari tabel pemesanan, tamu, dan kamar
                             $query = "SELECT pemesanan.*, tamu.nama, categories.category_name FROM pemesanan INNER JOIN tamu ON pemesanan.tamu_id = tamu.tamu_id LEFT JOIN categories ON pemesanan.category_id = categories.category_id";
                             //eksekusi query
                             $exec = mysqli_query($conn, $query);

                             //perulangan untuk menampilkan setiap baris query
                             while ($pemesanan = mysqli_fetch_assoc($exec)):
                             ?>

                             <tr>
                                <td><?= $index++; ?></td>
                                <td><?= $pemesanan['nama']; ?></td>
                                <td><?= $pemesanan['category_name']; ?></td>
                                <td>Rp <?= number_format ($pemesanan['harga'], 0, ',', '.' ); ?></td>
                                <td><?= $pemesanan['check_in']; ?></td>
                                <td><?= $pemesanan['check_out']; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <!-- Tombol dropdown untuk pilihan -->
                                         <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                         </button>
                                         <!-- menu dropdown -->
                                          <div class="dropdown-menu">
                                            <!-- pilihan edit -->
                                             <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editPemesanan_<?= $pemesanan['pemesanan_id']; ?>">
                                                <i class="bx bx-edit-alt me-2"></i> Edit 
                                             </a>
                                             <!-- pilihan delete -->
                                             <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deletePemesanan_<?= $pemesanan['pemesanan_id']; ?>">
                                                <i class="bx bx-trash me-2"></i> Delete 
                                             </a>
                                          </div>
                                    </div> 
                                </td>
                             </tr> 

                             <!-- modal untuk hapus pemesanan --> 
                             <div class="modal fade" id="deletePemesanan_<?= $pemesanan['pemesanan_id']; ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Hapus Data Pemesanan?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="proses_pemesanan.php" method="POST">
                                                <div>
                                                    <p>Tindakan ini tidak bisa dibatalkan.</p>
                                                    <input type="hidden" name="pemesanan_id" value="<?=  $pemesanan['pemesanan_id']; ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" name="delete_pemesanan" class="btn btn-primary">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            
                             <!-- modal untuk edit pemesanan  -->
                             <div class="modal fade" id="editPemesanan_<?= $pemesanan['pemesanan_id']; ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Data Pemesanan</h5>
                                        </div>
                                        <div class="modal-body">
                                         <!-- Form di dalam Modal -->
                                        <form method="POST" action="proses_pemesanan.php">
                                        <!-- Input tersembunyi untuk menyimpan ID pemesanan -->
                                        <input type="hidden" name="pemesanan_id" value="<?= $pemesanan['pemesanan_id']; ?>">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Tamu</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $pemesanan['nama'];?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="category_id" class="form-label">Tipe Kamar</label>
                                            <select class="form-select" name="category_id">
                                                <option value="" selected disabled>Pilih salah satu</option>
                                                <?php
                                                    //mengambil data kategori dari database
                                                    $queryCategories = "SELECT * FROM categories";
                                                    $resultCategories = $conn->query($queryCategories);
                                                    //menambahkan opsi ke dropdown
                                                    if ($resultCategories->num_rows > 0) {
                                                        while ($row = $resultCategories->fetch_assoc()) {
                                                            //menandai kategori yang sudah dipilih
                                                            $selected = ($row["category_id"] == $pemesanan['category_id']) ? "selected" : "";
                                                            echo "<option value='" . $row["category_id"] . "' $selected>" . $row["category_name"] . "</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" class="form-control" name="harga" value="<?= $pemesanan['harga']; ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="checkin">Tanggal Check-In</label>
                                            <input type="date" id="checkin" class="form-control" name="check_in" value="<?= $pemesanan['check_in']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="checkout">Tanggal Check-Out</label>
                                            <input type="date" id="checkout" class="form-control" name="check_out" value="<?= $pemesanan['check_out']; ?>" required>
                                        </div>

                                        <div class="mb-3 text-end">
                                        <button type="submit" name="update_pemesanan" class="btn btn-primary">Simpan</button>
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
         </div> 
        <!-- akhir tabel dengan baris yang dapat di hover-->
    </div>
</div>

<?php
include (".includes/footer.php");
?>