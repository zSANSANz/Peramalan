<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
use Validator;

class DonorController extends Controller
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
        $data = Donor::all();
        return view('donor.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Donor();
        $data->id_donor = $request->id_donor;
        $data->tanggal_donor = $request->tanggal_donor;
        $data->no_ktp = $request->no_ktp;
        $data->donor_ke = $request->donor_ke;
        $data->donor_terakhir = $request->donor_terakhir;
        $data->tempat_donor = $request->tempat_donor;
        $data->penyelenggara = $request->penyelenggara;
        $data->donor_apherensis = $request->donor_apherensis;
        $data->hb = $request->hb;
        $data->hcc = $request->hcc;
        $data->bb = $request->bb;
        $data->tensi_darah = $request->tensi_darah;
        $data->suhu_badan = $request->suhu_badan;
        $data->nadi = $request->nadi;
        $data->nama_petugas = $request->nama_petugas;
        $data->save();

        return redirect()->route('donor.index')->with('alert_message', 'Berhasil menambah donor!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Donor::where('id', $id)->get();
        return view('donor.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Donor::where('id', $id)->first();
        $data->id_donor = $request->id_donor;
        $data->tanggal_donor = $request->tanggal_donor;
        $data->no_ktp = $request->no_ktp;
        $data->donor_ke = $request->donor_ke;
        $data->donor_terakhir = $request->donor_terakhir;
        $data->tempat_donor = $request->tempat_donor;
        $data->penyelenggara = $request->penyelenggara;
        $data->donor_apherensis = $request->donor_apherensis;
        $data->hb = $request->hb;
        $data->hcc = $request->hcc;
        $data->bb = $request->bb;
        $data->tensi_darah = $request->tensi_darah;
        $data->suhu_badan = $request->suhu_badan;
        $data->nadi = $request->nadi;
        $data->nama_petugas = $request->nama_petugas;
        $data->save();

        return redirect()->route('donor.index')->with('alert_message', 'Berhasil mengubah donor!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Donor::where('id', $id)->first();
        $data->delete();

        return redirect()->route('donor.index')->with('alert_message', 'Berhasil menghapus donor!');

    }
}
