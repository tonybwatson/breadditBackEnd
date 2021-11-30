<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subreaddit;

class SubreadditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subreadditsArr = ['askBreaddit',
        'askMeAnythingAboutBread',
        'breadStapledToTrees', 'catsStandingOnBread',
        'competitiveBaking', 'wholeGrain',
        'bakespectationVsReality', 'iBakedThis',
        'sandwiches', 'agedLikeBread',
        'breaderEveryLoop', 'wholesomeBreadMemes',
        'wallStreetBreads', 'moldSchoolCool',
        'moldlyInteresting', 'toastMe'];
        for ($i = 0; $i < count($subreadditsArr); $i++) {
            $name = new Subreaddit;
            $name->name = $subreadditsArr[$i];
            $name->save();
        }
    }
}
