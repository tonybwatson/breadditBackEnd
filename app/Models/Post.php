<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subreaddit;
use App\Models\User;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'sub_id', 'title', 'content'];

    protected $with = ['subreaddit'];

    /**
     * Get the subreaddit of the post.
     */
    public function subreaddit()
    {
        return $this->belongsTo(Subreaddit::class, 'sub_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
