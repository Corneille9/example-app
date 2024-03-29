<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function get()
    {
        $products = Product::all();
        return view("landing.home", ["products" => $products]);
    }

    public function dynamicForm(Request $request)
    {
        $request->validate([
            "images.*" => 'required|mimes:jpg,jpeg,png,bmp',
//            "descriptions" => 'required|array',
//            "users" => 'required|array',
//            "users.name" => 'required|string',
//            "users.age" => 'required|int',
        ]);

//        $path = "uploads/blogs/images/asdhdkhjdsa.png";
//        \Storage::delete($path);
//
//        return response()->json(["success" => true]);

//
//        $v = [
//            "name" => "ksjhdkjs",
//            "age" => 23,
//            "gender" => "male|female"
//        ];

        $images = [];

        foreach ($request->files as $file) {
            $path = "uploads/blogs/images/".$file->getClientOriginalName();
            $images[] = $path;

            \Storage::disk("public")->put($path, file_get_contents($file));
        }

////        $blog->images[0] =  "sadsad"
//
//        unset($blog->images[0]);

        $blog->images = $images;
        $blog->save();

        dd($request->descriptions);
    }
}
