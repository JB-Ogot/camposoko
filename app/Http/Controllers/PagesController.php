<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
//use Safaricom\Mpesa;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','about','blog','payment','contact','login','register']]);
    }
    public function index(){
        // $posts = DB::select('select * from posts');
        // printf($posts);
        // return view('index',['posts'->$posts]);
        $posts = Post::all();

        return view('index',['posts'=>$posts]);

    }
    public function about(){
        return view('pages.about');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function payment(){
        $number = "number";
        $no = request('number');
        return view('pages.payment')->with($no);
    }
    public function contact(){
        return view('pages.contact');
    }
    public function listingSingle(){
        return view('pages.listings-single');
    }
    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function info(){
        return view('pages.info');
    }

}
