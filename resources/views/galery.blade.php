@extends('landingpage')
@section('isi-contentLanding')
<main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                  <ol>
                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li><a href="{{ route('galery') }}">Gallery</a></li>
                  </ol>
                  <h2>Gallery</h2>

            </div>
      </section><!-- End Breadcrumbs -->


      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                  <header class="section-header">
                        <h3 class="section-title">Kegiatan Tefa Tax Center</h3>
                  </header>

                  <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class=" col-lg-12">
                              <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".filter-app">Pelayanan</li>
                                    <li data-filter=".filter-card">Workshop</li>
                                    <li data-filter=".filter-web">Pelatihan</li>
                              </ul>
                        </div>
                  </div>

                  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal3.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal3.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">App 1</a></h4>
                                          <p>App</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal6.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal6.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">Web 3</a></h4>
                                          <p>Web</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal4.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal4.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">App 2</a></h4>
                                          <p>App</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal1.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">Card 2</a></h4>
                                          <p>Card</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal2.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">Web 2</a></h4>
                                          <p>Web</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal5.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal5.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">App 3</a></h4>
                                          <p>App</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal7.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal7.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">Card 1</a></h4>
                                          <p>Card</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal8.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal8.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">Card 3</a></h4>
                                          <p>Card</p> -->
                                    </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                              <div class="portfolio-wrap">
                                    <figure>
                                          <img src="assets/img/galery/gal9.jpg" class="img-fluid" alt="">
                                          <a href="assets/img/galery/gal9.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                                          
                                    </figure>

                                    <div class="portfolio-info">
                                          <!-- <h4><a href="portfolio-details.html">Web 1</a></h4>
                                          <p>Web</p> -->
                                    </div>
                              </div>
                        </div>

                  </div>

            </div>
      </section>
      <!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection
@push('js-custom')
<script>
      $(document).ready(function() {
            $("#add-item").click((e) => {
                  e.preventDefault();
                  $("#show_item").prepend(`<div class="row mt-2">
                                            <div class="col-sm">
                                                <input class="form-control" type="text" placeholder="Default input"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="col-sm">
                                            <select id="inputState" class="form-select">
                                                <option selected="">Pilih</option>
                                                <option>Bulan</option>
                                                <option>Tahun</option>
                                            </select>
                                        </div>
                                            <div class="col-sm">
                                                <input class="form-control" type="text" placeholder="Default input"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="col-sm">
                                                <input class="form-control" type="text" placeholder="Default input"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="col-sm">
                                                <input class="form-control" type="text" placeholder="Default input"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="col-sm">
                                                <input class="form-control" type="text" placeholder="Default input"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="col-sm">
                                                <button id="hapus-item"
                                                    class="btn btn-danger btn-rounded btn-sm remove_item"><i class="bi bi-trash3"></i></button>
                                            </div>
                                        </div>`);
            });
      });
</script>
@endpush