<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Make sure to import your Product model

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();

        // Pass the products to the index view
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create'); // Return the create view
    }

    public function edit($id)
    {
        return view('products.edit'); // Return the edit view
    }
}
