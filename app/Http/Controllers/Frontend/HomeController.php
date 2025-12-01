<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('user')
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

        return view('frontend.home.index', compact('products'));
    }
}
