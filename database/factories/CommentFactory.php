<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => null,
            'post_id' => Post::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'content' => $this->faker->paragraph()
        ];
    }
}
