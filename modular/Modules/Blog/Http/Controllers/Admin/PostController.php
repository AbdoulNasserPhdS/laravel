<?php

namespace Modules\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\Renderable;
use Modules\Blog\Http\Requests\StoreRequest;
use Modules\Blog\Http\Requests\UpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */



     public function __construct()
     {
        
        $this->middleware('auth');
     }



    public function index()
    {

        // $posts=Post::with('category','user')->latest()->get();
        $posts=auth()->user()->posts; 


        return view('blog::Admin.Posts.index',compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        $categories=Category::all();

        return view('blog::Admin.Posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreRequest $request)
    {
        //

        // souvegarder l'image dans le dossier public
        $imageUrl=$request->image->store('posts');
    
        Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$imageUrl,
        ]);
        //Pour lees champs user_id et category_id, ils sont integerer lors de la construction de l'objet lui meme
        

        return  redirect()->route('post.index')->with('sucess','Votre poste a été creer !');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($post)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Post $post)
    {

        if(Gate::denies('edit-access',$post)){
            abort('403');
        }

        $categories=Category::all();
        return view('blog::Admin.Posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateRequest $request, Post $post)
    {
        //

        

        $arrayUpdate=[
            'title'=>$request->title,
            'content'=>$request->content];

        if($request->image !== null){

            $imageUrl=$request->image->store('posts');

            $arrayUpdate=array_merge($arrayUpdate,[
                'image'=>$imageUrl
            ]);
        }


        $post->update($arrayUpdate);


        return redirect()->route('post.index')->with('succes','Votre post a été modifier !');



    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Post $post)
    {
        //
        if(Gate::denies('destroy-access',$post)){
            abort('403');
        }


        $post->delete();

        return redirect()->route('post.index')->with('succes','Votre post a été supprimer !');
    }
}
