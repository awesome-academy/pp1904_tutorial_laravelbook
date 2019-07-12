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
	    return $this->morphMany(Comment::class, 'post');
	}

	public function scopeCreateTicket($query, $request, $slug)
	{
		return $query->insert([
			'title' => $request->get('title'),
			'content' => $request->get('content'),
			'slug' => $slug,
		]);
	}

	public function scopeUpdateTicket($query, $slug, $request)
	{
		return $query->whereSlug($slug)->update([
			'title' => $request->get('title'),
			'content' => $request->get('content'),
			'status' => ($request->get('status') != null) 
				? config('ticket.statusOff') 
				: config('ticket.statusOn'),
		]);
	}
}
