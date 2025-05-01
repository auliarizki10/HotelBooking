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
                                <th>Harga Kamar</th>
                                <th>Tanggal Check-in</th>
                                <th>Tanggal Check-out</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <!-- menampilkan data dari tabel database -->
                             <?php
                             $index = 1; // variabel untuk nomor urut
                             // query untuk mengambil data dari tabel pemesanan, tamu, dan kamar
                             $query = "SELECT pemesanan.*, tamu.nama as nama_tamu, kamar.tipe, kamar.harga FROM pemesanan INNER JOIN tamu ON pemesanan.tamu_id = tamu.tamu_id LEFT JOIN kamar ON pemesanan.kamar_id = kamar.kamar_id WHERE pemesanan.user_id = $userId";
                             //eksekusi query
                             $exec = mysqli_query($conn, $query);

                             //perulangan untuk menampilkan setiap baris query
                             while ($pemesanan = mysqli_fetch_assoc($exec)):
                             ?>

                             <tr>
                                <td><?= $index++; ?></td>
                                <td><?= $pemesanan['nama_tamu']; ?></td>
                                <td><?= $pemesanan['tipe']; ?></td>
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
                                             <a href="edit_pemesanan.php?pemesanan_id=<?= $pemesanan['pemesanan_id']; ?>" class="dropdown-item">
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
                                                    <input type="hidden" name="pemesananID" value="<?=  $pemesanan['pemesanan_id']; ?>">
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