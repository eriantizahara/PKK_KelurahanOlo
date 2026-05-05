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
        }

        .kontak-card {
            border-radius: 16px;
            transition: 0.3s;
        }

        .kontak-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quick-btn {
            width: 100%;
            font-weight: 600;
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
            url('<?= base_url() ?>/assets/img/15.png') center center/cover no-repeat;">

            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak Kelurahan Olo</h4>
            </div>

        </div>
    </div>


    <!-- KONTAK -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">Hubungi Kami</h2>
                <p class="text-muted">Silakan hubungi kami untuk informasi dan pelayanan</p>
            </div>

            <div class="row g-4">

                <!-- INFO -->
                <div class="col-lg-7">
                    <div class="card kontak-card p-4 border-0 shadow-sm h-100">

                        <h4 class="fw-bold mb-4">Informasi Kontak</h4>

                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="icon-box bg-primary text-white me-3 d-flex justify-content-center align-items-center"
                                        style="width:65px; height:55px; border-radius:10px;">
                                        <i class="fas fa-map-marker-alt" style="font-size:22px;"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold">Alamat</h6>
                                        <small class="text-muted">
                                            Jl. Pemuda No.28B, Olo, Padang Barat, Kota Padang
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="icon-box bg-warning text-white me-3 d-flex justify-content-center align-items-center"
                                        style="width:45; height:55px; border-radius:10px;">
                                        <i class="fas fa-clock" style="font-size:22px;"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold">Jam Layanan</h6>
                                        <small class="text-muted">
                                            Senin - Kamis: 07.30 - 16.00 <br>
                                            Jumat: 07.30 - 16.30
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="icon-box bg-danger text-white me-3 d-flex justify-content-center align-items-center"
                                        style="width:50px; height:55px; border-radius:10px;">
                                        <i class="fas fa-envelope" style="font-size:22px;"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold">Email</h6>
                                        <small class="text-muted">kelurahanolo@email.com</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="icon-box bg-success text-white me-3 d-flex justify-content-center align-items-center"
                                        style="width:50px; height:55px; border-radius:10px;">
                                        <i class="fab fa-whatsapp" style="font-size:22px;"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold">WhatsApp</h6>
                                        <a href="https://wa.me/6281234567890" class="fw-semibold">
                                            0812-3456-7890
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="icon-box bg-dark text-white me-3 d-flex justify-content-center align-items-center"
                                        style="width:50px; height:55px; border-radius:10px;">
                                        <i class="fab fa-instagram" style="font-size:22px;"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold">Instagram</h6>
                                        <a href="https://www.instagram.com/olo.padangbarat/" target="_blank">
                                            @olo.padangbarat
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- QUICK -->
                <div class="col-lg-5">
                    <div class="card kontak-card p-4 border-0 shadow-sm text-center h-100">

                        <h4 class="fw-bold mb-3">Butuh Respon Cepat?</h4>
                        <p class="text-muted mb-4">
                            Hubungi kami langsung melalui WhatsApp atau kunjungi Instagram kami.
                        </p>

                        <a href="https://wa.me/6281234567890"
                            class="btn btn-success rounded-pill py-3 mb-3 quick-btn">
                            <i class="fab fa-whatsapp me-2"></i> Chat WhatsApp
                        </a>

                        <a href="https://www.instagram.com/olo.padangbarat/"
                            class="btn btn-dark rounded-pill py-3 quick-btn">
                            <i class="fab fa-instagram me-2"></i> Instagram
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