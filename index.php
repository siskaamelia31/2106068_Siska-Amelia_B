<!DOCTYPE html>
<html lang="en">

<head>
    <title>formulir pemesanan kerudung</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="kotak">
        <h1>Formulir Pemesanan Kerudung</h1>
        <form method="post" action="proses_input.php">
            <label for="id">Id Pelanggan</label>
            <input type="id" name="Id_Pelanggan" maxlength="100" class="form-input" required>

            <label for="nama">Nama Pelanggan</label>
            <input type="nama" name="Nama_Pelanggan" maxlength="100" class="form-input" required>

            <label for="warna">Warna Kerudung</label>
            <input type="warna" name="Warna_Kerudung" maxlength="100" class="form-input" required>

            <label for="ukuran">Ukuran Kerudung</label>
            <select name="ukuran" name="Warna_Kerudung" maxlength="100" class="form-input" required>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>

            </select>
            <label for="jumlah">Jumlah Pesanan</label>
            <input type="number" name="Jumlah_Pesanan" maxlength="100" class="form-input" required>

            <label for=" alamat">Alamat Tujuan</label>
            <input type="alamat" name="Alamat_Tujuan" maxlength="100" class="form-input" required>

            <button type="submit" id="btn-kirim">kirim Pesanan</button>
        </form>
    </div>
</body>

</html>