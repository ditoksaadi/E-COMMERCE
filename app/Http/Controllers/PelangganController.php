<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = pelanggan::get();

        return view('backend.pelanggan.pelanggan', compact('pelanggan'));
    }
}
