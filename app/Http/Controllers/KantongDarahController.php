<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\KantongDarah;
use Illuminate\Http\Request;
use Validator;

class KantongDarahController extends Controller
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
        $data = KantongDarah::all();
        return view('kantong-darah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kantong-darah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new KantongDarah();
        $data->id_kantong = $request->id_kantong;
        $data->id_donor = $request->id_donor;
        $data->komponen = $request->komponen;
        $data->tgl_kadaluarsa = $request->tgl_kadaluarsa;
        $data->jenis = $request->jenis;
        $data->status = $request->status;
        $data->tanggal_keluar = $request->tanggal_keluar;
        $data->rs = $request->rs;
        $data->save();

        return redirect()->route('kantong-darah.index')->with('alert_message', 'Berhasil menambah KantongDarah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kantong_darah  $kantong_darah
     * @return \Illuminate\Http\Response
     */
    public function show(kantong_darah $kantong_darah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kantong_darah  $kantong_darah
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = KantongDarah::where('id', $id)->get();
        return view('kantong-darah.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kantong_darah  $kantong_darah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = KantongDarah::where('id', $id)->first();
        $data->id_kantong = $request->id_kantong;
        $data->id_donor = $request->id_donor;
        $data->komponen = $request->komponen;
        $data->tgl_kadaluarsa = $request->tgl_kadaluarsa;
        $data->jenis = $request->jenis;
        $data->status = $request->status;
        $data->tanggal_keluar = $request->tanggal_keluar;
        $data->rs = $request->rs;
        $data->save();

        return redirect()->route('kantong-darah.index')->with('alert_message', 'Berhasil mengubah kantong_darah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kantong_darah  $kantong_darah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KantongDarah::where('id', $id)->first();
        $data->delete();

        return redirect()->route('kantong-darah.index')->with('alert_message', 'Berhasil menghapus kantong_darah!');

    }
}
