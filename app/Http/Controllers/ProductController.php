<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit()
    {
        return view('products.edit');
    }

    public function show($id)
    {
        return view('products.delete');
    }

    public function destroy()
    { 
        return view('products.delete');
    }
}
