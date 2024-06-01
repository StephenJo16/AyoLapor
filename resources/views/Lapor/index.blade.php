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
                <h1><a href="/"><span>AyoLapor</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="/#about">Tentang AyoLapor</a></li>
                    <li><a class="nav-link scrollto" href="/#category">Kategori</a></li>
                    <li><a class="nav-link scrollto" href="/#testimoni">Testimoni</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('Lapor.index') }}">Tanggapan</a></li>
                    <li><a class="nav-link scrollto" href="#feedback">Feedback</a></li>
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
                        <h1>Silahkan Lihat Tanggapan Atas <span> Laporan Anda</span></h1>
                        <h2>Layanan Aspirasi dan Pengaduan Online Masyarakat</h2>
                        <div class="text-center text-lg-start">
                            <a href="#laporan" class="btn-get-started scrollto">Tanggapan</a>
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


        <!-- ======= Category Section ======= -->
        <section id="laporan" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tanggapan Laporan Masyarakat</h2>
                    <p>Tanggapan Laporan </p>
                </div>
                <form class="form" method="get" action="{{ route('search') }}">
                    <div class="form-group w-100 mb-3">
                        <label for="search" class="d-block mr-2">Pencarian</label>
                        <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                            placeholder="Masukkan NIK">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
                </form>
                <div class="col-md-12 mt-3">
                    <div class="card card-plain">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table datatable">
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Status</th>
                                            {{-- <th style="text-align: center;">NIK</th> --}}
                                            <th style="text-align: center;">Lokasi</th>
                                            <th style="text-align: center;">Keterangan Kejadian</th>
                                            <th style="text-align: center;">Tanggapan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @if (count($aspirasi) > 0)
                                                @foreach ($aspirasi as $key => $aspirasi)
                                                    <th style="text-align: center;">{{ $key + 1 }}</th>
                                                    <td style="text-align: center;">{{ $aspirasi->status }}</td>
                                                    {{-- <td style="text-align: center;">{{ $aspirasi->input['nik'] }} --}}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $aspirasi->input['lokasi'] }}
                                                    </td>
                                                    <td style="text-align: center;">{{ $aspirasi->input['ket'] }}
                                                    </td>
                                                    <td style="text-align: center;">{{ $aspirasi->feedback }}
                                                    </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </section>
        <center>
            <section id="feedback" class="features">
                <footer id="footer">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-20  footer-newsletter" id="rating">
                                    <h4>Feedback</h4>
                                    <p>Berikan Feedback Anda kepada kami!</p>
                                    <form action="{{ route('Comment.store') }}" method="post">
                                        @csrf
                                        <div class="form-group md-5">
                                            <input class="form-control hideme" type="text" name="comment">
                                            <input type="submit" value="Send">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </center>
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
