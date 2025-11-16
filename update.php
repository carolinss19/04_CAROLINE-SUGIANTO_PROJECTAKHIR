<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM upload WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="icon" type="image" sizes="32x32" href="gambar/weblogo-removebg-preview.png">
    <link rel="stylesheet" href="style_upd.css">
    <title>Update Data</title>
</head>

<body>
    <h2>Form Update Data</h2>

    <form method="POST" action="proses_upd.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

            Nama Lengkap:<br>
            <input type="text" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>"><br><br>

            Email:<br>
            <input type="text" name="email" value="<?php echo $d['email']; ?>"><br><br>

            Gambar Properti Lama:<br>
            <?php if($d['properti'] != ""): ?>
                <img src="gambar/<?php echo $d['properti']; ?>" width="120"><br>
            <?php else: ?>
                Tidak ada gambar<br>
            <?php endif; ?>
            Ganti Gambar (Opsional):<br>
            <input type="file" name="properti"><br><br>

            Alamat:<br>
            <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"><br><br>

            Harga:<br>
            <input type="text" name="harga" value="<?php echo $d['harga']; ?>"><br><br>

            Nomor Telepon:<br>
            <input type="text" name="no_telp" value="<?php echo $d['no_telp']; ?>"><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <h5>Tidak jadi update data? <a href="display_upl.php">Kembali ke Display Properti</a></h5>

    <footer class="footer">
            <p>&copy; 2025 Linril Estate. Semua hak dilindungi. | Hubungi kami: carolinesugianto@125.com | Temukan hunian impian Anda hari ini!</p>
    </footer>

</body>
</html>
