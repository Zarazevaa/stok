<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelpembelian;
use App\modelbarang;
use Validator;

class pembelian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelpembelian::all();
        // return view('pembelian', compact('data'));
         return view('pembelian', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = modelbarang::all();
        return view('pembelian_create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'id' => 'required',
          'kd_barang' => 'required',
          'jml' => 'required',
          'total_harga' => 'required',
        ]);

        $data = new modelpembelian();
        $data->kd_barang = $request->kd_barang;
        $data->jml = $request->jml;
        $data->total_harga = $request->total_harga;
        $data->save();

        $databeli = modelbarang::where('kd_barang', $request->kd_barang)->first();
        $databeli->stok = $databeli->stok + $request->jml;
        $databeli->save();

        return redirect()->route('pembelian.index')->with('alert_message', 'Berhasil menambah data!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = modelpembelian::where('id', $id)->get();
        return view('pembelian_edit', compact('data'));
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
        $this->validate($request, [
          'id' => 'required',
          'kd_barang' => 'required',
          'jml' => 'required',
          'total_harga' => 'required',
        ]);

        $data = modelpembelian::where('id', $id)->first();
        $data->id = $request->id;
        $data->kd_barang = $request->kd_barang;
        $data->jml = $request->jml;
        $data->total_harga = $request->total_harga;
        $data->save();

        return redirect()->route('pembelian.index')->with('alert-message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = modelpembelian::where('id', $id)->first();
        $data->delete();

        return redirect()->route('pembelian.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
