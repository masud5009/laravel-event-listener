<?php

namespace App\Http\Controllers;
use App\Events\NewPostCreated;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('website');
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->image = $request->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filname = time() . '.' . $file->getClientOriginalExtension();
            $file->move('post', $filname);
            $post->image = $filname;
        }
        $post->save();
        event(new NewPostCreated($post));
        return redirect()->back();
    }


    public function post()
    {
        $posts = Post::all();
        return view('post')->with(compact('posts'));
    }
}
