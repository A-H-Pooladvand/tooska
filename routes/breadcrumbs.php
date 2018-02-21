<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 2/11/2018
 * Time: 4:59 PM
 */

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

/**
 * USERS
 */

// users
Breadcrumbs::register('users', function ($breadcrumbs) {
    $breadcrumbs->push('لیست کاربران', route('admin.user.index'));
});

// User > Create
Breadcrumbs::register('user-create', function ($breadcrumbs) {
    $breadcrumbs->parent('users');
    $breadcrumbs->push('افزودن کاربر', route('admin.user.create'));
});

// User > Show
Breadcrumbs::register('user-show', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('users');
    $breadcrumbs->push('مشاهده کاربر', route('admin.user.show', $user->id));
});

// Users > Show > Edit
Breadcrumbs::register('user-edit', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('user-show', $user);
    $breadcrumbs->push('ویرایش کاربر', route('admin.user.edit', $user->id));
});

// User > Show > Edit-Permission
Breadcrumbs::register('user-edit-permission', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('user-show', $user);
    $breadcrumbs->push('ویرایش دسترسی های فردی کاربر', route('admin.user.permission.edit', $user->id));
});

/**
 * ROLES
 */

// Roles
Breadcrumbs::register('roles', function ($breadcrumbs) {
    $breadcrumbs->push('لیست نقش ها', route('admin.role.index'));
});

// Role > Create
Breadcrumbs::register('role-create', function ($breadcrumbs) {
    $breadcrumbs->parent('roles');
    $breadcrumbs->push('افزودن نقش', route('admin.role.create'));
});

// Role > Show
Breadcrumbs::register('role-show', function ($breadcrumbs, $role) {
    $breadcrumbs->parent('roles');
    $breadcrumbs->push('مشاهده نقش', route('admin.role.show', $role->id));
});

// Roles > Show > Edit
Breadcrumbs::register('role-edit', function ($breadcrumbs, $role) {
    $breadcrumbs->parent('role-show', $role);
    $breadcrumbs->push('ویرایش نقش', route('admin.role.edit', $role->id));
});

/**
 * Blog
 */

// Blogs
Breadcrumbs::register('blogs', function ($breadcrumbs) {
    $breadcrumbs->push('لیست اخبار بلاگ', route('admin.blog.index'));
});

// Blog > Create
Breadcrumbs::register('blog-create', function ($breadcrumbs) {
    $breadcrumbs->parent('blogs');
    $breadcrumbs->push('افزودن خبر بلاگ', route('admin.blog.create'));
});

// Blog > Show
Breadcrumbs::register('blog-show', function ($breadcrumbs, $blog) {
    $breadcrumbs->parent('blogs');
    $breadcrumbs->push('مشاهده خبر بلاگ', route('admin.blog.show', $blog->id));
});

// Blogs > Show > Edit
Breadcrumbs::register('blog-edit', function ($breadcrumbs, $blog) {
    $breadcrumbs->parent('blog-show', $blog);
    $breadcrumbs->push('ویرایش خبر بلاگ', route('admin.blog.edit', $blog->id));
});

/**
 * Category
 */

// Categories
Breadcrumbs::register('categories', function ($breadcrumbs) {
    $breadcrumbs->push('لیست دسته بندی ها', route('admin.category.index'));
});

// Category > Create
Breadcrumbs::register('category-create', function ($breadcrumbs) {
    $breadcrumbs->parent('categories');
    $breadcrumbs->push('افزودن دسته بندی', route('admin.category.create'));
});

// Category > Show
Breadcrumbs::register('category-show', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('categories');
    $breadcrumbs->push('مشاهده دسته بندی', route('admin.category.show', $category->id));
});

// Categories > Show > Edit
Breadcrumbs::register('category-edit', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('category-show', $category);
    $breadcrumbs->push('ویرایش دسته بندی', route('admin.category.edit', $category->id));
});

/**
 * Tag
 */

// Tags
Breadcrumbs::register('tags', function ($breadcrumbs) {
    $breadcrumbs->push('لیست کلمات کلیدی', route('admin.tag.index'));
});

// Tag > Create
Breadcrumbs::register('tag-create', function ($breadcrumbs) {
    $breadcrumbs->parent('tags');
    $breadcrumbs->push('افزودن کلمه کلیدی', route('admin.tag.create'));
});

// Tag > Show
Breadcrumbs::register('tag-show', function ($breadcrumbs, $tag) {
    $breadcrumbs->parent('tags');
    $breadcrumbs->push('مشاهده کلمه کلیدی', route('admin.tag.show', $tag->id));
});

// Tags > Show > Edit
Breadcrumbs::register('tag-edit', function ($breadcrumbs, $tag) {
    $breadcrumbs->parent('tag-show', $tag);
    $breadcrumbs->push('ویرایش کلمه کلیدی', route('admin.tag.edit', $tag->id));
});

/**
 * why-choose-us
 */

// why-choose-uss
Breadcrumbs::register('why_choose_us', function ($breadcrumbs) {
    $breadcrumbs->push('لیست چرا ما', route('admin.tag.index'));
});

// why-choose-us > Create
Breadcrumbs::register('why_choose_us-create', function ($breadcrumbs) {
    $breadcrumbs->parent('why_choose_us');
    $breadcrumbs->push('افزودن چرا ما', route('admin.why_choose_us.create'));
});

// why-choose-us > Show
Breadcrumbs::register('why_choose_us-show', function ($breadcrumbs, $why_choose_us) {
    $breadcrumbs->parent('why_choose_us');
    $breadcrumbs->push('مشاهده چرا ما', route('admin.why_choose_us.show', $why_choose_us->id));
});

// why-choose-uss > Show > Edit
Breadcrumbs::register('why_choose_us-edit', function ($breadcrumbs, $why_choose_us) {
    $breadcrumbs->parent('why_choose_us-show', $why_choose_us);
    $breadcrumbs->push('ویرایش چرا ما', route('admin.why_choose_us.edit', $why_choose_us->id));
});

/**
 * Contact
 */

// Plans
Breadcrumbs::register('plan', function ($breadcrumbs) {
    $breadcrumbs->push('لیست طرح ها', route('admin.plan.index'));
});

// Plan > Create
Breadcrumbs::register('plan-create', function ($breadcrumbs) {
    $breadcrumbs->parent('plan');
    $breadcrumbs->push('افزودن طرح', route('admin.plan.create'));
});

// Plan > Show
Breadcrumbs::register('plan-show', function ($breadcrumbs, $plan) {
    $breadcrumbs->parent('plan');
    $breadcrumbs->push('مشاهده طرح', route('admin.plan.show', $plan->id));
});

// Plans > Show > Edit
Breadcrumbs::register('plan-edit', function ($breadcrumbs, $plan) {
    $breadcrumbs->parent('plan-show', $plan);
    $breadcrumbs->push('ویرایش طرح', route('admin.plan.edit', $plan->id));
});

/**
 * Contact
 */

// Contacts
Breadcrumbs::register('contact', function ($breadcrumbs) {
    $breadcrumbs->push('لیست تماس ها', route('admin.contact.contacts.index'));
});

// Contact > Show
Breadcrumbs::register('contact-show', function ($breadcrumbs, $contact) {
    $breadcrumbs->parent('contact');
    $breadcrumbs->push('مشاهده تماس', route('admin.contact.contacts.show', $contact->id));
});


