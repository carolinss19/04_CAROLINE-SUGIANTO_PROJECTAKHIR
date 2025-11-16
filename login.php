<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: home.php");
        exit;
    } else {
        echo "<script>
                alert('Username atau Password Salah!');
                window.location.href='login.php';
              </script>";
        exit;
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
    <title>Login Akun</title>
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
                    <a class="nav-link" href="display_upl.php">Property Display</a>
                </li>
            </ul>
            <span class="navbar-text">
                <button type="button" class="btn btn-secondary">
                    <a href="login.php" class="btn-link-white">Login</a>
                </button>
                
                <button type="button" class="btn btn-dark">
                    <a href="register.php" class="btn-link-white">Register</a>
                </button>
            </span>
            </div>
        </div>
    </nav>

<div class= 'container'>
    <h2>Login Akun</h2>
    <fieldset>
            <form method='post'>
                <table>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td>:</td>
                        <td><input type="text" name="username" placeholder= 'Username'></td>
                    </tr>
                    
                    <tr>
                        <td><label for='password'>Password</label></td>
                        <td>:</td>
                        <td><input type='password' name='password' placeholder='Password'></td>
                    </tr>

                    <tr>
                        <td colspan="3" style='text-align:center'><button type='submit' name='login'><a href="upload.php" class="btn-link-white">Login</a></button></td>
                    </tr>
                </table>
            </form>
    </fieldset>
    <p>Belum Punya Akun? <a href='register.php'>Daftar Disini</a></p>
</div>

    <footer class="footer">
            <p>&copy; 2025 Linril Estate. Semua hak dilindungi. | Hubungi kami: carolinesugianto@125.com | Temukan hunian impian Anda hari ini!</p>
    </footer>
    
</body>
</html>