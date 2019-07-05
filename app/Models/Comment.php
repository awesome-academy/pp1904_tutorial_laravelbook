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
}
