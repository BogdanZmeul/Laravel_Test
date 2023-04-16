<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;


//to create this => php artisan make:controller -m
class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();

        $post = $this->service->store($data);

        return new PostResource($post);
        //return redirect()->route('post.index');
    }

}
