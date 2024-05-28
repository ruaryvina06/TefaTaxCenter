@extends('landingpage')
@section('isi-contentLanding')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('beranda') }}">Home</a></li>
                    <li><a href="{{ route('pph21') }}">Kalkulator</a></li>
                </ol>
                <h2>PPH 21</h2>

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
                                <h1>1.</h1> Informasi Personal
                            </button>
                            <button class="nav-link" id="komponen-penghasilan-tab" data-bs-toggle="tab"
                                data-bs-target="#komponen-penghasilan" type="button" role="tab"
                                aria-controls="komponen-penghasilan" aria-selected="false">
                                <h1>2.</h1>Komponen
                                Penghasilan
                            </button>
                            <button class="nav-link" id="pengurangan-tab" data-bs-toggle="tab" data-bs-target="#pengurangan"
                                type="button" role="tab" aria-controls="pengurangan" aria-selected="false">
                                <h1>3.</h1>Pengurangan
                            </button>
                            <button class="nav-link" id="penghitungan-pph-tab" data-bs-toggle="tab"
                                data-bs-target="#penghitungan-pph" type="button" role="tab"
                                aria-controls="penghitungan-pph" aria-selected="false">
                                <h1>4.</h1>Penghitungan PPh 21
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="informasi-personal" role="tabpanel"
                            aria-labelledby="informasi-personal-tab">
                            <div class="col-lg-6 entries">
                                <div class="blog-comments">
                                    <div class="reply-form">
                                        <h4>Data Karyawan</h4>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">NIK</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Masa Penghasilan dalam setahun</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="1">12</option>
                                                <option value="2">11</option>
                                                <option value="3">10</option>
                                                <option value="1">9</option>
                                                <option value="2">8</option>
                                                <option value="3">7</option>
                                                <option value="1">6</option>
                                                <option value="2">5</option>
                                                <option value="3">4</option>
                                                <option value="1">3</option>
                                                <option value="2">2</option>
                                                <option value="3">1</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Memiliki NPWP</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--Pilih--</option>
                                                <option value="1">Ya</option>
                                                <option value="2">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Status</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--Pilih--</option>
                                                <option value="1">Tidak Kawin</option>
                                                <option value="2">Kawin</option>
                                                <option value="3">Hidup Berpisah</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tanggungan</label>
                                            <input type="number" class="form-control" id="">
                                        </div>
                                    </div>
                                </div><!-- End blog comments -->

                            </div>
                        </div>
                        <div class="tab-pane fade" id="komponen-penghasilan" role="tabpanel"
                            aria-labelledby="komponen-penghasilan-tab">
                            <!-- End blog entries list -->
                            <div class="col-lg-6 entries">
                                <div class="blog-comments">
                                    <div class="reply-form">
                                        <h4>Komponen Penghasilan</h4>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Gaji Pokok Sebulan</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tunjangan Lainnya</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <b> Premi yang dibayarkan oleh pemberi kerja : </b>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">1. Premi Jaminan Kecelakaan
                                                Kerja</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">2. Premi Jaminan Kematian</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">3. Premi Jaminan Hari Tua</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">4. Premi Lainnya</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Total Penghasilan Bruto</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                    </div>
                                </div><!-- End blog comments -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pengurangan" role="tabpanel" aria-labelledby="pengurangan-tab">
                            <!-- End blog entries list -->
                            <div class="col-lg-6 entries">
                                <div class="blog-comments">
                                    <div class="reply-form">
                                        <h4>Pengurangan</h4>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Biaya Jabatan</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <b> Iuran yang dibayar sendiri melalui pemberi kerja : </b>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">1. Iuran Pensiun</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">2. Iuran Jaminan Hari Tua</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">3. Iuran Tunjangan Hari Tua</label>
                                            <input type="text" class="form-control" id="" value="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Total Pengurangan Penghasilan
                                                Bruto</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                    </div>
                                </div><!-- End blog comments -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="penghitungan-pph" role="tabpanel"
                            aria-labelledby="penghitungan-pph-tab">
                            <!-- End blog entries list -->
                            <div class="col-lg-6 entries">
                                <div class="blog-comments">
                                    <div class="reply-form">
                                        <h4>Penghitungan PPh 21</h4>
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <b> Jumlah Penghasilan Netto</b>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">1. Sebulan</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">2. Setahun</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">PTKP</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Penghasilan Kena Pajak</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">PPh Pasal 21 Terutang Setahun</label>
                                            <input class="form-control" type="text" value="0" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">PPh Pasal 21 Terutang Sebulan</label>
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
