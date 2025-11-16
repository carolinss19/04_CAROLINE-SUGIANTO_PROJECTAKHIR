<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama= mysqli_real_escape_string ($koneksi, $_POST['nama_lengkap']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $no_telp = mysqli_real_escape_string ($koneksi, $_POST['no_telp']);

    if(!preg_match("/^[0-9]{10,13}$/", $no_telp)) {
        echo "<script>
            alert('Nomor telepon tidak valid! Harus 10-13 angka.');
            window.location.href='register.php';
          </script>";
    exit;
    }

    $query = "INSERT INTO user (nama_lengkap, username, password, email, no_telp) 
              VALUES ('$nama','$username', '$password', '$email', '$no_telp')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Registrasi Berhasil! Silahkan Login');
                window.location='login.php';
              </script>";
    } else {
        echo "Gagal Registrasi";
    }
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
    <link rel="stylesheet" href="style4.css">
    <title>Daftar Akun</title>
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
                    <a href="login.php" class="btn-link-white">Login</a>
                </button>
                <button type="button" class="btn btn-secondary">
                    <a href="register.php" class="btn-link-white">Register</a>
                </button>
            </span>
            </div>
        </div>
    </nav>


<div class='container'>
    <h2>Registrasi Akun</h2>
    <fieldset>
        <form method='post'>
            <table>
                <tr>
                    <td><label for='nama_lengkap'>Masukkan Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required></td>
                </tr>
                <tr>
                    <td><label for='email'>Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td><label for='password'>Buat Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Password" required></td>
                </tr>

                <tr>
                    <td><label for='email'>Masukkan Email</label></td>
                    <td>:</td>
                    <td><input type="text" name="email" placeholder="gugel123@gmail.com" required></td>
                </tr>

                <tr>
                    <td><label for='no_telp'>Nomor Telepon</label></td>
                    <td>:</td>
                    <td><input type="number" name="no_telp" value="<?php echo $d['no_telp']; ?>" maxlength="13" pattern="[0-9]{10,13}" placeholder="0812-XXXX-XXXX" required></td>
                </tr>

                <tr>
                    <td colspan="3" style='text-align: center;'><button type='submit' name='register'>Register</button></td>
                </tr>
            </table>
        </form>
        
    </fieldset>
    <p>Sudah punya akun? <a href='login.php'>Login Disini!</a></p>
</div>

    <footer class="footer">
            <p>&copy; 2025 Linril Estate. Semua hak dilindungi. | Hubungi kami: carolinesugianto@125.com | Temukan hunian impian Anda hari ini!</p>
    </footer>

</body>
</html>
