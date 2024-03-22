<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        // $numberOfPosts = 10;
        // \App\Models\User::factory(10)->create();
        // Post::factory($numberOfPosts)->create([
        //     'user_id' => User::inRandomOrder()->first()->id, // Assign a random user ID to each post
        // ]);

        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePost $request)
    {
        $postData = $request->validated();
        $postData['user_id'] = Auth()->id();
        $postData['enabled'] = $request->has('enabled');

        $imagePath=null;
        if ($request->has('image') && $request->file('image')->isValid()) {
            $imagePath=$request->file('image')->store('posts',['disk'=>'public']);
        }
        $postData['image'] = $imagePath;


        Post::create($postData);

        return redirect()->route('posts.index');
    }


    public function edit($id)
    {
        $post = Post::find($id);
        $post->published_at = new \DateTime($post->published_at);
        $users = User::all();
        return view('posts.edit', compact('post', 'users'));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $userId = Auth::id();

        $postData = $request->validated();
        $postData['user_id'] = $userId;


        $postData['enabled'] = $request->has('enabled');

        $post = Post::findOrFail($id);

        $post->update($postData);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('posts.index');
    }

    public function trash()
    {
        $deletedPosts = Post::onlyTrashed()->get();
        return view('posts.trash', compact('deletedPosts'));
    }
}
