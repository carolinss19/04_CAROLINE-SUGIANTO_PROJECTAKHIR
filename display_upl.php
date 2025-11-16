<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="icon" type="image" sizes="32x32" href="gambar/weblogo-removebg-preview.png">
    <link rel="stylesheet" href="style_dis.css">
    <title>Upload your Property!</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <h3>Linril Estate</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="upload.php">Upload your Property</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="display_upl.php">Property Display</a>
                </li>
            </ul>
            <span class="navbar-text">
                <button type="button" class="btn btn-primary">
                    <a href="home.php" class="btn-link-white">Log Out</a>
                </button>
                <button type="button" class="btn btn-dark">
                    <a href="register.php" class="btn-link-white">Register</a>
                </button>
            </span>
            </div>
        </div>
    </nav>

    
    </br>
    </br>
    <fieldset>
        <legend>DAFTAR PROPERTI</legend>
        <table border="2">
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Properti</th>
                <th>Alamat</th>
                <th>Harga</th>
                <th>Nomor Telepon</th>
                <th>Option</th>
            </tr>
            <?php
            include 'koneksi.php';
            $project = mysqli_query($koneksi,"select * from upload");
            while($d = mysqli_fetch_array($project)){
            ?>
            <tr>
                <td><?php echo $d['nama_lengkap']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td>
                <?php if($d['properti'] != ""): ?>
                    <img src="gambar/<?php echo $d['properti']; ?>" width="120">
                <?php else: ?>
                    Tidak ada gambar
                <?php endif; ?>
                </td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['id']; ?>">PERBAHARUI</a>
                    <a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </fieldset>
    
    <div class='back'>
        <a href="upload.php">Kembali ke Halaman Upload Properti</a>
    </div>


    <footer class="footer">
        <p>&copy; 2025 Linril Estate. Semua hak dilindungi. | Hubungi kami: carolinesugianto@125.com | Temukan hunian impian Anda hari ini!</p>
    </footer>
</body>
</html>