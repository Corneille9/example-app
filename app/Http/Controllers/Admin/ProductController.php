<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
    }

    public function create(Request $request){
    }

    public function store(Request $request){
        $request->validate([

        ]);

        $product = new Product();
        $product->name = "";
        $product->price = "";
        $product->save();

        return view("");
    }

    public function edit(Request $request){
    }

    public function update(Request $request){
    }

    public function delete(Request $request){
    }

    public function show(Request $request){
    }
}
