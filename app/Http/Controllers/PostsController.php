<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::take(2)->latest()->get();
        return view(
            'welcome',
            [
                'posts' => $posts
            ]
        );
    }

    public function index1()
    {
        $posts = Posts::latest()->get();
        return view(
            'posts',
            [
                'posts' => $posts
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'

        ]);
        $post = new Posts();
        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::findOrFail($id);

        return view('details', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('post-edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post = Posts::find($id);

        request()->validate([
            'title' => 'required',
            'body' => 'required'

        ]);

        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        return redirect('details/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
