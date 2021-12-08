<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Subreaddit extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'subreaddits';
    /**
     * Get the subreaddit of the post.
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'sub_id', 'id');
    }
}
