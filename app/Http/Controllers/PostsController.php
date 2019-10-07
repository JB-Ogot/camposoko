<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;
//use \Input as Input;
use Symfony\Component\Console\Input\Input;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show', 'search']]);
    }
    public function index()

    {
        $posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();


        // $posts = Post::orderBy('created_at','desc');
        return view('index')->with('posts', $posts);
        //printf($posts);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user){
        // $this->validate($request,[
        // 'img' => 'image|nullable|max:1999'
        // ]);


        $input = $request->all();
        if($request->hasFile('img')){

            $fileNameWithExt = $request->file('img')->getClientOriginalName();

            $path = $request->file('img')->storeAs('public/ads', $fileNameWithExt);
            // foreach($request->file('img') as $image){
            //     $size = $image->getSize();
            //     $name = $image->getClientOriginalName();
            //     $image->move(public_path().'ads',$name);
            //     $data[] = [$size,$name];
            // }
                $id = auth()->user()->id;

            Post::insert([
                'category' => $input['category'],
                'pname' => $input['pname'],
                'user_id' => $id,
                'condition' => $input['condition'],
                'ShortDesc' => $input['shortDesc'],
                'price' => $input['price'],
            //    'imgSize' => implode("|",$data['size']),
                'details' => $input['details'],
                'location' => $input['location'],
                'negotiable' =>$input['negotiable'],
            //    'imgUrl1' => implode("|",$data),
                'imgUrl1' => $fileNameWithExt
            ]);
            // $post = new Post();
            // $post->category = request('category');
            // $post->pname = request('pname');
            // $post->user_id = auth()->user()->id;
            // $post->condition = request('condition');
            // $post->shortDesc = request('shortDesc');
            // $post->price = request('price');
            // $post->details = request('details');
            // $post->location = request('location');
            // // $post->imgUrl1 = json_encode($data);
            // $post->imgUrl1 = request('img');
            // $post->save();
            return redirect('/info');


        }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
        * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request){
        $search = $request->get('search');
        // $posts = DB::table('posts')->where('name','like','%'.$search.'%')->paginate(10);
        // $post = DB::select('SELECT * FROM posts');
        // $post = Post::all()->paginate(2);
        $post = \DB::table('posts')->where('pname','like','%'.$search.'%')->paginate(10);
        return view('pages.search')->with('posts',$post);

    }
    public function load_category($category){
        $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
        return view('pages.single')->with('post',$post);

    }
    public function load_single($id){
        $post = \DB::table('posts')->where('id','like','%'.$id. '%');
        return view('pages.lone')->with('post',$post);

    }


}