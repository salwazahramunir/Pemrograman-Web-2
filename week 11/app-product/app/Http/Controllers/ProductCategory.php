<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use Illuminate\Http\Request;

class ProductCategory extends Controller
{
    public function index()
    {
        $product_categories = ProductCategories::getAllProductCategories();

        return view('admin.product_category.listProductCategory', compact('product_categories'));
    }
}
