<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kategoribus.index', [
            "menu" => kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kategoribus.create', [
            "menu" => kategori::all()
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
            'nama_menu' => 'required|max:255',
            'harga' => 'required',
            'image' => 'image|file|max:1024',

        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('kategori-images');
        }

        kategori::create($validatedData);

        return redirect('/dashboard/kategoribus')->with('success', 'Menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        return view('dashboard.kategoribus.show', [
            "menu" => kategori::all()
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = \App\Models\Kategori::find($id);
        return view('dashboard.kategoribus.index',['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $kategori)
    {
        if($kategori->image) {
            Storage::delete($kategori->image);
        }
        kategori::destroy($kategori->id);
        return redirect('/dashboard/kategoribus')->with('success', 'Menu berhasil dihapus!');
    }
}
