<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Produk::getAllProduk();

        return view('admin.product.listProduct', compact('products'));
    }
}
