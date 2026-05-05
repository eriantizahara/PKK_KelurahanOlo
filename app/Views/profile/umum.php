<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PKK - Kelurahan Olo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
        }

        .section-title {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
        }

        .icon-modern {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            background: linear-gradient(135deg, #0d6efd, #4dabf7);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .stat-box {
            background: linear-gradient(135deg, #0d6efd, #3b82f6);
            color: white;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(13, 110, 253, 0.3);
        }

        .stat-box h2 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .soft-list li {
            margin-bottom: 6px;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <!-- <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>Acuas</h1> -->
                <a href="" class="navbar-brand p-0 d-flex align-items-center">
                    <img src="<?= base_url() ?>/assets/img/logopemko.png" alt="Logo" class="me-2">
                    <img src="<?= base_url() ?>/assets/img/logo.png" alt="Logo">
                </a>
                <!-- <h1 style="color: aquamarine;">PKK Kelurahan Olo</h1> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0" style="margin-right: 20px;">
                    <a href="/" class="nav-item nav-link ">Beranda</a>
                    <div class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url('profile/umum') ?>" class="dropdown-item">Monografi</a>
                            <a href="<?= base_url('profile/visi-misi') ?>" class="dropdown-item">Visi dan Misi</a>
                            <a href="<?= base_url('profile/struktur') ?>" class="dropdown-item">Struktur Organisasi</a>
                        </div>
                    </div>
                    <a href="<?= base_url('layanan') ?>" class="nav-item nav-link">Pelayanan</a>
                    <!-- <a href="blog.html" class="nav-item nav-link">Berita</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PKK</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url('pkk/profile') ?>" class="dropdown-item">Profile TP PKK</a>
                            <a href="<?= base_url('pkk/visi-misi') ?>" class="dropdown-item">Visi dan Misi</a>
                            <a href="<?= base_url('pkk/struktur-organisasi') ?>" class="dropdown-item">Struktur Organisasi</a>
                            <a href="<?= base_url('pkk/pokja1') ?>" class="dropdown-item">POKJA I</a>
                            <a href="<?= base_url('pkk/pokja2') ?>" class="dropdown-item">POKJA II</a>
                            <a href="<?= base_url('pkk/pokja3') ?>" class="dropdown-item">POKJA III</a>
                            <a href="<?= base_url('pkk/pokja4') ?>" class="dropdown-item">POKJA IV</a>
                        </div>
                    </div>
                    <a href="<?= base_url('kontak') ?>" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Profile</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Beranda</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-primary">Monografi</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="<?= base_url() ?>/assets/img/peta.jpeg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                        <!-- <div class="about-exp"><span>20 Years Experiance</span></div> -->
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Monografi</h4>
                        <h1 class="display-3 mb-3">Kelurahan Olo</h1>
                        <p class="mb-4">Kelurahan merupakan wilayah kerja Lurah sebagai bagian dari perangkat kecamatan yang berada di wilayah Kota/Kabupaten. Keberadaan Pemerintah Kelurahan sebagai salah satu organisasi publik dituntut selalu memberikan pelayanan yang sebaik-baiknya kepada masyarakat disamping melaksanakan tugas-tugas pemerintahan, pembangunan dan kemasyarakatan di wilayah Kelurahan.
                        </p>
                        <div class="bg-light rounded p-4 mb-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-users text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Jumlah Penduduk</a>
                                            <p class="mb-0">4.312 jiwa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4 mb-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-map text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Geografis Wilayah</a>
                                            <p class="mb-0">Ditinjau secara geografis wilayah Kelurahan Olo terletak anatara 100-22°10 bujur timur dan 0,21°10° lintang Selatan yang mempunyai ketinggian 1,5 M diatas permukaan laut</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container py-5">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="section-title">Monografi Kelurahan Olo</h1>
            <p class="text-muted">Informasi wilayah, penduduk, dan sarana prasarana</p>
        </div>

        <!-- DATA UMUM + PETA -->
        <div class="row g-4 mb-5">

            <div class="col-lg-6">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-modern me-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="mb-0">Data Umum</h4>
                    </div>

                    <p>Kelurahan Olo memiliki luas ± 0,89 Ha dengan batas wilayah:</p>

                    <ul class="soft-list">
                        <li>Utara : Kelurahan Purus</li>
                        <li>Selatan : Kelurahan Belakang Tangsi</li>
                        <li>Barat : Samudera Hindia</li>
                        <li>Timur : Kelurahan Kampung Jao</li>
                    </ul>

                    <p class="mt-3 text-muted">
                        Koordinat: 100°22'10" BT & 0°21'10" LS <br>
                        Suhu: 25,2 – 27,4°C
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-modern mx-auto mb-3">
                        <i class="fas fa-map"></i>
                    </div>
                    <h4>Lokasi Kelurahan Olo</h4>

                    <div class="rounded overflow-hidden mt-3" style="height: 300px;">
                        <iframe
                            width="100%"
                            height="100%"
                            style="border:0;"
                            loading="lazy"
                            allowfullscreen
                            src="https://maps.google.com/maps?q=-0.9497,100.3531&z=15&output=embed">
                        </iframe>
                    </div>

                    <p class="mt-2 text-muted small">
                        Sekitar wilayah Plaza Andalas, Kota Padang
                    </p>
                </div>
            </div>

        </div>

        <!-- STATISTIK PENDUDUK -->
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="stat-box">
                    <h2 data-toggle="counter-up">4312</h2>
                    <p>Total Penduduk</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <h2>2230</h2>
                    <p>Laki-laki</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <h2>2082</h2>
                    <p>Perempuan</p>
                </div>
            </div>
        </div>

        <!-- DATA PENDUDUK -->
        <div class="glass-card p-4 mb-5">
            <h4 class="mb-3">Data Penduduk</h4>

            <div class="table-responsive">
                <table class="table table-borderless text-center">
                    <thead class="bg-light">
                        <tr>
                            <th>Tahun</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023</td>
                            <td>2200</td>
                            <td>2077</td>
                            <td>4277</td>
                        </tr>
                        <tr>
                            <td>2025</td>
                            <td>2230</td>
                            <td>2082</td>
                            <td>4312</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- UMUR -->
            <h5 class="mt-4">Kelompok Umur (2025)</h5>
            <div class="row">
                <div class="col-md-6">
                    <ul class="soft-list">
                        <li>0-4 : 235</li>
                        <li>5-9 : 316</li>
                        <li>10-14 : 291</li>
                        <li>15-19 : 299</li>
                        <li>20-24 : 311</li>
                        <li>25-29 : 324</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="soft-list">
                        <li>30-34 : 311</li>
                        <li>35-39 : 317</li>
                        <li>40-44 : 262</li>
                        <li>45-49 : 270</li>
                        <li>50-54 : 283</li>
                        <li>>60 : 793</li>
                    </ul>
                </div>
            </div>

            <!-- AGAMA -->
            <h5 class="mt-4">Agama</h5>
            <div class="row text-center">
                <div class="col-md-3">Islam<br><b>4.180</b></div>
                <div class="col-md-3">Kristen<br><b>22</b></div>
                <div class="col-md-3">Katholik<br><b>51</b></div>
                <div class="col-md-3">Budha<br><b>22</b></div>
            </div>

        </div>

        <!-- SARANA -->
        <div class="glass-card p-4">
            <h4 class="mb-4">Sarana & Prasarana</h4>

            <div class="row g-4 text-center">

                <div class="col-md-3">
                    <div class="p-3">
                        <i class="fas fa-school fa-2x text-primary mb-2"></i>
                        <h6>Pendidikan</h6>
                        <p class="text-muted small">PAUD, TK, SD, SMP, SMA</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3">
                        <i class="fas fa-hospital fa-2x text-primary mb-2"></i>
                        <h6>Kesehatan</h6>
                        <p class="text-muted small">Klinik, Dokter, 9 Posyandu</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3">
                        <i class="fas fa-mosque fa-2x text-primary mb-2"></i>
                        <h6>Ibadah</h6>
                        <p class="text-muted small">5 Masjid</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3">
                        <i class="fas fa-futbol fa-2x text-primary mb-2"></i>
                        <h6>Olahraga</h6>
                        <p class="text-muted small">PB Samudera</p>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <!-- Footer Start -->
    <!-- ✅ FOOTER -->
    <div class="container-fluid bg-dark text-white text-center p-3">
        <p class="mb-0">© 2026 PKK Kelurahan Olo</p>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/assets/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
</body>

</html>