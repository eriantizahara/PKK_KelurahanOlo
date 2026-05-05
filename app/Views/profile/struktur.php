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
        .org-container {
            text-align: center;
        }

        .box {
            display: inline-block;
            padding: 15px 20px;
            border: 2px solid #0d6efd;
            border-radius: 10px;
            background: #fff;
            min-width: 220px;
            position: relative;
            transition: 0.3s;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .line-v {
            width: 2px;
            height: 40px;
            background: #0d6efd;
            margin: auto;
        }

        .line-h {
            height: 2px;
            background: #0d6efd;
            position: absolute;
        }

        /* layout */
        .row-flex {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .space {
            height: 40px;
        }

        .tupoksi-card {
            border-radius: 15px;
            transition: 0.3s;
        }

        .tupoksi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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
                            <a href="testimonial.html" class="dropdown-item">POKJA I</a>
                            <a href="testimonial.html" class="dropdown-item">POKJA II</a>
                            <a href="testimonial.html" class="dropdown-item">POKJA III</a>
                            <a href="testimonial.html" class="dropdown-item">POKJA IV</a>
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
                    <li class="breadcrumb-item active text-primary">Struktur Organisasi</li>
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


    <div class="container py-5 text-center">

        <h2 class="fw-bold mb-5">Struktur Organisasi Kelurahan Olo</h2>

        <div style="overflow-x:auto;">
            <svg viewBox="0 0 1000 560" width="100%" height="auto">

                <!-- STYLE -->
                <style>
                    .box {
                        fill: #ffffff;
                        stroke: #0d6efd;
                        stroke-width: 2;
                        rx: 12;
                    }

                    .title {
                        font-size: 14px;
                        font-weight: 600;
                        fill: #0d6efd;
                    }

                    .name {
                        font-size: 13px;
                        fill: #333;
                    }

                    .small {
                        font-size: 11px;
                        fill: #666;
                    }

                    .line {
                        stroke: #0d6efd;
                        stroke-width: 2;
                    }
                </style>

                <!-- LURAH -->
                <rect class="box" x="400" y="10" width="220" height="70" />
                <text class="title" x="510" y="30" text-anchor="middle">Lurah</text>
                <text class="name" x="510" y="48" text-anchor="middle">AIDIL PUTRA, S.AP, M.M</text>
                <text class="small" x="510" y="65" text-anchor="middle">NIP. 19850628 201001 1 004</text>

                <!-- LINE -->
                <line class="line" x1="510" y1="80" x2="510" y2="120" />

                <!-- SEKRETARIS -->
                <rect class="box" x="400" y="120" width="220" height="70" />
                <text class="title" x="510" y="145" text-anchor="middle">Sekretaris</text>
                <text class="name" x="510" y="165" text-anchor="middle">-</text>

                <!-- LINE -->
                <line class="line" x1="510" y1="190" x2="510" y2="230" />

                <!-- GARIS UTAMA -->
                <line class="line" x1="200" y1="230" x2="820" y2="230" />

                <!-- PENGADMIN -->
                <line class="line" x1="200" y1="230" x2="200" y2="180" />
                <rect class="box" x="90" y="100" width="220" height="80" />
                <text class="title" x="200" y="120" text-anchor="middle">Pengadministrasi Umum</text>
                <text class="name" x="200" y="145" text-anchor="middle">PAPATRI WAHYUNINGSIH</text>
                <text class="small" x="200" y="165" text-anchor="middle">No. PPPK</text>
                <text class="small" x="200" y="178" text-anchor="middle">198506302025212029</text>

                <!-- LINE KE KASI -->
                <line class="line" x1="510" y1="230" x2="510" y2="280" />

                <!-- GARIS KASI -->
                <line class="line" x1="300" y1="280" x2="720" y2="280" />

                <!-- KASI 1 -->
                <line class="line" x1="300" y1="280" x2="300" y2="320" />
                <rect class="box" x="210" y="320" width="180" height="75" />
                <text class="name" x="300" y="345" text-anchor="middle">Kasi Tata Pemerintahan</text>
                <text class="small" x="300" y="365" text-anchor="middle">-</text>

                <!-- KASI 2 -->
                <line class="line" x1="510" y1="280" x2="510" y2="320" />
                <rect class="box" x="420" y="320" width="180" height="75" />
                <text class="name" x="510" y="340" text-anchor="middle">Kasi PM dan Kesos</text>
                <text class="name" x="510" y="360" text-anchor="middle">FIKA ROSIANA, A.Md</text>
                <text class="small" x="510" y="378" text-anchor="middle">NIP. 19901219 201502 2002</text>

                <!-- KASI 3 -->
                <line class="line" x1="720" y1="280" x2="720" y2="320" />
                <rect class="box" x="630" y="320" width="180" height="75" />
                <text class="name" x="720" y="340" text-anchor="middle">Kasi Trantib & PB</text>
                <text class="name" x="720" y="360" text-anchor="middle">DASRIL, SE</text>
                <text class="small" x="720" y="378" text-anchor="middle">NIP. 19690713 200604 1 002</text>

            </svg>
        </div>

    </div>
    <!-- Footer Start -->

    <!-- TUPOKSI START -->
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Tugas Pokok & Fungsi</h2>
            <p class="text-muted">Perangkat Kelurahan Olo</p>
        </div>

        <div class="row g-4">

            <!-- LURAH -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0 p-4 tupoksi-card">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-user-tie fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Lurah</h5>
                    <p class="text-muted">
                        Memimpin penyelenggaraan pemerintahan kelurahan,
                        pembinaan kemasyarakatan, serta pelayanan publik
                        sesuai dengan kewenangan yang diberikan oleh kecamatan.
                    </p>
                </div>
            </div>

            <!-- SEKRETARIS -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0 p-4 tupoksi-card">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-clipboard-list fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Sekretaris</h5>
                    <p class="text-muted">
                        Membantu lurah dalam pengelolaan administrasi,
                        perencanaan program, keuangan, serta koordinasi
                        antar perangkat kelurahan.
                    </p>
                </div>
            </div>

            <!-- PENGADMIN -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0 p-4 tupoksi-card">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-folder-open fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Pengadministrasi Umum</h5>
                    <p class="text-muted">
                        Melaksanakan pengelolaan administrasi umum,
                        surat-menyurat, arsip, serta pelayanan administrasi
                        kepada masyarakat.
                    </p>
                </div>
            </div>

            <!-- KASI PEMERINTAHAN -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0 p-4 tupoksi-card">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-landmark fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Kasi Tata Pemerintahan</h5>
                    <p class="text-muted">
                        Mengelola administrasi pemerintahan, data wilayah,
                        kependudukan, serta pembinaan RT/RW.
                    </p>
                </div>
            </div>

            <!-- KASI PM & KESOS -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0 p-4 tupoksi-card">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-hands-helping fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Kasi PM & Kesos</h5>
                    <p class="text-muted">
                        Menangani pemberdayaan masyarakat, kegiatan sosial,
                        serta pembinaan kesejahteraan masyarakat.
                    </p>
                </div>
            </div>

            <!-- KASI TRANTIB -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0 p-4 tupoksi-card">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-shield-alt fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Kasi Trantib & PB</h5>
                    <p class="text-muted">
                        Menjaga ketertiban umum, keamanan lingkungan,
                        serta penanggulangan bencana di wilayah kelurahan.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- TUPOKSI END -->
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