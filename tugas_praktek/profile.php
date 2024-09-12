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
                        <a class="nav-link active" aria-current="page" href="profile.php">Profil</a>
                        <a class="nav-link text-nav" href="product.php">Produk</a>
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
        <h3>Profil</h3>
        <p class="mt-2">
            Moto09 adalah komunitas otomotif yang didirikan pada tahun 2024 oleh sekelompok penggemar motor dengan visi membangun sebuah komunitas yang solid dan berdedikasi. Kami bergerak di bidang otomotif, dengan fokus pada pengembangan hobi berkendara, pelatihan keselamatan berkendara, serta kegiatan sosial yang mengedepankan semangat persaudaraan. Dengan ratusan anggota yang tersebar di berbagai kota di seluruh Indonesia, kami bangga menjadi salah satu club motor yang aktif dan diakui di kalangan komunitas otomotif nasional.
        </p>
        <h3 class="mt-5">Pengalaman Perusahaan</h3>
        <ul>
            <div>
                <li>Touring Nasional dan Internasional</li>
                <p>Kami telah mengadakan touring ke berbagai wilayah di Indonesia, bahkan beberapa kali melakukan perjalanan lintas negara bersama dengan anggota. Touring ini dirancang untuk meningkatkan semangat kebersamaan dan mengasah keterampilan berkendara.</p>
            </div>
            <div>
                <li>Event Gathering dan Kontes Modifikasi</li>
                <p>Kami rutin mengadakan gathering tahunan, di mana para anggota dan komunitas lain dapat berkumpul, saling bertukar informasi, serta mengikuti kontes modifikasi motor.</p>
            </div>
            <div>
                <li>Kegiatan Sosial</li>
                <p>Sebagai bagian dari tanggung jawab sosial, kami juga berpartisipasi dalam berbagai kegiatan amal, bakti sosial, dan donasi untuk masyarakat yang membutuhkan. Kami percaya bahwa sebagai komunitas, kami dapat memberikan dampak positif bagi lingkungan sekitar.
                </p>
            </div>
            <div>
                <li>Kolaborasi dengan Brand Otomotif</li>
                <p>Kami telah bekerja sama dengan beberapa perusahaan otomotif ternama dalam penyelenggaraan event dan promosi produk, yang memperkuat reputasi dan posisi kami di dunia otomotif.</p>
            </div>
        </ul>
        <h3 class="mt-5">Kelebihan</h3>
        <ul>
            <div>
                <li>Komunitas yang Solid dan Terorganisir</li>
                <p>Kami bangga memiliki anggota yang aktif, beragam, dan solid. Setiap anggota berperan penting dalam menjaga keharmonisan serta memperkuat ikatan persaudaraan dalam club.</p>
            </div>
            <div>
                <li>Pengalaman dan Jaringan Luas di Dunia Otomotif</li>
                <p>Dengan pengalaman bertahun-tahun, kami memiliki jaringan yang luas dengan berbagai komunitas motor, bengkel, dan perusahaan otomotif. Hal ini memungkinkan kami untuk selalu menghadirkan kegiatan dan event yang menarik serta relevan bagi anggota.</p>
            </div>
            <div>
                <li>Fokus pada Keselamatan Berkendara</li>
                <p>Kami selalu mengutamakan keselamatan dalam setiap kegiatan yang dilakukan. Edukasi tentang keselamatan berkendara menjadi salah satu program utama kami, sehingga para anggota dapat berkendara dengan aman dan bertanggung jawab.</p>
            </div>
            <div>
                <li>Kegiatan yang Beragam dan Berkualitas</li>
                <p>Dari touring, workshop, hingga kontes modifikasi, kami menyediakan berbagai kegiatan menarik yang mengakomodasi minat dan hobi para anggota, baik di bidang otomotif maupun sosial.
                    5. **Dukungan Teknis dan Edukasi:** Selain kegiatan sosial dan touring, kami juga memberikan dukungan dalam hal perawatan motor, modifikasi, dan keterampilan berkendara. Hal ini membuat kami tidak hanya sekadar club motor, tetapi juga komunitas edukatif bagi para penggemar otomotif.</p>
            </div>
        </ul>
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