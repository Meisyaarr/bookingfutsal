<?php

namespace App\Http\Controllers\Lapangan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LapanganController extends Controller
{
    public function index()
    {
        return view('task.lapangan.index');
    }

    public function create()
    {
        return view('task.lapangan.create');
    }
}
