<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VoteType;

class VoteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['upvote', 'downvote'];
        for ($i=0; $i < count($types); $i++) {
            $votetype = new VoteType();
            $votetype-> type = $types[$i];
            $votetype->save();
        }
    }
}
