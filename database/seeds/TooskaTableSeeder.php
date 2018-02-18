<?php

use App\Plan;
use App\WhyChooseUs;
use Illuminate\Database\Seeder;

class TooskaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Plan::class, 50)->create();
        factory(WhyChooseUs::class, 50)->create();
    }
}
