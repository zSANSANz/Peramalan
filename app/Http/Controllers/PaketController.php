<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Validator;

class PaketController extends Controller
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
        $data = Paket::all();
        return view('paket.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new paket();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->price_after = $request->price_after;
        $data->user_registered = $request->user_registered;
        $data->resource_power = $request->resource_power;
        $data->disk_space = $request->disk_space;
        $data->databases = $request->databases;
        $data->domain = $request->domain;
        $data->backup = $request->backup;
        $data->ssl = $request->ssl;
        $data->save();

        return redirect()->route('Paket.index')->with('alert_message', 'Berhasil menambah Paket!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = paket::where('id', $id)->get();
        return view('Paket.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = paket::where('id', $id)->first();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->price_after = $request->price_after;
        $data->user_registered = $request->user_registered;
        $data->resource_power = $request->resource_power;
        $data->disk_space = $request->disk_space;
        $data->databases = $request->databases;
        $data->domain = $request->domain;
        $data->backup = $request->backup;
        $data->ssl = $request->ssl;
        $data->save();

        return redirect()->route('Paket.index')->with('alert_message', 'Berhasil mengubah paket!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = paket::where('id', $id)->first();
        $data->delete();

        return redirect()->route('Paket.index')->with('alert_message', 'Berhasil menghapus paket!');

    }
}
