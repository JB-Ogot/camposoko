<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
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

        $post_category = Post::all();
        foreach($post_category->category as $cat){
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
                    $food++;
                    break;
                case 'Bars & Clubs':
                    $bar++;
                    break;


            }
        }
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
        //      'img' => 'required|image|mimes:jpg,png,jpeg,gif|max:1999'
        //  ]);

        $count = 0;
        $images=[];
        $input = $request->all();
        if($request->hasFile('img')){
          // print_r($request->all());
            foreach( $request->file('img') as $img){
            $fileNameWithExt = $img->getClientOriginalName();
            $ext = $img->getClientOriginalExtension();
            $fileNameToStore = $fileNameWithExt.'_'.time().'.'.$ext;
            // print($fileNameToStore);
            $img_resize = Image::make($img)->resize(1900,1600);
            $path = 'storage/ads';
            if (!file_exists($path)) {
                mkdir($path, 666, true);
            }
            $img_resize->save(public_path('storage/ads/' .$fileNameWithExt));
            array_push($images,$fileNameWithExt);
            }



            $id = auth()->user()->id;
            $post = new Post();
            $post->category = $input['category'];

            $post->pname = $input['pname'];
            $post->user_id = $id;
            $post->condition = $input['condition'];
            $post->shortDesc = $input['shortDesc'];
            $post->price = $input['price'];
            $post->details = $input['details'];
            $post->number = $input['number'];
            $post->location = $input['location'];
            $post->negotiable =$input['negotiable'];
            $post->imgUrl1 = json_encode($images);
            $post->save();

            return redirect('/posts/listrem')->with('message','You have Successfuly saved an image');
            // print_r($request->all());
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
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts/listrem');
        // print($id);
        //
    }
    public function search(Request $request){
        $search = $request->get('search');

        $post = \DB::table('posts')->where('pname','like','%'.$search.'%')->paginate(10);
        return view('pages.search')->with('posts',$post);

        // print($post->id);

    }

    public function load_single($id){
        // $id = request('id');
        // $post = \DB::table('posts')->where('id','like','%'.$id. '%');

        // return view('pages.lone')->with('post',$post);

        $post = Post::find($id);
        return view('pages.lone')->with('post',$post);


    }
    public function remove(){
        $id = auth()->user()->id;
        // $post = Post::find($id);
        $post = \DB::table('posts')->where('user_id','like','%'.$id.'%')->paginate(10);


        $message = "success";
        $message2 = "Null";
        if($post!=null){
            return view('pages.delete')->with(array(
                'post'=>$post,
                'message'=>$message
            ));

        }else{
            return redirect()->back()->withInput()->with('message',$message2);
        }

    }


}
