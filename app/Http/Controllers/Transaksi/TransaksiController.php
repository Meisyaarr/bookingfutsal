<?php

namespace App\Http\Controllers\Transaksi;

use App\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();

        return view('task.transaksi.index', compact('transaksis'));
    }

    public function create()
    {   
        return view('task.transaksi.create');
    }

    public function store(Request $request){
        $transaksi = Transaksi::create([
            
            'customer_id'=>$request->customer_id,
            'nama_pelanggan'=>$request->nama_pelanggan,
            'waktu_booking'=>$request->waktu_booking,
            'tanggal_booking'=>$request->tanggal_booking,
            'biaya_sewa'=>$request->biaya_sewa,

        ]);

        return redirect()->back();
    }
}
