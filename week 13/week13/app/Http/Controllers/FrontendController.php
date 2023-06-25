<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Produk::getAllProduk();
        return view('welcome', compact('products'));
    }
}
