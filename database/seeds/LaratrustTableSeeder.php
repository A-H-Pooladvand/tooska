<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class LaratrustTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            [
                'user' => [
                    'name' => 'Hamid',
                    'family' => 'Madanizadegan',
                    'username' => 'Hamin Madanizadegan',
                    'mobile' => '09121111111',
                    'phone' => '02112345678',
                    'avatar' => 'files/_test/' . rand(1, 10) . '.jpg',
                    'email' => 'madanizadegan@gmail.com',
                    'password' => '123',
                    'remember_token' => str_random(10),
                ],
                'role' => [
                    'name' => 'superAdmin',
                    'display_name' => 'امین کل',
                    'description' => 'دسترسی به تمامی امکانات سایت',
                ]
            ],
            [
                'user' => [
                    'name' => 'پشتیبان',
                    'family' => 'سیستم',
                    'username' => 'پشتیبان سیستم',
                    'mobile' => '09125878084',
                    'phone' => '09125878084',
                    'avatar' => 'files/_test/' . rand(1, 10) . '.jpg',
                    'email' => 'qwe',
                    'password' => 'qwe',
                    'remember_token' => str_random(10),
                ],
                'role' => [
                    'name' => 'supporter',
                    'display_name' => 'پشتیبان های سایت',
                    'description' => 'دسترسی تقریبی به تمامی امکانات سایت',
                ]
            ],
            [
                'user' => [
                    'name' => 'modir',
                    'family' => 'modir',
                    'username' => 'modir-modir',
                    'mobile' => 'xxxxxxxxxxx',
                    'phone' => 'xxxxxxxxxxx',
                    'avatar' => 'files/_test/' . rand(1, 10) . '.jpg',
                    'email' => 'modir@gmail.com',
                    'password' => 'modir',
                    'remember_token' => str_random(10),
                ],
                'role' => [
                    'name' => 'admin',
                    'display_name' => 'ادمین کل سایت',
                    'description' => 'خریدار سایت - دسترسی کل و دسترسی ایجاد نقش ها',
                ]
            ]
        ];

        $permissions = [
            // User
            [
                'name' => 'create-user',
                'display_name' => 'ایجاد کاربر جدید',
                'description' => 'توانایی ایجاد کاربر جدید',
            ],
            [
                'name' => 'read-user',
                'display_name' => 'مشاهده کاربران',
                'description' => 'توانایی مشاهده کاربران',
            ],
            [
                'name' => 'update-user',
                'display_name' => 'ویرایش کاربران',
                'description' => 'توانایی ویرایش کاربران',
            ],
            [
                'name' => 'delete-user',
                'display_name' => 'حذف کاربران',
                'description' => 'توانایی حذف کاربران',
            ],
            // ACL
            [
                'name' => 'create-acl',
                'display_name' => 'ایجاد نقش و دسترسی جدید',
                'description' => 'توانایی ایجاد نقش و دسترسی جدید',
            ],
            [
                'name' => 'read-acl',
                'display_name' => 'مشاهده نقش ها و دسترسی ها',
                'description' => 'توانایی مشاهده نقش ها و دسترسی ها',
            ],
            [
                'name' => 'update-acl',
                'display_name' => 'ویرایش نقش ها و دسترسی ها',
                'description' => 'توانایی ویرایش نقش ها و دسترسی ها',
            ],
            [
                'name' => 'delete-acl',
                'display_name' => 'حذف نقش ها و دسترسی ها',
                'description' => 'توانایی حذف نقش ها و دسترسی ها',
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $permissions = Permission::get()->pluck('id')->toArray();

        foreach ($accounts as $account) {
            $role = Role::create($account['role'])->attachPermissions($permissions);
            $user = User::create($account['user']);

            $user->attachRole($role['id']);


            $user->attachPermissions($permissions);
        }



    }
}
