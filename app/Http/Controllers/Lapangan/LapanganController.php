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

    public function edit($id)
    {
        $lapangan = Lapangan::findOrFail($id);
        return view('task.lapangan.edit', compact('lapangan'));
    }

    public function store(Request $request){
        $lapangan = Lapangan::create([
            
            'kode'=>$request->kode,
            'tipe'=>$request->tipe,

        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $lapangans = Lapangan::find($id);
        $lapangans->update($request-> all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $lapangans = Lapangan::find($id);
        $lapangans->delete($lapangans->all());

        return redirect()->back();
    }
}
