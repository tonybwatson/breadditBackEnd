<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostVote extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'type_id',
        'user_id',
        'post_id'
    ];
    protected $table = 'post_votes';
    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    public function vote_type()
    {
        return $this->hasOne(VoteType::class);
    }
    public function post()
{
    return $this->belongsTo(Post::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
}
