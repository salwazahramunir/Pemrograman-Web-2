<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::getAllProduk();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_category = ProductCategory::all();
        $products = Product::all();
        return view('admin.products.create', compact('product_category', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->kode = $request->kode;
        $product->nama = $request->nama;
        $product->harga_jual = $request->harga_jual;
        $product->harga_beli = $request->harga_beli;
        $product->stok = $request->stok;
        $product->min_stok = $request->min_stok;
        $product->deskripsi = $request->deskripsi;
        $product->kategori_produk_id = $request->kategori_produk_id;
        $product->save();
        return redirect('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product_category = ProductCategory::all();
        $product = Product::where('id', $id)->get();
        return view('admin.products.edit', compact(
            'product',
            'product_category'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
