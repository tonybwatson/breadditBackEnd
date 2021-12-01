<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'post_id', 'user_id', 'content'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
