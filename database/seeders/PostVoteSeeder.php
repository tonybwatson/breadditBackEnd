<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostVote;
class PostVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostVote::factory(1000)->create();
    }
}
