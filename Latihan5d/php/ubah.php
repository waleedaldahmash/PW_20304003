<?php 
require 'functions.php';

$id = $_GET['id'];
$Hijab = query("SELECT * FROM hijab WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040032</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $Hijab['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="img" style="margin-right: 8px;">Gambar</label>
                : <input type="text" name="img" id="img" require value="<?= $Hijab['img']; ?>"><br><br>
            </li>
            <li>
                <label for="nama" style="margin-right: 16px;">Nama</label>
                : <input type="text" name="nama" id="nama" require value="<?= $Hijab['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="informasi_produk" style="margin-right: 21px;">Informasi Produk</label>
                : <input type="text" name="informasi_produk" id="informasi_produk" require
                    value="<?= $Hijab['informasi_produk']; ?>"><br><br>
            </li>
            <li>
                <label for="jenis" style="margin-right: 9px;">Jenis</label>
                : <input type="text" name="jenis" id="jenis" require value="<?= $Hijab['jenis']; ?>"><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 7px;">Harga</label>
                : <input type="text" name="harga" id="harga" require value="<?= $Hijab['harga']; ?>"><br><br>
            </li>
            <button type="submit" name="ubah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Ubah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>