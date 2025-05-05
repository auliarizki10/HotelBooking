<?php
//memasukkan header halaman
include '.includes/header.php';
//menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
<!--Tabel data tamu-->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Tamu</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table id="datatable" class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th width="50px">#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kontak</th>
                        <th width="150px">Pilihan</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <!--Mengambil data kategori dari database--> 
                    <?php
                    $index = 1;
                    $query = "SELECT * FROM tamu";
                    $exec = mysqli_query($conn, $query);
                    while ($tamu = mysqli_fetch_assoc($exec)) :
                    ?>
                     <tr>
                        <!-- Menampilkan nama tamu, email, kontak, serta opsi edit dan delete  -->
                        <td><?= $index++; ?></td>
                        <td><?= $tamu['nama']; ?></td>
                        <td><?= $tamu['email']; ?></td>
                        <td><?= $tamu['kontak']; ?></td>
                        <td>
                            <!-- dropdown untuk opsi edit dan delete-->
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editTamu_<?= $tamu['tamu_id']; ?>"><i class="bx bx-edit-alt me-2"></i> Edit </a>
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteTamu_<?= $tamu['tamu_id']; ?>"><i class="bx bx-trash me-2"></i> Delete </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal untuk Hapus Data Tamu-->
                    <div class="modal fade" id="deleteTamu_<?= $tamu['tamu_id']; ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                   <h5 class="modal-title">Hapus data Tamu?</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"> </button>
                                 </div>
                                 <div class="modal-body">
                                    <form action="proses_pemesanan.php" method="POST">
                                        <div>
                                            <p>Tindakan ini tidak bisa dibatalkan.</p>
                                            <input type="hidden" name="tamuID" value="<?= $tamu['tamu_id']; ?>">
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
                    <!--Modal untuk Update Data Tamu-->
                    <div id="editTamu_<?= $tamu['tamu_id']; ?>" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Data Tamu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="proses_pemesanan.php" method="POST">
                                    <!-- Input tersembunyi untuk menyimpan ID Tamu -->
                                    <input type="hidden" name="tamu_id" value="<?= $tamu['tamu_id']; ?>">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="<?= $tamu['nama']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="kontak" class="form-label">Kontak</label>
                                        <input type="text" class="form-control" name="kontak" value="<?= $tamu['kontak']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="basic-default-email" name="email" class="form-control" value="<?= $tamu['email']; ?>">
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
    </div>
</div>
<?php include '.includes/footer.php'; ?>