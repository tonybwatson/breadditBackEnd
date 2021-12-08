<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\VoteType;
class PostVoteFactory extends Factory
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
                'post_id' => Post::all()->random()->id,
            ];
    }
}
