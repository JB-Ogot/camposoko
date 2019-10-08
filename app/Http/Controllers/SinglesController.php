<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class SinglesController extends Controller
{
    //
    public function phones(){
        $category = "Phones & Laptops";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);

    }
    public function tvs(){
        $category = "TVs & Woofers";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function elec(){
        $category = "Electronics";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        // $post = Post::all();
        // foreach($post as $post){
        //     if($post->category == $category){
                return view('pages.single')->with('post',$post);
        //         // print($post->category);
        //         // print($post->imgUrl1);


        //     }

        // }

    }
    public function house(){
        $category = "Household Items";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function furn(){
        $category = "Furniture";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function apart(){
        $category = "Apartment & Hostels";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function beauty(){
        $category = "Beauty & Fashion";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function events(){
        $category = "Events & Posters";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function prof(){
        $category = "Professional Services";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function food(){
        $category = "Food & Restaurants";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
    public function bars(){
        $category = "Bars & Clubs";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);
    }
}
