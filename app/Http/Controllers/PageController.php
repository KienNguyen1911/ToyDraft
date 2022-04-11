<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    //
    public function getIndex()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function getAdmin()
    {
        return view('admin.admin');
    }

}
