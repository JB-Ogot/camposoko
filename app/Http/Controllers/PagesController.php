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
        $this->middleware('auth',['except'=>['index','show','about','blog','payment','contact','login','register',]]);
    }
    public function index(){
        // $posts = DB::select('select * from posts');
        // printf($posts);
        // return view('index',['posts'->$posts]);
        $posts = Post::all();

        $pl=0;
        $tw=0;
        $elec=0;
        $house=0;
        $fun = 0;
        $apart=0;
        $beat=0;
        $event=0;
        $prof=0;
        $wait=0;
        $food=0;
        $bar=0;

        foreach($posts as $post){
            $cat = $post->category;

        switch($cat){
                case 'TVs & Woofers':
                    $tw++;
                    break;
                case 'Electronics':
                    $elec++;
                    break;
                case 'Furniture':
                    $fun++;
                    break;
                case 'Phones & Laptops':
                    $pl++;
                    break;
                case 'Apartment & Hostels':
                    $apart++;
                    break;
                case 'Beauty & Fashion':
                    $beat++;
                    break;
                case 'Events & Posters':
                    $event++;
                    break;
                case 'Professional Services':
                    $prof++;
                    break;
                case 'Waiting':
                    $wait++;
                    break;
                case 'Food & Restaurants':
                break;
                    $food++;
                case 'Bars & Clubs':
                    $bar++;
                    break;


            }
        }

        // print($bar);

              $posts = Post::latest()->get();

            return view('index')->with(array(
                'posts'=> $posts,
                'pl'=>$pl,
                'tw'=>$tw,
                'elec'=> $elec,
                'house'=>$house,
                'fun'=>$fun,
                'apart'=>$apart,
                'beat'=>$beat,
                'event'=>$event,
                'prof'=>$prof,
                'wait'=>$wait,
                'food'=>$food,
                'bar'=>$bar,


            ));


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
    public function terms(){
        return view('pages.terms');

    }


}
