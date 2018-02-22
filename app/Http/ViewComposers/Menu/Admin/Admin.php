<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 2/6/2018
 * Time: 10:23 PM
 */

return [

    [
        // Dashboard
        'title' => 'داشبورد',
        'icon' => 'fa fa-fw fa-home',
        'link' => '#',
        'sub' => [
            [
                'title' => 'مشاهده سایت',
                'link' => route('home'),
            ],
            [
                'title' => 'کارتابل',
                'link' => '#'
            ],
            [
                'title' => 'پروفایل',
                'link' => '#'

            ]
        ]
    ],
    [
        // User
        'title' => 'کاربران',
        'icon' => 'fa fa-fw fa-users',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن کاربر',
                'link' => route('admin.user.create'),
            ],
            [
                'title' => 'لیست کاربران',
                'link' => route('admin.user.index')
            ],
            [
                'title' => 'افزودن نقش',
                'link' => route('admin.role.create'),
            ],
            [
                'title' => 'لیست نقش ها',
                'link' => route('admin.role.index')
            ]
        ]
    ],
    [
        // Plan
        'title' => 'طرح',
        'icon' => 'fa fa-fw fa-briefcase',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن طرح',
                'link' => route('admin.plan.create')
            ],
            [
                'title' => 'لیست طرح ها',
                'link' => route('admin.plan.index')
            ]
        ]
    ],
    [
        // Service
        'title' => 'سرویس',
        'icon' => 'fa fa-fw fa-shield',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن سرویس',
                'link' => route('admin.service.create')
            ],
            [
                'title' => 'لیست سرویس ها',
                'link' => route('admin.service.index')
            ]
        ]
    ],
    [
        // Blog
        'title' => 'بلاگ',
        'icon' => 'fa fa-fw fa-newspaper-o',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن خبر بلاگ',
                'link' => route('admin.blog.create'),
            ],
            [
                'title' => 'لیست اخبار بلاگ',
                'link' => route('admin.blog.index')
            ]
        ]
    ],
    [
        // Sample
        'title' => 'نمونه کار',
        'icon' => 'fa fa-fw fa-magic',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن نمونه کار',
                'link' => route('admin.sample.create'),
            ],
            [
                'title' => 'لیست نمونه کارها',
                'link' => route('admin.sample.index')
            ]
        ]
    ],
    [
        // Category
        'title' => 'دسته بندی',
        'icon' => 'fa fa-fw fa-folder-open',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن دسته بندی',
                'link' => route('admin.category.create'),
            ],
            [
                'title' => 'لیست دسته بندی ها',
                'link' => route('admin.category.index')
            ]
        ]
    ],
    [
        // Tags
        'title' => 'کلمات کلیدی',
        'icon' => 'fa fa-fw fa-tags',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن کلمه کلیدی',
                'link' => route('admin.tag.create'),
            ],
            [
                'title' => 'لیست کلمات کلیدی',
                'link' => route('admin.tag.index')
            ]
        ]
    ],
    [
        // Why Choose Us
        'title' => 'چرا ما',
        'icon' => 'fa fa-fw fa-question-circle',
        'link' => '#',
        'sub' => [
            [
                'title' => 'افزودن چرا ما',
                'link' => route('admin.why_choose_us.create')
            ],
            [
                'title' => 'لیست چرا ما',
                'link' => route('admin.why_choose_us.index')
            ]
        ]
    ],
    [
        // About
        'title' => 'درباره ما',
        'icon' => 'fa fa-fw fa-info',
        'link' => '#',
        'sub' => [
            [
                'title' => 'مشاهده درباره ما',
                'link' => route('admin.about.show', 1)
            ],
            [
                'title' => 'ویرایش درباره ما',
                'link' => route('admin.about.edit', 1)
            ]
        ]
    ],
    [
        // Contact-us
        'title' => 'تماس با ما',
        'icon' => 'fa fa-fw fa-phone',
        'link' => '#',
        'sub' => [
            [
                'title' => 'لیست تماس ها',
                'link' => route('admin.contact.contacts.index')
            ],
            [
                'title' => 'مشاهده تماس با ما',
                'link' => route('admin.contact.show')
            ],
            [
                'title' => 'ویرایش تماس با ما',
                'link' => route('admin.contact.edit',1)
            ]
        ]
    ]

];