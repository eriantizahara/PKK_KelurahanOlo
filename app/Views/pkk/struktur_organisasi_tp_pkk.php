<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Struktur Organisasi TP PKK</title>
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
</head>

<style>
    /* Efek hover card */
    .hover-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .hover-card:hover {
        transform: translateY(-10px);
        /* naik ke atas */
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
</style>

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
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url('profile/umum') ?>" class="dropdown-item">Monografi</a>
                            <a href="<?= base_url('profile/visi-misi') ?>" class="dropdown-item">Visi dan Misi</a>
                            <a href="<?= base_url('profile/struktur') ?>" class="dropdown-item">Struktur Organisasi</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link">Pelayanan</a>
                    <!-- <a href="blog.html" class="nav-item nav-link">Berita</a> -->
                    <div class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">PKK</a>
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
                    <a href="contact.html" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Struktur Organisasi</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Struktur Organisasi</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <div class="container py-5">

        <!-- JUDUL -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Struktur Organisasi TP PKK</h2>
            <h5 class="text-muted">Kelurahan Olo Kecamatan Padang Barat</h5>
            <p class="mt-3 text-muted">
                Struktur organisasi TP PKK Kelurahan Olo disusun untuk mendukung pelaksanaan program kerja
                secara terarah, terkoordinasi, dan berkelanjutan dalam meningkatkan kesejahteraan keluarga.
            </p>
        </div>

        <!-- GAMBAR STRUKTUR -->
        <div class="mb-5 text-center">
            <img src="<?= base_url() ?>/assets/img/struktur organisasi pkk.jpeg"
                alt="Struktur Organisasi PKK"
                class="img-fluid rounded shadow"
                style="max-height: 500px; object-fit: contain;">
        </div>

        <!-- STRUKTUR UTAMA -->
        <div class="row g-4 mb-5">

            <div class="col-md-4 ">
                <div class="p-4 border rounded shadow-sm h-100 hover-card">
                    <h5 class="fw-bold text-primary">Ketua Pembina TP PKK</h5>
                    <p class="mb-1">Lurah Olo</p>

                    <h6 class="fw-bold mt-3">Pembina TP PKK</h6>
                    <p>Kasi Pemberdayaan Masyarakat Olo</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm h-100 text-center hover-card">
                    <h5 class="fw-bold text-primary">Ketua TP PKK</h5>
                    <p>Ny. Putri Aidil Putra</p>

                    <h6 class="fw-bold mt-3">Wakil Ketua</h6>
                    <p>Helmi Yanti</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm h-100 hover-card">
                    <h5 class="fw-bold text-primary">Sekretaris</h5>
                    <p>Kevin Riandy</p>

                    <h6 class="fw-bold mt-3">Bendahara</h6>
                    <p>Mellisya</p>
                </div>
            </div>

        </div>

        <!-- POKJA -->
        <div class="mb-4 text-center">
            <h4 class="fw-bold">Kelompok Kerja (POKJA)</h4>
        </div>

        <div class="row g-4">

            <!-- POKJA 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded shadow-sm h-100 hover-card">
                    <h5 class="fw-bold text-primary text-center">POKJA I</h5>
                    <p><strong>Ketua:</strong> Hera Novitralina</p>
                    <p><strong>Wakil:</strong> Hasnimar</p>
                    <p><strong>Sekretaris:</strong> Ellyamera</p>
                    <p class="mb-1"><strong>Anggota:</strong></p>
                    <ul class="small">
                        <li>Ermilya Roza</li>
                        <li>Desi Hamdani</li>
                        <li>Laraslya</li>
                        <li>Emilia</li>
                    </ul>
                </div>
            </div>

            <!-- POKJA 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded shadow-sm h-100 hover-card">
                    <h5 class="fw-bold text-primary text-center">POKJA II</h5>
                    <p><strong>Ketua:</strong> Era Herlina</p>
                    <p><strong>Wakil:</strong> Yoshita Diana</p>
                    <p><strong>Sekretaris:</strong> Linda Warmi</p>
                    <p class="mb-1"><strong>Anggota:</strong></p>
                    <ul class="small">
                        <li>Asnawilita</li>
                        <li>Nildawati</li>
                        <li>Helendra</li>
                        <li>Anggraini</li>
                    </ul>
                </div>
            </div>

            <!-- POKJA 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded shadow-sm h-100 hover-card">
                    <h5 class="fw-bold text-primary text-center">POKJA III</h5>
                    <p><strong>Ketua:</strong> Messy Yonesla</p>
                    <p><strong>Wakil:</strong> Wilky Lestari</p>
                    <p><strong>Sekretaris:</strong> Ana Setiawati</p>
                    <p class="mb-1"><strong>Anggota:</strong></p>
                    <ul class="small">
                        <li>Mira Anggraini</li>
                        <li>Fatmawati</li>
                        <li>Era Wati</li>
                        <li>Nelvi Yanti</li>
                    </ul>
                </div>
            </div>

            <!-- POKJA 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="p-4 border rounded shadow-sm h-100 hover-card">
                    <h5 class="fw-bold text-primary text-center">POKJA IV</h5>
                    <p><strong>Ketua:</strong> Novrida</p>
                    <p><strong>Wakil:</strong> Novrelita</p>
                    <p><strong>Sekretaris:</strong> Fitriani</p>
                    <p class="mb-1"><strong>Anggota:</strong></p>
                    <ul class="small">
                        <li>Susi Yanti</li>
                        <li>Novri Yanti</li>
                        <li>Sri Wanti Lestari</li>
                        <li>W. Adriana</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <!-- ✅ FOOTER -->
    <div class="container-fluid bg-dark text-white text-center p-3">
        <p class="mb-0">© 2026 PKK Kelurahan Olo</p>
    </div>

    <!-- ✅ JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SCRIPT UNTUK HILANGKAN SPINNER -->
    <script>
        window.onload = function() {
            document.getElementById('spinner').classList.remove('show');
        }
    </script>

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