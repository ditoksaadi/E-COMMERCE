<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\kategori;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $stok  = stok::where('pajang','on')->get();
        return view('frontend.index', compact('stok'));
    }

    public function index(Request $request)
    {
        $idkategori = $request->query('kategori');
        if ($idkategori != null) {
            $stok = Stok::with('satuan', 'kategori')->where('idkategori', $idkategori)->get();
        } else {
            $stok = Stok::with('satuan', 'kategori')->get();
        }

        return view('frontend.product.product', compact('stok'));
    }

    public function detail($id)
    {
        $item = stok::where('id',$id)->first();

        return view('frontend.product.viewproduct ' ,compact('item'));
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $stok = stok::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $stoks = stok::all();
        }
        return view('frontend.product.product', ['stok' => $stok]);
    }

    public function kategori($id)
    {
        $stok = Stok::where('idkategori',$id)
        ->get();

        return view('frontend.product.product', compact('stok'))
        ->with('id',$id);
    }



}
