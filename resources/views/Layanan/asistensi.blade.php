@extends('landingpage')
@section('isi-contentLanding')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('pemadanan') }}">Asistensi Pelaporan SPT Tahunan Wajib Pajak</a></li>
                </ol>
                <h2>Asistensi Pelaporan SPT Tahunan Wajib Pajak</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Blog Single Section ======= -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                  <h6>
                  Memberikan panduan lengkap secara langsung bagi pegawai atau wajib pajak pribadi
                  dalam pelaporan SPT Tahunan dengan jenis Pajak PPh Pasal 21 dengan lancar dan tepat waktu.<br><br>
                  </h6>
                  <h6 class="text-success"><strong>Detail layanan:</strong><br><br></h6>
                  <h6>
                        <ul class="list-unstyled">
                              <li>
                                    <ul>
                                          <li>Panduan Langkah Demi Langkah: Kami menyajikan panduan yang jelas dan langkah demi langkah untuk membantu Anda mengisi SPT Tahunan dengan benar, mengurangi kebingungan dan kerumitan.</li>
                                          <li>Pengingat Batas Waktu: Kami memberikan pengingat mengenai batas waktu pengiriman SPT Tahunan, sehingga Anda tidak akan ketinggalan waktu penting ini.</li>
                                          <li>Review Dokumen: Kami memberikan kesempatan untuk mengajukan pertanyaan dan meminta ulasan sederhana terhadap dokumen yang akan Anda kirimkan.</li>
                                          <li>Tips Optimalisasi Pajak: Selain pelaporan, kami memberikan saran dan tips mengenai bagaimana Anda dapat mengoptimalkan kembali pajak Anda.</li>
                                          <li>Dukungan Ahli: Tim kami terdiri dari ahli pajak yang siap membantu Anda dalam mengatasi setiap pertanyaan atau hambatan yang Anda temui.</li>
                                          <li>Akses Mudah: Layanan kami dapat diakses dengan mudah melalui website ini, memberikan kenyamanan dalam mengurus kewajiban perpajakan Anda.</li>
                                          <li>Dukungan Lintas Sektor: Layanan kami tersedia bagi individu dan entitas, termasuk mahasiswa, dosen, staf, dan instansi lain di dalam dan luar universitas.</li>
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
