<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// php artisan make:model Tag -m
class Tag extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
