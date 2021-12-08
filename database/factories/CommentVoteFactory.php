<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Comment;
use App\Models\VoteType;

class CommentVoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_id' => VoteType::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'comment_id' => Comment::all()->random()->id,
        ];
    }
}
