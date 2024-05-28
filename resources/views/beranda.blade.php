<!-- ======= hero Section ======= -->
@extends('landingpage')
@section('isi-contentLanding')
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/background.jpeg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Tefa Tax Center</h2>
                            <p class="animate__animated animate__fadeInUp">Menjadi Pusat Edukasi bagi mahasiswa dan akademisi Politeknik Negeri Jember
                                terkait dengan pembelajaran pajak, guna mewujudkan masyarakat sadar dan peduli pajak.
                            </p>
                            <p class="animate__animated animate__fadeInUp text-success">Politeknik Negeri Jember</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/background2.jpeg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Tefa Tax Center</h2>
                            <p class="animate__animated animate__fadeInUp"> Sebagai tempat praktik langsung, Tax Center Politeknik Negeri Jember memberikan kesempatan bagi mahasiswa untuk mengalami situasi dan tantangan yang nyata di bidang perpajakan, sehingga dapat
                                meningkatkan pemahaman dan keterampilan mereka dalam menghadapi isu-isu perpajakan yang kompleks.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section>
<!-- End Hero Section -->

<main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Layanan</h3>
                <p>Pelayanan yang diberikan oleh Tefa Tax Center Politeknik Negeri Jember</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/img/galery/gal4.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Pemadanan NIK dan NPWP</a></h2>
                        <p>
                            Pemadanan NIK dan NPWP yang inovatif untuk
                            memfasilitasi proses verifikasi identitas wajib pajak dengan lebih akurat dan efisien
                            sesuai dengan ketentuan undang-undang.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/img/galery/gal5.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Asistensi Pelaporan SPT Tahunan Wajib Pajak</a></h2>
                        <p>
                            Memberikan panduan lengkap secara langsung bagi pegawai atau wajib pajak pribadi dalam
                            pelaporan SPT Tahunan dengan jenis Pajak PPh Pasal 21.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/img/galery/gal10.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Pelayanan E-billing</a></h2>
                        <p>
                            Membuat E-billing bagi unit di Politeknik Negeri Jember yang melakukan belanja barang atau jasa untuk memudahkan
                            dalam proses pembayaran pajak secara elektronik.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">

            <header class="section-header wow fadeInUp">
                <h3>Program Kerja</h3>
                <p>Program Kerja atau kegiatan yang dilakukan oleh Tefa Tax Center Politeknik Negeri Jember</p>
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4 class="title"><a href="">Relawan DJP</a></h4>
                    <p class="description">Kegiatan bekerja sama dengan DJP (Kanwil dan KPP) menjadi relawan pajak di kantor pajak</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="">Kegiatan Publikasi</a></h4>
                    <p class="description">Update mengenai informasi dan juga edukasi seputar pajak</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="">Studi Banding</a></h4>
                    <p class="description">Kunjungan dan penelitian terhadap pusat perpajakan atau lembaga serupa di berbagai tempat.</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="">Kompetisi</a></h4>
                    <p class="description">Kompetisi berupa lomba membuat logo dan menbuat video konten</p>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- Instagram Section -->
    <!-- <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Cv_yEBzOztI/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
        <div style="padding:16px;"> <a href="https://www.instagram.com/p/Cv_yEBzOztI/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                <div style=" display: flex; flex-direction: row; align-items: center;">
                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                    </div>
                </div>
                <div style="padding: 19% 0;"></div>
                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                <g>
                                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                </g>
                            </g>
                        </g>
                    </svg></div>
                <div style="padding-top: 8px;">
                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div>
                </div>
                <div style="padding: 12.5% 0;"></div>
                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                    <div>
                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                        <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                    </div>
                    <div style="margin-left: 8px;">
                        <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                        <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                    </div>
                    <div style="margin-left: auto;">
                        <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                        <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                        <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                    </div>
                </div>
                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                </div>
            </a>
            <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Cv_yEBzOztI/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Tax Center POLIJE (@taxcenter_polije)</a></p>
        </div>
    </blockquote>
    <script async src="//www.instagram.com/embed.js"></script> -->
    <!-- End of Instagram Section -->


    <!-- ======= Facts Section ======= -->
    <!-- <section id="facts">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Berita</h3>
                    <p>Berita terkini Tefa Tax Center Polije</p>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <div class="img">
                                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                            </div>
                            <h2 class="title"><a href="#">Our Mission</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-col">
                            <div class="img">
                                <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                            </div>
                            <h2 class="title"><a href="#">Our Plan</a></h2>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-col">
                            <div class="img">
                                <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                            </div>
                            <h2 class="title"><a href="#">Our Vision</a></h2>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores
                                eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum
                                quia dolor sit amet.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>End Facts Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container text-center" data-aos="zoom-in">
            <h3>Kalkulator Pajak</h3>
            <p>Layanan kalkulator membantu merencanakan dan menghitung estimasi pajak dengan tujuan untuk mempermudah dalam mengelola aspek perpajakan secara efisien dan akurat.</p>
            <a class="cta-btn" href="#">Mulai</a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Gallery</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100"">
                    <div class=" col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1"
                                    class="link-preview"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 1</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/web3.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 3</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/app2.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 2</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/card2.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 2</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/web2.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 2</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 3</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/card1.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 1</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 3</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
                                <a href="assets/img/portfolio/web1.jpg" class="link-preview portfolio-lightbox"
                                    data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 1</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div> -->
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- <section id="clients">
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Our Clients</h3>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section> -->
    <!-- End Our Clients Section -->

</main>
<!-- End #main -->
@endsection