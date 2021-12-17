<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function form(){
        return view('admin.addProductsForm');
    }

    public function products(){
        $products = Products::all(); //select * from Products
        return view('admin.showProducts', compact('products'));
    }

    public function addProducts(){
        $filename="";
        if(\request()->hasFile('proimg')) {
            #code...
            //get image file from form
            $img = \request()->file('proimg');

            $filename = time() . '.' . $img->getClientOriginalExtension();

            //store image to public directory
            \request()->file('proimg')->move(public_path('images'), $filename);


            $products = new Products();
            //model->columnName = request('field_name');
            $products->productName = \request('productName');
            $products->productCategory = \request('productCategory');
            $products->desc = \request('desc');
            $products->stock = \request('stock');
            $products->price = \request('price');
            $products->image = $filename;

            $products->save();
            return redirect()->route('addProducts')->with('success', 'Product Added Successfully');
        }
        else{
            return redirect()->route('addProducts')->with('error', 'Failed to Add Product');
        }
    }
}
