<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

//to create this => php artisan make:controller -m
class DestroyController extends BaseController
{
    public function __invoke(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }
}
