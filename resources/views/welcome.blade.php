<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>App Buku Tamu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="tamu/img/favicon.png" rel="icon">
    <link href="tamu/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="tamu/vendor/aos/aos.css" rel="stylesheet">
    <link href="tamu/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tamu/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="tamu/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="tamu/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="tamu/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="tamu/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/">App BukuTamu</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#tamu">List Tamu</a></li>
                    <li><a class="nav-link scrollto" href="#features">Layanan</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1>Selamat Datang</h1>
                        <h2>Di Aplikasi Buku Tamu, Silahkan klik tombol dibawah ini untuk menambahkan</h2>
                        {{-- <button type="button" href="#" class="download-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Tamu Baru</button> --}}
                        <a href="#addtamu" class="download-btn">Tambah Tamu Baru</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <img src="tamu/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

                <!-- ======= Tampil data tamu Section ======= -->
                <section id="tamu" class="gallery">
                    <div class="gallery" data-aos="fade-up">
        
                        <div class="section-title">
                            <h2>List Data Tamu</h2>
                            <p>
                                Menampilkan Data Tamu Sesuai data yang sudah di inputkan, jika terdapat kesalahan data silahkan hubungi Admin.
                            </p>
                        </div>
                    </div>
                    <div class="container-fluid" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-bordered table-hover" id="table-row" cellspacing="0" width="100%">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Keperluan</th>
                                        <th scope="col">Tujuan</th>
                                        <th scope="col">Kontak</th>
                                        <th scope="col">Hari/Tanggal</th>
                                      </tr>
                                    </thead>
                                </table>
                            </div>
                          </div>
                    </div>
                </section>
                <!-- End Gallery Section -->

        <!-- ======= App Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Layanan Kami</h2>
                    <p>Struktur Organisasi BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH Kabupaten Sumenep
                    </p>
                </div>

                <div class="row no-gutters">
                    <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Kepala Badan</h4>
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                        <h4>Sekretariat</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                        <h4>Bidang Perencanaan Pengendalian Dan Evaluasi Pembangunan Daerah</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Bidang Pemerintahan Dan Pembangunan Manusia</h4>

                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Bidang Perekonomian Dan Sumber Daya Alam</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Bidang Infrastruktur Dan Kewilayahan</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Bidang Penelitian Dan Pengembangan</h4>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2"
                        data-aos="fade-left" data-aos-delay="100">
                        <img src="tamu/img/features.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End App Features Section -->

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="tamu/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>VISI & Misi Instansi</h3>
                        <p class="fst-italic">
                        Visi
                        </p>
                        <p>
                            Terwujudnya lembaga Perencana Pembangunan yang handal dan Profesional bersifat
                            terpadu, menyeluruh dan terarah dalam mewujudkan masyarakat Kabupaten Sumenep
                            yang semakin sejahtera.
                        </p>
                        <p class="fst-italic">
                            Misi
                            </p>
                            <p>
                                1. Meningkatkan efisiensi dan efektifitas perencanaan pembangunan secara
                                koordinatif, partisipatif dan profesionalisme serta sumber daya manusia
                                perencana melalui pendidikan dan pelatihan<br>
                                2. Memberikan pelayanan sistem informasi data manual maupun database, serta
                                melaksanakan evaluasi dan monitoring pelaksanaan program dan perencanaan
                                pembangunan.<br>
                                3. Melaksanakan koordinasi dalam rangka pelaksanaan, pengendalian dan
                                penelitian berbagai bidang pembangunan
                            </p>
                    </div>
                </div>

            </div>
        </section><!-- End Details Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galeri Kami</h2>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="col-sm-4 mb-4">
                            <div class="col">
                                <div class="card card-post card-round">
                                    <img src="tamu/img/testimonials/1.jpeg" class="" alt="">
                                    <div class="card-body">
                                        <div class="separator-solid"></div>
                                        <h3 class="card-title">
                                            <a href="#">
                                                Galeri 1
                                            </a>
                                        </h3>
                                        <p class="card-text">MUSRENBANG kali ini yang diadakan oleh Badan Perencanaan Pembangunan Daerah bertempat di Kecamatan Dasuk.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-wrapper">
                            <div class="col-sm-4 mb-4">
                                <div class="col">
                                    <div class="card card-post card-round">
                                        <img src="tamu/img/testimonials/2.jpeg" class="" alt="">
                                        <div class="card-body">
                                            <div class="separator-solid"></div>
                                            <h3 class="card-title">
                                                <a href="#">
                                                    Galeri 2
                                                </a>
                                            </h3>
                                            <p class="card-text">Rapat Koordinasi persiapan MUSRENBANG Kabupaten di Ruang Rapat Joko Tole BAPPEDA Sumenep.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-wrapper">
                                <div class="col-sm-4 mb-4">
                                    <div class="col">
                                        <div class="card card-post card-round">
                                            <img src="tamu/img/testimonials/3.jpeg" class="" alt="">
                                            <div class="card-body">
                                                <div class="separator-solid"></div>
                                                <h3 class="card-title">
                                                    <a href="#">
                                                        Galeri 3
                                                    </a>
                                                </h3>
                                                <p class="card-text">Rapat Lokakarya Pelibatan Perbankan dan Lembaga Keuangan dalam Mendukung Peningkatan Layanan di Hotel C1 Sumenep.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-wrapper">
                                    <div class="col-sm-4 mb-4">
                                        <div class="col">
                                            <div class="card card-post card-round">
                                                <img src="tamu/img/testimonials/4.jpeg" class="" alt="">
                                                <div class="card-body">
                                                    <div class="separator-solid"></div>
                                                    <h3 class="card-title">
                                                        <a href="#">
                                                            Galeri 4
                                                        </a>
                                                    </h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-wrapper">
                                        <div class="col-sm-4 mb-4">
                                            <div class="col">
                                                <div class="card card-post card-round">
                                                    <img src="tamu/img/testimonials/5.jpeg" class="" alt="">
                                                    <div class="card-body">
                                                        <div class="separator-solid"></div>
                                                        <h3 class="card-title">
                                                            <a href="#">
                                                                Galeri 5
                                                            </a>
                                                        </h3>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Tambah Tamu Section ======= -->
        <section id="addtamu" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tambah Tamu Baru</h2>
                    <p>
                        Silahkan input data tamu dengan benar !
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 info">
                                <i class="bx bx-map"></i>
                                <h4>Alamat</h4>
                                <p>Jl. Trunojoyo No.120,<br>Karangrawa,Bangselok, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69417</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-phone"></i>
                                <h4>Hubungi Kami</h4>
                                <p>0328 662189<br>+62 878-8469-9099</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-envelope"></i>
                                <h4>Email Kami</h4>
                                <p>bappeda.sumenepkab@gmail.com</p>
                            </div>
                            <div class="col-lg-6 info">
                                <i class="bx bx-time-five"></i>
                                <h4>Jam Kerja</h4>
                                <p>Senin - Jum'at : 07:30 AM - 15:30 PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('tamu.store') }}" method="post" role="form" class="php-email-form" data-aos="fade-up">
                            @csrf
                            <div class="form-group">
                                <input placeholder="Nama Tamu" type="text" name="nama" class="form-control" id="name" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea placeholder="Alamat Rumah" class="form-control" name="alamat" rows="5" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <textarea placeholder="Keperluan" class="form-control" name="keperluan" rows="3" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <select class="form-select" name="tujuan" aria-label="Default select example">
                                    <option selected disabled>--Pilih Tujuan---</option>
                                    @foreach ($devisi as $key => $item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group mt-3">
                                <input placeholder="Kontak" type="text" class="form-control" name="kontak" id="subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <input placeholder="Email" type="email" class="form-control" name="email_tamu" required>
                            </div>
                            <div class="text-center">
                          <button  type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>PKL IST 2023/Modification PKL UA 2024</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Website : <a href="https://bappeda.sumenepkab.go.id/">Bappeda</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="tamu/vendor/aos/aos.js"></script>
    <script src="tamu/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="tamu/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="tamu/vendor/swiper/swiper-bundle.min.js"></script>
    {{-- <script src="tamu/vendor/php-email-form/validate.js"></script> --}}
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    @include('sweetalert::alert')
    <!-- Template Main JS File -->
    <script src="tamu/js/main.js"></script>
    <script>
let table;
$(document).ready(function() {
    // Add Row
    table = $('#table-row').DataTable({
    pageLength: 7,
    responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('tamu.data') }}',
            },
            columns:[
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama'},
                {data: 'alamat'},
                {data: 'keperluan'},
                {data: 'nama_devisi'},
                {data: 'kontak'},
                {data: 'hari'},
            ]
    });
});
    </script>

</body>

</html>
