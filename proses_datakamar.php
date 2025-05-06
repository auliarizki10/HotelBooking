<?php
//menghubungkan file konfigurasi database
include 'config.php';

//memulai sesi php
session_start();

//mendapatkan ID pengguna dari sesi
$userId = $_SESSION["user_id"];

//menangani form untuk menambahkan data kamar baru 
if (isset($_POST['simpan'])) {
    //mendapatkan data dari form
    $harga = $_POST["harga"]; //harga kamar
    $status = $_POST["status"]; //status kamar
    $categoryId = $_POST["category_id"]; //ID kategori

    //mengatur direktori penyimpanan file gambar
    $imageDir = "assets/img/uploads/";
    $imageName = $_FILES["image"]["name"]; //nama file gambar
    $imagePath = $imageDir . basename($imageName); //path lengkap gambar
    
    //memindahkan file gambar yang diunggah ke direktori tujuan
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
        //jika unggahan berhasil, masukkan data kamar ke dalam database
        $query = "INSERT INTO kamar (image_path, harga, status, category_id) VALUES ('$imagePath', $harga, '$status', $categoryId)";

        if ($conn->query($query) === TRUE) {
            //notifikasi berhasil jika data kamar berhasil ditambahkan
            $_SESSION['notification'] = [
                'type' => 'primary',
                'message' => 'Data kamar berhasil ditambahkan.'
            ];
        } else {
            //notifikasi error jika gagal menambahkan data kamar
            $_SESSION['notification'] = [
                'type' => 'danger',
                'message' => 'Gagal menambahkan data kamar: ' . $conn->error
            ];
        }
    } else {
        //notifikasi error jika unggahan gambar gagal
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal mengunggah gambar.'
        ];
    }

    //arahkan ke halaman dashboard setelah selesai
    header('Location: data_kamar.php');
    exit();
}

//proses penghapusan postingan
if (isset($_POST['delete'])) {
    //mengambil ID post dari parameter URL
    $kamarID = $_POST['kamar_id'];

    //query untuk menghapus post berdasarkan ID
    $exec = mysqli_query($conn, "DELETE FROM kamar WHERE kamar_id='$kamarID'");

    //menyimpan notifikasi keberhasilan atau kegagalan ke dalam session
    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Berhasil menghapus data kamar!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal menghapus data kamar: ' . mysqli_error($conn)
        ];
    }

    //redirect kembali ke halaman dashboard
    header('Location: data_kamar.php');
    exit();
}

//menangani pembaruan data kamar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    //mendapatkan data dari form
    $kamarID = $_POST['kamar_id'];
    $harga = $_POST["harga"];
    $statusKamar = $_POST["status"];
    $categoryId = $_POST["category_id"];
    $imageDir = "assets/img/uploads/"; //direktori penyimpanan gambar

    //periksa apakah file gambar baru diunggah
    if (!empty($_FILES["image_path"]["name"])) {
        $imageName = $_FILES["image_path"]["name"];
        $imagePath = $imageDir . $imageName;

        //pindahkan file baru ke direktori tujuan
        move_uploaded_file($_FILES["image_path"]["tmp_name"], $imagePath);

        //hapus gambar lama
        $queryOldImage = "SELECT image_path FROM kamar WHERE kamar_id=$kamarID";
        $resultOldImage = $conn->query($queryOldImage);
        if ($resultOldImage->num_rows > 0) {
            $oldImage = $resultOldImage->fetch_assoc()['image_path'];
            if (file_exists($oldImage)) {
                unlink($oldImage); //menghapus file lama
            }
        }
    } else {
        //jika tidak ada file baru, gunakan gambar lama
        $imagePathQuery = "SELECT image_path FROM kamar WHERE kamar_id = $kamarID";
        $result = $conn->query($imagePathQuery);
        $imagePath = ($result->num_rows > 0) ? $result->fetch_assoc() ['image_path'] : null;
    }

    //update data kamar di database
    $queryUpdate = "UPDATE kamar SET harga = '$harga', status = '$statusKamar', category_id = $categoryId, image_path = '$imagePath' WHERE kamar_id = $kamarID";

    if ($conn->query($queryUpdate) === TRUE) {
        //notifikasi berhasil
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Data kamar berhasil diperbarui.'
        ];
    } else {
        //notifikasi gagal
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal memperbarui data kamar.'
        ];
    }

    //arahkan ke halaman data_kamar.php 
    header('Location: data_kamar.php');
    exit();
}