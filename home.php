<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="icon" type="image" sizes="32x32" href="gambar/weblogo-removebg-preview.png">
    <link rel="stylesheet" href="style1.css">
    <title>Linril Estate</title>
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
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
                </li>
                
            </ul>
            <span class="navbar-text">
                <button type="button" class="btn btn-primary">
                    <a href="login.php" class="btn-link-white">Login</a>
                </button>
                <button type="button" class="btn btn-dark">
                    <a href="register.php" class="btn-link-white">Register</a>
                </button>
            </span>
            </div>
        </div>
    </nav>

    <div class='header_home'>
        <h2>Welcome to Linril Estate!</h2>
        <p>Anda bingung mau mempromosikan properti Anda? Disini kami siap membantu Anda.</p>
    </div>

    <div class='gbr_login'>
        <h2>Find Your Dream Home with Linril Estate</h2>
        <img src='gambar/house.png' alt='gbr1.1' width=600px>
    </div>
    <div class='content_home'>
        <p>Sebagai perusahaan yang bergerak di bidang pemasaran properti, kami berkomitmen untuk menjadi mitra terpercaya dalam membantu masyarakat menemukan hunian dan investasi terbaik. Dengan tim yang berpengalaman dan jaringan luas di industri properti, kami menghadirkan layanan yang berorientasi pada kepercayaan, transparansi, dan kepuasan pelanggan. Kami tidak hanya memasarkan properti, tetapi juga memberikan solusi strategis yang bernilai, mulai dari konsultasi hingga pendampingan penuh dalam setiap proses transaksi.</p>
    </div>


    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gambar\rumah1.jpg" class="d-block w-100" alt="rumah1.1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>GreenHouse Ville</h5>
                    <p>Ukuran 20x35 meter</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="gambar\rumah2.jpg" class="d-block w-100" alt="rumah1.2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Living Land</h5>
                    <p>Ukuran 40x20 meter</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="gambar\rumah3.jpg" class="d-block w-100" alt="rumah1.3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>G Luxury House</h5>
                    <p>Ukuran 30x28 meter</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        <!-- Bagian Fitur Layanan -->
    <div class="features-section">
        <h3>Layanan Kami</h3>
        <div class="features-grid">
            <div class="feature-item">
                <i class="fas fa-home"></i>
                <h4>Pemasaran Properti</h4>
                <p>Promosikan rumah dan apartemen Anda dengan jangkauan luas.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-search"></i>
                <h4>Pencarian Hunian</h4>
                <p>Temukan properti impian sesuai kebutuhan Anda.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-handshake"></i>
                <h4>Konsultasi Gratis</h4>
                <p>Dapatkan nasihat ahli untuk transaksi properti.</p>
            </div>
        </div>
    </div>

    <footer class="footer">
            <p>&copy; 2025 Linril Estate. Semua hak dilindungi. | Hubungi kami: carolinesugianto@125.com | Temukan hunian impian Anda hari ini!</p>
    </footer>

</body>
</html>