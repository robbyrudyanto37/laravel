<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsCatalog extends Controller
{

public function productscatalog(){
        $productscatalog = products::all(); //select * from Products
        return view('content.products', compact('productscatalog'));
    }
}