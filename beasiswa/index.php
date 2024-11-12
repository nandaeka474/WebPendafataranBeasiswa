<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Beasiswa Kampusku</title>
    <!-- Menghubungkan Bootstrap dari file lokal -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="aset/style_index.css"> 
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="aset/logo.png" alt="Logo" style="height: 50px;"> Kampusku
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_pendaftaran.php">Daftar Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hasil.php">Hasil Seleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero py-5 text-center">
        <div class="hero-img">
            <img src="aset/bg.jpg" alt="Hero Background">
        </div>
        <div class="container hero-content">
            <h1>Selamat Datang di Program Beasiswa Kampusku</h1>
            <p class="lead">Dapatkan kesempatan meraih beasiswa terbaik untuk masa depan cerah Anda!</p>
            <a href="form_pendaftaran.php" class="btn btn-light btn-lg">Daftar Sekarang</a>
        </div>
    </header>

    <!-- Informasi Beasiswa -->
    <section class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">Kesempatan Emas Menanti Anda</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p>Jangan lewatkan kesempatan langka ini untuk mengakses pendidikan berkualitas tinggi. Program beasiswa kami dirancang untuk mendukung mahasiswa berprestasi dengan berbagai latar belakang dan minat, memberikan Anda akses ke peluang yang bisa mengubah masa depan Anda.</p>
                    <p>Kami percaya bahwa setiap individu memiliki potensi yang unik. Dengan beasiswa kami, Anda dapat mengembangkan kemampuan Anda dan meraih impian akademik Anda tanpa beban finansial.</p>
                </div>
                <div class="col-lg-6">
                    <img src="aset/beasiswa.png" alt="Informasi Beasiswa" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Manfaat Beasiswa -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Mengapa Pilih Program Beasiswa Kampusku?</h2>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="aset/ak.ico" alt="Akreditasi" class="mb-3" style="height: 80px;">
                    <h4>Kampus Terakreditasi</h4>
                    <p>Kampus kami mendapatkan akreditasi A, menjamin kualitas pendidikan yang tinggi.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="aset/tc.ico" alt="Pengajar" class="mb-3" style="height: 80px;">
                    <h4>Pengajar Profesional</h4>
                    <p>Didukung oleh pengajar yang berkompeten dan ahli di bidangnya.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="aset/gl.ico" alt="Global" class="mb-3" style="height: 80px;">
                    <h4>Jaringan Global</h4>
                    <p>Kesempatan untuk mendapatkan pengalaman internasional melalui jaringan kampus global.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Kampusku. All rights reserved.</p>
        </div>
    </footer>

    <!-- Menghubungkan Bootstrap secara lokal -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
