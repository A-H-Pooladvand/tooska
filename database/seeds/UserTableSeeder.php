<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'امیرحسین',
            'family' => 'پولادوند',
            'username' => 'Amirhossein Pooladvand',
            'mobile' => '09125878084',
            'phone' => '02177223070',
            'avatar' => 'files/_test/' . rand(1, 10) . '.jpg',
            'email' => 'amir.giga92@gmail.com',
            'password' => '7224033a',
            'remember_token' => str_random(10)
        ]);
    }
}
