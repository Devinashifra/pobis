<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Daftarharga;
use Illuminate\Http\Request;

class DashboardPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pesanan.index', [
            "pesanan" => Pesanan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pesanan.create', [
            'daftarharga' => Daftarharga::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nama_Pemesan' => 'required',
            'daftarharga_id' => 'required',
            'No_Identitas' => 'required',
            'No_HP' => 'required',
            'Tgl_Keberangkatan' => 'required',
            'Jlh_Penumpang' => 'required',
            'Jlh_Lansia' => 'required',
            'Total_Bayar' => 'required',

        ]);



        Pesanan::create($validatedData);

        return redirect('/dashboard/pesanan')->with('success', 'Tiket berhasil di pesan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
