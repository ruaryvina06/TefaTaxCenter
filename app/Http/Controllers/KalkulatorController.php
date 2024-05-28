<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KalkulatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Item::all();
        $jumlah = Item::sum('jumlah');
        $ppn = Item::where('perhitungan', 'ppn')->sum('total');
        $pph21 = Item::where('perhitungan', 'pph21')->sum('total');
        $pph22 = Item::where('perhitungan', 'pph22')->sum('total');
        $pph23 = Item::where('perhitungan', 'pph23')->sum('total');
        $seluruh = $jumlah + $ppn + $pph21 + $pph22 + $pph23;
        return view('kalkulator.kalkulator', compact('data', 'jumlah', 'ppn', 'pph21', 'pph22', 'pph23', 'seluruh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'uraian' => 'required',
            'penerima' => 'required',
            'jumlah' => 'required|numeric|min:0',
            'perhitungan' => ['required', 'in:pph21,pph22,pph23,ppn'],
            'npwp' => ['required', 'in:ya,tidak'],
        ]);

        $total = 0;
        if ($request->perhitungan == 'pph21') {
            if ($request->npwp == 'ya') {
                $total = $request->jumlah * 0.05;
            } else {
                $total = $request->jumlah * 0.15;
            }
        } elseif ($request->perhitungan == 'pph22') {
            if ($request->npwp == 'ya') {
                $total = $request->jumlah * 0.015;
            } else {
                $total = $request->jumlah * 0.03;
            }
        } elseif ($request->perhitungan == 'pph23') {
            if ($request->npwp == 'ya') {
                $total = $request->jumlah * 0.02;
            } else {
                $total = $request->jumlah * 0.04;
            }
        } elseif ($request->perhitungan == 'ppn') {
            if ($request->npwp == 'ya') {
                $total = $request->jumlah * 0.11;
            } else {
                $total = $request->jumlah * 0;
            }
        }

        Item::create([
            'uraian' => $request->uraian,
            'penerima' => $request->penerima,
            'jumlah' => $request->jumlah,
            'perhitungan' => $request->perhitungan,
            'npwp' => $request->npwp,
            'total' => $total
        ]);

        return redirect()->route('kalkulator');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cetakPDF()
    {
        $data = Item::all();

        $jumlah = Item::sum('jumlah');
        $ppn = Item::where('perhitungan', 'ppn')->sum('total');
        $pph21 = Item::where('perhitungan', 'pph21')->sum('total');
        $pph22 = Item::where('perhitungan', 'pph22')->sum('total');
        $pph23 = Item::where('perhitungan', 'pph23')->sum('total');
        $seluruh = $jumlah + $ppn + $pph21 + $pph22 + $pph23;
        $pdf = Pdf::loadview('kalkulator.kalkulator-pdf', ['data' => $data, 'jumlah' => $jumlah, 'ppn' => $ppn, 'pph21' => $pph21, 'pph22' => $pph22, 'pph23' => $pph23, 'seluruh' => $seluruh]);
        return $pdf->stream();
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trancate()
    {
        $data = Item::truncate();
        return redirect()->route('kalkulator');
    }

    public function destroy($id)
    {
        $data = Item::findOrFail($id);
        $data->delete();

        return redirect()->route('kalkulator');
    }
}
