<?php
// Menghubungkan file koneksi
include('koneksi.php');

// Konstanta IPK (asumsi nilai IPK otomatis)
define('IPK', 3.4); 

// Status awal pengajuan
$status_ajuan = "belum diverifikasi";

// Logika ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_hp = $_POST['nomor_hp'];
    $semester = $_POST['semester'];
    $ipk = IPK; // Menggunakan nilai IPK yang telah ditentukan
    $beasiswa = isset($_POST['beasiswa']) ? $_POST['beasiswa'] : null;
    $berkas = $_FILES['berkas']['name'];
    
    if ($ipk >= 3 && $beasiswa && $berkas) {
        // Mengunggah berkas
        $file_tmp = $_FILES['berkas']['tmp_name'];
        $upload_dir = "uploads/";
        move_uploaded_file($file_tmp, $upload_dir . $berkas);

        // Menyimpan data ke database
        $sql = "INSERT INTO pendaftaran_beasiswa (nama, email, nomor_hp, semester,beasiswa, berkas, status_ajuan, ipk)
                VALUES ('$nama', '$email', '$nomor_hp', '$semester', '$beasiswa', '$berkas', '$status_ajuan', '$ipk')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: hasil.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Beasiswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="aset/style_form.css">
</head>
<body>
    <!-- Header dan navbar -->
    <header>
        <div class="header-container">
            <img src="aset/sc.jpg" alt="Header Image"> 
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="aset/logo.png" alt="Logo" style="height: 50px;"></a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pilihan Beasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="form_pendaftaran.php">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hasil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Konten Formulir -->
    <div class="container mt-5 form-container">
    <h2 class="text-center mb-4">Form Pendaftaran Beasiswa</h2>
    <form action="form_pendaftaran.php" method="post" enctype="multipart/form-data">
        <div class="row form-row">
            <div class="col-md-6 form-col">
                <div class="form-group">
                    <label for="nama" class="form-label">Masukkan Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Masukkan Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="tel" class="form-control" id="nomor_hp" name="nomor_hp" pattern="[0-9]{10,12}" required>
                </div>
                <div class="form-group">
                    <label for="semester" class="form-label">Semester Saat Ini</label>
                    <select class="form-select" id="semester" name="semester" required>
                        <option selected>Pilih</option>
                        <?php for($i = 1; $i <= 8; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6 form-col-right">
                <div class="form-group">
                    <label for="ipk" class="form-label">IPK Terakhir</label>
                    <input type="number" class="form-control" id="ipk" name="ipk" step="0.01" readonly>
                </div>
                <div class="form-group">
                    <label for="beasiswa" class="form-label">Pilihan Beasiswa</label>
                    <select class="form-select" id="beasiswa" name="beasiswa" required>
                        <option selected>Jenis Beasiswa</option>
                        <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                        <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="berkas" class="form-label">Unggah Berkas</label>
                    <input type="file" class="form-control" id="berkas" name="berkas" accept=".pdf,.jpg,.jpeg,.png,.zip" required>
                </div>
            </div>
        </div>
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-primary" id="daftar">Daftar</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php';">Batal</button>
        </div>
    </form>
</div>

        </form>
    </div>

    <!-- Footer menggunakan Bootstrap -->
    <footer class="py-3 mt-4">
        <div class="container text-center">
            <p class="mb-0">Copyright &copy; kampuskuaja.ac.id</p>
        </div>
    </footer>

    <!-- Menghubungkan Bootstrap secara lokal -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

