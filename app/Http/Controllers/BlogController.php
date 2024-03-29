<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view("blog.index", ["blogs" => $blogs]);
    }

    public function show($blogId){
        $blog = Blog::find($blogId);

        return view("blog.show", ["blog" => $blog]);
    }

    public function addComment(Request $request){

        $request->validate([
            "blog_id" => "required|exists:blogs,id",
            "content" => "required|string|min:10|max:1000",
            "name" => "nullable|string",
            "email" => "nullable|email",
        ]);

        $blog = Blog::find($request->blog_id);


        $comment = new BlogComment();
        $comment->blog_id = $blog->id;
        $comment->content = $request->get("content");
        $comment->author_name = $request->get("name");
        $comment->author_email = $request->get("email");
        $comment->author_id = \Auth::check() ? \Auth::user()->id : null;
        $comment->save();


        return redirect()->back();
    }
}
