<?php

use App\Plan;
use App\Sample;
use App\Service;
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
        factory(Service::class, 50)->create();
        factory(Sample::class, 50)->create();
    }
}
