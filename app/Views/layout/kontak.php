<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PKK - Kelurahan Olo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #f8f9fa;
        }

        /* =========================
   NAVBAR
========================= */

        .navbar {
            transition: .3s;
            z-index: 999;
        }

        .navbar .nav-link {
            font-weight: 600;
            color: #ffffff !important;
            margin-left: 10px;
            transition: .3s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #ffffff !important;
        }

        .navbar-brand img {
            height: 55px;
        }

        /* =========================
   HEADER
========================= */

        .bg-breadcrumb {
            padding: 130px 0 90px;
            position: relative;
        }

        .bg-breadcrumb h4 {
            font-weight: 700;
        }

        /* =========================
   SECTION
========================= */

        .kontak-section {
            position: relative;
        }

        .section-title h2 {
            font-weight: 700;
            margin-bottom: 15px;
            color: #222;
        }

        .section-title p {
            color: #6c757d;
            max-width: 700px;
            margin: auto;
            line-height: 1.8;
        }

        /* =========================
   CARD
========================= */

        .kontak-card {
            background: #fff;
            border-radius: 22px;
            transition: .35s ease;
            overflow: hidden;
        }

        .kontak-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.08);
        }

        /* =========================
   CONTACT ITEM
========================= */

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 22px;
            background: #f8f9fa;
            border-radius: 18px;
            height: 100%;
            transition: .3s;
        }

        .contact-item:hover {
            background: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
        }

        /* =========================
   ICON
========================= */

        .icon-box {
            width: 60px;
            height: 60px;
            min-width: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: white;
        }

        /* =========================
   TEXT
========================= */

        .contact-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 6px;
            color: #222;
        }

        .contact-text {
            font-size: 14px;
            line-height: 1.8;
            color: #6c757d;
        }

        .contact-text a {
            text-decoration: none;
            color: #0d6efd;
            font-weight: 600;
            transition: .3s;
        }

        .contact-text a:hover {
            color: #0a58ca;
        }

        /* =========================
   QUICK CARD
========================= */

        .quick-card {
            padding: 50px 35px;
        }

        .quick-icon {
            width: 110px;
            height: 110px;
            margin: auto;
            border-radius: 50%;
            background: rgba(25, 135, 84, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
        }

        .quick-icon i {
            font-size: 55px;
            color: #198754;
        }

        /* =========================
   BUTTON
========================= */

        .quick-btn {
            border-radius: 50px;
            font-weight: 600;
            padding: 14px;
            transition: .3s;
        }

        .quick-btn:hover {
            transform: translateY(-3px);
        }

        /* =========================
   FOOTER
========================= */

        .footer {
            background: #111;
            color: #fff;
            padding: 20px 0;
        }

        /* =========================
   RESPONSIVE
========================= */

        @media (max-width: 768px) {

            .bg-breadcrumb {
                padding: 110px 0 70px;
            }

            .quick-card {
                padding: 35px 25px;
            }

            .contact-item {
                padding: 18px;
            }

        }

        /* Instagram */
        .bg-instagram {
            background: linear-gradient(135deg,
                    #feda75,
                    #fa7e1e,
                    #d62976,
                    #962fbf,
                    #4f5bd5);
            color: white;
        }

        /* TikTok */
        .bg-tiktok {
            background: linear-gradient(135deg,
                    #25F4EE 0%,
                    #000000 45%,
                    #000000 55%,
                    #FE2C55 100%);
            color: white;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
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
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
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
                    <a href="<?= base_url('kontak') ?>" class="nav-item nav-link active">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- HEADER -->
        <div class="container-fluid bg-breadcrumb"
            style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url('<?= base_url() ?>/assets/img/slide1.png') center center/cover no-repeat;">

            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak Kelurahan Olo</h4>
            </div>

        </div>
    </div>


    <!-- =========================
     SECTION KONTAK
========================= -->
    <div class="container-fluid py-5 kontak-section">
        <div class="container">

            <!-- TITLE -->
            <div class="section-title text-center mb-5">
                <h2>Hubungi Kami</h2>
                <p>
                    Silakan hubungi pihak Kelurahan Olo untuk memperoleh informasi,
                    pelayanan administrasi, maupun konsultasi terkait kegiatan masyarakat.
                </p>
            </div>

            <div class="row g-4 align-items-stretch">

                <!-- =========================
                 INFORMASI KONTAK
            ========================= -->
                <div class="col-lg-7">

                    <div class="kontak-card shadow-sm border-0 p-4 h-100">

                        <h4 class="fw-bold mb-4">
                            Informasi Kontak
                        </h4>

                        <div class="row g-4">

                            <!-- ALAMAT -->
                            <div class="col-md-6">

                                <div class="contact-item">

                                    <div class="icon-box bg-primary">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>

                                    <div>
                                        <div class="contact-title">
                                            Alamat
                                        </div>

                                        <div class="contact-text">
                                            Jl. Pemuda No.28B,
                                            Olo, Padang Barat,
                                            Kota Padang
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- JAM LAYANAN -->
                            <div class="col-md-6">

                                <div class="contact-item">

                                    <div class="icon-box bg-warning">
                                        <i class="fas fa-clock"></i>
                                    </div>

                                    <div>
                                        <div class="contact-title">
                                            Jam Layanan
                                        </div>

                                        <div class="contact-text">
                                            Senin - Kamis :
                                            07.30 - 16.00
                                            <br>
                                            Jumat :
                                            07.30 - 16.30
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6">

                                <div class="contact-item">

                                    <div class="icon-box bg-danger">
                                        <i class="fas fa-envelope"></i>
                                    </div>

                                    <div>
                                        <div class="contact-title">
                                            Email
                                        </div>

                                        <div class="contact-text">
                                            olopadangbarat@gmail.com
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- WHATSAPP -->
                            <div class="col-md-6">

                                <div class="contact-item">

                                    <div class="icon-box bg-success">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>

                                    <div>
                                        <div class="contact-title">
                                            WhatsApp
                                        </div>

                                        <div class="contact-text">

                                            <a href="https://wa.me/6282286217712" target="_blank">
                                                0822-8621-7712
                                            </a>

                                            <br>

                                            <a href="https://wa.me/6282284504704" target="_blank">
                                                0822-8450-4704
                                            </a>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- INSTAGRAM -->
                            <div class="col-md-6">

                                <div class="contact-item">

                                    <div class="icon-box bg-instagram">
                                        <i class="fab fa-instagram"></i>
                                    </div>

                                    <div>
                                        <div class="contact-title">
                                            Instagram
                                        </div>

                                        <div class="contact-text">

                                            <a href="https://www.instagram.com/olo.padangbarat/" target="_blank">
                                                @olo.padangbarat
                                            </a>

                                            <br>

                                            <a href="https://www.instagram.com/pkk_olo/" target="_blank">
                                                @pkk_olo
                                            </a>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- TIKTOK -->
                            <div class="col-md-6">

                                <div class="contact-item">

                                    <div class="icon-box bg-tiktok">
                                        <i class="fab fa-tiktok"></i>
                                    </div>

                                    <div>
                                        <div class="contact-title">
                                            TikTok
                                        </div>

                                        <div class="contact-text">

                                            <a href="https://www.tiktok.com/@tppkkkelurahanolo8?_r=1&_t=ZS-96SH4SWxB2n"
                                                target="_blank">

                                                @tppkkkelurahanolo8

                                            </a>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- =========================
                 QUICK CONTACT
            ========================= -->
                <div class="col-lg-5">

                    <div class="kontak-card quick-card shadow-sm border-0 text-center h-100 d-flex flex-column justify-content-center">

                        <div class="quick-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>

                        <h3 class="fw-bold mb-3">
                            Butuh Respon Cepat?
                        </h3>

                        <p class="text-muted mb-4" style="line-height: 1.8;">
                            Hubungi kami secara langsung melalui WhatsApp
                            atau kunjungi Instagram resmi Kelurahan Olo.
                        </p>

                        <a href="https://wa.me/6282286217712"
                            target="_blank"
                            class="btn btn-success quick-btn mb-3">

                            <i class="fab fa-whatsapp me-2"></i>
                            Chat WhatsApp

                        </a>

                        <a href="https://www.instagram.com/olo.padangbarat/"
                            target="_blank"
                            class="btn btn-dark quick-btn">

                            <i class="fab fa-instagram me-2"></i>
                            Kunjungi Instagram

                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>


    <!-- FOOTER -->
    <div class="container-fluid bg-dark text-white text-center py-3">
        <p class="mb-0">© 2026 Kelurahan Olo</p>
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>