<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\checkout;
use Carbon\Carbon;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index()
    {
        $id_user = session('id_user');

        if ($id_user) {
            $cartitem = cart::where('id_user',session('id_user'))->get();

        } else {
            $cartitem = cart::all();
        }
        return view('frontend.cart.cart' ,compact('cartitem'));
    }

    public function addcart(Request $r)
    {
        // dd(session('id_user'));
        $id_user = session('id_user');
        $id_produk = $r->id_produk;
        $quantity = $r->quantity;
        $status = 0;

        $cart = Cart::where('id_produk', $id_produk)->first();

        if ($cart) {
            $cart->increment('quantity', $quantity);
        } else {
            $cart = new Cart();
            $cart->id_produk = $id_produk;
            $cart->quantity = $quantity;
            $cart->id_user = $id_user;
            $cart->status = 0;
            $cart->save();
        }

        return redirect('/cart');
    }

    public function deletecart($id_user)
    {
        $cartitem = cart::where('id_user',session('id_user'))->first();
        $cartitem->delete();

        return redirect('/cart');
    }

    public function deleteall()
    {
        $cartitem = cart::truncate();

        return redirect('/cart');
    }

    public function checkout()
    {
        $cart = cart::where('id_user',session('id_user'))->get();

        return view('frontend.checkout.checkout',compact('cart'));
    }
    public function order(){
        $checkout = checkout::where('id_user',session('id_user'))->get();

        return view('frontend.order.order',compact('checkout'));
    }
    public function addcheckout(Request $r)
    {

        $photo = $r->file('foto')->store('public/checkout/');

        $checkout = new checkout();
        $checkout ->id_user = $r->id_user;
        $checkout ->id_cart = json_encode($r->id_cart);
        $checkout ->total_bayar = $r->total_bayar;
        $checkout ->foto = $photo;
        $checkout ->waktu = Carbon::now();
        $checkout->save();

        return redirect('/order');
    }
}
