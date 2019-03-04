<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){

        // $posts = DB::table('posts')->get();

        $posts =Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show($id){

        // $posts = DB::table('posts')->get();

        $posts = Post::find($id);

        return view('posts.show', compact('post'));
    }
}
