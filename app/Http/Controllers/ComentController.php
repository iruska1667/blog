<?php

namespace App\Http\Controllers;

use App\Coment;
use App\Http\Requests\ComentBlogPostRequest;
use App\Post;

class ComentController extends Controller
{
    public function store(ComentBlogPostRequest $request, Post $post)
    {
        $comentText = $request->validated();
        if (\Gate::allows('add', $post)) {
            Coment::create([
                'text' => $comentText['text'],
                'post_id' => $post->id,
                'user_id' => \auth()->id()
            ]);
            return back();
        }
        else
            return redirect('/login');

    }

    public function edit(Coment $coment)
    {
        if (\Gate::allows('update', $coment))
        return view('/posts/editComents', compact('coment'));
        else
            return back();
    }

    public function update(ComentBlogPostRequest $request, Coment $coment)
    {
        $comentText = $request->validated();
        if (\Gate::allows('update', $coment)) {
            $coment->update([
                'text' => $comentText,
            ]);
            return redirect('/posts/');
        }
        else
            return back();
    }

    public function destroy(Coment $coment)
    {
        if (\Gate::allows('update', $coment)) {
            $coment->delete();
            return back();
        }
        else
            return back();
    }
}
