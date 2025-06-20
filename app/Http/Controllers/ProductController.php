<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //list des produits
    public function index() {
        //recuperer les produits
        $products = Product::with(['category', 'unit'])->get();
        // dd($products);
        return view('Product.list', compact('products'));
    }

    //retourne le formulaire de creation d'un produit
    public function create() {
        //recuperation des category 
        $categories = Category::all();
        //recuperation des unites
         $units = Unit::all();

        return view('Product.create',compact('categories', 'units'));
    }

    //fonction d'insertion en base de donner
    public function store(Request $request) {
        //validation
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'description' => 'required',
            'unit_id' => 'required',
            'category_id' => 'required',
        ]);
        //creation du produit

        //genereration du code
        $code = Str::random(5);

        $product = new Product();
        $product->name = $request->name;
        $product->code = $code;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->unit_id = $request->unit_id;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('list.produits');

    }
}
