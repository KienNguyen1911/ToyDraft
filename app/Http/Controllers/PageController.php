<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    //
    public function getIndex()
    {
        $user = \Auth::user();
        $products = Product::all();
        return view('index', ['products' => $products], ['user' => $user]);
    }

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function getAdmin()
    {
        return view('admin.admin');
    }

    public function get404()
    {
        return view('404page');
    }

}
