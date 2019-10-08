<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;
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
        $this->middleware('auth',['except'=>['index','show', 'search','load_single']]);
    }
    public function index()

    {
        // $posts = Post::orderBy('id','DESC')->get(10);
        $posts = Post::latest()->get();

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



        $input = $request->all();
        if($request->hasFile('img')){
            $img = $request->file('img');

            $fileNameWithExt = $img->getClientOriginalName();
            $img2 = Image::make($img->getRealPath());
            $img = $img2->resize(1900,1600);
            //$image_resize->save(public_path('images/ServiceImages/' .$filename));
            $img2->save(public_path('storage/ads/' .$fileNameWithExt));
            //$path = $img2->storeAs('public/ads', $fileNameWithExt);

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
        $posts = auth()->user()->posts()->orderBy('updated_at', 'DESC');
        //
    }
    public function search(Request $request){
        $search = $request->get('search');

        $post = \DB::table('posts')->where('pname','like','%'.$search.'%')->paginate(10);
        return view('pages.search')->with('posts',$post);

        // print($post->id);

    }
    // public function load_category($category){

    //     $post = \DB::table('posts')->where('category','like','%'.$category. '%')->paginate(10);
    //     return view('pages.single')->with('post',$post);

    // }
    public function load_single(){
        $id = request('id');
        // $post = \DB::table('posts')->where('id','like','%'.$id. '%');

        // return view('pages.lone')->with('post',$post);

        $post = Post::all();
        foreach($post as $post){
            if($post->id == $id)
               return view('pages.lone')->with('post',$post);
        }
    }


}
