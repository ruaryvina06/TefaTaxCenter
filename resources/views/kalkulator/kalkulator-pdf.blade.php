<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Hasil Perhitungan</h5>
    </center>


    <table class='table table-bordered'>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Uraian</th>
                <th scope="col">Nama Penerima</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Jenis Transaksi</th>
                <th scope="col">Status NPWP</th>
                <th scope="col">Subtotal</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <table class="table table-bordered">
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
</body>

</html>
