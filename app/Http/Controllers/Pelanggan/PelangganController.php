<?php

namespace App\Http\Controllers\Pelanggan;

use App\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();

        return view('task.pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {   
        return view('task.pelanggan.create');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('task.pelanggan.edit', compact('pelanggan'));
    }

    public function store(Request $request){
        $pelanggan = Pelanggan::create([
            
            'nama_pelanggan'=>$request->nama_pelanggan,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,

        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $pelanggans = Pelanggan::find($id);
        $pelanggans->update($request-> all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $pelanggans = Pelanggan::find($id);
        $pelanggans->delete($pelanggans->all());

        return redirect()->back();
    }
}
