<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $productCount = Product::count();

        $data = [
            "userCount" => $userCount,
            "productCount" => $productCount
        ];

        return view('admin.dashboard', $data);
    }

    public function get(){
        $products = Product::all();
        return view("landing.home", ["products" => $products]);
    }
}
