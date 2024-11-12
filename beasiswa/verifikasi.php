<?php
include('koneksi.php');

// Check if ID is provided
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID tidak valid.";
    exit;
}

$id = intval($_GET['id']);

// Fetch the current status for the ID
$sql = "SELECT status_ajuan FROM pendaftaran_beasiswa WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if checkbox is checked
    $status = isset($_POST['status_ajuan']) ? 'terverifikasi' : 'belum terverifikasi';

    // Update the status based on checkbox value
    $sql = "UPDATE pendaftaran_beasiswa SET status_ajuan=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $status, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header('Location: hasil.php');
        exit;
    } else {
        echo "Gagal memperbarui status.";
    }
    $stmt->close();
    $conn->close();
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Status</title>
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
                            <a class="nav-link" href="#">Pilihan Beasiswa</a>
                        </li>
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

    <div class="container mt-5">
        <h1 class="text-center">Edit Status</h1>
        <section>
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <p>Edit Status Verifikasi</p>
                        </div>
                        <div class="card-body">
                            <form action="verifikasi.php?id=<?= $id ?>" method="POST">
                                <div class="mb-4">
                                    <label for="status_ajuan">Status Ajuan</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="status_ajuan" id="status_ajuan" value="terverifikasi" <?= ($row['status_ajuan'] == 'terverifikasi') ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="status_ajuan">
                                            Verifikasi
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="hasil.php" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
