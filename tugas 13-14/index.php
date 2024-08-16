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
    <div class="container mt-5">
        <h1 class="text-center">Pemesanan Paket Wisata</h1>
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
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <div class="mt-4 table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Nama Pemesan</th>
                        <th>No. HP</th>
                        <th>Durasi (Hari)</th>
                        <th>Jumlah Peserta</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include 'utils/config.php';
                        $sql = "SELECT * FROM reservasi";
                        $result = mysqli_query($conn, $sql);
                        $services = [];

                        if (mysqli_num_rows($result) > 0) {
                            foreach ($result as $item) {
                                if ($item['layanan_penginapan'] == 1) {
                                    $services[] = 'Penginapan';
                                }
                                if ($item['layanan_transportasi'] == 1) {
                                    $services[] = 'Transportasi';
                                }
                                if ($item['layanan_makanan'] == 1) {
                                    $services[] = 'Makanan';
                                }

                                echo '<tr>
                                        <td>'. $item['nama'] .'</td>
                                        <td>'. $item['nomor_telepon'] .'</td>
                                        <td>'. $item['waktu_pelaksanaan'] .'</td>
                                        <td>'. $item['jumlah_peserta'] .'</td>
                                        <td class="text-center">
                                            <a onclick="editData('. $item['id'] .')" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
                                                <svg class="icon-button" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" id="fi_10336582"><g id="Layer_2" data-name="Layer 2"><g id="pen"><circle id="background" cx="256" cy="256" fill="#26a1f4" r="256"></circle><g fill="#fff"><path d="m345.15 237.54-.14-.14-70.56-70.61s-86 86-127.44 128.3c-5.16 5.26-9.07 12.58-11.39 19.66-6.8 20.79-12.43 42-18.69 63-1.68 5.63-1.34 10.59 3.07 14.79 4.16 4 8.84 4.14 14.24 2.52 20-6 40.13-11.71 60.22-17.46a61.5 61.5 0 0 0 27.16-16.39c39.48-39.72 123.53-123.67 123.53-123.67z"></path><path d="m386.34 149.81-24.13-24.13a33 33 0 0 0 -46.65 0l-27.35 27.32 70.79 70.81 27.35-27.35a33 33 0 0 0 -.01-46.65z"></path></g></g></g></svg>
                                            </a>
                                            <a href="" onclick="hapusData('. $item['id'] .')" data-bs-toggle="modal" data-bs-target="#formReservasiBatal">
                                                <svg class="icon-button" id="fi_6861362" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m170.8 14.221a14.21 14.21 0 0 1 14.2-14.207l141.991-.008a14.233 14.233 0 0 1 14.2 14.223v35.117h-170.391zm233.461 477.443a21.75 21.75 0 0 1 -21.856 20.33h-254.451a21.968 21.968 0 0 1 -21.854-20.416l-21.774-318.518h343.174l-23.234 318.6zm56.568-347.452h-409.658v-33a33.035 33.035 0 0 1 33.005-33.012l343.644-.011a33.051 33.051 0 0 1 33 33.02v33zm-270.79 291.851a14.422 14.422 0 1 0 28.844 0v-202.247a14.42 14.42 0 0 0 -28.839-.01v202.257zm102.9 0a14.424 14.424 0 1 0 28.848 0v-202.247a14.422 14.422 0 0 0 -28.843-.01z" fill="#fc0005" fill-rule="evenodd"></path></svg>
                                            </a>
                                        </td>
                                    </tr>';
                            }
                        } else {
                            echo "Belum ada pemesanan";
                        }
                        
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="formPesanTiketWisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Tiket Wisata</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="controller/edit-data.php" method="post">
            <input type="hidden" name="id" id="id">
            <div class="modal-body">
                <div class="row">
                <div class="col-md-5">
                    <label for="nama">Nama Pemesan</label>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-5">
                    <label for="nomor_telepon">Nomor Telepon / HP</label>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-5">
                    <label for="waktu_pelaksanaan">Waktu Pelaksanaan Perjalanan</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group mb-3">
                    <input id="waktu_pelaksanaan" type="number" class="form-control" name="waktu_pelaksanaan" min="1"
                        required>
                    <span class="input-group-text">Hari</span>
                    </div>
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-5">
                    <label for="jumlah_peserta">Jumlah Peserta</label>
                </div>
                <div class="col-md-7">
                <div class="input-group mb-3">
                    <input id="jumlah_peserta" type="number" class="form-control" name="jumlah_peserta" min="1"
                        required>
                    <span class="input-group-text">Orang</span>
                    </div>
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-5">
                    <label for="name">Pelayanan Paket Perjalanan</label>
                </div>
                <div class="col-md-7">
                    <div class="form-check-inline">
                    <input class="form-check-input checkbox" type="checkbox" id="checkbox_penginapan"
                        name="checkbox_penginapan">
                    <label class="form-check-label" for="checkbox_penginapan">
                        Penginapan
                    </label>
                    </div>
                    <div class="form-check-inline">
                    <input class="form-check-input checkbox" type="checkbox" id="checkbox_transportasi"
                        name="checkbox_transportasi">
                    <label class="form-check-label" for="checkbox_transportasi">
                        Transportasi
                    </label>
                    </div>
                    <div class="form-check-inline">
                    <input class="form-check-input checkbox" type="checkbox" id="checkbox_makanan"
                        name="checkbox_makanan">
                    <label class="form-check-label" for="checkbox_makanan">
                        Makanan
                    </label>
                    </div>
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-5">
                    <label for="harga_paket">Harga Paket Perjalanan</label>
                </div>
                <div class="col-md-7">
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="input-group-text" id="harga_paket" name="harga_paket" required readonly>
                    </div>
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-5">
                    <label for="jumlah_pembayaran">Jumlah Tagihan</label>
                </div>
                <div class="col-md-7">
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input id="jumlah_pembayaran" type="number" class="input-group-text" name="jumlah_pembayaran" required readonly>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary me-auto" id="btn_cek">Cek Pesanan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
        </div>
    </div>

    <div class="modal fade" id="formReservasiBatal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <script src="js/edit.js"></script>
    <script src="js/alert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>