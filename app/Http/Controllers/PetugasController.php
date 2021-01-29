<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{

    public function index()
    {
        $petugass = Petugas::all();
        
        return view('task.petugas.index',compact('petugass'));
        
    }

    public function create()
    {
        return view('task.petugas.create');
    }

    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('task.petugas.edit', compact('petugas'));
    }

    public function store(Request $request){
        $petugas = Petugas::create([
            
            'nama'=>$request->nama,
            'password'=>$request->password,
            'email'=>$request->email,
            'level'=>$request->level,
            'status'=>$request->status,

        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $petugass = Petugas::find($id);
        $petugass->update($request-> all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $petugass = Petugas::find($id);
        $petugass->delete($petugass->all());

        return redirect()->back();
    }
}
