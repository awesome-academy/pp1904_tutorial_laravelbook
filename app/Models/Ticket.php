<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{	
	protected $fillable = [
		'title',
		'content',
		'slug',
		'status',
		'user_id',
	];

	protected $guarded = [
		'id',
	];
    public function user()
	{
	    return $this->belongsTo(User::class);
	}

	public function getTitle()
	{
	    return $this->title;
	}

	public function comments()
	{
	    return $this->hasMany(Comment::class, 'post_id');
	}
}
