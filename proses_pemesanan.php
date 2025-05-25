<?php

//menghubungkan ke file konfigurasi database
include("config.php");

//memulai sesi untuk menyimpan notifikasi
session_start();
$userId = $_SESSION['user_id'];

//proses pemesanan kamar
if (isset($_POST['simpan'])) {
    //mengambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];
    $catID = $_POST['category_id'];
    $harga = $_POST['harga'];
    $checkin = $_POST['check_in'];
    $checkout = $_POST['check_out'];

    //query untuk menambahkan data tamu ke dalam tabel tamu
    $queryTamu = "INSERT INTO tamu (nama, email, kontak) VALUES ('$nama', '$email', '$kontak')";
    $execTamu = mysqli_query($conn, $queryTamu);
    // query untuk menambahkan data tamu ke dalam tabel pemesanan
    if ($execTamu) {
        $tamuID = mysqli_insert_id($conn);

        // query untuk menambahkan data tamu ke dalam tabel pemesanan
        $queryPemesanan = "INSERT INTO pemesanan (tamu_id, category_id, harga, check_in, check_out, user_id) VALUES ('$tamuID','$catID', $harga, '$checkin', '$checkout', '$userId')";
        $execPemesanan = mysqli_query($conn, $queryPemesanan);

        //menyimpan notifikasi berhasil atau gagal ke dalam session
        if ($execPemesanan) {
            $_SESSION['notification'] = [
                'type' => 'primary', //jenis notifikasi (primary untuk keberhasilan)
                'message' => 'Pemesanan berhasil ditambahkan! Silahkan cek pada tombol notfikasi di atas.' 
            ];
        } else {
            $_SESSION['notification'] = [
                'type' => 'danger', //jenis notifikasi (danger untuk kegagalan)
                'message' => 'Gagal menambahkan pemesanan.' . mysqli_error($conn)
            ];
        }
    
        //redirect user kembali ke halaman rooms.php
        header('Location: rooms.php');
        exit();
    }
}


//proses penghapusan data tamu
if (isset($_POST['delete_tamu'])) {
    //mengambil ID tamu dari parameter URL
    $tamuID = $_POST['tamu_id'];

    //query untuk menghapus data tamu berdasarkan ID
    $exec = mysqli_query($conn, "DELETE FROM tamu WHERE tamu_id='$tamuID'");

    //menyimpan notifikasi keberhasilan atau kegagalan ke dalam session
    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary', //jenis notifikasi (primary untuk keberhasilan)
            'message' => 'Data tamu berhasil dihapus!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger', //jenis notifikasi (danger untuk kegagalan)
            'message' => 'Gagal menghapus data tamu.' . mysqli_error($conn)
        ];
    }

    //redirect kembali ke halaman data_tamu.php
    header('Location: data_tamu.php');
    exit();
}

//proses pembaruan data tamu
if (isset($_POST['update_tamu'])) {
    //mengambil data dari form pembaruan
    $tamuID = $_POST['tamu_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];

    //query untuk memperbarui data tamu berdasarkan ID
    $queryTamu = "UPDATE tamu SET nama ='$nama', email = '$email', kontak ='$kontak' WHERE tamu_id='$tamuID'";
    $exec = mysqli_query($conn, $queryTamu);

    //menyimpan notifikasi keberhasilan atau kegagalan ke dalam session
    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary', //jenis notifikasi (primary untuk keberhasilan)
            'message' => 'Data tamu berhasil diperbarui!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger', //jenis notifikasi (danger untuk kegagalan)
            'message' => 'Gagal memperbarui data tamu: ' . mysqli_error($conn)
        ];
    }

    //redirect kembali ke halaman data_tamu.php
    header('Location: data_tamu.php');
    exit();
}


//proses penghapusan data pemesanan
if (isset($_POST['delete_pemesanan'])) {
    //mengambil ID pemesanan dari parameter URL
    $pemesananID = $_POST['pemesanan_id'];

    //query untuk menghapus data pemesanan berdasarkan ID
    $exec = mysqli_query($conn, "DELETE FROM pemesanan WHERE pemesanan_id='$pemesananID'");

    // menyimpan notifikasi keberhasilan atau kegagalan ke dalam session
    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary', //jenis notifikasi (primary untuk keberhasilan)
            'message' => 'Data pemesanan berhasil dihapus!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger', //jenis notifikasi (danger untuk kegagalan)
            'message' => 'Gagal menghapus data pemesanan.' . mysqli_error($conn)
        ];
    }

    //redirect kembali ke halaman dashboard.php
    header('Location: dashboard.php');
    exit();
}

//proses pembaruan data pemesanan
if (isset($_POST['update_pemesanan'])) {
    //mengambil data dari form pembaruan
    $catID = $_POST['category_id'];
    $harga = $_POST['harga'];
    $checkin = $_POST['check_in'];
    $checkout = $_POST['check_out'];
    $pemesananID = $_POST['pemesanan_id'];

    //query untuk memperbarui data tamu berdasarkan ID
    $queryPemesanan = "UPDATE pemesanan SET category_id = '$catID', harga ='$harga', check_in = '$checkin', check_out = '$checkout' WHERE pemesanan_id='$pemesananID'";
    $exec = mysqli_query($conn, $queryPemesanan);

    //menyimpan notifikasi keberhasilan atau kegagalan ke dalam session
    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary', //jenis notifikasi (primary untuk keberhasilan)
            'message' => 'Data pemesanan berhasil diperbarui!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger', //jenis notifikasi (danger untuk kegagalan)
            'message' => 'Gagal memperbarui data pemesanan.' . mysqli_error($conn)
        ];
    }

    //redirect kembali ke halaman dashboard.php
    header('Location: dashboard.php');
    exit();
}