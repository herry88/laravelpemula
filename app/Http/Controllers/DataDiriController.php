<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDiri = DataDiri::all(); //memanggil data ke database
        return view('master',compact('dataDiri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //simpan data ke database

        $data = new DataDiri();
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->pendidikan = $request->input('pendidikan');
        $data->telepon = $request->input('telepon');
        if ($data->save()) {
            return redirect()->back();
        }else{
            return '<h1>Gagal Simpan</h1>';
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(DataDiri $dataDiri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataDiri $dataDiri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataDiri $dataDiri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataDiri $dataDiri)
    {
        //
    }

    public function generate($id)
    {
        $data = DataDiri::findOrFail($id);
        $qrcode  = QrCode::size(400)->generate($data->nama);
        return view('qrcode', compact('qrcode'));

    }
}
