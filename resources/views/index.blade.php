<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ Vite::image('logo.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!--<div class="container-fluid bg-dark px-5 d-none d-lg-block">-->
    <!--    <div class="row gx-0">-->
    <!--        <div class="col-lg-11 text-center text-lg-start mb-2 mb-lg-0">-->
    <!--            <div class="d-inline-flex align-items-center gap-2" style="height: 45px;">-->
    <!--                <small class="text-light me-3">-->
    <!--                    <i class="fa fa-map-marker-alt me-2"></i>-->
    <!--                    Desa Sukorejo - Kec. Gandusari Kab. Trenggalek, Jawa Timur-->
    <!--                </small>-->
    <!--                <small class="text-light me-3">-->
    <!--                    <i class="fa fa-phone-alt me-2"></i>-->
    <!--                    0852 3673 8187-->
    <!--                </small>-->
    <!--                <small class="text-light me-3">-->
    <!--                    <i class="fa fa-envelope-open me-2"></i>-->
    <!--                    sales@kubahmadinna.com-->
    <!--                </small>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-1 text-center text-lg-end">-->
    <!--            <div class="d-inline-flex align-items-center" style="height: 45px;">-->
    <!--                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"-->
    <!--                    href="https://www.facebook.com/profile.php?id=61552978706701/"><i-->
    <!--                        class="fab fa-facebook-f fw-normal"></i></a>-->
    <!--                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"-->
    <!--                    href="https://www.instagram.com/dutamadinna.kubah/"><i-->
    <!--                        class="fab fa-instagram fw-normal"></i></a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <header class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-xl navbar-dark px-2 px-sm-5 py-3 py-xl-0">
            <a href="#" class="navbar-brand p-0 d-flex align-items-center gap-3">
                <img src="{{ Vite::image('logo.png') }}" class="logo">
                <h1 class="m-0">Duta Madinna Kubah</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link">Beranda</a>
                    <a href="#promotion" class="nav-item nav-link">Promosi</a>
                    <a href="#about" class="nav-item nav-link">Tentang</a>
                    <a href="#feature" class="nav-item nav-link">Fitur</a>
                    <a href="#service" class="nav-item nav-link">Layanan</a>
                    <a href="#dome-design" class="nav-item nav-link">Desain Kubah</a>
                    <a href="#contact" class="nav-item nav-link">Kontak</a>
                    <a href="#portfolio" class="nav-item nav-link">Portofolio</a>
                </div>
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-primary py-2 px-4 ms-3">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                @endauth
            </div>
        </nav>

        <section id="home" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <x-carousel-header-item :src="Vite::image('carousel-header-item-1.jpg')" title="Kualitas Terbaik Dengan Harga Bersaing"
                    class="active" />
                <x-carousel-header-item :src="Vite::image('carousel-header-item-2.jpg')" title="Menghasilkan Karya Seni Yang Indah Dan Berkualitas" />
                <x-carousel-header-item :src="Vite::image('carousel-header-item-3.jpg')" title="Tersedia Banyak Pilihan Design Dan Warna" />
                <x-carousel-header-item :src="Vite::image('carousel-header-item-4.jpg')" title="Dukungan Team Yang Berkompeten Dan Profesional" />
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#home" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#home" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
    </header>
    <!-- Navbar & Carousel End -->


    <!-- Facts Start -->
    <!--<div class="container-fluid facts py-5 pt-lg-0">-->
    <!--    <div class="container py-5 pt-lg-0">-->
    <!--        <div class="row gx-0">-->
    <!--            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">-->
    <!--                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"-->
    <!--                    style="height: 150px;">-->
    <!--                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"-->
    <!--                        style="width: 60px; height: 60px;">-->
    <!--                        <i class="fa fa-users text-primary"></i>-->
    <!--                    </div>-->
    <!--                    <div class="ps-4">-->
    <!--                        <h5 class="text-white mb-0">Happy Clients</h5>-->
    <!--                        <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">-->
    <!--                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"-->
    <!--                    style="height: 150px;">-->
    <!--                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"-->
    <!--                        style="width: 60px; height: 60px;">-->
    <!--                        <i class="fa fa-check text-white"></i>-->
    <!--                    </div>-->
    <!--                    <div class="ps-4">-->
    <!--                        <h5 class="text-primary mb-0">Projects Done</h5>-->
    <!--                        <h1 class="mb-0" data-toggle="counter-up">12345</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">-->
    <!--                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"-->
    <!--                    style="height: 150px;">-->
    <!--                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"-->
    <!--                        style="width: 60px; height: 60px;">-->
    <!--                        <i class="fa fa-award text-primary"></i>-->
    <!--                    </div>-->
    <!--                    <div class="ps-4">-->
    <!--                        <h5 class="text-white mb-0">Win Awards</h5>-->
    <!--                        <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Facts Start -->


    <!-- Promotion Start -->
    <section id="promotion" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <!--<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">-->
            <!--    <h5 class="fw-bold text-primary text-uppercase">Promo Hari Ini</h5>-->
            <!--    <h1 class="mb-0">Jangan Ketinggalan Dengan Promo Terbaru Dari Kami</h1>-->
            <!--</div>-->
            <div class="owl-carousel promo-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach ($informations as $information)
                    <x-data-card :model="$information" />
                @endforeach
            </div>
            <div class="d-flex justify-content-center py-2">
                <button type="button" class="btn btn-primary me-2" id="promo-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button type="button" class="btn btn-primary" id="promo-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- Promotion End -->

    <!-- About Start -->
    <section id="about" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">Kontraktor Kubah Masjid Dengan Lebih Dari 20 Tahun Pengalaman</h1>
                    </div>
                    <p class="mb-4">Sebagai kontraktor kubah masjid berpengalaman kami melayani pekerjaan di seluruh
                        wilayah Indonesia dari Sabang sampai Meraoke. Dengan didukung workshop kami yang berada di
                        beberapa wilayah Indonesia antara lain kota Rantau provinsi Kalimantan Selatan, Samarinda
                        provinsi Kalimantan Timur, Trenggalek provinsi Jawa Timur dan Lombok Barat provinsi Nusa
                        Tenggara Barat.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pemenang Penghargaan</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Tim Professional</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Layanan 24/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Harga Bersaing</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Konsultasi Gratis</h5>
                            <h4 class="text-primary mb-0">0813 3118 1861</h4>
                        </div>
                    </div>
                    <a href="https://wa.me/6281331181861" target="_blank"
                        class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Hubungi Kami</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ Vite::image('about-us.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Features Start -->
    <section id="feature" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Kenapa Harus Memilih Kami</h5>
                <h1 class="mb-0">Kami Disini Untuk Mewujudkan Kubah Masjid Impian Anda</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <x-feature-item icon="fa-mosque" title="Masjid Simbol Peradaban"
                            description="Tujuan kami, menjadi mitra yang jujur dan amanah untuk menjadikan masjid yang mencerminkan kebesaran peradaban Islam, sehingga akan menjadi kebanggaan setiap umat Islam di sekitar masjid khususnya maupun secara keseluruhan pada umumnya." />

                        <x-feature-item icon="fa-trophy" title="Diakui dalam Kualitas dan Dedikasi"
                            description="Prestasi kami bukan hanya dalam membangun, tetapi juga diakui melalui penghargaan dan kepercayaan pelanggan atas kualitas dan integritas yang kami jaga." />
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="{{ Vite::image('feature.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <x-feature-item icon="fa-tools" title="Lebih Dari Sekedar Membangun"
                            description="Kami adalah tim Duta Madinna, yang profesional dan berpengalaman di bidang jasa konstruksi kubah masjid. Suatu kehormatan bagi kami dapat menjadi mitra Anda dan bangga ikut berpartisipasi mewujudkan kubah masjid impian Anda." />
                        <x-feature-item icon="fa-smile" title="Kepuasan Anda, Tujuan Kami"
                            description="Kami membantu Anda membangun kubah masjid yang Anda inginkan. Selama proses pembangunan, kami bekerjasama dengan Anda untuk memastikan Anda benar-benar puas sesuai harapan yang Anda inginkan." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Start -->


    <!-- Service Start -->
    <section id="service" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">Solusi Berbagai Kubah Masjid Bagi Anda</h1>
            </div>
            <div class="row g-5">
                <x-service-item title="Kubah Masjid Enamel"
                    description="Material pelapis pada metal yang sudah lama dikenal terutama pada alat-alat rumah tangga."
                    wow-delay="0.3s" data-bs-toggle="modal" data-bs-target="#modal-enamel" />
                <x-service-item title="Kubah Masjid Alumunium"
                    description="Kubah masjid dengan sistem panel yang berbahan dasar plat aluminium dengan ketebalan bervariasi."
                    wow-delay="0.6s" data-bs-toggle="modal" data-bs-target="#modal-alumunium" />
                <x-service-item title="Kubah Masjid Galvalum"
                    description="Material baja dengan pelapisan yang mengandung unsur alumunium dan zinc"
                    wow-delay="0.9s" data-bs-toggle="modal" data-bs-target="#modal-galvalum" />
                <x-service-item title="Kubah Masjid Stainless Gold"
                    description="Material stainless steel berlapis emas yang kuat dan tampil mewah." wow-delay="0.3s"
                    data-bs-toggle="modal" data-bs-target="#modal-stainless-gold" />
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Segera Hubungi Kami</h3>
                        <p class="text-white mb-3">Dapatkan konsultasi sepuasnya gratis</p>
                        <h4 class="text-white mb-0">0813 3118 1861</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->


    <!-- Dome Design Start -->
    <section id="dome-design" class="py-3 bg-light wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Desain Kubah Masjid Kami</h5>
                <h1 class="mb-0">Desain Kubah Terbaik Untuk Berbagai Proyek Masjid</h1>
            </div>
            <div class="row g-4">
                <x-dome-design-card
                    description="Desain klasik yang sering digunakan pada masjid-masjid tradisional. Memiliki bentuk setengah bola yang simetris dan elegan."
                    image="half-circle-type.png" wow-delay="0.3s" />
                <x-dome-design-card
                    description="Terinspirasi dari bentuk payung yang terbuka, kubah ini memberikan kesan ringan namun tetap megah pada tampilan masjid."
                    image="umbrella-type.png" wow-delay="0.6s" />
                <x-dome-design-card
                    description="Memiliki motif dan bentuk menyerupai buah nanas, cocok untuk masjid dengan nuansa dekoratif dan unik."
                    image="pineapple-type.png" wow-delay="0.9s" />
                <x-dome-design-card
                    description="Mengadaptasi desain dari Masjid Nabawi, kubah ini memberikan kesan Islami yang kuat dan elegan."
                    image="madinna-type.png" wow-delay="0.3s" />
                <x-dome-design-card
                    description="Bentuk khas yang menyerupai bawang, banyak digunakan pada arsitektur Timur Tengah dan Asia Selatan."
                    image="onion-type.png" wow-delay="0.6s" />
            </div>
            <div class="text-center mt-5">
                <a href="https://wa.me/6281331181861" target="_blank"
                    class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Hubungi Kami</a>
            </div>
        </div>
    </section>
    <!-- Dome Design End -->


    <!-- Quote Start -->
    <section id="contact" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Informasi Harga</h5>
                        <h1 class="mb-0">Silakan Hubungi Kami Untuk Menanyakan Harga Persisnya</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4">
                                <i class="fa fa-reply text-primary me-3"></i>
                                Dibalas dalam 1x24 jam
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                Layanan 24/7
                            </h5>
                        </div>
                    </div>
                    <p class="mb-4">Duta Madinna siap membantu Anda mewujudkan kubah masjid impian dengan harga
                        terbaik dan layanan terpercaya. Konsultasikan kebutuhan Anda sekarang juga, dan dapatkan
                        penawaran yang sesuai dengan keinginan dan anggaran Anda. Hubungi kami, dan kami akan segera
                        merespons dalam waktu kurang dari 24 jam!</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Hubungi Nomor Di Bawah Ini</h5>
                            <h4 class="text-primary mb-0">0813 3118 1861</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 p-lg-3 wow zoomIn"
                        data-wow-delay="0.9s">
                        <form id="quoteForm">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input id="nameField" type="text" class="form-control bg-light border-0"
                                        placeholder="Nama" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select id="serviceField" class="form-select bg-light border-0"
                                        style="height: 55px;">
                                        <option selected>Pilih Layanan</option>
                                        <option value="Kubah Masjid Enamel">Kubah Masjid Enamel</option>
                                        <option value="Kubah Masjid Alumunium">Kubah Masjid Aluminium</option>
                                        <option value="Kubah Masjid Galvalum">Kubah Masjid Galvalum</option>
                                        <option value="Ornamen Kubah">Ornamen Kubah</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea id="messageField" class="form-control bg-light border-0" rows="3" placeholder="Pesan"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote End -->


    <!-- Portofolio Start -->
    <section id="portfolio" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Portofolio</h5>
                <h1 class="mb-0">Beberapa Jejak Karya dan Inovasi Kami</h1>
            </div>
            <div class="owl-carousel portfolio-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach ($portfolios as $portfolio)
                    <x-data-card :model="$portfolio" />
                @endforeach
            </div>
            <div class="d-flex justify-content-center py-2">
                <button type="button" class="btn btn-primary me-2" id="porto-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button type="button" class="btn btn-primary" id="porto-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- Portofolio End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5 justify-content-between">
                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="text-light mb-0">Hubungi Kami</h3>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0"> Tugu, Sukorejo, Kec. Gandusari, Kabupaten Trenggalek, Jawa Timur 66372</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0"> Peresak, Kec. Narmada, Kabupaten Lombok Barat, Nusa Tenggara Bar. 83371 </p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0"> Jl. Brigjen H. Hasan Basri No.26, Rantau Kiwa, Kec. Tapin Utara, Kabupaten Tapin, Kalimantan Selatan 71114 </p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0"> Jl. Sultan Hamid II No.7c, Tj. Hilir, Kec. Pontianak Tim., Kota Pontianak, Kalimantan Barat 78243 </p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-envelope-open text-primary me-2"></i>
                        <p class="mb-0">kubahdutamadinnah@gmail.com</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone text-primary me-2"></i>
                        <p class="mb-0">0813 3118 1861</p>
                    </div>
                    <div class="d-flex mt-4">
                        <a class="btn btn-primary btn-square me-2"
                            href="https://www.facebook.com/61552978706701/"><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/dutamadinna.kubah/"><i
                                class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-primary btn-square me-2" href="https://www.tiktok.com/@dutamadinnakubah" target="_blank"><i 
                                class="fab fa-tiktok fw-normal"></i></a>
                        <a class="btn btn-primary btn-square" href="https://www.youtube.com/@DUTAMADINNAKUBAH" target="_blank"><i 
                                class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-12 py-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.636315152208!2d111.69685739113497!3d-8.138456270984573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7919887ace7a19%3A0xef6251c0f36397aa!2sPT.%20Duta%20Madinna%20Kubah%20Trenggalek!5e0!3m2!1sen!2sid!4v1748014481349!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="location-maps"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy;
                            <a class="text-white border-bottom" href="#">Duta Madinna Kubah</a>. Hak Cipta
                            Dilindungi.
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML
                                Codex</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <button class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></button>

    <x-material-modal id="modal-enamel" title="Kubah Masjid Enamel" image="enamel.png"
        description="Bahan terbuat dari plat steel low carbon (standar enamel), finishing enamel coating PT. Maspion tebal 1 - 1,2 mm. Garansi warna resmi dari PT. Maspion."
        :benefits="['Tahan Panas', 'Tahan Karat', 'Warna lebih tahan lama (>20 tahun)']" />
    <x-material-modal id="modal-alumunium" title="Kubah Masjid Alumunium" image="alumunium.png"
        description="Dari bahan Plat Alumunium 0,8 mm, dengan pengecatan menggunakan system powder coating."
        :benefits="['Tahan Panas', 'Tahan Karat', 'Warna Awet', 'Mudah dibersihkan']" />
    <x-material-modal id="modal-galvalum" title="Kubah Masjid Galvalum" image="galvalum.png"
        description="Plat Galvalium tebal 0,45mm, dengan pengecatan menggunakan system powder coating khusus aplikasi untuk eksterior."
        :benefits="['Tahan Panas', 'Tahan Karat', 'Warna Awet', 'Mudah dibersihkan (Selfwashing) oleh air hujan saja']" />
    <x-material-modal id="modal-stainless-gold" title="Kubah Masjid Stainless Gold" image="stainless-gold.png"
        description="Bahan stainless dengan kilauan warna emas memberikan kesan modern dan mewah. Lebih efisien karena tidak memerlukan proses pengecatan."
        :benefits="['Bahan Ringan', 'Lentur dan Kuat', 'Tahan korosi', 'Warna tidak mudah pudar']" />

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Inisialisasi Carousel + Tombol -->
    <script>
        $(document).ready(function () {
            $('.promo-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });
            
            $('.protofolio-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });
    
            $('#promo-prev').click(function () {
                $('.promo-carousel').trigger('prev.owl.carousel');
            });
            $('#promo-next').click(function () {
                $('.promo-carousel').trigger('next.owl.carousel');
            });
            $('#porto-prev').click(function () {
                $('.portfolio-carousel').trigger('prev.owl.carousel');
            });
            $('#porto-next').click(function () {
                $('.portfolio-carousel').trigger('next.owl.carousel');
            });
        });
    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
