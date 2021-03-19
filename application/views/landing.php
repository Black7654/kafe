<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing || My Kafe</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- typed -->
    <!-- <script src="<?php echo base_url() . 'assets/'; ?>landing/js/typed2.js"></script> -->
    <link href="<?php echo base_url() . 'assets/'; ?>landing/css/typed.css" rel="stylesheet" type="text/css">

    <!-- Font Awesome icons (free version)-->
    <script src="<?php echo base_url() . 'assets/'; ?>landing/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/' ?>fontawesome/css/all.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url() . 'assets/'; ?>landing/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="js-scroll-trigger" href="#page-top">
                <h3 style="font-family: Breeze Personal Use;">Mewah Caffe</h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top"><span class="fa fa-home"></span>&nbspBeranda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#profile"><span class="fa fa-user"></span>&nbspProfile</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#menu"><span class="fa fa-clone"></span>&nbspMenu</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><span class="faw fas fa-address-book"></span>&nbspContact</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger">|</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>auth/login"><span class="faw fas fa-sign-in-alt"></span>&nbspSign In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading ">Selamat Datang di</div>
            <div class="masthead-heading typed" style="font-family: Breeze Personal Use;">Mewah Caffe</div>
            <p class=" masthead-subheading">Silahkan Login Untuk menjadi Member Kami</p>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo base_url(); ?>auth/login">Sign In</a>
        </div>
    </header>
    <!-- Profile-->
    <section class="page-section bg-light" id="profile">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase"><span class="fas faw fa-user"></span>&nbspProfile</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/mewah.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="portfolio-item">
                        <u><b>Warkop Mewah</b></u>
                        <p>Warkop mewah atau disebut juga warung kopi mewah ini didirikan pada tahun 2015, warung kopi ini terletak di pinggiran jl sentonorejo ds tambi bendo kec mojo kabupaten kediri searah jalan ke makam gus miek.</p>
                        <p>warung kopi ini biasanya ramai pengunjung pada waktu malam minggu, dikarenakan hari itu adalah hari weekend yang biasanya pekerja libur pada hari itu juga.</p>
                        <p>Selain menyediakan minuman disini juga menyediakan makanan ringan seperti tahu kres, roti bakar dan sosis goreng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="menu">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase"><span class="fas faw fa-clone"></span>&nbspMy Menu</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/kopihitam.jpg" alt="Kopi Hitam" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Kopi Hitam</div>
                            <div class="portfolio-caption-subheading text-muted">Minuman</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/kopisusu.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Kopi Susu</div>
                            <div class="portfolio-caption-subheading text-muted">Minuman</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/nutrisari.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Nutrisari</div>
                            <div class="portfolio-caption-subheading text-muted">Minuman</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/josua.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Extrajos + Susu</div>
                            <div class="portfolio-caption-subheading text-muted">Minuman</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">

                            <img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/kukubimasusu.png" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Kukubima + Susu</div>
                            <div class="portfolio-caption-subheading text-muted">Minuman</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">

                            <img class="img-fluid" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/portfolio/06-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Window</div>
                            <div class="portfolio-caption-subheading text-muted">Photography</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase"><span class="fas faw fa-address-book"></span>&nbspHubungi Kami</h2>
                <h3 class="section-subheading text-muted">jika anda ada kesulitan hubungi kami.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/team/galuh.jpg" alt="Galuh" />
                        <h4 class="text-light">Moch Galuh Bernady</h4>
                        <p class="text-muted">Frond End Developer</p>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="https://www.facebook.com/galuhbernads/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/team/pakrudy.png" alt="Rudy Eko Prasetya" />
                        <h4 class="text-light">Rudi Eko Prasetya</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/team/deny.jpg" alt="Deny Kurnawan" />
                        <h4 class="text-light">Deny Kurniawan</h4>
                        <p class="text-muted">Back End Developer </p>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="https://www.facebook.com/profile.php?id=100017633255921&sk=photos"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/logos/envato.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/logos/designmodo.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/logos/themeforest.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/logos/creative-market.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © Moch Galuh Bernady 2021 </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="modal modal fade" tabindex="-1" id="portfolioModal1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-grey">Warkop Mewah</h3>
                    <div class="close-modal text-danger" data-dismiss="modal"><span class="fa fa-times"></span></div>
                </div>
                <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <img class="img-fluid d-block mx-auto img-thumbnail" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/mewah.jpg" alt="Kopi Hitam" />
                    <p>Warkop mewah atau disebut juga warung kopi mewah ini didirikan pada tahun 2015, warung kopi ini terletak di pinggiran jl sentonorejo ds tambi bendo kec mojo kabupaten kediri searah jalan ke makam gus miek.</p>
                    <p>warung kopi ini biasanya ramai pengunjung pada waktu malam minggu, dikarenakan hari itu adalah hari weekend yang biasanya pekerja libur pada hari itu juga.</p>
                    <p>Selain menyediakan minuman disini juga menyediakan makanan ringan seperti tahu kres, roti bakar dan sosis goreng</p>

                    <ul class="list-inline">
                        <li>Date:Friday,19 Maret 2021</li>
                        <li>Client: Moch Galuh Bernady</li>
                        <li>Category: Illustration</li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="modal modal fade" tabindex="-1" id="portfolioModal2" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-grey"><i>Kopi Hitam</i></h3>
                    <div class="close-modal text-danger" data-dismiss="modal"><span class="fa fa-times"></span></div>
                </div>
                <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <img class="img-fluid d-block mx-auto img-thumbnail" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/kopihitam.jpg" alt="Kopi Hitam" />
                    <p>Rasa pahit dan manis di dalam secangkir kopi dapat diartikan bahwa di dalam hidup tidak hanya manis yang kamu dapat, tetapi terkadang kamu juga merasakan pahit.Selain itu, terkadang saat seseorang meneguk secangkir kopi, mereka akan menjadi lebih puitis dan mengutarakan isi hati dengan nada-nada yang indah.</p>
                    <ul class="list-inline">
                        <li>Date:Friday,19 Maret 2021</li>
                        <li>Client: Moch Galuh Bernady</li>
                        <li>Category: Illustration</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3-->
    <div class="modal modal fade" tabindex="-1" id="portfolioModal3" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-grey"><i>Kopi Susu</i></h3>
                    <div class="close-modal text-danger" data-dismiss="modal"><span class="fa fa-times"></span></div>
                </div>
                <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <img class="img-fluid d-block mx-auto img-thumbnail" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/kopisusu.jpg" alt="Kopi Hitam" />
                    <p>Kopi susu adalah perpaduan yang menggabungkan antara si hitam pekat dengan manisnya si putih kental menjadi minuman yang tidak diragukan lagi kelezatannya.
                        Kita semua tahu seperti apa daya magis yang tersaji dalam secangkir kopi, begitu juga dengan susu. Seribu manfaat bisa kita rasakan dengan mengkonsumsi susu.</p>
                    <ul class="list-inline">
                        <li>Date:Friday,19 Maret 2021</li>
                        <li>Client: Moch Galuh Bernady</li>
                        <li>Category: Illustration</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="modal modal fade" tabindex="-1" id="portfolioModal4" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-grey"><i>Nutrisari</i></h3>
                    <div class="close-modal text-danger" data-dismiss="modal"><span class="fa fa-times"></span></div>
                </div>
                <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/nutrisari.jpg" alt="" />
                    <p>Terik Matahari yang sangat panas , Stres akibat banyak tugas dan Pekerjaan tidak cepat Selesai
                        Apakah Kamu Haus dan Lelah
                        Ayo beli Produk Minuman Nutrisari yang mengandung 100% Jeruk Alami
                        Segar , Wangi dan Murah Mengandung Vitamin C yang banyak lo Serta Menyehatkan bagi tubuh kita</p>
                    <ul class="list-inline">
                        <li>Date:Friday,19 Maret 2021</li>
                        <li>Client: Moch Galuh Bernady</li>
                        <li>Category: Illustration</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 5-->
    <div class="modal modal fade" tabindex="-1" id="portfolioModal5" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-grey"><i>Extrajoss + Susu</i></h3>
                    <div class="close-modal text-danger" data-dismiss="modal"><span class="fa fa-times"></span></div>
                </div>
                <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <img class="img-fluid d-block mx-auto img-thumbnail" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/josua.jpg" alt="Kopi Hitam" />
                    <p>Bila Extra Joss dikenal dengan warna kuning dan rasa asam khasnya, sedangkan Kuku Bima melawan dengan berbagai varian rasa buah seperti anggur, mangga, jeruk, serta kopi. Awalnya Extra Joss menggebrak pasar pada tahun 1996, meruntuhkan anggapan minuman energi yang lekat dengan botol kaca berbandrol mahal dengan ekstrak berbentuk bubuk. “Buat apa beli botolnya, ini biangnya!”, kata iklan kala itu. Melalui budget nyaris tak terbatas dan aktivitas marketing tepat sasaran, Extra Joss merajai pasar lebih dari sepuluh tahun lamanya.</p>
                    <ul class="list-inline">
                        <li>Date:Friday,19 Maret 2021</li>
                        <li>Client: Moch Galuh Bernady</li>
                        <li>Category: Illustration</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="modal modal fade" tabindex="-1" id="portfolioModal6" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-grey"><i>Kukubima + Susu</i></h3>
                    <div class="close-modal text-danger" data-dismiss="modal"><span class="fa fa-times"></span></div>
                </div>
                <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <img class="img-fluid d-block mx-auto img-thumbnail" src="<?php echo base_url() . 'assets/'; ?>landing/assets/img/minuman/kukubimasusu.png" alt="Kopi Hitam" />
                    <p>Pada 2004 merupakan tahun awal Kuku Bima menelurkan produk ekstensinya, yaitu KBE. Bujet iklan KBE pertama kali hanya Rp 10 miliar, bahkan awalnya tidak terpikirkan untuk beriklan. Namun, pihak MNC (dulu TPI) menyodorkan acara KDI untuk dijadikan tempat beriklan. “Ya sudah, saya mau saja. Saya jarang mendatangi pihak untuk beriklan. Biasanya mereka yang datang. Saya coba saja,” ujar Irwan dengan enteng.

                        Diakui Irwan, bujet iklan KBE kalah jauh dari kompetitornya. Sebagai gambaran KBE hanya mengalokasikan dana beberapa miliar saja, tapi pesaing berani menggelontor iklan Rp 4 miliar per bulan atau Rp 48 miliar tiap tahunnya.

                        Bulan pertama penjualan KBE dimulai dari satu juta sachet. Pada akhir November 2004 penjualan menunjukkan perkembangan yang cukup bagus, yaitu menyentuh angka 25 juta sachet dan diprediksi bisa tembus 40 juta sachet. Kenyataannya, penjualan tahun 2004 ditutup hanya dengan 3 juta sachet saja. “Padahal saya sudah men-stok bahan baku untuk empat bulan ke depannya senilai Rp 160 juta. Waktu itu, saya sempat stres dan rambut rontok,” jelasnya. Apalagi, kala itu Sido Muncul mengalami kesulitan keuangan.</p>
                    <ul class="list-inline">
                        <li>Date:Friday,19 Maret 2021</li>
                        <li>Client: Moch Galuh Bernady</li>
                        <li>Category: Illustration</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="<?php echo base_url() . 'assets/' ?>landing/js/jquery.min.js"></script>

    <!-- NavbarDSB -->
    <script src="<?php echo base_url() . 'assets/' ?>landing/js/bootstrap.bundle.min.js"></script>

    <!-- Third party plugin JS-->
    <script src="<?php echo base_url() . 'assets/' ?>landing/js/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="<?php echo base_url() . 'assets/'; ?>landing/assets/mail/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url() . 'assets/'; ?>landing/assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url() . 'assets/'; ?>landing/js/scripts.js"></script>

    <!-- typed -->
    <script>
        new Typed('#typed', {
            strings: ['WELCOME', 'TO', 'THE', 'JAVASCRIPT'],
            typeSpeed: 100,
            delaySpeed: 100,
            loop: true
        });
    </script>
</body>

</html>