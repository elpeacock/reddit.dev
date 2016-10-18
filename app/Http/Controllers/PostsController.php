<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\BaseModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $posts = Post::with('user')->paginate(10);
        // for search bar functionality
        if (isset($request['search'])) {

            $search = Post::searchPosts($searchTerm);

            if ($search->get()) {

                $posts = $search->paginate(10);
            
            } else {
            
                $posts = Post::with('user')->paginate(10);

            }
        
        }

        $data = ['posts' => $posts];
        return view('posts.index')->with($data);  

    }
        // next 2 lines should go in usercontroller
        // $user = User::find(2);
        // dd(user->posts) 

        // query building
        // all posts that have 'lorem' in their title
        // SELECT * FROM POSTS
        // WHERE title LIKE '%lorem%'
        // $posts = Post::where('title', 'NOT LIKE', '%lorem%')
        //             // method chaining = adding addtl wheres or orderby etc...
        //             ->where('content', 'NOT LIKE', '%lorem%')->take(8)->get();
        //             // DONT FORGET THE get()!!!!
        //             // take() = limit
        //             // skip() = offset
        // dd($posts);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. See messages below input fields and try again.');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');

        $post = new Post;

        $post->created_by = 1;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;

        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        return redirect()->action('PostsController@show', $post->id);
        // return view('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $data = ['post' => $post];

        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $data = ['post' => $post];

        return view('posts.edit')->with($data);
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
        $post = Post::find($id);

        $rules = array(
            'title' => 'required | max:100',
            'content' => 'required',
            // 'url' => 'required',
            );

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. See messages below input fields and try again.');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;

        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        return redirect()->action('PostsController@show', $post->id);
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
        
        if (!$post) {
            
            abort(404);
            $request->session()->flash('ERROR_MESSAGE', 'Post not deleted successfully. Try Again.');

        }

        $request->session()->forget('ERROR_MESSAGE');
        $post->delete();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was deleted successfully.');
        
        return redirect()->action('PostsController@index');
    }
}
