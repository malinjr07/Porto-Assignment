<?php

use App\state;
use Faker\Factory as Fake;
use Illuminate\Database\Seeder;

class StateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 25; $i++) {
        $dummy = Fake::create();
        $state = $dummy->unique()->state;
            state::create([
                'state_name'=>$state
            ]);
        }
    }
}
