  <!-- <body data-spy="scroll" data-target=".main-navigation" data-offset="150"> -->
<body>
    <section id="MainContainer">
        
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigationz">
                <div class="container">
                    <div class="site-logo-wrap mt-2">
                        <a href="<?= base_url() ?>"><img height="50px" src="<?= base_url('assets') ?>/img/logo-incorps.png"></a>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
                        <ul class="menu-list">
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Services">Tentang</a></li>
                            <!-- <li><a class="nav-link" href="javascript:void(0)" data-target="#Caraorder">Cara Order</a></li> -->
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Order">Order</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Kontak</a></li>
                            <!-- <?= $data['dropdown'] ?> -->
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Services">Tentang</a></li>
                        <!-- <li><a class="nav-link" href="javascript:void(0)" data-target="#Caraorder">Cara Order</a></li> -->
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Order">Order</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Kontak</a></li>
                        <!-- <?= $data['dropdown'] ?> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header ends here -->

 <!-- Banner starts here -->
        <section id="HeroBanner">
            <div class="hero-content">
                <h1>In Corporation</h1>
                <p>Jasa Online Rental-In, Desain-In, Cetak-In, Install-In</p>
                <p class="mt-2 mb-2" style="font-size: 18px;">Tersedia dalam aplikasi</p>
                <a href="inapps.apk" class="hero-cta">Download Aplikasi disini</a>
            </div>
        </section>
        <!-- Banner ends here --> 

        <!-- Services section starts here -->
        <section id="Services">
            <div class="container">
                <div class="block-heading">
                    <h2>Services</h2>
                    <p>Dapatkan keuntungannya</p>
                </div>
                <div class="services-wrapper">
                    <div class="each-service">
                        <div class="service-icon"><i class="fas fa-fw fa-dollar-sign" aria-hidden="true"></i></div>
                        <h5 class="service-title">Harga Bersaing</h5>
                        <p class="service-description">Memberikan harga yang terjangkau dengan hasil yang berkualitas</p>
                    </div>
                    <div class="each-service">
                        <div class="service-icon"><i class="fas fa-fw fa-gift" aria-hidden="true"></i></div>
                        <h5 class="service-title">Dapatkan Bonusnya</h5>
                        <p class="service-description">Memberikan berbagai bonus untuk transaksi tertentu</p>
                    </div>
                    <div class="each-service">
                        <div class="service-icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                        <h5 class="service-title">Pelayanan 24 Jam</h5>
                        <p class="service-description">Butuh proyektor untuk nonton bareng? kami siap melayani</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section ends here -->
        
        <!-- About Us section starts here -->
       <!--  <section id="Caraorder">
            <div >
                <div class="title text-center mb-4">
                    <h2>Cara Order</h2>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md">
                            <h3>Saya mau order, bagaimana?</h3>
                            <ol class="ml-5 mt-4" >
                                <li>Pilih jenis order sesuai keinginan</li>
                                <li>Isi form order dengan benar</li>
                                <li>Melakukan Checkout dan pembayaran</li>
                                <li>Konfirmasi pembayaran</li>
                                <li>Orderan diproses</li>
                            </ol>
                        </div>
                        <div class="col-md">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                                <div class="carousel-inner" style="border-style: solid; border-color: #dedede; border-width: 1px ">
                                    <div class="carousel-item active">
                                      <img src="<?= base_url('assets') ?>/img/order.png" class="d-block w-100" alt="order">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="<?= base_url('assets') ?>/img/form.png" class="d-block w-100" alt="form">
                                    </div>
                                </div>
     
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>



               
            </div>
        </section> -->
        <!-- About Us section ends here -->

        <!-- Services section starts here -->
        <section id="Order">
            <div class="container">
                <div class="block-heading">
                    <h2>Order</h2>
                    <p>Rental-In, Desain-In, Cetak-In, dan Install-In</p>
                </div>
                <div class="order-wrapper">
                    <div class="each-service">
                        <div class="service-icon"><i class="fa fa-fw fa-paper-plane" aria-hidden="true"></i></div>
                        <h5 class="service-title">Rental-In</h5>
                        <img src="<?= base_url('assets') ?>/img/rental.png" width="120px" height="120px">
                        <div>
                            <a href="<?= base_url() ?>rental" class="order-cta">Order</a>
                        </div>
                    </div>
                    <div class="each-service">
                        <div class="service-icon"><i class="fa fa-fw fa-drafting-compass" aria-hidden="true"></i></div>
                        <h5 class="service-title">Desain-In</h5>
                        <img src="<?= base_url('assets') ?>/img/desain.png" width="120px" height="120px">
                        <div>
                            <a href="<?= base_url() ?>desain" class="order-cta">Order</a>
                        </div>
                    </div>
                    <div class="each-service">
                        <div class="service-icon"><i class="fa fa-fw fa-print" aria-hidden="true"></i></div>
                        <h5 class="service-title">Cetak-In</h5>
                        <img src="<?= base_url('assets') ?>/img/cetak.png" width="120px" height="120px">
                        <div>
                            <a href="<?= base_url() ?>cetak" class="order-cta">Order</a>
                        </div>
                    </div>
                    <div class="each-service">
                        <div class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                        <h5 class="service-title">Install-In</h5>
                        <img src="<?= base_url('assets') ?>/img/install.png" width="120px" height="120px">
                        <div>
                            <a href="<?= base_url() ?>install" class="order-cta">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section ends here -->

       