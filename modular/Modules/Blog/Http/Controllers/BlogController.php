<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Post;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

       
        $posts=Post::with('category','user')->latest()->get();

        // dd($posts);
        
        return view('blog::index',compact('posts'));
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Post $post)
    {

        // dd($post);
        return view('blog::show',compact('post'));
    }

}
