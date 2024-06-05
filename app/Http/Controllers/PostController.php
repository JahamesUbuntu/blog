<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        if ($post->user->id !== auth()->user()->id) {
            return redirect()->back();
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
        ]);

        if ($post->user->id !== auth()->user()->id) {
            return redirect()->back();
        }

        $post->update($validated);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        if (auth()->user()->id !== $post->user->id) {
            return back(403);
        }

        $post->delete();

        return redirect()->route('posts.index');
    }
}
