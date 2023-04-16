<?php

namespace App\Services\Post;

use App\Models\Post;
use Mockery\Exception;
use Illuminate\Support\Facades\DB;
use Throwable;

class Service
{
    public function store($data){

        try{
            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);

            $post = Post::create($data);
            $post->tags()->attach($tags);

            DB::commit();
        }catch(Throwable $e) {
            DB::rollBack();
            return 5347676766;
        }

        return $post;
    }

    public function update($post, $data){
        $post->update($data);
    }
}
