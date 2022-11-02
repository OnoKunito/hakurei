<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Postcontroller extends Controller
{
    public function index(Post $post)
   {
<<<<<<< HEAD
     return view('posts/index')->with(['posts' => $post->getPaginateBylimit(1)]);
   }
   
   public function show(Post $post)
   {
       return view('posts/show')->with(['post' => $post]);
=======
     return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);
>>>>>>> master
   }
}