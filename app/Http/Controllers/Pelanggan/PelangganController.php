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

    public function store(Request $request){
        $pelanggan = Pelanggan::create([
            
            'nama_pelanggan'=>$request->nama_pelanggan,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'option'=>$request->option,

        ]);

        return redirect()->back();
    }
}
