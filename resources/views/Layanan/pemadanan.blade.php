@extends('landingpage')
@section('isi-contentLanding')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('pemadanan') }}">Pemadanan NIK dan NPWP</a></li>
                </ol>
                <h2>Pemadanan NIK dan NPWP</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Blog Single Section ======= -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                  <h6>
                        Pemadanan NIK (Nomor Induk Kependudukan) dan NPWP (Nomor Pokok Wajib Pajak) merupakan solusi 
                        yang inovatif untuk memvalidasi dan mengintegrasikan data identitas penduduk dengan data pajak. 
                        Layanan ini bertujuan untuk menyederhanakan dan mempercepat proses verifikasi identitas wajib pajak, 
                        sehingga dapat meminimalkan kesalahan dan penyalahgunaan dalam sistem administrasi perpajakan.<br><br>
                  </h6>
                  <h6 class="text-success"><strong>Detail layanan:</strong><br><br></h6>
                  <h6>
                        <ul class="list-unstyled">
                              <li>
                                    <ul>
                                          <li>Verifikasi Cepat dan Akurat: Layanan kami memungkinkan Anda memverifikasi identitas wajib pajak dengan cepat dan akurat, menghindari adanya nomor NPWP palsu atau tidak valid.</li>
                                          <li>Pendeteksian Duplikasi: Kami membantu mencegah penggunaan lebih dari satu nomor NPWP oleh individu yang sama melalui deteksi duplikasi yang canggih.</li>
                                          <li>Data Terintegrasi: Dengan menggabungkan data NIK dan NPWP, kami memastikan integritas data dalam proses perpajakan Anda.</li>
                                          <li>Kemudahan Akses: Layanan kami dapat diakses dengan mudah melalui website ini, memberikan kenyamanan dalam memverifikasi identitas wajib pajak Anda.</li>
                                          <li>Keamanan Data: Kami menjaga kerahasiaan dan keamanan data pribadi Anda dengan tindakan keamanan yang ketat.</li>
                                          <li>Dukungan Lintas Sektor: Layanan kami dapat dimanfaatkan oleh berbagai pihak, termasuk instansi perpajakan, lembaga keuangan, dan layanan publik lainnya.</li>
                                    </ul>
                              </li>
                        </ul>
                  </h6>

            </div>
        </section><!-- End Blog Single Section -->

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
