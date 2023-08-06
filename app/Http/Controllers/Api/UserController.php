<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\UserResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users=User::all();
        return UserResource::collection($users);
    
    }
    function show($id){
       
        return new UserResource(User::find($id));
    }  
}
