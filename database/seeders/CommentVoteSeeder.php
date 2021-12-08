<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommentVote;

class CommentVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommentVote::factory(1000)->create();
    }
}
