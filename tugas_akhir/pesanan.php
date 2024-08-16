<?php 
    session_start();

    if (!isset($_SESSION['user'])) {
        echo "<script>
                alert('Login terlebih dahulu!');
                window.location.href = 'login.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME09</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-red fixed-top">
        <div class="mx-auto">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-5">
                    <a class="nav-link text-nav" href="index.php">Beranda</a>
                    <a class="nav-link text-nav" href="index.php#game">Game</a>
                    <a class="nav-link text-nav" href="index.php#berita">Berita</a>
                    <a class="nav-link text-nav" href="index.php#terbaru">Terbaru</a>
                    <a class="nav-link text-nav" href="index.php#video">Video</a>
                    <a class="nav-link active" aria-current="page"" href=" #">Daftar Pesanan</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- PESANAN -->
    <div class="container card-pesanan">
        <?php
        if (isset($_GET['success'])) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 22;">
                        Data berhasil diubah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        } elseif (isset($_GET['add'])) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 22;">
                        Data berhasil ditambahkan
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        } elseif (isset($_GET['delete'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="z-index: 22;">
                        Data berhasil dibatalkan
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        } 
        ?>

        <div class="btn-display">
            <a href="add_data.php" class="btn-buy btn-lg btn-red">
                Tambah Paket Game
            </a>
    
            <a href="controller/logout.php" class="btn-logout">Logout</a>
        </div>
    </div>

    <div class="container card-pesanan mt-4">
        <?php
        include 'utils/config.php';
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conn) {
            die('Koneksi Gagal: ' . mysqli_connect_error());
        }
        $db = 'SELECT * FROM reservasi';
        $result = mysqli_query($conn, $db);

        if (mysqli_num_rows($result) > 0) {
            foreach ($result as $item) {
                if ($item['paket_game'] == 'A') {
                    $game = 'Paket A';
                } elseif ($item['paket_game'] == 'B') {
                    $game = 'Paket B';
                } elseif ($item['paket_game'] == 'C') {
                    $game = 'Paket C';
                } else {
                    $game = 'Paket D';
                }

                if ($item['paket_makanan'] == 1) {
                    $makanan = 'Makanan Ringan';
                } elseif ($item['paket_makanan'] == 2) {
                    $makanan = 'Makanan Berat';
                } elseif ($item['paket_makanan'] == 3) {
                    $makanan = 'Makanan Ringan & Makanan Berat';
                } else {
                    $makanan = '-';
                }

                echo '<div class="card mt-4 mb-4">
                            <div class="card-header">
                                <h2>Pemesanan Paket Game</h2>
                            </div>
                            <div class="container">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <span class="card-text">Nama</span>
                                        </div>
                                        <div class="col-1">
                                            <span class="card-text">:</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="card-text">' . $item['nama'] . '</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <span class="card-text">Nomor Telepon</span>
                                        </div>
                                        <div class="col-1">
                                            <span class="card-text">:</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="card-text">' . $item['nomor_telepon'] . '</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <span class="card-text">Paket Game</span>
                                        </div>
                                        <div class="col-1">
                                            <span class="card-text">:</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="card-text">' . $game . '</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <span class="card-text">Paket Makanan</span>
                                        </div>
                                        <div class="col-1">
                                            <span class="card-text">:</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="card-text">' . $makanan . '</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <span class="card-text">Jumlah Tagihan</span>
                                        </div>
                                        <div class="col-1">
                                            <span class="card-text">:</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="card-text">Rp. ' . number_format($item['jumlah_pembayaran'], 0, ',', '.') . '</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-body-secondary d-flex justify-content-center">
                                <div class="w-button d-flex justify-content-between gap-5">
                                    <a onclick="hapusData(' . $item['id'] . ')" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#formGameBatal">Batal</a>
                                    <a onclick="editData(' . $item['id'] . ')" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#formEditGame">Edit</a>
                                </div>
                            </div>
                        </div>';
            }
        } else {
            echo '<div class="text-center">Belum ada pemesanan</div>';
        }
        ?>
    </div>

    <!-- Edit Data Modal -->
    <div class="modal fade" id="formEditGame" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pemesanan Paket Game</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="controller/edit_data.php" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="nama">Nama Pemesan</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-5">
                                <label for="nomor_telepon">Nomor Telepon / HP</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-5">
                                <label for="layanan">Paket Game</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check-inline">
                                    <input class="form-check-input radio" type="radio" id="paketA" value="A" name="paket_game">
                                    <label class="form-check-label" for="paketA">
                                        Paket A
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input radio" type="radio" id="paketB" name="paket_game" value="B">
                                    <label class="form-check-label" for="paketB">
                                        Paket B
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input radio" type="radio" id="paketC" name="paket_game" value="C">
                                    <label class="form-check-label" for="paketC">
                                        Paket C
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input radio" type="radio" id="paketD" name="paket_game" value="D">
                                    <label class="form-check-label" for="paketD">
                                        Paket D
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-5">
                                <label for="layanan">Paket Makanan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-check-inline">
                                    <input class="form-check-input checkbox" type="checkbox" id="checkboxMakananRingan" name="paket_makanan_ringan" value="1">
                                    <label class="form-check-label" for="checkboxMakananRingan">
                                        Makanan Ringan
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input checkbox" type="checkbox" id="checkboxMakananBerat" name="paket_makanan_berat" value="2">
                                    <label class="form-check-label" for="checkboxMakananBerat">
                                        Makanan Berat
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4 mt-4">
                            <button type="button" class="btn btn-primary" id="btn_cek">Cek Pesanan</button>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-5">
                                <label for="jumlah_tagihan">Total Biaya Pesanan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp</span>
                                    <input id="jumlah_tagihan" type="number" class="form-control" name="jumlah_tagihan" required readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Data Modal -->
    <div class="modal fade" id="formGameBatal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Batal Reservasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin membatalkan reservasi?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a id="linkHapusData" href="" class="btn btn-danger">Ya, batalkan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/pesanan.js"></script>
    <script src="js/alert.js"></script>

</body>

</html>