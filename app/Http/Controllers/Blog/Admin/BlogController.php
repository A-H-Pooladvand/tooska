<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Blog;
use App\Category;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Morilog\Jalali\jDateTime;

class BlogController extends Controller
{
    public function index()
    {
        return view('user.admin.index');
    }

    public function items(Request $request)
    {
        $users = User::withTrashed()->select('id', 'name', 'family', 'username', 'mobile', 'created_at', 'deleted_at');

        return $this->getGrid($request)->items($users);
    }

    public function create()
    {
        $form = ['action' => route('admin.blog.store')];

        $categories = Category::where('category_type', Blog::class)->get(['id', 'title']);

        return view('blog.admin.form', compact('form', 'categories'));
    }

    public function store(Request $request)
    {
        $request->merge(['publish_at' => jDateTime::createDatetimeFromFormat('Y/m/d H:i:s', $request['publish_at'])]);

        $this->validate($request, $this->validator());

        $blog = Blog::create($this->fields($request));

        $tags = $request['tags'];

        $this->tags($tags)->attach($blog);

        return ['message' => 'مطلب جدید با موفقیت ثبت شد.'];
    }

    public function show($id)
    {
        return User::withTrashed()->findOrFail($id);
        return view('user.admin.show');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $userPermissions = $user->permissions()->get()->pluck('id')->toArray();

        $permissions = Permission::get(['id', 'display_name']);

        $form = [
            'action' => route('admin.user.update', $user['id']),
            'method' => 'PUT'
        ];

        $roles = Role::get(['id', 'display_name']);

        $userRoles = $user->roles()->get()->pluck('id')->toArray();

        return view('user.admin.form', compact('userRoles', 'user', 'roles', 'form', 'permissions', 'userPermissions'));
    }

    public function update(Request $request, $id)
    {
        $request->merge(['publish_at' => jDateTime::createDatetimeFromFormat('Y/m/d H:i:s', $request['publish_at'])]);

        $this->validate($request, $this->validator());

        $blog = Blog::find($id);
        $blog->update($this->fields($request));

        $tags = $request['tags'];

        $this->tags($tags)->sync($blog);

        return ['message' => 'مطلب جدید با موفقیت ثبت شد.'];
    }

    public function destroy($id)
    {
        $ids = explode(',', $id);

        if ($this->preventUserToDeleteSuperAdmins($ids))
            return ['error' => 'شما اجازه حذف کاربران برتر را ندارید'];

        User::withTrashed()->whereIn('id', $ids)->forceDelete();
    }

    // Methods

    private function validator()
    {
        return [
            'title' => 'required|max:100',
            'image' => 'required',
            'summary' => 'required|max:250',
            'content' => 'required',
            'publish_at' => 'required',
            'category' => 'required',
        ];
    }

    private function fields(Request $request)
    {
        return [
            'user_id' => Auth::id(),
            'title' => $request['title'],
            'image' => $request['image'],
            'summary' => $request['summary'],
            'content' => $request['content'],
            'publish_at' => $request['publish_at'],
            'category_id' => $request['category'],
        ];
    }
}
