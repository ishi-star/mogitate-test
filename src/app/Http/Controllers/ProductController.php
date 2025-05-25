<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Product;


class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::Paginate(6);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.register');
    }

    public function show($productId)
{
    $product = Product::findOrFail($productId);
    return view('products.show', compact('product'));
}
}
