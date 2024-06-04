<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mutasicontroller extends Controller
{
    public function index(){
        return view('backend.mutasi.mutasi');
    }
    public function store(request $r)
    {
        $mutasi =  new mutasi();
        $mutasi->nobukti =$r->nobukti;
        $mutasi->kode =$r->kode;
        $mutasi->idstok =$r->idstok;
        $mutasi->quantity =$r->quantity;
        $mutasi->idbarang =$r->idbarang;
        $mutasi->harga =$r->harga;
        $mutasi->ket =$r->ket;
        $mutasi->save();

        return redirect('/mutasi');
    }
}
