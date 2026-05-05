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

    .section-header i {
        margin-right: 8px;
        font-size: 16px;
    }

    .page-title i {
        margin-right: 10px;
    }

    body {
        background: #f4f6f9;
        font-family: 'Open Sans', sans-serif;
    }

    /* Judul utama */
    .page-title {
        font-weight: 700;
        color: var(--bs-primary);
    }

    /* Subjudul */
    .subtitle {
        color: #6c757d;
    }

    /* Box deskripsi */
    .desc-box {
        background: #ffffff;
        border-left: 5px solid var(--bs-primary);
        padding: 25px;
        border-radius: 8px;
        margin-bottom: 40px;
    }

    /* Section */
    .section-box {
        background: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        margin-bottom: 35px;
        transition: 0.3s;
    }

    .section-box:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    /* Header section */
    .section-header {
        background: var(--bs-primary);
        color: white;
        padding: 14px 20px;
        border-radius: 10px 10px 0 0;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* Isi */
    .section-body {
        padding: 22px 25px;
    }

    /* List */
    .section-body ul {
        padding-left: 20px;
    }

    .section-body ul li {
        margin-bottom: 10px;
        line-height: 1.8;
        position: relative;
    }

    /* Bullet custom biar lebih rapi */
    .section-body ul li::marker {
        color: var(--bs-primary);
    }

    /* Divider */
    .divider {
        height: 2px;
        background: #e9ecef;
        margin: 50px 0;
    }

    /* GALERI PUZZLE */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-auto-rows: 160px;
        gap: 10px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.4s;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    /* Variasi ukuran (biar kayak puzzle) */
    .gallery-item.big {
        grid-column: span 1;
        grid-row: span 2;
    }

    .gallery-item.wide {
        grid-column: span 2;
    }

    .gallery-item.tall {
        grid-row: span 2;
    }

    /* Overlay caption */
    .gallery-overlay {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 13px;
        padding: 5px;
        text-align: center;
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
        <div class="container-fluid bg-breadcrumb"
            style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url('<?= base_url() ?>/assets/img/14.png') center center/cover no-repeat;">

            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kelompok Kerja (POKJA)</h4>

                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">POKJA II</li>
                </ol>
            </div>

        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <div class="container py-5">

        <!-- JUDUL -->
        <div class="text-center mb-4">
            <h2 class="page-title">
                <i class="fas fa-landmark text-primary"></i> POKJA II
            </h2>

            <p class="subtitle">
                Pendidikan dan Keterampilan
            </p>
            <p class="subtitle">
                Pengembangan Kehidupan Berkoperasi
            </p>
        </div>

        <!-- DESKRIPSI -->
        <div class="desc-box hover-card">
            <p style="text-align: justify; line-height:1.9;">
                POKJA II berfokus pada pelaksanaan program Pendidikan dan Keterampilan serta
                Pengembangan Kehidupan Berkoperasi. Program ini bertujuan untuk meningkatkan kualitas sumber daya manusia,
                mendorong kemandirian ekonomi keluarga melalui pelatihan keterampilan, pengelolaan usaha,
                serta penguatan budaya berkoperasi dalam kehidupan masyarakat.
            </p>
        </div>

        <!-- PROGRAM Pendidikan dan Keterampilan -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-star"></i> Program Pendidikan dan Keterampilan
            </div>
            <div class="section-body">
                <ul>
                    <li>Penanaman Ubi (PENA ABI)</li>
                    <li>Pengolahan Ubi (POBI)</li>
                    <li>Memasarkan Olahan Ubi (MALABI)</li>
                    <li>Kumpul Ban Bekas (KUMPUL BABE)</li>
                    <li>Mengolah Ban Bekas (OLAH BABE)</li>
                    <li>Pemasaran Produk Ban Bekas (PASAR BABE)</li>
                    <li>Kumpul Bahan Kerajinan (KUMPUL HAJI)</li>
                    <li>Mengolah Kerajinan (OLAHAN)</li>
                    <li>Pasar Kerajinan (PASARAN)</li>
                </ul>
            </div>
        </div>

        <!-- INOVASI POKJA II -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-lightbulb"></i> Inovasi Program Pendidikan dan Keterampilan
            </div>
            <div class="section-body">
                <ul>
                    <li>Pembuatan Tas (PENTAS)</li>
                    <li>Tutorial Memasak Makanan Balita (TUKMATA)</li>
                    <li>Rajut Perlengkapan Rumah Tangga (RANGKA MATA)</li>
                    <li>Pembuatan Aksesoris (PARIS)</li>
                    <li>Lomba Mewarnai (LONA)</li>
                    <li>Sampah Jadi Karya (SAJAYA)</li>
                    <li>Perca Jadi Karya (PEJAYA)</li>
                    <li>Pelatihan Memasak Roti Kering (PENARI)</li>
                    <li>Pembuatan Sarang Ketupat (BUAT SEPAT)</li>
                    <li>Buat Sabun Cuci Piring (BU SARI)</li>
                    <li>Pelatihan Parenting Orang Tua (PINTU)</li>
                    <li>PKK Simulasi Gempa (PIPA BASAH)</li>
                    <li>Pelatihan Entrepreneur (TUR)</li>
                    <li>Disabilitas Sukses (DISIKO)</li>
                    <li>Sekolah Lansia Ceria (SESIRIA)</li>
                    <li>Belajar Bahasa Inggris (BERBARIS)</li>
                    <li>Penyuluhan Pernikahan Dini (PERNIK DINI)</li>
                    <li>Jual Beli Digital (JELITA)</li>
                    <li>Pokok Baca Olo (Palo)</li>
                </ul>
            </div>
        </div>

        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-plus-circle"></i> Inovasi Program Pengembangan Kehidupan Berkoperasi
            </div>
            <div class="section-body">
                <ul>
                    <li>Market UP2K Olo (MAU LO)</li>
                    <li>Pokdarwis Sepeda (POKDA)</li>
                    <li>Sukses Koperasi Bersama PKK (SUKAMERAK)</li>
                    <li>Catering UP2K Olo (CAKLO)</li>
                    <li>KUBE Samudera (KURA)</li>
                    <li>PKK & Gerak Muslimat Indonesia</li>
                </ul>
            </div>
        </div>

        <!-- GALERI PUZZLE -->
        <div class="mt-5">

            <h5 class="text-center text-primary mb-4">
                <i class="fas fa-images"></i> Dokumentasi Kegiatan POKJA II
            </h5>

            <div class="gallery-grid">

                <div class="gallery-item big">
                    <img src="<?= base_url() ?>/assets/img/2/2.png">
                    <!-- <div class="gallery-overlay">Kegiatan Sosial</div> -->
                </div>

                <div class="gallery-item">
                    <img src="<?= base_url() ?>/assets/img/2/4.png">
                </div>

                <div class="gallery-item tall">
                    <img src="<?= base_url() ?>/assets/img/2/6.png">
                </div>

                <div class="gallery-item">
                    <img src="<?= base_url() ?>/assets/img/2/5.png">
                </div>

                <div class="gallery-item">
                    <img src="<?= base_url() ?>/assets/img/2/3.png">
                </div>

                <div class="gallery-item">
                    <img src="<?= base_url() ?>/assets/img/2/1.png">
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