<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index() {

        // $posts = DB::table('posts')->get();

        $posts = Post::get();

        return view('post.index', ['posts' => $posts]);
    }

    public function show(Post $post) {

        return view('post.show', ['post' => $post]);
    }

    public function create() {
        return view('post.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request) {

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        //Utilizando eloquent
        Post::create($request->validated());

        return to_route('posts.index')->with('status','Post Creado correctamente');

    }

    public function edit(Post $post) {
        return view('post.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post) {


        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post actualizado correctamente');
    }

    public function destroy(Post $post) {

        $post->delete();

        return to_route('posts.index')->with('status','Post Eliminado');
    }
}
