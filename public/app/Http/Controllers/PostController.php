<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

//to create this => php artisan make:controller -m
class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }
    public function store(){
        $data = request()->validate([
           'title' => 'required|string',
           'content' => 'required|string',
           'image' => 'required|string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    public function show(Post $post){
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }

    public function update(Post $post){
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', compact('post'));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete(){
        $post = Post::withTrashed()->find(3);
        //$post->restore(); відновити
        //$post->delete(); видалити
    }

    public function firstOrCreate(){
     $anoterPost = array(
        'title' => 'First post',
        'content' => 'some text',
        'image' => 'image',
        'likes' => 10,
        'is_published' => 1,
    );
    $post = Post::firstOrCreate([
        'title' => 'post'
    ], [
        'title' => 'Some post',
        'content' => 'text',
        'image' => 'image',
        'likes' => 10,
        'is_published' => 1,
    ]);
    dump($post->content);
    dd('finished');
    }

    public function updateOrCreate(){
         $anoterPost = array(
            'title' => 'Updated post',
            'content' => 'Updated text',
            'image' => 'image',
            'likes' => 10,
            'is_published' => 1,
        );
        $post = Post::updateOrCreate([
            'title' => '5 post'
        ],$anoterPost);
        dump($post->content);
        dd('finished');
    }

}
