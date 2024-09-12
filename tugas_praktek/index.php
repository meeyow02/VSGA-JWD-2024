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
                <h3 class="font-logo">Moto<span class="text-red">09</span>
                </h3>
            </a>
        </div>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="mx-auto">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav gap-5">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        <a class="nav-link text-nav" href="about-us.php">Tentang Kami</a>
                        <a class="nav-link text-nav" href="visi-misi.php">Visi & Misi</a>
                        <a class="nav-link text-nav" href="profile.php">Profil</a>
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

    <!-- CAROUSEL -->
    <div id="carouselExampleSlidesOnly" class="carousel slide margin-top-img" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay"></div>
                <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/01/12/motor-baru-honda-2022-giorno-1j-20220112020705.jpg" class="d-flex mx-auto img-hero" alt="...">
            </div>
            <div class="carousel-item">
                <div class="overlay"></div>
                <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/f7a88ff9afd2dc3b24d7c9019a8160f837250065a151ff22e528cf5fcf4b74b0.jpg" class="d-flex mx-auto img-hero" alt="...">
            </div>
            <div class="carousel-item">
                <div class="overlay"></div>
                <img src="https://www.pinhome.id/blog/wp-content/uploads/2023/12/lBM1MVfU7jXM-xqk2YbbnlP9TE6DMNLa_IdmEk6jByxF_yJ2eQlizU7kTbr5WlLnV7-PFslNp6vsjjri94ccTfS9UOKY4p7Z8NBZumrsAfagQ4ep2MOtZV2Y5tiihCYntZJeM4FT.jpeg" class="d-flex mx-auto img-hero" alt="...">
            </div>
        </div>
        <div class="overlay">
            <h1 class="text-white"><span class="font-logo">Moto</span><span class="text-red font-logo">09</span> <span>Club</span></h1>
            <p class="fs-4">Gabung Bersama Kami!</p>
        </div>
    </div>

    <!-- ABOUT US -->
    <div class="container mt-5">
        <h3 id="aboutUs" class="text-uppercase">Tentang kami</h3>
        <hr>
        <div class="row mx-auto">
            <div class="col-7 d-flex">
                <img src="https://www.olx.co.id/news/wp-content/uploads/2022/05/Touring-sepeda-motor-shutterstock_351191717.jpg" class="img-fluid img mx-auto my-auto rounded-3" alt="...">
            </div>
            <div class="col-5 mt-about lh-lg text-justify">
                <p>Moto09 adalah komunitas otomotif yang didirikan pada tahun 2024 dengan tujuan menyatukan para pecinta sepeda motor dari berbagai kalangan. Sejak awal, kami berkomitmen untuk menjadi tempat di mana para anggota dapat berbagi minat yang sama terhadap dunia sepeda motor dan berbagi pengalaman di jalan raya.</p>
                <p>Sejarah kami dimulai dari sekelompok kecil penggemar motor yang memiliki hasrat untuk mengeksplorasi jalanan dengan semangat kebersamaan dan persaudaraan. Melalui kegiatan touring, gathering, hingga bakti sosial, kami terus berkembang menjadi komunitas yang lebih besar, dengan ratusan anggota yang tersebar di berbagai kota di seluruh Indonesia.</p>
                <a href="about-us.php">
                    <button type="button" class="btn btn-outline-light">View All
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- PRODUCT -->
    <div class="container mt-5">
        <h3 id="product" class="text-uppercase">Produk / Jasa</h3>
        <hr>
        <div class="row">
            <div class="col-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="https://i0.wp.com/blog.eigeradventure.com/wp-content/uploads/2022/08/0J7A0846-1.jpg?resize=696%2C516&ssl=1" class="card-img" alt="...">
                    <div class="mask d-flex">
                        <h6 class="text-white mx-auto my-auto">Touring dan Event Berkendara</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="https://jurnal.politeknik-kebumen.ac.id/public/journals/32/article_368_cover_en_US.jpg" class="card-img" alt="...">
                    <div class="mask d-flex">
                        <h6 class="text-white mx-auto my-auto">Pelatihan dan Edukasi Keselamatan Berkendara</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="https://www.modifikasi.co.id/wp-content/uploads/2015/11/Modifikasi-Motor-Vintage-Concept.jpg" class="card-img" alt="...">
                    <div class="mask d-flex">
                        <h6 class="text-white mx-auto my-auto">Konsultasi Modifikasi Motor</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="https://oto.iti.ac.id/wp-content/uploads/2021/03/51-1-1170x750.jpg" class="card-img" alt="...">
                    <div class="mask d-flex">
                        <h6 class="text-white mx-auto my-auto">Workshop dan Diskusi Teknis</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="https://carnetwork.s3.ap-southeast-1.amazonaws.com/file/ae30c1cb66bc4c60b00b0fe8fac054a0.jpg" class="card-img" alt="...">
                    <div class="mask d-flex">
                        <h6 class="text-white mx-auto my-auto">Merchandise dan Aksesori Motor</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2022/11/02/tumpah-ruah-pengunjung-di-imos-2022-7.jpeg?w=600&q=90" class="card-img" alt="...">
                    <div class="mask d-flex">
                        <h6 class="text-white mx-auto my-auto">Jasa Pembuatan Event Otomotif</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GALLERY -->
    <div class="container mt-5">
        <h3 id="gallery" class="text-uppercase">Galeri Foto</h3>
        <hr>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://asset-2.tstatic.net/wartakota/foto/bank/images/booth-astra-honda-motor-di-imos-2022-jcc-senayan.jpg" class="d-block w-100 img-slide" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://s3.ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2020/04/17215648/kursus-mekanik-motor_4.jpg" class="d-block w-100 img-slide" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://akcdn.detik.net.id/visual/2021/02/22/adv-ahm_169.jpeg?w=800&q=90" class="d-block w-100 img-slide" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- MITRA/CLIENT -->
    <div class="container mt-5 mb-5">
        <h3 id="client" class="text-uppercase text-center">Dipercaya Oleh</h3>
        <hr>
        <div class="d-flex">
            <div class="row gap-4 mx-auto">
                <img src="https://i.pinimg.com/originals/25/a6/6a/25a66a451a9a26fcbe9c3b7cff9308fd.png" class="img-logo" alt="">
                <img src="https://logos-world.net/wp-content/uploads/2020/10/Yamaha-Logo.png" class="img-logo" alt="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMX76Db_7AIRrbyPOCOvm77zaSklJgGnok7w&s" class="img-logo" alt="">
                <img src="https://i.pinimg.com/originals/eb/79/8a/eb798a00decfb0bb884f2dc8a7e12280.jpg" class="img-logo" alt="">
                <img src="https://bursakerjadepnaker.com/wp-content/uploads/logo-shell-indonesia.jpg" class="img-logo" alt="">
                <img src="https://assets.promediateknologi.id/crop/0x121:768x664/750x500/webp/photo/2022/02/09/617204399.jpg" class="img-logo" alt="">
                <img src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/8ef09e5d16b7181ec5d9099c34561578.png" class="img-logo" alt="">
                <img src="https://yt3.googleusercontent.com/HE-2afKDLDNLZBBM6sTmG90eX-NCUtw7EVmz-2OA9Zbjict2A0wZT69OFak-WdoUxQ2gCkgYvoA=s900-c-k-c0x00ffffff-no-rj" class="img-logo" alt="">
            </div>
        </div>
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