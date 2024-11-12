<?php
// Menghubungkan file koneksi
include('koneksi.php');

// Mengambil semua data dari database
$sql = "SELECT * FROM pendaftaran_beasiswa ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Data tidak ditemukan";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran Beasiswa</title>
    <!-- Menghubungkan Bootstrap secara lokal -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="aset/style.css">
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
                            <a class="nav-link" href="form_pendaftaran.php">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Hasil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Konten Hasil Pendaftaran -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Hasil Pendaftaran Beasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Semester</th>
                    <th>IPK</th>
                    <th>Beasiswa</th>
                    <th>Status Ajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; // Nomor urut
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['nomor_hp']) ?></td>
                    <td><?= htmlspecialchars($row['semester']) ?></td>
                    <td><?= htmlspecialchars($row['ipk']) ?></td>
                    <td><?= htmlspecialchars($row['beasiswa']) ?></td>
                    <td><?= htmlspecialchars($row['status_ajuan']) ?></td>
                    <td>
                        <a href="verifikasi.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Verifikasi</a>
                        <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus record ini?');">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer menggunakan Bootstrap -->
    <footer class="py-3 mt-4 border-top">
        <div class="container text-center">
            <p class="mb-0">Copyright &copy; kampuskuaja.ac.id</p>
        </div>
    </footer>

    <!-- Menghubungkan Bootstrap secara lokal -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
