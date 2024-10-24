<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function welcome() {
    //     return view('welcome');
    // }

    // Nama function tidak harus sama dengan viewnya

    // public function fatoni() {
    //     return view('welcome');
    // }

    public function index() {
        $products = Product::all();
        return view('project-01.lte.pages.layout.collapsed-sidebar', compact('products'));
    }

    public function report() {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function createProduct() {
        return view('tambah_product');
    }

    public function storeProduct() {
        Product::create([
            'name' => request()->name,
            'slug' => Str::slug(request()->name),
            'description' => request()->description,
            'price' => request()->price,
        ]);
        return redirect('/index');
    }

    public function edit($productID) {
        $product = Product::find($productID);
        return view('/edit_product', compact('product'));
    }

    public function update($productID) {
        $product = Product::find($productID);
        $product->update([
            'name' => request()->name,
            'slug' => Str::slug(request()->name),
            'description' => request()->description,
            'price' => request()->price,
        ]);

        return redirect('/index');
    }

    public function delete($productID) {
        Product::destroy($productID);
        return redirect('/index');
    }

    public function fatoni() {
        return view('welcome');
    }
}
