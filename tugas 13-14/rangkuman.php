<?php
include 'utils/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $conn->prepare("SELECT * FROM reservasi WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $services = [];

    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if ($data['layanan_penginapan'] == 1) {
            $services[] = 'Penginapan';
        }
        if ($data['layanan_transportasi'] == 1) {
            $services[] = 'Transportasi';
        }
        if ($data['layanan_makanan'] == 1) {
            $services[] = 'Makanan';
        }
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Tidak ada data!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 13-14</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 card-rangkuman">
        <div class="border rounded-top bg-success p-2 text-center text-light">
            <h5>RANGKUMAN RESERVASI PAKET WISATA</h5>
        </div>
        <div class="border bg-success-subtle p-4">
            <div class="row">
                <div class="col-md-4">Nama</div>
                <div class="col-md-8">
                    <span>:</span>
                    <span><?php echo htmlspecialchars($data['nama']); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">Jumlah Peserta</div>
                <div class="col-md-8">
                    <span>:</span>
                    <span><?php echo htmlspecialchars($data['jumlah_peserta']); ?></span>
                    <span>Orang</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">Waktu Perjalanan</div>
                <div class="col-md-8">
                    <span>:</span>
                    <span><?php echo htmlspecialchars($data['waktu_pelaksanaan']); ?></span>
                    <span>Hari</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">Layanan Paket</div>
                <div class="col-md-8">
                    <span>:</span>
                    <span><?php echo implode(', ', $services) ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">Harga Paket</div>
                <div class="col-md-8">
                    <span>:</span>
                    <span>Rp. <?php echo number_format($data['harga_paket'], 2, ',', '.'); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">Jumlah Tagihan</div>
                <div class="col-md-8">
                    <span>:</span>
                    <span>Rp. <?php echo number_format($data['jumlah_pembayaran'], 2, ',', '.'); ?></span>
                </div>
            </div>
        </div>
        
        <div class="rounded-bottom p-4 text-center bg-success text-light card-button">
            <span>Pesan Lagi?</span>
            <div class="justify-content-center gap-5 mt-4">
                <a href="tambah.php" class="w-50 btn btn-primary">Ya</a>
                <a href="index.php?add=true" class="w-50 btn btn-danger">Tidak</a>

            </div>
    
        </div>
    </div>
</body>
</html>