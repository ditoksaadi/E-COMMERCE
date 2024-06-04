<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoryController extends Controller
{
    public function index()
    {
        $kategori = kategori::all();

        return view('backend.kategori.kategori', compact('admin/kategori'));
    }

    public function store(Request $r)
    {
        $kategori = new kategori();
        $kategori->nama = $r->nama;
        $kategori->save();

        return redirect('admin/kategori');
    }
    public function update(request $r, $id)
    {
        $kategori =  kategori::where('id', $id)->first();
        $kategori->nama = $r->nama;
        $kategori->save();

        return redirect('admin/kategori');
    }
    public function destroy($id)
    {
        $kategori = kategori::where('id', $id)->first();
        $kategori->delete();

        return redirect('admin/kategrori');
    }
}
