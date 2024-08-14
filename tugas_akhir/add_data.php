<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container card-add bg-light">
        <h3 class="text-center mb-5">Form Pemesanan Paket Game</h3>
        <form action="controller/add-data.php" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <label for="nama">Nama Pemesan</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-5">
                        <label for="nomor_telepon">Nomor Telepon / HP</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="nomor_telepon" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-5">
                        <label for="layanan">Paket Game</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-check-inline">
                            <input class="form-check-input radio" type="radio" id="paketA" value="A" name="paket_game">
                            <label class="form-check-label" for="paket_game">
                                Paket A
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input radio" type="radio" id="paketB" name="paket_game" value="B">
                            <label class="form-check-label" for="paket_game">
                                Paket B
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input radio" type="radio" id="paketC" name="paket_game" value="C">
                            <label class="form-check-label" for="paket_game">
                                Paket C
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input radio" type="radio" id="paketD" name="paket_game" value="D">
                            <label class="form-check-label" for="paket_game">
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
                            <input class="form-check-input checkbox" type="checkbox" id="checkboxMakananRingan"
                                name="paket_makanan_ringan" value="1">
                            <label class="form-check-label" for="paket_makanan_ringan">
                                Makanan Ringan
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input checkbox" type="checkbox" id="checkboxMakananBerat" name="paket_makanan_berat" value="2">
                            <label class="form-check-label" for="paket_makanan_berat">
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
            <div class="modal-footer d-flex justify-content-center gap-5">
                <a href="pesanan.php" class="btn btn-danger w-25">
                    Batal
                </a>
                <button type="submit" class="btn btn-success w-25">Simpan</button>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>