<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Post::all();
        $post = $posts->reverse();
        return view('posts/index', compact('post'));
    }

    public function create(Post $post)
    {
        if (\Gate::allows('update', $post))
            return view('posts/create');
        else
            return back();
    }

    public function store(StoreBlogPostRequest $request, Post $post)
    {
        if (\Gate::allows('update', $post)) {
            $data = $request->validated();
            Post::create($data);
            return redirect('/posts');
        }
        else
            return back();

    }

    public function show(Post $post)
    {
        $users = \App\User::all();
        return view('posts/show', compact('post', 'users'));
    }

    public function edit(Post $post)
    {
        if (\Gate::allows('update', $post)){
            return view('posts/edit', compact('post'));
        }
        else
                return back();
    }

    public function update(StoreBlogPostRequest $request, Post $post)
    {
        $data = $request->validated();
        if (\Gate::allows('update', $post)){
            $post->update($data);
            return redirect('/');
        }
        else
            return back();
    }

    public function destroy(Post $post)
    {
        if (\Gate::allows('update', $post)) {

            $post->delete();
            return redirect('/');

        }
        else
            return back();
    }
}
