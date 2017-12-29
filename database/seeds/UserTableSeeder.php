<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Amirhossein Pooladvand',
            'email' => 'amir.giga92@gmail.com',
            'password' => bcrypt('7224033a'),
        ]);
    }
}
