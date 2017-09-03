<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use App\Models\Vote;
use Log;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show', 'posts']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $posts = Post::with('user')->paginate(4);
 
        if ($request->has('q')){
            $q = $request->q;
            $posts = Post::search($q);
            // $posts = Post::sort($posts);    
            // dd($posts);
        } else {
            $posts = Post::with('user')->orderBy('karma', 'DESC')->paginate(4);
        }
        $data['posts'] = $posts;
        return view('posts.index', $data);
     }   
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        // return back()->withInput();

        $rules = ['url'=>'required'];
        $this->validate($request, $rules);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = Auth::id();
        $post->save();
        Log::info($post);

        $request->session()->flash("successMessage", "Your post was saved successfully");



        // var_dump($request);

        return \Redirect::action('PostsController@index');



        // return view('posts.show');
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
        $post = Post::find($id);
        $data['post'] = $post;
        $post = Post::findOrFail($id);
            
        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
        $post = Post::findOrFail($id);
        $data['post'] = $post;
        return view('posts.edit', $data);

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
        $this->validate($request, Post::$rules);
        $post = Post::find($id);
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = Auth::id();
        $post->save();

        $request->session()->flash("successMessage", "Your post was updated successfully");

        return \Redirect::action('PostsController@show', $post->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return \Redirect::action('PostsController@index');
    }

    public function vote(Request $request, $id) {


        $vote = new Vote();
        $vote->user_id = Auth::id();
        $vote->post_id = $id;
        $vote->vote = $request->vote;
        $vote->save();

        $data['post'] = Post::find($id);
        return view('posts.show', $data);


    }

}
