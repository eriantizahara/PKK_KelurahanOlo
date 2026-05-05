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
                            <a href="<?= base_url('pkk/pokja1') ?>" class="dropdown-item">POKJA I</a>
                            <a href="<?= base_url('pkk/pokja2') ?>" class="dropdown-item">POKJA II</a>
                            <a href="<?= base_url('pkk/pokja3') ?>" class="dropdown-item">POKJA III</a>
                            <a href="<?= base_url('pkk/pokja4') ?>" class="dropdown-item">POKJA IV</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kelompok Kerja (POKJA)</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">POKJA I</li>
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
                <i class="fas fa-landmark text-primary"></i> POKJA I
            </h2>
            <p class="subtitle">Penghayatan dan Pengamalan Pancasila</p>
        </div>

        <!-- DESKRIPSI -->
        <div class="desc-box hover-card">
            <p style="text-align: justify; line-height:1.9;">
                POKJA I TP PKK berfokus pada pembinaan karakter keluarga melalui penghayatan dan pengamalan nilai-nilai Pancasila,
                peningkatan kesadaran kehidupan berbangsa dan bernegara, serta penguatan mental spiritual masyarakat.
                Program ini juga menitikberatkan pada ketahanan keluarga dalam menghadapi tantangan sosial di era modern.
            </p>
        </div>

        <!-- PROGRAM UTAMA -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-star"></i> Program Utama
            </div>
            <div class="section-body">
                <ul>
                    <li>Penghayatan dan Pengamalan Pancasila</li>
                    <li>PAAREDI (Pola Asuh Anak dan Remaja di Era Digital)</li>
                    <li>Keluarga Indonesia Sejahtera Harmonis (KISAH)</li>
                    <li>Cegah Perkawinan Anak (CEPAK)</li>
                    <li>Calon Pengantin (CATIN)</li>
                    <li>Lansia Siap Produktif (LANSIAP)</li>
                    <li>Judi, Pinjol Teratasi (CEPAK)</li>
                </ul>
            </div>
        </div>

        <!-- PROGRAM LANJUTAN -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-layer-group"></i> Program Lanjutan
            </div>
            <div class="section-body">
                <ul>
                    <li>Keluarga Indonesia Anti Trafficking (KIAT)</li>
                    <li>Keluarga Indonesia Lindungi Anak terhadap Kekerasan Seksual (KILAS)</li>
                    <li>Keluarga Indonesia Sehat Anti Narkoba (KRISAN)</li>
                    <li>Pembinaan Kesadaran Bela Negara (PKBN)</li>
                    <li>Keluarga Indonesia Sadar Administrasi Kependudukan (KISAK)</li>
                </ul>
            </div>
        </div>

        <!-- INOVASI -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-lightbulb"></i> Inovasi POKJA I
            </div>
            <div class="section-body">
                <ul>
                    <li>Konten Kreatif Remaja (KREMA)</li>
                    <li>Penyuluhan Anti Tawuran dan Balap Liar (PENAWAR)</li>
                    <li>Yatim Care (YARE)</li>
                    <li>Family Gathering (FARING)</li>
                    <li>Support Disabilitas (SUPPORT DIS)</li>
                    <li>Sahabat PAAREDI (SAHATI)</li>
                    <li>Sahabat Lansia (SASI)</li>
                </ul>
            </div>
        </div>

        <!-- KEGIATAN SOSIAL -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-hands-helping"></i> Kegiatan Sosial & Keagamaan
            </div>
            <div class="section-body">
                <ul>
                    <li>Sembako untuk Lansia bersama Dinas Pangan (SESIDIPANGAN)</li>
                    <li>Berbagi Al-Qur’an bersama Polsek (BASAMO)</li>
                    <li>Ayah Teladan Olo (ATO)</li>
                    <li>Membudayakan Permainan Tradisional (BU MATRA)</li>
                    <li>PKK Masuk Sekolah (PASLAH)</li>
                    <li>Khitanan Massal (KHISAL)</li>
                    <li>Tasmi’ Tahfidz Qur’an (TAHAN)</li>
                    <li>Istiqomah di Masjid (ISI MESJID)</li>
                </ul>
            </div>
        </div>

        <!-- PROGRAM TAMBAHAN -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-plus-circle"></i> Program Tambahan PAAREDI
            </div>
            <div class="section-body">
                <ul>
                    <li>PAAREDI Tangguh Peduli Bencana</li>
                    <li>PAAREDI Tangguh Cinta Islam</li>
                    <li>Balai Bermain PAAREDI</li>
                </ul>
            </div>
        </div>

        <!-- KEGIATAN LINGKUNGAN -->
        <div class="section-box hover-card">
            <div class="section-header">
                <i class="fas fa-leaf"></i> Kegiatan Lingkungan & Sosial
            </div>
            <div class="section-body">
                <ul>
                    <li>Gotong Royong Bersama Olo Berpetualang (BOLANG)</li>
                    <li>PKK Peduli PAAREDI (PERI)</li>
                    <li>Gerakan Membersihkan Masjid Hari Jum’at (GEMMAR JUM’AT)</li>
                    <li>PKK Bersih Pantai bersama Sahabat Bumi (PERAN SABUMI)</li>
                    <li>Halal Bihalal Olo (HALLO)</li>
                    <li>PKK Bersenam (PENA)</li>
                    <li>Dapur Umum Olo</li>
                    <li>PKK Peduli Jenazah</li>
                    <li>PKK & Dompet Dhuafa Peduli Lansia</li>
                </ul>
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