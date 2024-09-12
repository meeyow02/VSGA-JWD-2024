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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container margin-top-nav lh-lg text-justify">
        <h3>Produk / Jasa</h3>
        <a href="add_data.php" class="add-data">
            <div class="row mx-auto shadow-lg p-4 rounded-5 mt-4">
                <div class="col-6 d-flex">
                    <img src="https://www.wahanahonda.com/assets/upload/berita/BERITA_1565677868_7210303bf80b64de0dacd1584c9c4b36.jpg" class="img-fluid img mx-auto my-auto rounded-3" alt="...">
                </div>
                <div class="col-6 mt-card lh-lg text-justify">
                    <h4>Touring dan Event Berkendara</h4>
                    <p>Kami rutin mengadakan kegiatan touring di berbagai rute menarik di dalam maupun luar kota. Kegiatan ini bukan hanya sekadar perjalanan, tetapi juga memberikan pengalaman berkendara yang seru dan penuh kebersamaan. Selain itu, kami juga mengorganisir berbagai event berkendara seperti rally, fun ride, dan lain-lain.
                    </p>
                </div>
            </div>
        </a>

        <a href="add_data.php" class="add-data">
            <div class="row mx-auto shadow-lg p-4 rounded-5 mt-4">
                <div class="col-6 d-flex">
                    <img src="https://www.astramotor.co.id/wp-content/uploads/2019/08/safety-riding.jpg" class="img-fluid img mx-auto my-auto rounded-3" alt="...">
                </div>
                <div class="col-6 mt-card lh-lg text-justify">
                    <h4>Pelatihan dan Edukasi Keselamatan Berkendara</h4>
                    <p>Keselamatan berkendara adalah prioritas utama kami. Oleh karena itu, kami menyediakan pelatihan keselamatan berkendara yang meliputi teknik berkendara yang aman, manajemen risiko di jalan, serta edukasi perawatan motor. Pelatihan ini dipandu oleh instruktur berpengalaman di bidangnya.</p>
                </div>
            </div>
        </a>

        <a href="add_data.php" class="add-data">
            <div class="row mx-auto shadow-lg p-4 rounded-5 mt-4">
                <div class="col-6 d-flex">
                    <img src="https://asset-2.tstatic.net/palembang/foto/bank/images/Spesifikasi-Italjet-200-CC.jpg" class="img-fluid img mx-auto my-auto rounded-3" alt="...">
                </div>
                <div class="col-6 mt-card lh-lg text-justify">
                    <h4>Konsultasi Modifikasi Motor</h4>
                    <p>Untuk para penggemar modifikasi motor, kami menawarkan layanan konsultasi modifikasi di mana anggota dapat berdiskusi dan mendapatkan ide serta saran dari ahli modifikasi dalam komunitas kami. Kami juga membantu dalam merekomendasikan bengkel dan penyedia suku cadang yang terpercaya.</p>
                </div>
            </div>
        </a>

        <a href="add_data.php" class="add-data">
            <div class="row mx-auto shadow-lg p-4 rounded-5 mt-4">
                <div class="col-6 d-flex">
                    <img src="https://smkndander-bjn.sch.id/wp-content/uploads/2021/07/IMG_2645-scaled.jpg" class="img-fluid img mx-auto my-auto rounded-3" alt="...">
                </div>
                <div class="col-6 mt-card lh-lg text-justify">
                    <h4>Workshop dan Diskusi Teknis</h4>
                    <p>Kami secara berkala mengadakan workshop teknis yang meliputi perawatan motor, penggantian suku cadang, hingga modifikasi mesin dan estetika motor. Workshop ini bertujuan untuk meningkatkan pengetahuan anggota seputar perawatan dan peningkatan performa motor mereka.</p>
                </div>
            </div>
        </a>

        <a href="add_data.php" class="add-data">
            <div class="row mx-auto shadow-lg p-4 rounded-5 mt-4">
                <div class="col-6 d-flex">
                    <img src="https://deepend.id/themedia/2024/02/Spare-Parts-Suzuki-di-IIMS-2024-4.jpg" class="img-fluid img mx-auto my-auto rounded-3" alt="...">
                </div>
                <div class="col-6 mt-card lh-lg text-justify">
                    <h4>Merchandise dan Aksesori Motor</h4>
                    <p>Kami menyediakan berbagai merchandise eksklusif club motor seperti kaos, jaket, helm, hingga aksesori motor. Produk ini dibuat dengan desain yang unik dan kualitas premium, yang menggambarkan identitas dari Moto09.</p>
                </div>
            </div>
        </a>

        <a href="add_data.php" class="add-data">
            <div class="row mx-auto shadow-lg p-4 rounded-5 mt-4">
                <div class="col-6 d-flex">
                    <img src="https://global.yamaha-motor.com/showroom/event/2014-bangkok-international-motorshow/img/001.jpg" class="img-fluid img mx-auto my-auto rounded-3" alt="...">
                </div>
                <div class="col-6 mt-card lh-lg text-justify">
                    <h4>Jasa Pembuatan Event Otomotif</h4>
                    <p>Dengan pengalaman kami dalam mengelola event motor, kami juga membuka layanan jasa pembuatan event otomotif untuk kalangan komunitas, perusahaan, atau pihak lain yang ingin menyelenggarakan acara yang berkaitan dengan dunia otomotif, seperti pameran motor, rally, atau peluncuran produk motor.</p>
                </div>
            </div>
        </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>