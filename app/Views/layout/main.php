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
        /* =========================
        GLOBAL
    ========================== */
        body {
            overflow-x: hidden;
        }

        /* =========================
        TEAM SECTION
    ========================== */

        .team-scroll {
            scrollbar-width: thin;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            padding-bottom: 12px;
        }

        .team-scroll::-webkit-scrollbar {
            height: 8px;
        }

        .team-scroll::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 20px;
        }

        .team-scroll::-webkit-scrollbar-thumb {
            background: #0d6efd;
            border-radius: 20px;
        }

        .team-scroll::-webkit-scrollbar-thumb:hover {
            background: #0b5ed7;
        }

        .team-card {
            min-width: 300px;
            max-width: 300px;
            flex: 0 0 auto;
            scroll-snap-align: start;
            transition: all 0.4s ease;
        }

        .team-card:hover {
            transform: translateY(-10px) scale(1.02);
        }

        .team-item {
            background: #ffffff;
            border-radius: 18px;
            overflow: visible;
            transition: 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .team-item:hover {
            box-shadow: 0 15px 35px rgba(13, 110, 253, 0.18);
        }

        .team-inner {
            border-radius: 18px;
            overflow: visible;
        }

        .team-img {
            position: relative;
            overflow: visible !important;
        }

        .team-img img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            transition: 0.5s;
        }

        .team-item:hover .team-img img {
            transform: scale(1.05);
        }

        .team-share {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 2;
        }

        .team-icon {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(8px);
            opacity: 0;
            transition: 0.4s;
        }

        .team-item:hover .team-icon {
            opacity: 1;
            bottom: 20px;
        }

        .team-icon .btn {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            border: none;
            transition: 0.3s;
        }

        .team-icon .btn:hover {
            background: #0d6efd;
            color: #fff;
            transform: translateY(-3px);
        }

        .team-item h4 {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
        }

        .team-item p {
            color: #64748b;
            font-size: 14px;
        }

        /* =========================
        FOOTER
    ========================== */

        .footer-modern {
            background: linear-gradient(135deg, #020617, #0f172a);
            color: #cbd5f5;
        }

        .footer-title {
            color: #fff;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .footer-divider {
            width: 50px;
            height: 3px;
            background: #0d6efd;
            margin: 0 auto 20px auto;
            border-radius: 10px;
        }

        .footer-text {
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 12px;
            color: #94a3b8;
        }

        .footer-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 25px;
            border-radius: 18px;
            backdrop-filter: blur(8px);
            transition: 0.4s ease;
            height: 100%;
        }

        .footer-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.35);
        }

        .footer-icon {
            width: 45px;
            height: 45px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            color: #fff;
            transition: 0.3s ease;
            font-size: 16px;
        }

        .footer-icon:hover {
            background: #0d6efd;
            color: #fff;
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(13, 110, 253, 0.35);
        }

        /* =========================
        CAROUSEL
    ========================== */

        .carousel-item img {
            width: 100%;
            height: 750px;
            object-fit: cover;
            object-position: center;
        }

        /* =========================
        RESPONSIVE
    ========================== */

        @media (max-width: 768px) {

            .team-card {
                min-width: 260px;
                max-width: 260px;
            }

            .team-img img {
                height: 280px;
            }

            .carousel-item img {
                height: 350px;
            }
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
                    <a href="/" class="nav-item nav-link active">Beranda</a>
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
                    <a href="<?= base_url('kontak') ?>" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?= base_url() ?>/assets/img/slide1.png" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption-1">
                            <div class="carousel-caption-1-content" style="max-width: 900px;">
                                <!-- <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Importance life</h4> -->
                                <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Kelurahan Olo</h1>
                                <h2 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Kecamatan Padang Barat</h2>
                                <!-- <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">Kecamatan Padang Barat</p> -->
                                <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                    <!-- <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order Now</a>
                                        <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Free Estimate</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>/assets/img/14.png" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption-2">
                            <div class="carousel-caption-2-content" style="max-width: 900px;">
                                <!-- <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Importance life</h4> -->
                                <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Pemberdayaan dan Kesejahteraan Keluarga (PKK)</h1>
                                <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">Kelurahan Olo Kecamatan Padang Barat</p>
                                <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                                    <!-- <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order Now</a>
                                        <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Free Estimate</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- feature Start -->
    <!-- <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Feature</h4>
                <h1 class="display-3 text-capitalize mb-3">A Trusted Name In Bottled Water Industry</h1>
            </div>
            <div class="row g-4">
                <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-hand-holding-water text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Quality Check</a>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-filter text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">5 Steps Filtration</a>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-recycle text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Composition</a>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-microscope text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Lab Control</a>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus</p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- feature End -->


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
                        <!-- <h4 class="text-primary text-uppercase">Monografi</h4> -->
                        <h1 class="display-3 mb-3">Kelurahan Olo</h1>
                        <p class="mb-4">Kelurahan merupakan wilayah kerja Lurah sebagai bagian dari perangkat kecamatan yang berada di wilayah Kota/Kabupaten. Keberadaan Pemerintah Kelurahan sebagai salah satu organisasi publik dituntut selalu memberikan pelayanan yang sebaik-baiknya kepada masyarakat disamping melaksanakan tugas-tugas pemerintahan, pembangunan dan kemasyarakatan di wilayah Kelurahan.
                        </p>
                        <!-- <div class="bg-light rounded p-4 mb-2">
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
                        </div> -->
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
                        <a href="<?= base_url('profile/umum') ?>" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Counter -->
    <div class="container-fluid counter py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Rukun Warga (RW)</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">6</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Rukun Tetangga (RT)</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">22</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Perangkat Kelurahan</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">4</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Jumlah Penduduk</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">4312</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Counter -->

    <!-- Service Start -->
    <div class="container-fluid service bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-uppercase text-primary">Uraian</h1>
                <h1 class="display-3 text-capitalize mb-3">Kegiatan PKK</h1>
            </div>

            <div class="row gx-0 gy-4 align-items-center">

                <!-- LEFT -->
                <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">

                    <!-- POKJA I -->
                    <div class="service-item rounded p-4 mb-4">
                        <div class="d-flex">
                            <div class="service-content text-end">
                                <a href="#" class="h4 d-inline-block mb-3">POKJA I</a>
                                <p class="mb-0">
                                    Berfokus pada kegiatan penghayatan dan pengamalan Pancasila serta gotong royong dalam kehidupan bermasyarakat.
                                </p>
                            </div>
                            <div class="ps-4">
                                <div class="service-btn">
                                    <i class="fas fa-hands-helping text-white fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- POKJA II -->
                    <div class="service-item rounded p-4 mb-4">
                        <div class="d-flex">
                            <div class="service-content text-end">
                                <a href="#" class="h4 d-inline-block mb-3">POKJA II</a>
                                <p class="mb-0">
                                    Berfokus pada kegiatan pendidikan dan keterampilan serta pengembangan kehidupan berkoperasi.
                                </p>
                            </div>
                            <div class="ps-4">
                                <div class="service-btn">
                                    <i class="fas fa-book-reader text-white fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- CENTER LOGO -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <div class="bg-transparent">
                        <img src="<?= base_url() ?>/assets/img/logo.png"
                            class="img-fluid"
                            style="max-width: 220px;"
                            alt="">
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">

                    <!-- POKJA III -->
                    <div class="service-item rounded p-4 mb-4">
                        <div class="d-flex">
                            <div class="pe-4">
                                <div class="service-btn">
                                    <i class="fas fa-utensils text-white fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content">
                                <a href="#" class="h4 d-inline-block mb-3">POKJA III</a>
                                <p class="mb-0">
                                    Berfokus pada kegiatan pangan, sandang, serta perumahan dan tata laksana rumah tangga.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- POKJA IV -->
                    <div class="service-item rounded p-4 mb-0">
                        <div class="d-flex">
                            <div class="pe-4">
                                <div class="service-btn">
                                    <i class="fas fa-heartbeat text-white fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content">
                                <a href="#" class="h4 d-inline-block mb-3">POKJA IV</a>
                                <p class="mb-0">
                                    Berfokus pada kegiatan kesehatan, kelestarian lingkungan hidup, dan perencanaan kesehatan keluarga.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Products Start -->
    <!-- <div class="container-fluid product py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Products</h4>
                <h1 class="display-3 text-capitalize mb-3">We Deliver Best Quality Bottle Packs.</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="product-item">
                        <img src="<?= base_url() ?>/assets/img/product-3.png" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="product-content bg-light text-center rounded-bottom p-4">
                            <p>2L 1 Bottle</p>
                            <a href="#" class="h4 d-inline-block mb-3">Mineral Water Bottle</a>
                            <p class="fs-4 text-primary mb-3">$35:00</p>
                            <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="product-item">
                        <img src="<?= base_url() ?>/assets/img/product-2.png" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="product-content bg-light text-center rounded-bottom p-4">
                            <p>4L 2 Bottles</p>
                            <a href="#" class="h4 d-inline-block mb-3">RO Water Bottle</a>
                            <p class="fs-4 text-primary mb-3">$70:00</p>
                            <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <img src="<?= base_url() ?>/assets/img/product-1.png" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="product-content bg-light text-center rounded-bottom p-4">
                            <p>6L 3 Bottles</p>
                            <a href="#" class="h4 d-inline-block mb-3">UV Water Bottle</a>
                            <p class="fs-4 text-primary mb-3">$100:00</p>
                            <a href="#" class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Products End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Blog</h4>
                <h1 class="display-3 text-capitalize mb-3">Latest Blog & News</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?= base_url() ?>/assets/img/blog-1.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis?</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?= base_url() ?>/assets/img/blog-2.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis?</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?= base_url() ?>/assets/img/blog-3.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12 2025</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis?</p>
                            <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Blog End -->


    <!-- Team Start -->
    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-3 text-capitalize mb-3 mt-3">
                    Perangkat Kelurahan
                </h1>
            </div>

            <!-- CARD SCROLL -->
            <div class="d-flex flex-nowrap overflow-auto gap-4 pb-3 team-scroll">

                <!-- CARD 1 -->
                <div class="team-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="<?= base_url() ?>/assets/img/pak lurah.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt="Image">

                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                </div>

                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">LURAH</h4>
                                <p class="mb-0">AIDIL PUTRA, S.AP, M.M</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="team-card wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">

                                <img src="<?= base_url() ?>/assets/img/icon.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt="Image">

                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                </div>

                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Sekretaris Kelurahan</h4>
                                <p class="mb-0">FIKA ROSIANA A,A.Md</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="team-card wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">

                                <img src="<?= base_url() ?>/assets/img/icon.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt="Image">

                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                </div>

                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Pengadministrasi Umum</h4>
                                <p class="mb-0">PAPATRI WAHYUNINGSIH</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="team-card wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">

                                <img src="<?= base_url() ?>/assets/img/icon.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt="Image">

                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                </div>

                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Staf KASI PM dan KESOS</h4>
                                <p class="mb-0">NIKEN PERMATA BUNDA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="team-card wow fadeInUp" data-wow-delay="1s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">

                                <img src="<?= base_url() ?>/assets/img/icon.jpg"
                                    class="img-fluid rounded-top w-100"
                                    alt="Image">

                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                </div>

                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">KASI TRANTIB & PB</h4>
                                <p class="mb-0">DASRIL, SE</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END CARD SCROLL -->

        </div>
    </div>
    <!-- Team End -->



    <!-- Team End -->

    <!-- Testimonial Start -->
    <!-- <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Testimonials</h4>
                <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="<?= base_url() ?>/assets/img/testimonial-1.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="<?= base_url() ?>/assets/img/testimonial-2.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="<?= base_url() ?>/assets/img/testimonial-3.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="<?= base_url() ?>/assets/img/testimonial-3.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">Client Name</h4>
                        <p class="m-0 pb-3">Profession</p>
                        <div class="d-flex justify-content-center text-secondary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid footer-modern py-5">
        <div class="container text-center py-5">

            <!-- SOCIAL -->
            <div class="mb-4">
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <a href="#" class="footer-icon">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.instagram.com/olo.padangbarat/" target="_blank" class="footer-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="row justify-content-center g-4">

                <!-- JAM OPERASIONAL -->
                <div class="col-md-6 col-lg-4">
                    <div class="footer-card">
                        <h5 class="footer-title">Jam Operasional</h5>
                        <div class="footer-divider"></div>

                        <p class="footer-text">
                            <strong>Senin - Kamis</strong><br>
                            07.30 - 16.00 WIB
                        </p>

                        <p class="footer-text">
                            <strong>Jumat</strong><br>
                            07.30 - 16.30 WIB
                        </p>

                        <p class="footer-text mb-0">
                            <strong>Sabtu - Minggu</strong><br>
                            Libur
                        </p>
                    </div>
                </div>

                <!-- KONTAK -->
                <div class="col-md-6 col-lg-4">
                    <div class="footer-card">
                        <h5 class="footer-title">Informasi Kontak</h5>
                        <div class="footer-divider"></div>

                        <p class="footer-text">
                            <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                            Jl. Pemuda No.28B, Olo, Padang Barat, Kota Padang
                        </p>

                        <p class="footer-text">
                            <i class="fas fa-envelope me-2 text-primary"></i>
                            info@example.com
                        </p>

                        <p class="footer-text mb-0">
                            <i class="fas fa-phone me-2 text-primary"></i>
                            +62 812-3456-7890
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- COPYRIGHT -->
    <div style="background:#020617;">
        <div class="container text-center py-3">
            <p class="mb-0 text-secondary" style="font-size:14px;">
                © 2026 PKK Kelurahan Olo • All Rights Reserved
            </p>
        </div>
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