@extends('landingpage')
@section('isi-contentLanding')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('pemadanan') }}">Pelayanan E-billing</a></li>
                </ol>
                <h2>Pelayanan E-billing</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Blog Single Section ======= -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                  <h6>
                  Membuat E-billing bagi unit di Politeknik Negeri Jember yang melakukan belanja barang atau 
                  jasa untuk memudahkan dalam proses pembayaran pajak secara elektronik.<br><br>
                  </h6>
                  <h6 class="text-success"><strong>Detail layanan:</strong><br><br></h6>
                  <h6>
                        <ul class="list-unstyled">
                              <li>
                                    <ul>
                                          <li>Pembayaran Online yang Mudah: Kami menyediakan platform yang intuitif untuk membantu Anda membayar pajak secara online tanpa kerumitan.</li>
                                          <li>Riwayat Pembayaran: Anda dapat dengan mudah melacak dan mengakses riwayat pembayaran pajak Anda, memberikan transparansi atas aktivitas keuangan Anda.</li>
                                          <li>Pengingat Pembayaran: Kami memberikan pengingat mengenai tanggal jatuh tempo pembayaran pajak, memastikan Anda tidak melewatkan batas waktu yang penting.</li>
                                          <li>Dukungan Beberapa Metode Pembayaran: Kami mendukung berbagai metode pembayaran yang nyaman bagi Anda, seperti transfer bank, kartu kredit, dan e-wallet.</li>
                                          <li>Keamanan Data: Kami menjaga keamanan data pribadi dan keuangan Anda melalui langkah-langkah keamanan yang ketat.</li>
                                          <li>Dukungan Ahli: Tim kami siap memberikan bantuan jika Anda mengalami kesulitan atau pertanyaan seputar proses pembayaran pajak.</li>
                                          <li>Akses Mudah: Layanan kami dapat diakses kapan saja dan di mana saja melalui website ini, memberikan kenyamanan dalam mengelola kewajiban perpajakan Anda.</li>
                                          <li>Dukungan Lintas Sektor: Layanan kami dapat dimanfaatkan oleh mahasiswa, dosen, staf, dan pihak lain yang memiliki kewajiban perpajakan di dalam dan luar universitas.</li>
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
