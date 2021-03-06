<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(TooskaTableSeeder::class);
    }
}
