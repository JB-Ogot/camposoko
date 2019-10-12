<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class SinglesController extends Controller
{
    //
    public function phones(){
        $name="Phones & Laptops";
        $img = '../images/phones.jpg';
        $category = "Phones & Laptops";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name'=>$name
        ));

    }
    public function tvs(){
        $name = "TVs & Woofers";
        $img = '../images/tv.jpg';
        $category = "TVs & Woofers";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name'=>$name
        ));
    }
    public function elec(){
        $name = "Electronics";
        $img = '../images/electronics.jpg';
        $category = "Electronics";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);

                return view('pages.single')->with(array(
                    'post'=>$post,
                    'img' => $img,
                    'name'=>$name
                ));

    }
    public function house(){
        $name = "Household Items";
        $img = '../images/hostels.jpg';
        $category = "Household Items";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name'=>$name
        ));
    }
    public function furn(){
        $name = "Furniture";
        $img = '../images/furniture.jpg';
        $category = "Furniture";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name'=>$name
        ));
    }
    public function apart(){
        $name = "Apartment $ Hostels";
        $img = '../images/hostels.jpg';
        $category = "Apartment & Hostels";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name'=>$name
        ));
    }
    public function beauty(){
        $name = "Beauty & Fashion";
        $img = '../images/fashion.jpg';
        $category = "Beauty & Fashion";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name'=>$name
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
        $name = "Food & Restaurants";
        $img = '../images/food.jpg';
        $category = "Food & Restaurants";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name' =>$name
        ));
    }
    public function bars(){
        $name = "Bars & Clubs";
        $img = '../images/clubs.jpg';
        $category = "Bars & Clubs";
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with(array(
            'post'=>$post,
            'img' => $img,
            'name' => $name
        ));
    }
}
