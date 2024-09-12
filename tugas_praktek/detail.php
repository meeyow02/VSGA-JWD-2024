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
                        <a class="nav-link text-nav" href="product.php">Produk</a>
                        <a class="nav-link text-nav" href="contact.php">Kontak Kami</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Aktivitas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="gallery.php">Galeri Foto</a></li>
                                <li><a class="dropdown-item  active" aria-current="page" href="article.php">Artikel</a></li>
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
        <h3 class="mb-4">Menjelajahi Dunia Otomotif Bersama Moto09</h3>
        <div class="d-flex">
            <img src="https://awsimages.detik.net.id/community/media/visual/2022/12/11/mario-iroth_169.png?w=600&q=90" class="mx-auto rounded-3" alt="">
        </div>
        <h4 class="mt-5">Mengapa Bergabung dengan Club Motor?</h4>
        <p>Bergabung dengan Moto09 tidak hanya memberikan Anda kesempatan untuk menikmati hobi berkendara, tetapi juga untuk menjadi bagian dari komunitas yang solid dan penuh semangat. Kami adalah tempat di mana para penggemar sepeda motor dari berbagai latar belakang dapat berkumpul, berbagi pengalaman, dan menjalani petualangan bersama. Berikut adalah beberapa alasan mengapa bergabung dengan kami adalah pilihan yang tepat:</p>
        <ol>
            <div>
                <li>Kesempatan untuk Berpetualang</li>
                <p>Kami rutin mengadakan kegiatan touring ke berbagai rute menarik baik di dalam negeri maupun lintas negara. Setiap perjalanan dirancang untuk memberikan pengalaman berkendara yang tak terlupakan sambil mengeksplorasi keindahan alam dan budaya lokal. Bergabung dengan kami berarti Anda akan memiliki banyak kesempatan untuk menjelajahi tempat-tempat baru dan merasakan adrenalin di jalan.</p>
            </div>
            <div>
                <li>Edukasi dan Pelatihan Berkendara</li>
                <p>Keselamatan berkendara adalah prioritas kami. Kami menyediakan pelatihan dan workshop tentang teknik berkendara yang aman, perawatan motor, dan modifikasi. Dengan panduan dari para ahli, Anda dapat meningkatkan keterampilan berkendara dan memastikan motor Anda selalu dalam kondisi terbaik.</p>
            </div>
            <div>
                <li>Kegiatan Sosial dan Bakti Sosial</li>
                <p>Sebagai bagian dari tanggung jawab sosial, kami aktif dalam berbagai kegiatan amal dan bakti sosial. Kami percaya bahwa komunitas yang kuat juga berperan dalam memberikan dampak positif bagi masyarakat. Bergabung dengan kami berarti Anda turut berkontribusi dalam kegiatan yang bermanfaat dan memperkuat ikatan sosial di lingkungan sekitar.</p>
            </div>
            <div>
                <li>Akses ke Event Eksklusif</li>
                <p>Anggota kami mendapatkan akses khusus ke berbagai event otomotif, kontes modifikasi, dan gathering yang kami selenggarakan. Ini adalah kesempatan untuk bertemu dengan penggemar motor lain, belajar dari para ahli, dan menunjukkan kreativitas Anda dalam modifikasi motor.</p>
            </div>
            <div>
                <li>Dukungan dari Komunitas</li>
                <p>Menjadi bagian dari Moto09 berarti Anda akan mendapatkan dukungan penuh dari komunitas yang peduli. Baik dalam hal teknis, saran modifikasi, atau sekadar berbagi cerita, anggota kami selalu siap membantu dan memberikan dukungan.</p>
            </div>
        </ol>
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