<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
    	'title', 
    	'content', 
    	'slug', 
    	'status', 
    	'user_id'
    ];

    public function comments()
	{
	    return $this->hasMany('App\Models\Comment', 'post_id');
	}

    public function scopeAll($query)
    {
        return $query->all();
    }

    public function scopeCreateTicket($query, $request, $slug)
    {
        return $query->insert([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug,
        ]);
    }

    public function scopeUpdateTicketWithSlug($query, $request, $slug)
    {
        return $query->whereSlug($slug)->firstOrFail()->update([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status != null 
                ? config('my_config.ZERO') 
                : config('my_config.ZERO1'),
        ]);
    }
}
