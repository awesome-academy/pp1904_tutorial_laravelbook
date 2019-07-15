<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Comment;

class Post extends Model
{
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'post');
    }
}
