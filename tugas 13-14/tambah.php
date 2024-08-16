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
    <div class="container mt-5 text-center border rounded card-pesanan">
        <h2 class="mt-4 mb-4">Tambah Pemesanan Paket Wisata</h2>
        <form action="controller/tambah-data.php" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <label for="nama">Nama Pemesan</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-5">
                        <label for="nomor_telepon">Nomor Telepon / HP</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-5">
                        <label for="waktu_pelaksanaan">Durasi Pelaksanaan Perjalanan</label>
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
                        <label for="layanan">Pelayanan Paket Perjalanan</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-check-inline">
                            <input class="form-check-input checkbox" type="checkbox" id="checkbox_penginapan" name="checkbox_penginapan">
                            <label class="form-check-label" for="checkbox_penginapan">
                                Penginapan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input checkbox" type="checkbox" id="checkbox_transportasi" name="checkbox_transportasi">
                            <label class="form-check-label" for="checkbox_transportasi">
                                Transportasi
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input checkbox" type="checkbox" id="checkbox_makanan" name="checkbox_makanan">
                            <label class="form-check-label" for="checkbox_makanan">Makanan</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-5">
                        <label for="jumlah_tagihan">Harga Paket Perjalanan</label>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="input-group-text" id="harga_paket" name="harga_paket" required readonly>
                            </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-md-5">
                        <label for="jumlah_tagihan">Jumlah Tagihan</label>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input id="jumlah_pembayaran" type="number" class="input-group-text" name="jumlah_pembayaran" required readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 bg-body-secondary rounded-bottom">
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary" id="btn_cek">Cek Pesanan</button>
                </div>
                <div class="col-md-9">
                    <a href="index.php" class="btn btn-danger w-25">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-success w-25">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="js/index.js"></script>
    
</body>

</html>