<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    //
    public function index() // un controlador solo con un metodo
    {
        $post = Post::get();

        return view('posts.index', ['posts' => $post]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {

        Post::create($request->validated());

        return redirect()->route('post.index')->with('status','Post Created');
    }

    public function edit(Post $post)
    {

        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, $post)
    {

        $post = Post::find($post);

        $post->update($request->validated());

        return to_route('post.show', $post)->with('status','Post Update !');
    }

    public function destroy(Post $post) {

        $post->delete();
        return to_route('post.index')->with('status','Post Deleted !');
    }
}
