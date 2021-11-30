<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Subreaddit;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'sub_id' => Subreaddit::all()->random()->id,
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph()
        ];
    }
}
