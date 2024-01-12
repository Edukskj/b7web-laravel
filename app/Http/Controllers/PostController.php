<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $new_post = [
            'title' => 'peidei',
            'content' => 'vish, peidei molhado',
            'author' => 'jeffin'
        ];

        $post = new Post($new_post);
        $post->save();
//        dd($post);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $post = Post::find(1);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $post = Post::where('id','>','0')->update([
            'title' => 'peidei duro'
        ]);

        return $post;
//        $post = Post::find(1);
//        $post->title = 'peidei fedido';
//        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $post = Post::find(5);
        if ($post) {
            $post->delete();
        }
    }
}
