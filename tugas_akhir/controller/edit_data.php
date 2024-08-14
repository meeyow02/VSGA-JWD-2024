<?php
include '../utils/config.php';

$id = $_POST['id'];
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

$stmt = $conn->prepare("UPDATE reservasi SET nama = ?, nomor_telepon = ?, paket_game = ?, paket_makanan = ?, jumlah_pembayaran = ? WHERE id = ?");
$stmt->bind_param("sssiii", $nama, $nomor_telepon, $paket_game, $paket_makanan, $jumlah_pembayaran, $id);

if ($stmt->execute()) {
    header("Location: ../pesanan.php?success=true");
    exit;
} else {
    header("Location: error.php");
    exit;
}

$stmt->close();
$conn->close();
