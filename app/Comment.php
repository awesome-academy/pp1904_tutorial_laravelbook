<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class Comment extends Model
{
    protected $guarded = ['id'];
    
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function scopeCreateComment($query, $request)
    {
        return $query->insert([
            'post_id' => $request('post_id'),
            'content' => $request('content')
        ]);
    }
}
