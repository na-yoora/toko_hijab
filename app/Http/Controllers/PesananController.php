<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = DB::table('pesanan')->get();
        return view('pesanan/index', ['pesanan' => $pesanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pesanan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);

        $pesanan = new Pesanan;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->nama_barang = $request->nama_barang;
        $pesanan->harga_barang = $request->harga_barang;
        $pesanan->jumlah_barang = $request->jumlah_barang;

        $pesanan->save();

        return redirect('/pesanan')->with('status', 'Pesanan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param App\Models\Pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        return view('/pesanan/edit', compact('pesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);
        Pesanan::where('id', $pesanan->id)
         ->update([
             'nama_pemesan' => $request->nama_pemesan,
             'nama_barang' => $request->nama_barang,
             'harga_barang' => $request->harga_barang,
             'jumlah_barang' => $request->jumlah_barang,

         ]);
         return redirect('/pesanan')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Pesanan  
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        Pesanan::destroy($pesanan->id);
        return redirect('/pesanan')->with('status', 'Data berhasil dihapus');
    }
}
