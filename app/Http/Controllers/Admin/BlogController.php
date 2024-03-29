<?php

namespace App\Http\Controllers\Admin;

class BlogController
{

    public function index()
    {
        $blogs = \App\Models\Blog::all();
        return view("admin.blog.index", ["blogs" => $blogs]);
    }

    public function show($id){
        $blog = \App\Models\Blog::find($id);
        $comments = $blog->comments()->get();
        return view("admin.blog.show", ["blog" => $blog, "comments" => $comments]);
    }
}
