<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Resources\Posts as PostsResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(2);
        //return PostsResource::collection($posts);
        return view('post.index')->withPosts(PostsResource::collection($posts));
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
    public function store(Request $request)
    {
        //$post = new Post;
        //$post->title    = $request->title;
        //$post->body     = $request->body;
        //$post->save();

        $post = $request->isMethod('put') ? Post::fideOrFail($request->id) : new Post;

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        if($post->save()) {
            return new PostsResource($post);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);
        $data = new PostsResource($post);

        return view('post.show')->withPost($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::findOrFail($post->id);
        if($post->delete()) {
            return new PostsResource($post);
        }
    }
}
