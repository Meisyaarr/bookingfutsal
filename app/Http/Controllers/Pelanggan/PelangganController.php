<?php

namespace App\Http\Controllers\Pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    public function index()
    {
        return view('task.pelanggan.index');
    }

    public function create()
    {   
        return view('task.pelanggan.create');
    }
}
