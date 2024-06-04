<?php

namespace App\Http\Controllers;

use App\Models\satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $satuan = satuan::all();

        return view('backend.satuan.satuan', compact('satuan'));
    }

    public function store(Request $r)
    {
        $satuan = new satuan();
        $satuan->nama = $r->nama;
        $satuan->save();

        return redirect('admin/satuan');
    }
    public function update(request $r, $id)
    {
        $satuan =  satuan::where('id', $id)->first();
        $satuan->nama = $r->nama;
        $satuan->save();

        return redirect('admin/satuan');
    }
    public function destroy($id)
    {
        $satuan = satuan::where('id', $id)->first();
        $satuan->delete();

        return redirect('admin/satuan');
    }
}
