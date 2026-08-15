@extends('layouts.app')

@section('content')

<!-- HERO -->
<section id="hero" class="hero">

    <img
        src="{{ asset('assets/images/hero.png') }}"
        class="hero-bg"
        alt="Hero">

    <div class="container-fluid px-lg-5 px-4">

        <div class="row align-items-center">

            <div class="col-lg-7" data-aos="fade-right">

                <h1 class="hero-title">
                    Mitra Profesional
                    <br>
                    Dalam Konstruksi
                    <br>
                    <span>& Berbagai Layanan</span>
                </h1>

                <p class="hero-text">
                    CV. ZAKI merupakan perusahaan yang bergerak di bidang
                    konstruksi, perdagangan, perbengkelan, dan catering makanan.
                </p>

                <p class="hero-text">
                    Berdiri sejak tahun 2012, kami berkomitmen menghadirkan
                    pelayanan yang profesional, berkualitas, terpercaya,
                    serta selalu mengutamakan kepuasan pelanggan.
                </p>

                <div class="hero-buttons">

                    <a href="#services" class="btn btn-warning btn-lg">
                        <i class="bi bi-grid-fill me-2"></i>
                        Layanan Kami
                    </a>

                    <a href="#about" class="btn btn-outline-light btn-lg">
                        Tentang Kami
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ABOUT -->
<section id="about"
         class="py-5"
         data-aos="fade-up">

    <div class="container ps-lg-2">
        <div class="dot-pattern"></div>

        <div class="row align-items-center">

            <div class="col-lg-6">

                <div class="section-title">

    <span></span>

    <small>TENTANG KAMI</small>

</div>

                <h2 class="section-heading">
                 CV. ZAKI,
                 Mitra Terpercaya
                 Dalam Berbagai Bidang Usaha
                </h2>

                <p>

                    CV. ZAKI merupakan perusahaan yang berdiri sejak
                    tahun <strong>2012</strong> dan bergerak di bidang
                    <strong>jasa konstruksi, perdagangan, perbengkelan,
                    serta catering makanan</strong>.
                    Kami berkomitmen memberikan pelayanan yang profesional,
                    berkualitas, terpercaya, dan berorientasi pada kepuasan pelanggan.

                </p>

                <p>

                    Dengan pengalaman dalam berbagai proyek dan layanan,
                    CV. ZAKI senantiasa mengedepankan kualitas pekerjaan,
                    ketepatan waktu, serta tanggung jawab dalam setiap
                    pelaksanaan pekerjaan guna membangun hubungan jangka
                    panjang dengan seluruh mitra dan pelanggan.
                </p>

                <div class="about-features">

    <div class="feature-item">
        <i class="bi bi-check-circle-fill"></i>
        <span>Profesional dan Berpengalaman</span>
    </div>

    <div class="feature-item">
        <i class="bi bi-check-circle-fill"></i>
        <span>Pelayanan Berkualitas dan Terpercaya</span>
    </div>

    <div class="feature-item">
        <i class="bi bi-check-circle-fill"></i>
        <span>Mengutamakan Kepuasan Pelanggan</span>
    </div>

</div>

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">

                <img
                    src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=900"
                    class="img-fluid rounded-4 shadow"
                    alt="About">

            </div>

        </div>

    </div>

</section>

<!-- STATISTICS -->
<section class="py-5 bg-warning">

    <div class="container ps-lg-2">
        <div class="dot-pattern"></div>

        <div class="row text-center statistics-row">

            <div class="col-md-3 statistics-item"
                 data-aos="fade-up"
                 data-aos-delay="100">

                <h1 class="display-5 fw-bold text-white counter"
                    data-target="2012">
                    0
                </h1>

                <p class="text-white mb-0">
                    Tahun Berdiri
                </p>

            </div>

            <div class="col-md-3 statistics-item"
                 data-aos="fade-up"
                 data-aos-delay="200">

                <h1 class="display-5 fw-bold text-white counter"
                    data-target="4">
                    0
                </h1>

                <p class="text-white mb-0">
                    Bidang Usaha
                </p>

            </div>

            <div class="col-md-3 statistics-item"
                 data-aos="fade-up"
                 data-aos-delay="300">

                <h1 class="display-5 fw-bold text-white counter"
                    data-target="100"
                    data-suffix="%">
                    0
                </h1>

                <p class="text-white mb-0">
                    Komitmen
                </p>

            </div>

            <div class="col-md-3 statistics-item"
                 data-aos="fade-up"
                 data-aos-delay="400">

                <h1 class="display-5 fw-bold text-white counter"
                    data-target="24"
                    data-suffix=" / 7">
                    0
                </h1>

                <p class="text-white mb-0">
                    Pelayanan
                </p>

            </div>

        </div>

    </div>

</section>

<!-- WHY CHOOSE US -->
<section class="py-5">

    <div class="container ps-lg-2">
        <div class="dot-pattern"></div>

        <div class="text-center mb-5">

            <h2 class="fw-bold mobile-title">
    Mengapa Memilih CV. ZAKI?
