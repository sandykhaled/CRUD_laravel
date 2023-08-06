<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    function index()
    {
        $posts=Post::all();
    return view('post.posts',['posts'=>$posts]);
    }
    function show($id){
        $post=Post::find($id);
        return view('post.show',['post'=>$post]);

    }
    function create()
    {
           return view('post.create');
    }
    function store(StorePostRequest $request)
    {
        // $id=Auth::user();
        // dd($id->name);
        $post=$request->all();

        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>Auth::id()
        ]);
        return redirect('posts');
    }
    function edit($id)
    {
        $post=Post::find($id);
        return view('post.edit',['post'=>$post]);

    }
    function update(StorePostRequest $request,$id)
    {
        $post=Post::find($id);
        $post->title=$request['title'];
        $post->description=$request['description'];
        $post->save();
        return redirect('posts');

    }    
    function destroy($id)
    {
        Post::destroy($id);
        return redirect('posts');

    }  
    
}

