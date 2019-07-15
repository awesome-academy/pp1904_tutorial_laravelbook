<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = [
		'id'
	];

    public function ticket()
	{
    	return $this->belongsTo('App\Models\Ticket');
	}

	public function scopeNewComment($query, $request)
	{
		return $query->insert([
			'post_id' => $request->post_id,
            'content' => $request->content,
            'post_type' => $request->post_type,
		]);
	}

	public function post()
	{
		return $this->morphTo();
	}
}
