<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * get all products
     *
     * @return Product[] list of products
     */
    public function index()
    {
        return Product::with(['category', 'stocks'])->get();
    }
}
