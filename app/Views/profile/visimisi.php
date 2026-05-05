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
        .visi-box {
            background: linear-gradient(135deg, #0d6efd, #3b82f6);
            color: white;
            padding: 50px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(13, 110, 253, 0.3);
        }

        .visi-box h1 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .misi-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            transition: 0.3s;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .misi-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .misi-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 15px;
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
                <img src="<?= base_url() ?>/assets/img/Logo pemko.png" alt="Logo">
                <img src="<?= base_url() ?>/assets/img/logo.png" alt="Logo">
                <!-- <h1 style="color: aquamarine;">PKK Kelurahan Olo</h1> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= base_url() ?>/" class="nav-item nav-link">Beranda</a>
                    <div class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>/profile/umum" class="dropdown-item">Monografi</a>
                            <a href="<?= base_url() ?>/profile/visi-misi" class="dropdown-item">Visi dan Misi</a>
                            <a href="<?= base_url() ?>/profile/struktur" class="dropdown-item">Struktur Organisasi</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link">Pelayanan</a>
                    <!-- <a href="blog.html" class="nav-item nav-link">Berita</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kegiatan</a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">POKJA 1</a>
                            <a href="product.html" class="dropdown-item">POKJA 2</a>
                            <a href="team.html" class="dropdown-item">POKJA 3</a>
                            <a href="testimonial.html" class="dropdown-item">POKJA 4</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Kontak</a>
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
                    <li class="breadcrumb-item active text-primary">Visi dan Misi</li>
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


    <div class="container py-5">

        <!-- JUDUL -->
        <div class="text-center mb-5">
            <h1 class="fw-bold">Visi & Misi</h1>
            <p class="text-muted">Kelurahan Olo Kecamatan Padang Barat</p>
        </div>

        <!-- VISI -->
        <div class="visi-box mb-5">
            <h2>Visi</h2>
            <p class="fs-5">
                “Meningkatkan Perekonomian, Kesehatan, Pendidikan, Pariwisata demi
                terwujudnya Masyarakat Kelurahan Olo yang beriman dan bertaqwa”
            </p>
        </div>

        <!-- MISI -->
        <div>
            <h2 class="text-center mb-4">Misi</h2>

            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="misi-card">
                        <div class="misi-icon">1</div>
                        <p>Meningkatkan Keimanan dan Ketaqwaan Masyarakat</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="misi-card">
                        <div class="misi-icon">2</div>
                        <p>Meningkatkan kualitas pelayanan kepada masyarakat</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="misi-card">
                        <div class="misi-icon">3</div>
                        <p>Meningkatkan ekonomi berbasis kemasyarakatan</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="misi-card">
                        <div class="misi-icon">4</div>
                        <p>Mengikutsertakan peran aktif masyarakat dalam pembangunan</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="misi-card">
                        <div class="misi-icon">5</div>
                        <p>Meningkatkan kesehatan dan menjaga lingkungan bersih</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="misi-card">
                        <div class="misi-icon">6</div>
                        <p>Menjaga keamanan dan ketertiban masyarakat</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="misi-card">
                        <div class="misi-icon">7</div>
                        <p>Memajukan pariwisata berwawasan lingkungan</p>
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