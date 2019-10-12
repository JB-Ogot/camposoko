<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
         // $posts = auth()->user()->posts()->orderBy('updated_at', 'DESC');
        //  $posts = Post::latest()->get();

        //  return view('index')->with('posts', $posts);
    }
}
