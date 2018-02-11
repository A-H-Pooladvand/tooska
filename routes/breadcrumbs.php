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
