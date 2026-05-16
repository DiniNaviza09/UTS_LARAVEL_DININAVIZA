<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // HALAMAN PRODUCT
    public function index()
    {
        return view('products.index');
    }

    // HALAMAN CREATE PRODUCT
    public function create()
    {
        return view('products.create');
    }

    // SIMPAN PRODUCT
    public function store(Request $request)
    {
        return redirect()
            ->route('product.index')
            ->with('success', 'Product berhasil ditambahkan.');
    }
}