<?php

include './koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$warna_kerudung = $_POST['warna_kerudung'];
$ukuran_kerudung = $_POST['ukuran_kerudung'];
$jumlah_pesanan = $_POST['jumlah_pesanan'];

$query = "INSERT INTO kerudung VALUES(NULL,'id_pelanggan, nama_pelanggan, alamat_tujuan, warna_kerudung, ukuran_kerudung, jumlah_pesanan') 
          VALUES ('$id_pelanggan, $nama_pelanggan, $alamat_tujuan, $warna_kerudung, $ukuran_kerudung, $jumlah_pesanan')";
mysqli_query($koneksi, $query);

header("Location: ./index.php");
exit;
