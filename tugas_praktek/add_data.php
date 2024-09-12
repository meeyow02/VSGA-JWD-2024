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
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Protest+Guerrilla&display=swap" rel="stylesheet">

    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
        rel="stylesheet" />
    <title>Tugas Praktek</title>
</head>

<body class="bg-white">
    <!-- NAVBAR -->
    <div class="d-flex flex-column bg-black fixed-top shadow-sm">
        <div class="mx-auto p-2 text-white">
            <a href="index.php" class="text-white">
                <h3 class="font-logo">Moto<span class="text-red">09</span></h3>
            </a>
        </div>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="mx-auto">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav gap-5">
                        <a class="nav-link text-nav" href="index.php">Beranda</a>
                        <a class="nav-link text-nav" href="about-us.php">Tentang Kami</a>
                        <a class="nav-link text-nav" href="visi-misi.php">Visi & Misi</a>
                        <a class="nav-link text-nav" href="profile.php">Profil</a>
                        <a class="nav-link active" aria-current="page" href="product.php">Produk</a>
                        <a class="nav-link text-nav" href="contact.php">Kontak Kami</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Aktivitas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="gallery.php">Galeri Foto</a></li>
                                <li><a class="dropdown-item" href="article.php">Artikel</a></li>
                                <li><a class="dropdown-item" href="event.php">Event</a></li>
                            </ul>
                        </li>
                        <a class="nav-link text-nav" href="controller/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-form margin-top-nav lh-lg text-justify">
        <h3 class="mb-4">Form Pemesanan</h3>
        <form action="controller/tambah_data.php" method="post">
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
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="alamat" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5">
                                    <label for="layanan">Jasa yang ditawarkan</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="touring_event"
                                            name="touring_event" value="1">
                                        <label class="form-check-label" for="touring_event">
                                            Touring Event Berkendara
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="pelatihan_berkendara"
                                            name="pelatihan_berkendara" value="1">
                                        <label class="form-check-label" for="pelatihan_berkendara">
                                            Pelatihan dan Edukasi Keselamatan Berkendara
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="modifikasi"
                                            name="modifikasi" value="1">
                                        <label class="form-check-label" for="modifikasi">
                                            Konsultasi Modifikasi Motor
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="workshop"
                                            name="workshop" value="1">
                                        <label class="form-check-label" for="workshop">
                                            Workshop dan Diskusi Teknis
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="jasa_event"
                                            name="jasa_event" value="1">
                                        <label class="form-check-label" for="jasa_event">
                                            Jasa Pembuatan Event Otomotif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5">
                                    <label for="layanan">Merchandise</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="helm"
                                            name="helm" value="1">
                                        <label class="form-check-label" for="helm">
                                            Helm
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="baju" name="baju" value="2">
                                        <label class="form-check-label" for="baju">
                                            Baju
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input checkbox" type="checkbox" id="sticker" name="sticker" value="3">
                                        <label class="form-check-label" for="sticker">
                                            Sticker
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
                        <div class="modal-footer d-flex justify-content-center gap-4 mt-3">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
    </div>

    <!-- FOOTER -->
    <footer class="bg-white shadow-lg border-top text-center mt-footer">
        <div class="container p-4">
            <h3 id="contact" class="mt-2 font-logo text-black">Moto<span class="text-red">09</span></h3>
            <section class="mb-2">
                <p>
                    Kami selalu terbuka untuk segala bentuk pertanyaan, kerja sama, atau informasi lebih lanjut mengenai Moto09.
                </p>
                <p>
                    Jalan Sungai Saddang Baru, Kota Makassar, Sulawesi Selatan
                </p>
                <div class="d-flex justify-content-center gap-2">
                    <!-- Fax -->
                    <div>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>0651 23005</p>
                    <!-- Email -->
                    <div>
                        <i class="fa fa-envelope"></i>
                    </div>
                    <p>moto09@gmail.com</p>
                </div>


            </section>

            <section class="mb-4">
                <!-- Facebook -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <!-- Google -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                <!-- Instagram -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <!-- Linkedin -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 bg-black">
            <p class="text-white">
                © 2024 Copyright
            </p>
        </div>
    </footer>


    <!-- SCRIPT -->
    <script src="js/pesanan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>