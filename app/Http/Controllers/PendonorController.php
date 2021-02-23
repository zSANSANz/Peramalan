<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use Validator;

class PendonorController extends Controller
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
        $data = Pendonor::all();
        return view('pendonor.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendonor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Pendonor();
        $data->id_pendonor = $request->id_pendonor;
        $data->no_ktp = $request->no_ktp;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->status = $request->status;
        $data->pekerjaan = $request->pekerjaan;
        $data->golongan_darah = $request->golongan_darah;
        $data->rhesus = $request->rhesus;
        $data->ibu_kandung = $request->ibu_kandung;
        $data->no_telp = $request->no_telp;
        $data->save();

        return redirect()->route('pendonor.index')->with('alert_message', 'Berhasil menambah Paket!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function show(Pendonor $pendonor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Pendonor::where('id', $id)->get();
        return view('pendonor.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pendonor::where('id', $id)->first();
        $data->id_pendonor = $request->id_pendonor;
        $data->no_ktp = $request->no_ktp;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->status = $request->status;
        $data->pekerjaan = $request->pekerjaan;
        $data->golongan_darah = $request->golongan_darah;
        $data->rhesus = $request->rhesus;
        $data->ibu_kandung = $request->ibu_kandung;
        $data->no_telp = $request->no_telp;
        $data->save();

        return redirect()->route('pendonor.index')->with('alert_message', 'Berhasil mengubah pendonor!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pendonor::where('id', $id)->first();
        $data->delete();

        return redirect()->route('pendonor.index')->with('alert_message', 'Berhasil menghapus pendonor!');

    }
}
