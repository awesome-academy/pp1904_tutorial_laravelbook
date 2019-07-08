<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Ticket extends Model
{

    protected $fillable = [
        'title', 
        'content', 
        'slug', 
        'status', 
        'user_id'
    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
