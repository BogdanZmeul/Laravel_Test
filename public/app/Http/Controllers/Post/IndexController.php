<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

//to create this => php artisan make:controller -m
class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){

        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(5);
        return view('post.index', compact('posts'));
    }

}
