@extends('landingpage')
@section('isi-contentLanding')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('beranda') }}">Home</a></li>
                    <li><a href="{{ route('pph22') }}">Kalkulator</a></li>
                </ol>
                <h2>PPH 22</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Blog Single Section ======= -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <form action="">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="informasi-personal-tab" data-bs-toggle="tab"
                                data-bs-target="#informasi-personal" type="button" role="tab"
                                aria-controls="informasi-personal" aria-selected="true">
                                <h1>1.</h1> Data Perusahaan
                            </button>
                            <button class="nav-link" id="perhitungan-pph22-tab" data-bs-toggle="tab"
                                data-bs-target="#perhitungan-pph22" type="button" role="tab"
                                aria-controls="perhitungan-pph22" aria-selected="false">
                                <h1>2.</h1>Penghitungan PPh 22
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="informasi-personal" role="tabpanel"
                            aria-labelledby="informasi-persona
                            
                            l-tab">
                            <div class="col-lg-6 entries">
                                <div class="blog-comments">
                                    <div class="reply-form">
                                        <h4>Perusahaan</h4>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Memiliki NPWP</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--Pilih--</option>
                                                <option value="1">Ya</option>
                                                <option value="2">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- End blog comments -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="perhitungan-pph22" role="tabpanel"
                            aria-labelledby="perhitungan-pph22-tab">
                            <!-- End blog entries list -->
                            <div class="col-lg-6 entries">
                                <div class="blog-comments">
                                    <div class="reply-form">
                                        <h4>Perhitungan PPh 22</h4>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Dasar Pengenaan Pajak</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Jenis Pajak</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tarif Pajak %</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nilai PPh 22</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                    </div>
                                </div><!-- End blog comments -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
