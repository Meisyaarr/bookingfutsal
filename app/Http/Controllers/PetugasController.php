<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->petugas = new Petugas;
    }
    public function index()
    {
        $petugass = Petugas::all();
        
        return view('task.petugas.index',compact('petugass'));
        
    }

    public function create()
    {
        return view('task.petugas.create');
    }
}
