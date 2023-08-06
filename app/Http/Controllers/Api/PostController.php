<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $posts=Post::all();
        return PostResource::collection($posts);
    
    }
    function show($id){
        // $post=Post::find($id);
        // return $post;
        return new PostResource(Post::find($id));
    }
    function store(StorePostRequest $request)
    {
        
        $post=$request->all();

        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>$request->user_id
        ]);
        return "Store Done";
    }
    function update(StorePostRequest $request,$id)
    {
        $post=Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return 'Update Done';

    }    
    function destroy($id)
    {
        Post::destroy($id);
        return 'Delete Done';

    }  
}
