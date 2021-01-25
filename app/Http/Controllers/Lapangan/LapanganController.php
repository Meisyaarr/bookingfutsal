<?php

namespace App\Http\Controllers\Lapangan;

use App\Lapangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangans = Lapangan::all();

        return view('task.lapangan.index', compact('lapangans'));
    }

    public function create()
    {
        return view('task.lapangan.create');
    }

    public function store(Request $request){
        $lapangan = Lapangan::create([
            
            'nama_lapangan'=>$request->nama_lapangan,
            'harga'=>$request->harga,
            'bentuk'=>$request->bentuk,
            'waktu_booking'=>$request->waktu_booking,
            'option'=>$request->option,

        ]);

        return redirect()->back();
    }
}
