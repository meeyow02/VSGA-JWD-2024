<?php
include '../utils/config.php';

$nama = $_POST['nama'];
$nomor_telepon = $_POST['nomor_telepon'];
$waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$harga_paket = $_POST['harga_paket'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];

$checkbox_penginapan = isset($_POST['checkbox_penginapan']) && $_POST['checkbox_penginapan'] == 'on' ? 1 : 0;
$checkbox_transportasi = isset($_POST['checkbox_transportasi']) && $_POST['checkbox_transportasi'] == 'on' ? 1 : 0;
$checkbox_makanan = isset($_POST['checkbox_makanan']) && $_POST['checkbox_makanan'] == 'on' ? 1 : 0;

$stmt = $conn->prepare("INSERT INTO reservasi (nama, nomor_telepon, waktu_pelaksanaan, jumlah_peserta, layanan_penginapan, layanan_transportasi, layanan_makanan, harga_paket, jumlah_pembayaran) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiiiiii", $nama, $nomor_telepon, $waktu_pelaksanaan, $jumlah_peserta,  $checkbox_penginapan, $checkbox_transportasi, $checkbox_makanan, $harga_paket, $jumlah_pembayaran,);

if ($stmt->execute()) {
  $last_id = $conn->insert_id;
  header("Location: ../rangkuman.php?id=$last_id");
  exit;
} else {
  header("Location: error.php");
  exit;
}

$stmt->close();
$conn->close();
