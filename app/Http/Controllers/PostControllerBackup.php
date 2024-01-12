<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostControllerBackup extends Controller
{
    public function find() {
        $post = Post::find(1);
        return $post;
    }
    public function read_all() {
        $posts = Post::all();
        return $posts;
    }
    public function update() {
        $post = Post::where('id','>','0')->update([
            'title' => 'peidei duro'
        ]);

        return $post;
//        $post = Post::find(1);
//        $post->title = 'peidei fedido';
//        $post->save();
    }
    public function delete() {
        $post = Post::find(4);
        if ($post) {
        $post->delete();
        }
    }

}
