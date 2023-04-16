<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;


//to create this => php artisan make:controller -m
class EditController extends BaseController
{
    public function __invoke(Post $post){
        return view('post.edit', compact('post'));
    }

}
