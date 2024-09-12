<?php
include '../utils/config.php';

$nama = $_POST['nama'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];
$touring_event = isset($_POST['touring_event']) ? $_POST['touring_event'] : 0;
$pelatihan_berkendara = isset($_POST['pelatihan_berkendara']) ? $_POST['pelatihan_berkendara'] : 0;
$modifikasi = isset($_POST['modifikasi']) ? $_POST['pelatihan_berkendara'] : 0;
$workshop = isset($_POST['workshop']) ? $_POST['pelatihan_berkendara'] : 0;
$jasa_event = isset($_POST['jasa_event']) ? $_POST['pelatihan_berkendara'] : 0;
$jumlah_pembayaran = $_POST['jumlah_tagihan'];

if (isset($_POST['helm']) == 1 && isset($_POST['baju']) == 2 && isset($_POST['sticker']) == 3) {
    $merchandise = 7;
} elseif (isset($_POST['helm']) == 1 && isset($_POST['baju']) == 2) {
    $merchandise = 6;
} elseif (isset($_POST['helm']) == 1 && isset($_POST['sticker']) == 3) {
    $merchandise = 5;
} elseif (isset($_POST['baju']) == 2 && isset($_POST['sticker']) == 3) {
    $merchandise = 4;
} elseif (isset($_POST['helm']) == 1) {
    $merchandise = 3;
} elseif (isset($_POST['baju']) == 2) {
    $merchandise = 2;
} elseif (isset($_POST['sticker']) == 3) {
    $merchandise = 1;
}

$stmt = $conn->prepare("INSERT INTO reservasi (nama, nomor_telepon, alamat, touring_event, pelatihan_berkendara, modifikasi, workshop, merchandise, jasa_event, jumlah_pembayaran) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiiiiiii", $nama, $nomor_telepon, $alamat, $touring_event, $pelatihan_berkendara, $modifikasi, $workshop, $merchandise, $jasa_event, $jumlah_pembayaran);


if ($stmt->execute()) {
    header("Location: ../index.php?success=true");
    exit;
} else {
    header("Location: error.php");
    exit;
}

$stmt->close();
$conn->close();
