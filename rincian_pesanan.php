<?php
include (".includes/header_user.php");
//menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
$userId = $_SESSION['user_id'];
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Card untuk menampilkan tabel pemesanan -->
    <div class="card" id="pppp">
        <!-- Tabel dengan baris yang dapat di hover -->
         <div class="card">
            <!-- Header tabel -->
             <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Riwayat Pesanan</h4>
            </div>
             <div class="card-body">
                 <!-- Tabel responsif -->
                  <div class="table-responsive text-nowrap">
                    <table id="datatable" class="table table-hover">
                        <thead> 
                            <tr class="text-center">
                                <th width="50px">#</th>
                                <th>Nama</th>
                                <th>Tipe Kamar</th>
                                <th>Harga Kamar / Malam</th>
                                <th>Tanggal Check-in</th>
                                <th>Tanggal Check-out</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <!-- menampilkan data dari tabel database -->
                             <?php
                             $index = 1; // variabel untuk nomor urut
                             // query untuk mengambil data dari tabel pemesanan, tamu, dan kamar
                             $query = "SELECT pemesanan.*, tamu.nama, categories.category_name FROM pemesanan INNER JOIN tamu ON pemesanan.tamu_id = tamu.tamu_id LEFT JOIN categories ON pemesanan.category_id = categories.category_id WHERE pemesanan.user_id = $userId";
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
                             </tr> 
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