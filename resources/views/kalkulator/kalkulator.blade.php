@extends('landingpage')
@section('isi-contentLanding')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('beranda') }}">Home</a></li>
                    <li><a href="{{ route('kalkulator') }}">Kalkulator</a></li>
                </ol>
                <h2>Simulasi Perhitungan</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Blog Single Section ======= -->


        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pph21-tab" data-bs-toggle="tab" data-bs-target="#pph21"
                            type="button" role="tab" aria-controls="pph21-tab-pane" aria-selected="true">PPH
                            21</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pph22-tab" data-bs-toggle="tab" data-bs-target="#pph22-tab-pane"
                            type="button" role="tab" aria-controls="pph22-tab-pane" aria-selected="false">PPH
                            22</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pph23-tab" data-bs-toggle="tab" data-bs-target="#pph23-tab-pane"
                            type="button" role="tab" aria-controls="pph23-tab-pane" aria-selected="false">PPH
                            23</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ppn-tab" data-bs-toggle="tab" data-bs-target="#ppn-tab-pane"
                            type="button" role="tab" aria-controls="ppn-tab-pane" aria-selected="false">PPN</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pph21" role="tabpanel" aria-labelledby="pph21-tab"
                        tabindex="0">
                        <form action="{{ route('item-store') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm ">
                                    <b>Uraian</b>
                                </div>
                                <div class="col-sm">
                                    <b>Nama Penerima</b>
                                </div>
                                <div class="col-sm">
                                    <b>Jumlah (Rp) </b>
                                </div>
                                <div class="col-sm">
                                    <b>Status NPWP</b>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <input class="form-control" name="uraian" type="text" placeholder="Default input"
                                        aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="penerima" type="text" placeholder="Default input"
                                        aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="jumlah" type="text" placeholder="Default input"
                                        aria-label="default input example" id="jumlah">
                                </div>
                                <div class="col-sm">
                                    <select id="inputState" name="npwp" class="form-select">
                                        <option selected="">Pilih</option>
                                        <option value="ya">NPWP</option>
                                        <option value="tidak">Tidak NPWP</option>
                                    </select>
                                    <input type="hidden" value="pph21" name="perhitungan">
                                </div>
                            </div>
                            <div class="row mt-4 mb-3">
                                <div class="col">
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pph22-tab-pane" role="tabpanel" aria-labelledby="pph22-tab"
                        tabindex="0">
                        <form action="{{ route('item-store') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm ">
                                    <b>Uraian</b>
                                </div>
                                <div class="col-sm">
                                    <b>Nama Penerima</b>
                                </div>
                                <div class="col-sm">
                                    <b>Jumlah (Rp) </b>
                                </div>
                                <div class="col-sm">
                                    <b>Status NPWP</b>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <input class="form-control" name="uraian" type="text"
                                        placeholder="Default input" aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="penerima" type="text"
                                        placeholder="Default input" aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="jumlah" type="text"
                                        placeholder="Default input" aria-label="default input example" id="jumlah">
                                </div>
                                <div class="col-sm">
                                    <select id="inputState" name="npwp" class="form-select">
                                        <option selected="">Pilih</option>
                                        <option value="ya">NPWP</option>
                                        <option value="tidak">Tidak NPWP</option>
                                    </select>
                                    <input type="hidden" value="pph22" name="perhitungan">
                                </div>
                            </div>
                            <div class="row mt-4 mb-3">
                                <div class="col">
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pph23-tab-pane" role="tabpanel" aria-labelledby="pph23-tab"
                        tabindex="0">
                        <form action="{{ route('item-store') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm ">
                                    <b>Uraian</b>
                                </div>
                                <div class="col-sm">
                                    <b>Nama Penerima</b>
                                </div>
                                <div class="col-sm">
                                    <b>Jumlah (Rp) </b>
                                </div>
                                <div class="col-sm">
                                    <b>Status NPWP</b>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <input class="form-control" name="uraian" type="text"
                                        placeholder="Default input" aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="penerima" type="text"
                                        placeholder="Default input" aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="jumlah" type="text"
                                        placeholder="Default input" aria-label="default input example" id="jumlah">
                                </div>
                                <div class="col-sm">
                                    <select id="inputState" name="npwp" class="form-select">
                                        <option selected="">Pilih</option>
                                        <option value="ya">NPWP</option>
                                        <option value="tidak">Tidak NPWP</option>
                                    </select>
                                    <input type="hidden" value="pph23" name="perhitungan">
                                </div>
                            </div>
                            <div class="row mt-4 mb-3">
                                <div class="col">
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="ppn-tab-pane" role="tabpanel" aria-labelledby="ppn-tab"
                        tabindex="0">
                        <form action="{{ route('item-store') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm ">
                                    <b>Uraian</b>
                                </div>
                                <div class="col-sm">
                                    <b>Nama Penerima</b>
                                </div>
                                <div class="col-sm">
                                    <b>Jumlah (Rp) </b>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <input class="form-control" name="uraian" type="text"
                                        placeholder="Default input" aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="penerima" type="text"
                                        placeholder="Default input" aria-label="default input example">
                                </div>
                                <div class="col-sm">
                                    <input class="form-control" name="jumlah" type="text"
                                        placeholder="Default input" aria-label="default input example" id="jumlah">
                                </div>
                                <input type="hidden" value="tidak" name="npwp">
                                <input type="hidden" value="ppn" name="perhitungan">
                            </div>
                            <div class="row mt-4 mb-3">
                                <div class="col">
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <b>Tabel Data</b>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mt-2">

                            @include('kalkulator.kalkulator-truncate')
                            <a href="{{ route('kalkulator-cetak') }}" type="button"
                                class="btn btn-outline-secondary">Cetak PDF</a>
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Uraian</th>
                                        <th scope="col">Nama Penerima</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Jenis Transaksi</th>
                                        <th scope="col">Status NPWP</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->uraian }}</td>
                                            <td>{{ $d->penerima }}</td>
                                            <td>Rp.{{ number_format($d->jumlah) }}</td>
                                            <td>{{ $d->perhitungan }}</td>
                                            <td>{{ $d->npwp }}</td>
                                            <td>Rp.{{ number_format($d->total) }}</td>
                                            <td>@include('kalkulator.kalkulator-destroy')</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </li>
                        <li class="list-group-item">
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col"> Total Jumlah (Rp)</th>
                                        <th scope="col">Total PPN</th>
                                        <th scope="col">Total PPH21</th>
                                        <th scope="col">Total PPH22</th>
                                        <th scope="col">Total PPH23</th>
                                        <th scope="col">Total Seluruhnya</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Rp.{{ number_format($jumlah) }}</td>
                                        <td>Rp.{{ number_format($ppn) }}</td>
                                        <td>Rp.{{ number_format($pph21) }} </td>
                                        <td>Rp.{{ number_format($pph22) }} </td>
                                        <td>Rp.{{ number_format($pph23) }}</td>
                                        <td>Rp.{{ number_format($seluruh) }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection

@push('js-custom')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endpush
