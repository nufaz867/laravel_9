<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }
}