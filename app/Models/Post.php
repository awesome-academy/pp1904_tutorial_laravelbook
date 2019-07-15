<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;

class Post extends Model
{
	protected $guarded = [
		'id',
	];

	public function categories()
	{
		return $this->belongsToMany(Category::class)->withTimestamps();
	}
	
	public function comments()
	{
		return $this->morphMany(Comment::class, 'post');
	}
}