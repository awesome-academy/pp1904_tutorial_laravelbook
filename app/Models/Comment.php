<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{	
	protected $guarded = [
		'id',
	];

    public function ticket()
	{
	    return $this->belongsTo(Ticket::class);
	}

	public function scopeCreateComment($query, $request)
	{
		return $query->insert([
			'post_id' => $request->get('post_id'),
			'content' => $request->get('content'),
		]);
	}
}
