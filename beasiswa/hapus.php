<?php
include('koneksi.php');

// Check if ID is provided
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID tidak valid.";
    exit;
}

$id = intval($_GET['id']);

// Delete the record
$sql = "DELETE FROM pendaftaran_beasiswa WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Record berhasil dihapus.";
} else {
    echo "Gagal menghapus record.";
}

$stmt->close();
$conn->close();

// Redirect to the results page
header("Location: hasil.php");
exit;
