<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StokController extends Controller
{
    public function index()
    {
        $stok = Stok::with('satuan', 'kategori')->get();
        return view('backend.stok.stok', compact('stok'));
    }
    public function create()
    {
        return view('backend.stok.addstok');
    }
    public function store(request $r)
    {


        $stok = new Stok();
        $stok->kode = $r->kode;
        $stok->nama = $r->nama;
        $stok->idsatuan = $r->idsatuan;
        $stok->idkategori = $r->idkategori;
        $stok->saldoawal = $r->saldoawal;
        $stok->hargabeli = $r->hargabeli;
        $stok->hargajual = $r->hargajual;
        $stok->hargamodal = $r->hargamodal;
        $photos = $r->file('foto');
        $photoPaths = [];
        foreach($photos as $foto){
            $photoPath = $foto->store('public/product/');
            $photoPaths[] = $photoPath;
        }
        $photoPathsJson = json_encode($photoPaths);
        $stok->foto = $photoPathsJson;
        $stok->desk = $r->desk;
        $stok->pajang = $r->pajang;
        $stok->saldoakhir = $r->saldoakhir;
        $stok->save();

        return redirect('admin/stok')->with('success', 'Data berhasil di tambahkan');
    }
    public function edit($id)
    {
        return view('backend.stok.editstok')
            ->with('id', $id);
    }
    public function update(request $r, $id)
    {

        $stok = stok::where('id', $id)->first();
        $stok->kode = $r->kode;
        $stok->nama = $r->nama;
        $stok->idsatuan = $r->idsatuan;
        $stok->idkategori = $r->idkategori;
        $stok->saldoawal = $r->saldoawal;
        $stok->hargabeli = $r->hargabeli;
        $stok->hargajual = $r->hargajual;
        $stok->hargamodal = $r->hargamodal;

        if($r->hasFile('image')){
            foreach (json_decode($stok->foto) as $path){
                Storage::delete($path);
            }

            $photos = $r->file('foto');
            $photoPaths = [];
            foreach($photos as $foto){
                $photoPath = $foto->store('public/product');
                $photoPaths[] = $photoPath;
            }
            $photoPathsJson = json_encode($photoPaths);
            $stok->foto = $photoPathsJson;
        } else{
            $stok->foto = $stok->foto;
        }


        $stok->desk = $r->desk;
        $stok->pajang = $r->pajang;
        $stok->saldoakhir = $r->saldoakhir;
        $stok->save();

        return redirect('admin/stok')->with('success', 'Data berhasil di tambahkan');
    }
    public function destroy($id)
    {

        $stok = stok::where('id', $id)->first();
        $stok->delete();

        return redirect('admin/stok')->with('success', 'Data berhasil Di Hapus');
    }
    public function details($id){
        return view('backend.stok.editstok')
        ->with('id', $id);
    }
}
