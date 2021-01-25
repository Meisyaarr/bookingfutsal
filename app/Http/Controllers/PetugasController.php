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

    public function store(Request $request){
        $petugas = Petugas::create([
            
            'nama'=>$request->nama,
            'password'=>$request->password,
            'email'=>$request->email,
            'level'=>$request->level,
            'status'=>$request->status,
            'option'=>$request->option,

        ]);

        return redirect()->back();
    }
}
