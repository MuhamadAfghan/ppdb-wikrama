<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/img/ikon.png" rel='shortcut icon'>

    <title>PPDB SMK Wikrama Bogor</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="https://ppdb.smkwikrama.sch.id/assets/template/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://ppdb.smkwikrama.sch.id/assets/template/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://ppdb.smkwikrama.sch.id/assets/template/plugins/slick/slick.css">
    <link rel="stylesheet" href="https://ppdb.smkwikrama.sch.id/assets/template/plugins/slick/slick-theme.css">
    <link rel="stylesheet"
        href="https://ppdb.smkwikrama.sch.id/assets/template/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://ppdb.smkwikrama.sch.id/assets/template/plugins/aos/aos.css">
    <link rel="stylesheet" type="https://ppdb.smkwikrama.sch.id/text/css"
        href="assets/landing page/css/font-awesome.css">

    <!-- CUSTOM CSS -->
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/style.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/preloader.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/header.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/superiority.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/slider-slick.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/superiority.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/contact.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/slider.css" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/additional.css" rel="stylesheet">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <div class="modal" id="success-msg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-0 m-0">

                <div class="modal-body">
                    <div class="alert alert-success mb-0 text-center" role="alert" style="height: fit-content;">
                        Pesan telah berhasil dikirim!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="https://ppdb.smkwikrama.sch.id/img/Logo.png" alt="" height="30px" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#beranda" class="active">Beranda</a></li>
                            <li><a href="#jurusan">Jurusan</a></li>
                            <li><a href="#features">Tentang Kami</a></li>
                            <li><a href="#testimonials">Testimoni</a></li>
                            <li><a href="#contact-us">Hubungi Kami</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!--====================================
    =            Hero Section            =
    =====================================-->
    <section class="gradient-banner"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.6),
        rgba(0,0,0,0.6)
        ),
        url('https://ppdb.smkwikrama.sch.id/img/desain2.png'); background-repeat:no-repeat; background-size:cover">

        <div class="container mt-4" id="beranda">
            <div class="row align-items-center">
                <div class="col-12 order-2 order-md-1 text-center text-md-left mt-5">
                    <h2 class="text-white font-weight-bold mb-3">PPDB TP 2024-2025<br>SMK Wikrama Bogor</h2>
                    <p class="text-white mb-5">Ayo! segera daftarkan dirimu ke SMK Wikrama <br>dengan cara klik
                        <b>PENDAFTARAN PPDB</b> dibawah ini! <br><strong>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul
                            Karimah.</strong>
                    </p>
                    <a href="{{ route('register') }}"
                        class="btn btn-main-md shadow-md bordered font-weight-bold">Pendaftaran PPDB</a>
                </div>

            </div>
        </div>
    </section>
    <!--====  End of Hero Section  ====-->

    <section class="pt-0 position-relative pull-top mb-5" id="jumbotron-card">
        <div class="container">
            <div class="rounded shadow p-5 bg-white">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-0 text-center">
                        <h3 class="font-weight-bold text-capitalize h5 ">MOTTO</h3>
                        <p class="regular text-muted">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <h3 class="font-weight-bold text-capitalize h5 ">AFIRMASI</h3>
                        <p class="regular text-muted">Padamu negeri - kami berjanji - lulus Wikrama siap membangun
                            negeri</p>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <h3 class="font-weight-bold text-capitalize h5 ">ATTITUDE</h3>
                        <p class="regular text-muted">Aku ada lingkunganku <br> bahagia</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-0 padding-bottom-0 pl-0 pr-0 pb-0 pt-3 pt-sm-0" id="jurusan">
        <div class="related mt-sm-5 mt-3 mb-sm-5 mb-3 px-5">
            <h2 class="pl-3 font-weight-bold">Jurusan</h2>
            <div class="slick-cultivar mt-4 text-align-center">
                <a href="" class="cardd align-items-center text-decoration-none">

                    <div class="catagory">
                        <h5 class="font-weight-bold " style="color: #02225B;">PPLG</h5>
                    </div>
                    <div class="name">
                        <h4 style="color: #0E0E0E; font-weight: 600;">Pengembangan Perangkat Lunak dan Gim</h4>
                    </div>
                    <div class="desc pe-4 " style="color: #858585;">
                        <strong>Keunggulan</strong><br> Desktop Programming, Web Programming, Mobile Programming,
                        Bussiness Analyst, Database Administration.
                    </div>


                </a>
                <a href="" class="cardd  align-items-center text-decoration-none">

                    <div class="catagory">
                        <h5 class="font-weight-bold" style="color: #02225B;">TJKT</h5>
                    </div>
                    <div class="name">
                        <h4 style="color: #0E0E0E; font-weight: 600;">Teknik Jaringan Komputer dan Telekomunikasi</h4>
                    </div>
                    <div class="desc pe-4" style="color: #858585;">
                        <strong>Keunggulan</strong> <br> Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki
                        sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik
                        Certified Network Associate).
                    </div>


                </a>
                <a href="" class="cardd  align-items-center text-decoration-none">

                    <div class="catagory">
                        <h5 class="font-weight-bold" style="color: #02225B;">DKV</h5>
                    </div>
                    <div class="name">
                        <h4 style="color: #0E0E0E; font-weight: 600;">Desain Komunikasi Visual</h4>
                    </div>
                    <div class="desc pe-4" style="color: #858585;">
                        <strong>Keunggulan</strong> <br> Lulusan dapat memiliki kesempatan kerja yang luas dibidang
                        periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand
                        identity, penerbit majalan/Koran, dll.
                    </div>


                </a>
                <a href="" class="cardd  align-items-center text-decoration-none">

                    <div class="catagory">
                        <h5 class="font-weight-bold" style="color: #02225B;">PMN</h5>
                    </div>
                    <div class="name">
                        <h4 style="color: #0E0E0E; font-weight: 600;">Pemasaran</h4>
                    </div>
                    <div class="desc pe-4" style="color: #858585;">
                        <strong>Keunggulan</strong> <br> Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki
                        kompetensi yang mirip dengan program Multimedia dan Perkantoran. Lulusan program ini diharuskan
                        mampu membuat foto produk, desain, copy writing, dll.
                    </div>


                </a>
                <a href="" class="cardd  align-items-center text-decoration-none">

                    <div class="catagory">
                        <h5 class="font-weight-bold" style="color: #02225B;">MPLB</h5>
                    </div>
                    <div class="name">
                        <h4 style="color: #0E0E0E; font-weight: 600;">Manajemen Perkantoran Lembaga Bisnis</h4>
                    </div>
                    <div class="desc pe-4" style="color: #858585;">
                        <strong>Keunggulan</strong> <br> Kompetensi keahlian Otomatisasi dan Tata Kelola
                        Perkantoran/Administrasi Perkantoran memiliki keunggulan dibidang prestasi peserta didik seperti
                        juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara
                        I lomba olimpiade sekretaris tingkat nasional tahun 2017
                    </div>


                </a>
                <a href="" class="cardd align-items-center text-decoration-none">

                    <div class="catagory">
                        <h5 class="font-weight-bold" style="color: #02225B;">TBG</h5>
                    </div>
                    <div class="name">
                        <h4 style="color: #0E0E0E; font-weight: 600;">Tata Boga</h4>
                    </div>
                    <div class="desc pe-4" style="color: #858585;">
                        <strong>Keunggulan</strong> <br> Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa
                        boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah
                        dipelajari.
                    </div>


                </a>
                <a href="" class="cardd  align-items-center text-decoration-none">

                    <div class="catagory">
                        <h5 class="font-weight-bold" style="color: #02225B;">HTL</h5>
                    </div>
                    <div class="name">
                        <h4 style="color: #0E0E0E; font-weight: 600;">Perhotelan</h4>
                    </div>
                    <div class="desc pe-4" style="color: #858585;">
                        <strong>Keunggulan</strong> <br> Siswa jurusan Perhotelan akan mampu bekerja di departemen yang
                        ada di hotel dengan kompetensi yang mereka pelajari.
                    </div>


                </a>
            </div>
        </div>
    </section>


    <!-- Superiority -->
    <section class="mt-0 pl-0 pr-0 pb-0 pt-3 pt-sm-0" id="features">
        <div class="wrapperInfo mt-sm-5 mt-3 mb-sm-5 mb-3">
            <div class="row">
                <div class="col-12 col-lg-6 content-col">
                    <div class="imagesWrapper">
                        <img src="https://ppdb.smkwikrama.sch.id/assets/landing page/images/Gedung.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row content">
                        <div class="col-6">
                            <iframe src="https://www.youtube.com/embed/_KYS5MT48tM">
                            </iframe>
                        </div>
                        <div class="col-6 wrapperText">
                            <div class="text">
                                <h5 class="font-weight-bold" style="color: #fdd818;">Pembelajaran Tatap Muka Terbatas
                                </h5>
                                <p class="text-white">SMK Wikrama selalu menerapkan protokol kesehatan dengan ketat,
                                    jadi kamu gak perlu khawatir lagi !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row content">
                        <div class="col-6 wrapperText">
                            <div class="text">
                                <h5 class="font-weight-bold" style="color: #fdd818">SMK Unggul dan Berprestasi
                                    Nasional</h5>
                                <p class="text-white">SMK Wikrama Bogor Satu dari 20 SMK Penerima Penghargaan
                                    "SMK Unggul dan Berprestasi" di Indonesia dari KEMENDIKBUD</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.youtube.com/embed/nnp6ZRFEkGU?si=2zowhcoQbnTYe4Iq">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="mt-0 pb-0 pt-2" id="testimonials">
        <div class="timeline-carousel">
            <h2 class="font-weight-bold">Testimoni</h2>
            <div class="timeline-carousel__item-wrapper" data-js="timeline-carousel">
                <!--Timeline item-->
                <div class="timeline-carousel__item">
                    <div class="timeline-carousel__item-inner">
                        <span class="year">2000</span>
                        <span class="name">Akhmad Munito</span>
                        <p>Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan
                            akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini</p>
                        <p class="major">Administrasi Perkantoran (APK)</p>
                    </div>
                </div>
                <!--/Timeline item-->

                <!--Timeline item-->
                <div class="timeline-carousel__item">
                    <div class="timeline-carousel__item-inner">
                        <span class="year">2016</span>
                        <span class="name">Kamaludin</span>
                        <p>Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan
                            siswa.</p>
                        <p class="major">Rekayasa Perangkat Lunak (RPL)</p>
                    </div>
                </div>
                <!--/Timeline item-->

                <!--Timeline item-->
                <div class="timeline-carousel__item">
                    <div class="timeline-carousel__item-inner">
                        <span class="year">2011</span>
                        <span class="name">Lutfi Hakim</span>
                        <p>TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi
                            dari apa yang dibutuhkan di dunia kerja pada umumnya.</p>
                        <p class="major">Rekayasa Perangkat Lunak (RPL)</p>
                    </div>
                </div>
                <!--/Timeline item-->
            </div>
        </div>
        <!--Timeline carousel-->
    </section>


    <!-- ***** Contact Us Start ***** -->
    <section class="px-0 py-5" style="background: #02225B" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title font-weight-bold text-white">Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->
            <div class="row mt-3">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <h5 class="text-white font-weight-bold">Kontak Pendaftaran</h5>
                    <div class="contact-text">
                        <p class="text-white">Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota
                            Bogor, Jawa Barat 16146
                            <br>prohumasi@smkwikrama.sch.id
                        </p>
                        <p class="text-white">CS 1 : <a
                                style="text-decoration: underline !important; font-weight: bold !important"
                                href="https://wa.me/6281909242411">hubungi kami (klik disini)</a>
                            <br>CS 2 : <a style="text-decoration: underline !important; font-weight: bold !important"
                                href="https://wa.me/6281919242411">hubungi kami (klik disini)</a>
                        </p>
                        <a href="https://ppdb.smkwikrama.sch.id/register" class="main-button">Daftar Sekarang</a>
                    </div>
                </div>

                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" method="POST">

                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Nama Lengkap" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="no_wa" type="text" class="form-control" id="no_wa"
                                            required="" value="+62">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="Alamat Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Pesan" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Kirim
                                            Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->

    <!--============================
    =            Footer            =
    =============================-->
    <footer>
        <div class="footer-main bg-light px-0 pb-3 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-5 col-md-5 m-md-auto align-self-center">
                        <div class="block m-auto">
                            <a href="#"><img
                                    src="https://ppdb.smkwikrama.sch.id/assets/landing page/images/logo.png"
                                    alt="footer-logo" width="120" class="ml-2"></a>
                            <!-- Social Site Icons -->
                            <ul class="social-icon list-inline pl-4">
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/school/smkwikramabogor/mycompany/"
                                        target="_blank" style="background-color: #fdd818; color: #333"><i
                                            class="ti-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/smkwikrama/" target="_blank"
                                        style="background-color: #fdd818; color: #333"><i
                                            class="ti-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-12 mt-sm-5 mt-3 mt-lg-0 pl-4 pl-md-0">
                        <div class="block-2">
                            <!-- heading -->
                            <h6 class="text-dark">Tautan</h6>
                            <!-- links -->
                            <ul>
                                <li><a href="#beranda" class="active">Beranda</a></li>
                                <li><a href="#jurusan">Jurusan</a></li>
                                <li><a href="#features">Tentang Kami</a></li>
                                <li><a href="#testimonials">Testimoni</a></li>
                                <li><a href="#contact-us">Hubungi Kami</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-7 mt-sm-5 mt-3 mt-lg-0 pl-4 pl-md-0">
                        <div class="block-2">
                            <!-- heading -->
                            <h6 class="text-dark">Kontak Sekolah</h6>
                            <!-- links -->
                            <ul>
                                <li class="font-weight-bold">0251-8242411</li>
                                <li>Alamat<br />
                                    Jl. Raya Wangun<br />
                                    Kelurahan Sindangsari <br />
                                    Bogor Timur 16720</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center py-4 bg-light" style="border-top: 1px solid #5F6F94">
            <small class="text-secondary">Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> SMK Wikrama
            </small class="text-secondary">
        </div>
    </footer>

    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/jquery/jquery.min.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/slick/slick.min.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/aos/aos.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/landing page/js/scrollreveal.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/google-map/gmap.js"></script>

    <!-- Global Init -->
    <script src="https://ppdb.smkwikrama.sch.id/assets/landing page/js/custom.js"></script>

    <script src="https://ppdb.smkwikrama.sch.id/assets/template/js/script.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contact').submit(function(e) {
            e.preventDefault();

            var urlForm = "https://ppdb.smkwikrama.sch.id/submitMessage";

            var data = {
                name: $('#name').val(),
                no_wa: $('#no_wa').val(),
                email: $('#email').val(),
                message: $('#message').val(),
            }

            $.ajax({
                type: 'POST',
                url: urlForm,
                data: data,
                cache: false,
                success: (data) => {
                    $("#success-msg").modal('show');
                    $('#contact')[0].reset();
                    setTimeout(function() {
                        $("#success-msg").modal('hide');
                    }, 3000);
                },
            });
        });
    </script>

    <script>
        $('.slick-cultivar').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2.08,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                        dots: true
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1,
                        dots: true
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 0.9,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 0.8,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 0.6,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 0.4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 0.4,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>

    <script>
        $.js = function(el) {
            return $('[data-js=' + el + ']')
        };

        function carousel() {
            $.js('timeline-carousel').slick({
                infinite: false,
                arrows: false,
                dots: true,
                autoplay: false,
                speed: 1100,
                slidesToShow: 2,
                slidesToScroll: 2,
                responsive: [{
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        }

        carousel();
    </script>
</body>

</html>
