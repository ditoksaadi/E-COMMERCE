<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $bio = Biodata::all();

        return view('backend.biodata.biodata', compact('bio'));
    }
    public function store(Request $r)
    {
            $bio = new Biodata();
            $bio->nama = $r->nama;
            $bio->alamat = $r->alamat;
            $bio->jurusan = $r->jurusan;
            $bio->email = $r->email;
            $bio->save();

        return redirect('biodata')->with('success', 'Data berhasil di tambahkan');
    }
    public function update(Request $r, $id)
    {
        $bio = Biodata::where('id', $id)->first();
        $bio->nama = $r->nama;
        $bio->alamat = $r->alamat;
        $bio->jurusan = $r->jurusan;
        $bio->email = $r->email;
        $bio->save();

        return redirect('biodata')->with('success', 'Data berhasil di edit');
    }
    public function destroy($id)
    {
        $bio = Biodata::where('id', $id)->first();
        $bio->delete();

        return redirect('biodata')->with('success', 'Data berhasil Di Hapus');
    }
    public function deletebio($id)
    {
        $bio = Biodata::where('id', $id)->first();
        $bio->delete();

        return redirect('biodata')->with('success', 'Data berhasil Di Hapus');
    }
}
