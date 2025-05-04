<?php

//menghubungkan ke file konfigurasi database
include("config.php");

//memulai sesi untuk menyimpan notifikasi
session_start();

//proses pemesanan kamar
if (isset($_POST['simpan'])) {
    //mengambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];
    $catID = $_POST['category_id'];
    $checkin = $_POST['check_in'];
    $checkout = $_POST['check_out'];

    //query untuk menambahkan data tamu ke dalam tabel tamu
    $queryTamu = "INSERT INTO tamu (nama, email, kontak) VALUES ('$nama', '$email', '$kontak')";
    $execTamu = mysqli_query($conn, $queryTamu);
    // query untuk menambahkan data tamu ke dalam tabel pemesanan
    if ($execTamu) {
        $tamuID = mysqli_insert_id($conn);

        $queryPemesanan = "INSERT INTO pemesanan (tamu_id, category_id, check_in, check_out) VALUES ('$tamuID', '$catID', '$checkin', '$checkout')";
        $execPemesanan = mysqli_query($conn, $queryPemesanan);

        //menyimpan notifikasi berhasil atau gagal ke dalam session
        if ($execPemesanan) {
            $_SESSION['notification'] = [
                'type' => 'primary', 
                'message' => 'Pemesanan berhasil ditambahkan' 
            ];
        } else {
            $_SESSION['notification'] = [
                'type' => 'danger', 
                'message' => 'Gagal menambahkan pemesanan: ' . mysqli_error($conn)
            ];
        }
    
        //redirect user kembali ke halaman rooms.php
        header('Location: rooms.php');
        exit();
    }
}


//proses penghapusan data tamu
if (isset($_POST['delete'])) {
    //mengambil ID tamu dari parameter URL
    $tamuID = $_POST['tamu_id'];

    //query untuk menghapus data tamu berdasarkan ID
    $exec = mysqli_query($conn, "DELETE FROM tamu WHERE tamu_id='$tamuID'");

    //menyimpan notifikasi keberhasilan atau kegagalan ke dalam session
    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Data tamu berhasil dihapus!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal menghapus data tamu.' . mysqli_error($conn)
        ];
    }

    //redirect kembali ke halaman data_tamu.php
    header('Location: data_tamu.php');
    exit();
}

//proses pembaruan data tamu
if (isset($_POST['update'])) {
    //mengambil data dari form pembaruan
    $tamuID = $_POST['tamu_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];

    //query untuk memperbarui data tamu berdasarkan ID
    $query = "UPDATE tamu SET nama ='$nama', email = '$email', kontak ='$kontak' WHERE tamu_id='$tamuID'";
    $exec = mysqli_query($conn, $query);

    //menyimpan notifikasi keberhasilan atau kegagalan ke dalam session
    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Data tamu berhasil diperbarui!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal memperbarui data tamu: ' . mysqli_error($conn)
        ];
    }

    //redirect kembali ke halaman data_tamu.php
    header('Location: data_tamu.php');
    exit();
}