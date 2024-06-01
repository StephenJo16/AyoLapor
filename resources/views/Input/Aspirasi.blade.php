<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AyoLapor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Bootslander/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('Bootslander/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Bootslander/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Bootslander/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bootslander/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Bootslander/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bootslander/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Bootslander/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Bootslander/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Bootslander/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander - v4.7.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span>AyoLapor</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang AyoLapor</a></li>
                    <li><a class="nav-link scrollto" href="#category">Kategori</a></li>
                    <li><a class="nav-link scrollto" href="#testimoni">Testimoni</a></li>
                    <li><a class="nav-link scrollto active" href="{{ route('Lapor.index') }}">Tanggapan</a></li>
                    <li><a class="nav-link scrollto" href="#testimoni">Feedback</a></li>
                    <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('login') }}">Admin</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Sampaikan semua keluhan Anda melalui <span>AyoLapor!</span></h1>
                        <h2>Layanan Aspirasi dan Pengaduan Online Masyarakat</h2>
                        <div class="text-center text-lg-start">
                            <a href="#lapor" class="btn-get-started scrollto">LAPOR!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('Bootslander/assets/img/Head.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="page-section about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
                        <img src="{{ asset('Bootslander/assets/img/Phone.png') }}" class="img-fluid animated" alt="">
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Apa itu AyoLapor?</h3>
                        <p><b>AyoLapor</b> merupakan sebuah website yang dirancang oleh pemerintah Republik Indonesia
                            yang bertujuan untuk membantu
                            setiap organisasi penyelenggara mengorganisir setiap pengaduan pelayanan publik di seluruh
                            Indonesia agar dapat berjalan dengan efektif.</p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-chat-dots"></i></div>
                            <h4 class="title"><a href="">Tulis Laporan</a></h4>
                            <p class="description">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-capslock-fill"></i></div>
                            <h4 class="title"><a href="">Proses Verifikasi</a></h4>
                            <p class="description">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada
                                instansi berwenang</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-clipboard-check"></i></i></div>
                            <h4 class="title"><a href="">Proses Tindak Lanjut</a></h4>
                            <p class="description">Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan
                                Anda</p>
                        </div>
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-emoji-smile"></i></div>
                            <h4 class="title"><a href="">Beri Tanggapan</a></h4>
                            <p class="description">Anda dapat menanggapi kembali balasan yang diberikan oleh instansi
                                dalam waktu 10 hari</p>
                        </div>
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-check-circle"></i></div>
                            <h4 class="title"><a href="">Selesai</a></h4>
                            <p class="description">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Category Section ======= -->
        <section id="category" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kategori</h2>
                    <p>Kategori-kategori Yang Kami Terima</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="ri-moon-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Agama</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="ri-hospital-line" style="color: #5578ff;"></i>
                            <h3><a href="">Kesehatan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="ri-women-line"></i>
                            <h3><a href="">Kesetaraan Gender</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ri-virus-line" style="color: #e361ff;"></i>
                            <h3><a href="">Corona Virus</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                            <i class="ri-building-line" style="color: #47aeff;"></i>
                            <h3><a href="">Lingkungan Hidup dan Kehutanan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <i class="ri-leaf-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Energi dan Sumber Daya Alam</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
                            <i class="ri-bank-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Ekonomi dan Keuangan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                            <i class="ri-emotion-happy-line" style="color: #4233ff;"></i>
                            <h3><a href="">Sosial dan Kesejahteraan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
                            <i class="ri-global-line" style="color: #b2904f;"></i>
                            <h3><a href="">Teknologi Informasi dan Komunikasi</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                            <i class="ri-file-user-line" style="color: #b20969;"></i>
                            <h3><a href="">Kependudukan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
                            <i class="ri-team-line" style="color: #ff5828;"></i>
                            <h3><a href="">Ketenagakerjaan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
                            <i class="ri-send-plane-line" style="color: #29cc61;"></i>
                            <h3><a href="">Perhubugan</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span>9.981</span>
                            <p>Kepuasan Masyarakat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span>10.871</span>
                            <p>Laporan Telah Selesai</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span>24/7</span>
                            <p>Jam Kerja</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span>25</span>
                            <p>Ketenagakerjaan</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimoni" class="testimonials">
            <div class="container">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Dengan adanya website <b>AyoLapor</b> sangat memudahkan saya dalam melaporkan
                                keluhan-keluhan yang saya alami
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="lapor" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Artha Tower, South Jakarta, DKI Jakarta</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>ayolapor@mail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>021-7860813</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <div class="section-title" data-aos="fade-up">
                            <h2>Lapor</h2>
                            <p>Silahkan Sampaikan Keluhan Anda!</p>
                        </div>
                        <form action="{{ route('Input.store') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <select name="nik" class="form-control @error('nik') is-invalid @enderror mb-4">
                                        <option value="">Pilih NIK Anda</option>
                                        @foreach (App\Models\Penduduk::all() as $p)
                                            <option value="{{ $p->nik }}">{{ $p->nik }}</option>
                                        @endforeach
                                    </select>
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </select>
                                </div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori"
                                        class="form-control @error('kategori') is-invalid @enderror mb-4">
                                        <option value="">Pilih Kategori Laporan Anda</option>
                                        @foreach (App\Models\Kategori::all() as $k)
                                            <option value="{{ $k->id_kategori }}">{{ $k->ket_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('ket_kategori')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </select>
                                </div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="lokasi" name="lokasi" type="text"
                                    placeholder="Masukkan Lokasi Kejadian" data-sb-validations="required" />
                                <label for="lokasi">Lokasi</label>
                                <div class="invalid-feedback" data-sb-feedback="lokasi:required">Lokasi Kejadian
                                    dibutuhkan!
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ket" name="ket" type="text"
                                    placeholder="Masukkan Keterangan Kejadian" data-sb-validations="required" />
                                <label for="ket">Keterangan</label>
                                <div class="invalid-feedback" data-sb-feedback="ket:required">Keterangan Kejadian
                                    dibutuhkan!
                                </div>
                            </div>
                            <!-- Message input-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Send</button>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>AyoLapor</h3>
                            <p class="pb-3"><em>Sampaikan semua keluhan Anda kepada pemerintah melalui
                                    website AyoLapor!</em></p>
                            <p>
                                Artha Tower <br>
                                South Jakarta, DKI Jakarta<br><br>
                                <strong>Phone:</strong> 021-7860813<br>
                                <strong>Email:</strong> Ayolapor@mail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Stephen Jo <strong><span>AyoLapor</span></strong>
            </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Bootslander/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('Bootslander/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Bootslander/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Bootslander/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Bootslander/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Bootslander/assets/js/main.js') }}"></script>
</body>

</html>
