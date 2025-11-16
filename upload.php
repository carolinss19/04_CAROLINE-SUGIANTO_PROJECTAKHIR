<?php
include 'koneksi.php';

if(isset($_POST['upload'])){
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);

    // File gambar
    if(isset($_FILES['properti']) && $_FILES['properti']['name'] != ""){
        $properti = $_FILES['properti']['name'];
        $tmp_name = $_FILES['properti']['tmp_name'];

        // Pindahkan file ke folder gambar
        move_uploaded_file($tmp_name, "gambar/".$properti);
    } else {
        $properti = ""; // Jika tidak ada file
    }

    $sql = "INSERT INTO upload (nama_lengkap,email,properti,alamat,harga,no_telp)
            VALUES ('$nama','$email','$properti','$alamat','$harga','$no_telp')";
    
    mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

    echo "<script>
            alert('Upload Berhasil!');
            window.location='display_upl.php';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="icon" type="image" sizes="32x32" href="gambar/weblogo-removebg-preview.png">
    <link rel="stylesheet" href="style2.css">
    <title>Upload your Property</title>
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
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="display_upl.php">Property Display</a>
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

    <form method='post' enctype="multipart/form-data">
        <fieldset>
            <legend>Tambahkan Properti Anda</legend>
            <table>
                <tr>
                    <td><label for="nama_lengkap">Nama Lengkap</label></td>
                    <td>:</td>
                    <td><input type='text' name='nama_lengkap' placeholder="Nama Lengkap"></
                </tr>

                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type='text' name='email' placeholder="gugel123@gmail.com"></
                </tr>

                <tr>
                    <td><label for="no_telp">Nomor Telepon</label></td>
                    <td>:</td>
                    <td><input type='text' name='no_telp' placeholder="08123456789"></
                </tr>

                <tr>
                    <td><label for="properti">Masukkan Properti yang ingin anda upload</label></td>
                    <td>:</td>
                    <td><input type='file' name='properti' accept="image/*"></td>
                </tr>

                <tr>
                    <td><label for='alamat'>Alamat</label></td>
                    <td>:</td>
                    <td><input type='text' name='alamat' placeholder="Alamat Lengkap Rumah/Apartemen"></td>
                </tr>
                
                <tr>
                    <td><label for="harga">Harga Rumah / Apartemen</label></td>
                    <td>:</td>
                    <td><input type='text' name='harga' placeholder="Rp. 100.000.000,00.-"></td>
                </tr>

                <div class="submitbutton">
                    <tr>
                        <td></td>
                        <td colspan="2" style='text-align: center;'><input type='submit' name='upload' value="Upload"></td>
                    </tr>
                </div>
            </table>
        </fieldset>
    </form>

    <footer class="footer">
            <p>&copy; 2025 Linril Estate. Semua hak dilindungi. | Hubungi kami: carolinesugianto@125.com | Temukan hunian impian Anda hari ini!</p>
    </footer>
</body>
</html>