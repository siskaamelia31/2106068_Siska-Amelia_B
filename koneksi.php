<?php
/* Membuat koneksi dengan MySQL */
$koneksi = mysqli_connect("localhost", "root", "", "2106068_siska");
/* periksa koneksi, jika tidak terkoneksi maka tampilkan pesan gagal */
if (!$koneksi) {
    echo "<script>alert('koneksi database gagal'); </script>";
}