</h2>

            <p class="text-muted">
                Kami berkomitmen memberikan pelayanan terbaik dalam setiap proyek.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card border-0 shadow h-100 p-4 text-center service-card">

                    <div class="display-4 text-warning">

    <i class="bi bi-person-workspace"></i>

</div>

                    <h5 class="fw-bold mt-3">
                        Profesional
                    </h5>

                    <p>
                        Didukung oleh sumber daya yang profesional dan berpengalaman dalam memberikan pelayanan terbaik di setiap pekerjaan.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow h-100 p-4 text-center service-card">

                    <div class="display-4 text-warning">

    <i class="bi bi-award-fill"></i>

</div>

                    <h5 class="fw-bold mt-3">
                        Kualitas Terbaik
                    </h5>

                    <p>
                        Kami selalu mengutamakan kualitas pekerjaan dan pelayanan agar setiap proyek memberikan hasil yang maksimal.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow h-100 p-4 text-center service-card">

                    <div class="display-4 text-warning">

    <i class="bi bi-hand-thumbs-up"></i>

</div>

                    <h5 class="fw-bold mt-3">
                        Kepuasan Pelanggan
                    </h5>

                    <p>
                        Kepuasan pelanggan menjadi prioritas utama melalui pelayanan yang terpercaya, bertanggung jawab, dan tepat waktu.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- VISI MISI -->
<section class="vision py-5">

    <div class="container ps-lg-2">
        <div class="dot-pattern"></div>

        <div class="text-center mb-5">

            <span class="badge bg-warning text-dark px-3 py-2">
                VISI & MISI
            </span>

            <h2 class="fw-bold mt-3 mobile-title">
    Komitmen Kami
</h2>

            <p class="text-muted">
                Nilai-nilai yang menjadi landasan dalam menjalankan setiap pekerjaan.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="card border-0 shadow h-100 p-4">

                    <div class="display-5 mb-3 text-warning">

    <i class="bi bi-compass-fill"></i>

</div>

                    <h3 class="fw-bold text-warning">
                        Visi
                    </h3>

                    <p class="mt-3 mb-0">

                        Menjadi perusahaan jasa konstruksi, perdagangan, perbengkelan & catering makanan
                        terbaik dan terpercaya, dengan mengedepankan kepuasan pekerja dan pelanggan

                    </p>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="card border-0 shadow h-100 p-4">

                    <div class="display-5 mb-3 text-warning">

    <i class="bi bi-flag-fill"></i>

</div>

                    <h3 class="fw-bold text-warning">
                        Misi
                    </h3>

                    <ul class="mt-3">

                        <li>Konsisten menjaga kualitas dan daya saing produk</li>

                       

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- SERVICES -->
<section id="services" class="py-5 bg-light">

    <div class="container ps-lg-2">
        <div class="dot-pattern"></div>

        <div class="text-center mb-5">

    <div class="section-decoration"></div>

    <h2 class="fw-bold mobile-title">
    Layanan Kami
</h2>

    <p class="text-muted">
        Bidang usaha yang dijalankan oleh CV. ZAKI
    </p>

</div>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="card h-100 border-0 shadow service-card text-center p-4">

                   <div class="service-icon mb-3 text-warning">
    <i class="bi bi-building-fill-gear"></i>
</div>

                    <h5 class="fw-bold">
                        Jasa Konstruksi
                    </h5>

                    <p class="text-muted mt-3">
                        Melayani pembangunan gedung, jalan,
                        jembatan, renovasi, serta berbagai 
                        pekerjaan konstruksi lainnya.
                    </p>

                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 border-0 shadow service-card text-center p-4">

                    <div class="service-icon mb-3 text-warning">
    <i class="bi bi-truck"></i>
</div>

                    <h5 class="fw-bold">
                        Pengadaan Barang
                    </h5>

                    <p class="text-muted mt-3">
                        Menyediakan berbagai kebutuhan barang
                        sesuai spesifikasi dan kebutuhan pelanggan
                        maupun instansi.
                    </p>

                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 border-0 shadow service-card text-center p-4">

                    <div class="service-icon mb-3 text-warning">
    <i class="bi bi-tools"></i>
</div>

                    <h5 class="fw-bold">
                        Perbengkelan
                    </h5>

                    <p class="text-muted mt-3">
                        Melayani pekerjaan perbengkelan
                        dan perawatan berbagai peralatan
                        secara profesional.
                    </p>

                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 border-0 shadow service-card text-center p-4">

                 <div class="service-icon mb-3 text-warning">
    <i class="bi bi-fork-knife"></i>
</div>

                    <h5 class="fw-bold">
                        Catering Makan
                    </h5>

                    <p class="text-muted mt-3">
                        Menyediakan layanan catering
                        makanan dengan kualitas terbaik
                        untuk berbagai kegiatan dan kebutuhan.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>

