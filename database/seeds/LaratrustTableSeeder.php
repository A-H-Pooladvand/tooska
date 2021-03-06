<?php

use App\Permission;
use App\PermissionTitle;
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
                    'is_active' => true
                ],
                'role' => [
                    'name' => 'superAdmin',
                    'display_name' => 'ادمین کل',
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
                    'email' => 'qwe@qwe.com',
                    'password' => 'qwe',
                    'remember_token' => str_random(10),
                    'is_active' => true
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
                    'is_active' => true
                ],
                'role' => [
                    'name' => 'admin',
                    'display_name' => 'صاحب سیستم',
                    'description' => 'خریدار سایت - دسترسی کل و دسترسی ایجاد نقش ها',
                ]
            ]
        ];

        $permissions = [
            [
                'title' => 'پنل',
                'detail' => [
                    [
                        'name' => 'admin-panel',
                        'display_name' => 'پنل مدیریت',
                        'description' => 'توانایی مشاهده پنل مدیریت',
                    ]
                ]
            ],
            [
                'title' => 'کاربران',
                'detail' => [
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
                ]
            ],
            [
                'title' => 'نقش و دسترسی ها',
                'detail' => [
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
                ]
            ],
            [
                'title' => 'بلاگ',
                'detail' => [
                    ['name' => 'create-blog',
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
                ]
            ],
            [
                'title' => 'کلمات کلیدی',
                'detail' => [
                    [
                        'name' => 'create-tag',
                        'display_name' => 'ایجاد کلمات کلیدی',
                        'description' => 'توانایی ایجاد کلمات کلیدی',
                    ],
                    [
                        'name' => 'read-tag',
                        'display_name' => 'مشاهده کلمات کلیدی',
                        'description' => 'توانایی مشاهده کلمات کلیدی',
                    ],
                    [
                        'name' => 'edit-tag',
                        'display_name' => 'ویرایش کلمات کلیدی',
                        'description' => 'توانایی ویرایش کلمات کلیدی',
                    ],
                    [
                        'name' => 'delete-tag',
                        'display_name' => 'حذف کلمات کلیدی',
                        'description' => 'توانایی حذف کلمات کلیدی',
                    ],
                ]
            ],
            [
                'title' => 'نظرات',
                'detail' => [
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
                ]
            ],
            [
                'title' => 'دسته بندی',
                'detail' => [
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
                ]
            ],
            [
                'title' => 'درباره ما',
                'detail' => [
                    [
                        'name' => 'read-about',
                        'display_name' => 'مشاهده درباره ما',
                        'description' => 'توانایی مشاهده درباره ما',
                    ],
                    [
                        'name' => 'edit-about',
                        'display_name' => 'ویرایش درباره ما',
                        'description' => 'توانایی ویرایش درباره ما',
                    ]
                ]
            ],
            [
                'title' => 'تماس با ما',
                'detail' => [
                    [
                        'name' => 'read-contact',
                        'display_name' => 'مشاهده تماس با ما',
                        'description' => 'توانایی مشاهده تماس با ما',
                    ],
                    [
                        'name' => 'edit-contact',
                        'display_name' => 'ویرایش تماس با ما',
                        'description' => 'توانایی ویرایش تماس با ما',
                    ],
                    [
                        'name' => 'delete-contact',
                        'display_name' => 'حذف تماس با ما',
                        'description' => 'توانایی حذف تماس با ما',
                    ]
                ]
            ],
            [
                'title' => 'چرا ما',
                'detail' => [
                    [
                        'name' => 'create-why-choose-us',
                        'display_name' => 'ایجاد چرا ما',
                        'description' => 'توانایی ایجاد چرا ما',
                    ],
                    [
                        'name' => 'read-why-choose-us',
                        'display_name' => 'مشاهده چرا ما',
                        'description' => 'توانایی مشاهده چرا ما',
                    ],
                    [
                        'name' => 'edit-why-choose-us',
                        'display_name' => 'ویرایش چرا ما',
                        'description' => 'توانایی ویرایش چرا ما',
                    ],
                    [
                        'name' => 'delete-why-choose-us',
                        'display_name' => 'حذف چرا ما',
                        'description' => 'توانایی حذف چرا ما',
                    ]
                ]
            ],
            [
                'title' => 'طرح',
                'detail' => [
                    [
                        'name' => 'create-plan',
                        'display_name' => 'ایجاد طرح',
                        'description' => 'توانایی ایجاد طرح',
                    ],
                    [
                        'name' => 'read-plan',
                        'display_name' => 'مشاهده طرح',
                        'description' => 'توانایی مشاهده طرح',
                    ],
                    [
                        'name' => 'edit-plan',
                        'display_name' => 'ویرایش طرح',
                        'description' => 'توانایی ویرایش طرح',
                    ],
                    [
                        'name' => 'delete-plan',
                        'display_name' => 'حذف طرح',
                        'description' => 'توانایی حذف طرح',
                    ]
                ]
            ],
            [
                'title' => 'سرویس',
                'detail' => [
                    [
                        'name' => 'create-service',
                        'display_name' => 'ایجاد سرویس',
                        'description' => 'توانایی ایجاد سرویس',
                    ],
                    [
                        'name' => 'read-service',
                        'display_name' => 'مشاهده سرویس',
                        'description' => 'توانایی مشاهده سرویس',
                    ],
                    [
                        'name' => 'edit-service',
                        'display_name' => 'ویرایش سرویس',
                        'description' => 'توانایی ویرایش سرویس',
                    ],
                    [
                        'name' => 'delete-service',
                        'display_name' => 'حذف سرویس',
                        'description' => 'توانایی حذف سرویس',
                    ]
                ]
            ],
            [
                'title' => 'نمونه کار',
                'detail' => [
                    [
                        'name' => 'create-sample',
                        'display_name' => 'ایجاد نمونه کار',
                        'description' => 'توانایی ایجاد نمونه کار',
                    ],
                    [
                        'name' => 'read-sample',
                        'display_name' => 'مشاهده نمونه کار',
                        'description' => 'توانایی مشاهده نمونه کار',
                    ],
                    [
                        'name' => 'edit-sample',
                        'display_name' => 'ویرایش نمونه کار',
                        'description' => 'توانایی ویرایش نمونه کار',
                    ],
                    [
                        'name' => 'delete-sample',
                        'display_name' => 'حذف نمونه کار',
                        'description' => 'توانایی حذف نمونه کار',
                    ]
                ]
            ],
        ];

        foreach ($permissions as $permission) {
            $permissionTitle = PermissionTitle::create(['title' => $permission['title']]);
            foreach ($permission['detail'] as $detail) {
                $permissionTitle->permissions()->create($detail);
            }
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
