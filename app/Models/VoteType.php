<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteType extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'type'
    ];
    protected $table = 'vote_types';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    public function comment()
    {
        return $this->belongsTo(CommentVote::class);
    }
    public function post()
    {
        return $this->belongsTo(PostVote::class);
    }
}
