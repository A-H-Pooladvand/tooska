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
        Role::create([
            'name' => 'none',
            'display_name' => 'بدون نقش',
            'description' => 'هیچ نقشی ندارد'
        ]);

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
                    'display_name' => 'پشتیبان سایت',
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
                    'display_name' => 'صاحب سیستم',
                    'description' => 'خریدار سایت - دسترسی کل و دسترسی ایجاد نقش ها',
                ]
            ]
        ];

        $permissions = [
            // Admin Panel Access
            [
                'name' => 'admin-panel',
                'display_name' => 'پنل مدیریت',
                'description' => 'توانایی مشاهده پنل مدیریت',
            ],
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
                'name' => 'edit-user',
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
                'name' => 'edit-acl',
                'display_name' => 'ویرایش نقش ها و دسترسی ها',
                'description' => 'توانایی ویرایش نقش ها و دسترسی ها',
            ],
            [
                'name' => 'delete-acl',
                'display_name' => 'حذف نقش ها و دسترسی ها',
                'description' => 'توانایی حذف نقش ها و دسترسی ها',
            ],
            // Blog
            [
                'name' => 'create-blog',
                'display_name' => 'ایجاد بلاگ',
                'description' => 'توانایی ایجاد بلاگ',
            ],
            [
                'name' => 'read-blog',
                'display_name' => 'مشاهده بلاگ',
                'description' => 'توانایی مشاهده بلاگ',
            ],
            [
                'name' => 'edit-blog',
                'display_name' => 'ویرایش بلاگ',
                'description' => 'توانایی ویرایش بلاگ',
            ],
            [
                'name' => 'delete-blog',
                'display_name' => 'حذف بلاگ',
                'description' => 'توانایی حذف بلاگ',
            ],
            // Tag
            [
                'name' => 'create-tag',
                'display_name' => 'ایجاد تگ',
                'description' => 'توانایی ایجاد تگ',
            ],
            [
                'name' => 'read-tag',
                'display_name' => 'مشاهده تگ',
                'description' => 'توانایی مشاهده تگ',
            ],
            [
                'name' => 'edit-tag',
                'display_name' => 'ویرایش تگ',
                'description' => 'توانایی ویرایش تگ',
            ],
            [
                'name' => 'delete-tag',
                'display_name' => 'حذف تگ',
                'description' => 'توانایی حذف تگ',
            ],
            // Comment
            [
                'name' => 'create-comment',
                'display_name' => 'ایجاد نظر',
                'description' => 'توانایی ایجاد نظر',
            ],
            [
                'name' => 'read-comment',
                'display_name' => 'مشاهده نظر',
                'description' => 'توانایی مشاهده نظر',
            ],
            [
                'name' => 'edit-comment',
                'display_name' => 'ویرایش نظر',
                'description' => 'توانایی ویرایش نظر',
            ],
            [
                'name' => 'delete-comment',
                'display_name' => 'حذف نظر',
                'description' => 'توانایی حذف نظر',
            ],
            // Comment
            [
                'name' => 'create-category',
                'display_name' => 'ایجاد دسته بندی',
                'description' => 'توانایی ایجاد دسته بندی',
            ],
            [
                'name' => 'read-category',
                'display_name' => 'مشاهده دسته بندی',
                'description' => 'توانایی مشاهده دسته بندی',
            ],
            [
                'name' => 'edit-category',
                'display_name' => 'ویرایش دسته بندی',
                'description' => 'توانایی ویرایش دسته بندی',
            ],
            [
                'name' => 'delete-category',
                'display_name' => 'حذف دسته بندی',
                'description' => 'توانایی حذف دسته بندی',
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
