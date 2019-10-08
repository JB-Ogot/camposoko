<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class SinglesController extends Controller
{
    //
    public function phones(){
        $img = '../images/phones.jpg';
        $category = "../Phones & Laptops";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));

    }
    public function tvs(){
        $img = '../images/tv.jpg';
        $category = "TVs & Woofers";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function elec(){
        $img = '../images/electronics.jpg';
        $category = "Electronics";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);

                return view('pages.single')->with(array(
                    'post'=>$post,
                    'img' => $img
                ));

    }
    public function house(){
        $img = '../images/hostels.jpg';
        $category = "Household Items";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function furn(){
        $img = '../images/furniture.jpg';
        $category = "Furniture";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function apart(){
        $img = '../images/hostels.jpg';
        $category = "Apartment & Hostels";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function beauty(){
        $img = '../images/fashion.jpg';
        $category = "Beauty & Fashion";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function events(){

        $category = "Events & Posters";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function prof(){

        $category = "Professional Services";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function food(){
        $img = '../images/food.jpg';
        $category = "Food & Restaurants";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
    public function bars(){
        $img = '../images/clubs.jpg';
        $category = "Bars & Clubs";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img
        ));
    }
}