<!-- ===================== -->
<!-- GALLERY -->
<!-- ===================== -->
 <section id="gallery" class="py-5 bg-light">

    <div class="container">

        <div class="gallery-header">

            <span class="section-line"></span>

            <small class="text-warning fw-semibold text-uppercase">
                Dokumentasi
            </small>

            <h2 class="display-5 fw-bold mobile-title">
    Dokumentasi Proyek
</h2>

            <p class="text-muted">
                Beberapa dokumentasi kegiatan dan pekerjaan
                yang telah dilaksanakan oleh CV. ZAKI.
            </p>

        </div>

        <!-- Gallery -->


       <div class="row g-4">

    <!-- FOTO 1 -->
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">

        <div class="gallery-card shadow rounded-4 overflow-hidden bg-white">

             <a href="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1600&q=80"
           class="glightbox"
           data-gallery="projects"
           data-type="image">

            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=700&q=80"
                 class="gallery-img"
                 alt="Jasa Konstruksi">

        </a>

            <div class="p-3">

                <h6 class="fw-bold mb-1">
                    jasa konstruksi
                </h6>

                <small class="text-muted">

                    

                    Dokumentasi pekerjaan konstruksi

                </small>

            </div>

        </div>

    </div>

    <!-- FOTO 2 -->
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">

        <div class="gallery-card shadow rounded-4 overflow-hidden bg-white">

 <a href="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1600&q=80"
           class="glightbox"
           data-gallery="projects"
           data-type="image">

            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=700&q=80"
                 class="gallery-img"
                 alt="Pembangunan Gedung">

        </a>
            <div class="p-3">

                <h6 class="fw-bold mb-1">
                    Pembangunan Gedung
                </h6>

                <small class="text-muted">

                   

                     Kegiatan pembangunan gedung

                </small>

            </div>

        </div>

    </div>

    <!-- FOTO 3 -->
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">

        <div class="gallery-card shadow rounded-4 overflow-hidden bg-white">

                    <a href="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1600&q=80"
           class="glightbox"
           data-gallery="projects"
           data-type="image">

            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=700&q=80"
                 class="gallery-img"
                 alt="Pengadaan Barang">

        </a>


            <div class="p-3">

                <h6 class="fw-bold mb-1">
                    Pengadaan Barang
                </h6>

                <small class="text-muted">

                    

                   Pengadaan dan penyediaan barang

                </small>

            </div>

        </div>

    </div>

    <!-- FOTO 4 -->
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">

        <div class="gallery-card shadow rounded-4 overflow-hidden bg-white">

<a href="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1600&q=80"
           class="glightbox"
           data-gallery="projects"
           data-type="image">

            <img src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=700&q=80"
                 class="gallery-img"
                 alt="Perbengkelan">

        </a>

            <div class="p-3">

                <h6 class="fw-bold mb-1">
                  Perbengkelan
                </h6>

                <small class="text-muted">

                    

                 Pekerjaan perbengkelan dan perawatan


                </small>

            </div>

        </div>

    </div>

    <!-- FOTO 5 -->
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">

        <div class="gallery-card shadow rounded-4 overflow-hidden bg-white">

<a href="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=1600&q=80"
           class="glightbox"
           data-gallery="projects"
           data-type="image">

            <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=700&q=80"
                 class="gallery-img"
                 alt="Catering Makanan">

        </a>

            <div class="p-3">

                <h6 class="fw-bold mb-1">
                    Catering Makanan
                </h6>

                <small class="text-muted">

                    

                    Penyediaan makanan dan catering

                </small>

            </div>

        </div>

    </div>

    <!-- FOTO 6 -->
    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">

        <div class="gallery-card shadow rounded-4 overflow-hidden bg-white">

                   <a href="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1600&q=80"
           class="glightbox"
           data-gallery="projects"
           data-type="image">

            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=700&q=80"
                 class="gallery-img"
                 alt="Dokumentasi Kegiatan">

        </a>

            <div class="p-3">

                <h6 class="fw-bold mb-1">
                    Dokumentasi Kegiatan
                </h6>

                <small class="text-muted">

                    

                    Dokumentasi aktivitas CV.ZAKI

                </small>

            </div>

        </div>

    </div>

</div>

    </div>

</section>

<!-- ===================== -->
<!-- CALL TO ACTION -->
<!-- ===================== -->

<section class="py-5 bg-warning"
         data-aos="fade-up">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-12 text-center">

                <h2 class="fw-bold text-white mb-3">

                    Siap Menjadi Mitra Terbaik Anda?

                </h2>

                <p class="text-white mb-0">

                    CV. ZAKI siap menjadi mitra terpercaya
                    dalam bidang jasa konstruksi, perdagangan,
                    perbengkelan, dan catering makanan dengan 
                    mengedepankan kualitas, profesionalisme, 
                    serta kepuasan pelanggan.
                </p>

            </div>

            

        </div>

    </div>

</section>






@endsection