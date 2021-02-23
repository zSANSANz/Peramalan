<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Peramalan;
use Illuminate\Http\Request;
use Validator;

class PeramalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('cek_login');
    }

    public function index()
    {
        $data = Peramalan::all();
        return view('peramalan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peramalan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requetanggal_peramalanst  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Peramalan();
        $data->tanggal_peramalan = $request->tanggal_peramalan;
        $data->bulan_peramalan = $request->bulan_peramalan;
        $data->tahun_peramalan = $request->tahun_peramalan;
        $data->komponen = $request->komponen;
        $data->golongan_darah = $request->golongan_darah;
        $data->hasil = $request->hasil;
        $data->aktual = $request->aktual;
        $data->mape = $request->mape;
        $data->save();

        return redirect()->route('peramalan.index')->with('alert_message', 'Berhasil menambah Paket!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function show(Peramalan $peramalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Peramalan::where('id', $id)->get();
        return view('peramalan.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Peramalan::where('id', $id)->first();
        $data->tanggal_peramalan = $request->tanggal_peramalan;
        $data->bulan_peramalan = $request->bulan_peramalan;
        $data->tahun_peramalan = $request->tahun_peramalan;
        $data->komponen = $request->komponen;
        $data->golongan_darah = $request->golongan_darah;
        $data->hasil = $request->hasil;
        $data->aktual = $request->aktual;
        $data->mape = $request->mape;
        $data->save();

        return redirect()->route('peramalan.index')->with('alert_message', 'Berhasil mengubah peramalan!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peramalan  $peramalan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Peramalan::where('id', $id)->first();
        $data->delete();

        return redirect()->route('peramalan.index')->with('alert_message', 'Berhasil menghapus peramalan!');

    }
}
