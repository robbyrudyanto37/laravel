<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function form(){
        $products = Products::all();
        return view('admin.addCartForm',compact('products'));
    }

    public function cart(){
        $cart = DB::table('cart')
            ->select('cart.*', 'products.productName')
            ->join('products','cart.idProduct','=','products.id')
            ->get();

        //select * from cart, products.productName from cart JOIN products where
        //cart.idProduct = products.id
        return view('admin.showCart',compact('cart'));
    }

    public function addCart(){
        $cart = new Cart();

        $cart->idUser = \request('idUser');
        $cart->idProduct = \request('idProduct');
        $cart->qty = \request('qty');
        $cart->status = \request('status');
        $cart->totalPrice = \request('totalPrice');

        $cart->save();
        return redirect()->route('addCart')->with('success', 'Cart Added Successfully');
    }

}
