<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;

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

    public function scopeCreateTicket($query, $request, $slug)
    {
        return $query->insert([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug,
        ]);
    }

    public function scopeUpdateTicket($query, $request, $slug)
    {
        return $query->where('slug', $slug)->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'status' => $request->get('status') != null 
                ? config('ticket.STATUSOFF') 
                : config('ticket.STATUSON'),
        ]);
    }
}
