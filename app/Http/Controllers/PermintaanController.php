<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Peramalan;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Validator;

class PermintaanController extends Controller
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
        $data = Permintaan::all();
        return view('permintaan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permintaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Permintaan();
        $data->id_permintaan = $request->id_permintaan;
        $data->tanggal = $request->tanggal;
        $data->komponen = $request->komponen;
        $data->golongan_darah = $request->golongan_darah;
        $data->rhesus = $request->rhesus;
        $data->jumlah_permintaan = $request->jumlah_permintaan;
        $data->rs = $request->rs;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('permintaan.index')->with('alert_message', 'Berhasil menambah Paket!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function show(Permintaan $permintaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Permintaan::where('id', $id)->get();
        return view('permintaan.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Permintaan::where('id', $id)->first();
        $data->id_permintaan = $request->id_permintaan;
        $data->tanggal = $request->tanggal;
        $data->komponen = $request->komponen;
        $data->golongan_darah = $request->golongan_darah;
        $data->rhesus = $request->rhesus;
        $data->jumlah_permintaan = $request->jumlah_permintaan;
        $data->rs = $request->rs;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('permintaan.index')->with('alert_message', 'Berhasil mengubah permintaan!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Permintaan::where('id', $id)->first();
        $data->delete();

        return redirect()->route('permintaan.index')->with('alert_message', 'Berhasil menghapus permintaan!');

    }
}
