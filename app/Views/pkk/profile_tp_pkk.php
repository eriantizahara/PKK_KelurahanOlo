<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profile TP PKK</title>
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

    .timeline {
        position: relative;
        margin: 30px 0;
        padding-left: 30px;
        border-left: 3px solid var(--bs-primary);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 25px;
        padding-left: 20px;
    }

    .timeline-item::before {
        content: "";
        position: absolute;
        left: -11px;
        top: 5px;
        width: 14px;
        height: 14px;
        background: var(--bs-primary);
        border-radius: 50%;
        border: 3px solid #fff;
    }

    .timeline-card {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 10px;
        padding: 15px 20px;
        transition: 0.3s;
    }

    .timeline-card:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .timeline-title {
        font-weight: 600;
        color: var(--bs-primary);
        margin-bottom: 5px;
    }

    .timeline-icon {
        font-size: 14px;
        margin-right: 6px;
    }

    .program-box {
        background: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 15px 18px;
        display: flex;
        align-items: center;
        height: 100%;
        transition: 0.2s;
    }

    .program-box:hover {
        border-color: var(--bs-primary);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .program-number {
        font-weight: 700;
        font-size: 18px;
        color: var(--bs-primary);
        margin-right: 12px;
        min-width: 30px;
    }

    .program-text {
        font-size: 14.5px;
        line-height: 1.6;
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
                    <a href="/" class="nav-item nav-link ">Beranda</a>
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
                    <div class="nav-item dropdown active">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">PKK</a>
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
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Profile TP PKK</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <div class="container py-5">

        <!-- SECTION: PROFIL -->
        <div class="bg-white p-4 p-md-2 rounded shadow-sm mb-5">
            <h2 class="text-primary fw-bold mb-3 text-center">
                Profile TP PKK Kelurahan Olo
            </h2>


            <div class="mx-auto" style="max-width: 900px;">
                <p class="text-center text-muted">
                    Tim Penggerak PKK Kelurahan Olo merupakan organisasi kemasyarakatan yang berperan aktif
                    dalam meningkatkan kualitas hidup dan kesejahteraan keluarga melalui berbagai program
                    yang dilaksanakan secara partisipatif oleh masyarakat.
                </p>
            </div>
        </div>


        <!-- SECTION: PROGRAM UNGGULAN -->
        <div class="mb-4">
            <h4 class="fw-bold text-center mb-3">Program Unggulan “OLO PASS”</h4>

            <div class="row text-center g-4">

                <div class="col-md-3">
                    <div class="p-4 border rounded h-100 hover-card">
                        <i class="fas fa-book fa-2x text-primary mb-3"></i>
                        <h5 class="fw-bold">Pintar</h5>
                        <p class="small text-muted">Peningkatan pendidikan dan pengetahuan masyarakat</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-4 border rounded h-100 hover-card">
                        <i class="fas fa-coins fa-2x text-primary mb-3"></i>
                        <h5 class="fw-bold">Aset</h5>
                        <p class="small text-muted">Penguatan ekonomi dan aset keluarga</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-4 border rounded h-100 hover-card">
                        <i class="fas fa-heartbeat fa-2x text-primary mb-3"></i>
                        <h5 class="fw-bold">Sehat</h5>
                        <p class="small text-muted">Peningkatan kesehatan masyarakat</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-4 border rounded h-100 hover-card">
                        <i class="fas fa-smile fa-2x text-primary mb-3"></i>
                        <h5 class="fw-bold">Sejahtera</h5>
                        <p class="small text-muted">Mewujudkan keluarga yang harmonis dan mandiri</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-white p-4 p-md-4 rounded shadow-sm mb-5">

            <h4 class="fw-bold text-center mb-4 text-primary">
                10 Program Pokok PKK
            </h4>

            <div class="row g-3">

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">01</div>
                        <div class="program-text">Penghayatan dan Pengamalan Pancasila</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">02</div>
                        <div class="program-text">Gotong Royong</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">03</div>
                        <div class="program-text">Pangan</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">04</div>
                        <div class="program-text">Sandang</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">05</div>
                        <div class="program-text">Perumahan dan Tata Laksana Rumah Tangga</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">06</div>
                        <div class="program-text">Pendidikan dan Keterampilan</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">07</div>
                        <div class="program-text">Kesehatan</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">08</div>
                        <div class="program-text">Pengembangan Kehidupan Berkoperasi</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">09</div>
                        <div class="program-text">Kelestarian Lingkungan Hidup</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="program-box hover-card">
                        <div class="program-number">10</div>
                        <div class="program-text">Perencanaan Sehat</div>
                    </div>
                </div>

            </div>

        </div>
        <!-- SECTION: GAMBAR + DESKRIPSI -->
        <div class="row align-items-center mb-5">

            <div class="col-md-5">
                <img src="<?= base_url() ?>/assets/img/about.jpg" class="img-fluid rounded shadow">
            </div>

            <div class="col-md-7">
                <h4 class="fw-bold mb-3">Gambaran Umum</h4>
                <p class="text-muted" style="text-align: justify; line-height: 1.8;">
                    TP PKK Kelurahan Olo Kecamatan Padang Barat memiliki peran strategis dalam mendukung
                    pembangunan berbasis keluarga. Melalui kegiatan yang terstruktur dan berkelanjutan,
                    PKK menjadi penggerak utama dalam meningkatkan kesejahteraan masyarakat,
                    khususnya dalam bidang kesehatan, pendidikan, dan ekonomi keluarga.
                </p>
            </div>

        </div>


        <!-- SECTION: DATA -->
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">

            <h4 class="fw-bold text-center mb-4">
                Data TP PKK Kelurahan Olo Kecamatan Padang Barat
            </h4>

            <div class="table-responsive">
                <table class="table table-bordered">

                    <tbody>
                        <tr>
                            <th width="60%">Kelompok PKK RW</th>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th>Kelompok PKK RT</th>
                            <td>22</td>
                        </tr>
                        <tr>
                            <th>Kelompok Dasa Wisma</th>
                            <td>47</td>
                        </tr>
                        <tr>
                            <th>Kader PKK</th>
                            <td>31</td>
                        </tr>
                        <tr>
                            <th>Kader Posyandu</th>
                            <td>45</td>
                        </tr>
                        <tr>
                            <th>Kader PHBS</th>
                            <td>45</td>
                        </tr>
                        <tr>
                            <th>Posyandu Balita</th>
                            <td>9</td>
                        </tr>
                        <tr>
                            <th>Posyandu Lansia</th>
                            <td>9</td>
                        </tr>
                        <tr>
                            <th>Posyandu Ibu Hamil</th>
                            <td>9</td>
                        </tr>
                        <tr>
                            <th>Kader TPK</th>
                            <td>6</td>
                        </tr>
                    </tbody>

                </table>
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