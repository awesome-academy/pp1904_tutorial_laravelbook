<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;
use App\Post;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function post()
    {
        return $this->morphTo();
    }
    
    public function scopeCreateComment($query, $request)
    {
        return $query->insert([
            'post_id' => $request['post_id'],
            'content' => $request['content'],
            'post_type' => $request['post_type'],
        ]);
    }
}
