<?php
include '../utils/config.php';

$nama = $_POST['nama'];
$nomor_telepon = $_POST['nomor_telepon'];
$paket_game = isset($_POST['paket_game']) ? $_POST['paket_game'] : 0;
$jumlah_pembayaran = $_POST['jumlah_tagihan'];

if (isset($_POST['paket_makanan_ringan']) == 1 && isset($_POST['paket_makanan_berat']) == 2) {
    $paket_makanan = 3;
} elseif (isset($_POST['paket_makanan_ringan']) == 1) {
    $paket_makanan = 1;
} elseif (isset($_POST['paket_makanan_berat']) == 2) {
    $paket_makanan = 2;
}

$stmt = $conn->prepare("INSERT INTO reservasi (nama, nomor_telepon, paket_game, paket_makanan, jumlah_pembayaran) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssii", $nama, $nomor_telepon, $paket_game, $paket_makanan, $jumlah_pembayaran);


if ($stmt->execute()) {
    header("Location: ../index.php?success=true");
    exit;
} else {
    header("Location: error.php");
    exit;
}

$stmt->close();
$conn->close();
