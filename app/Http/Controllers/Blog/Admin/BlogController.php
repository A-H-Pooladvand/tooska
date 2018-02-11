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
        return view('blog.admin.index');
    }

    public function items(Request $request)
    {
        $blogs = Blog::select(['id', 'status', 'title', 'summary', 'created_at', 'updated_at']);

        $blogs = $this->getGrid($request)->items($blogs);
        $blogs['rows'] = $blogs['rows']->each(function ($item) {
            $item->status_farsi = $item->status_fa;
        });
        return $blogs;
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
        $blog = Blog::with('tags', 'category', 'user')->findOrFail($id);
//        return $blog;
        return view('blog.admin.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::with([
            'tags',
            'category' => function ($query) {
                $query->where('category_type', Blog::class)->select('id');
            }])->findOrFail($id);

        $form = [
            'action' => route('admin.blog.update', $blog['id']),
            'method' => 'put'
            ];

        $categories = Category::where('category_type', Blog::class)->get(['id', 'title']);

        return view('blog.admin.form', compact('blog', 'form', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $request->merge(['publish_at' => jDateTime::createDatetimeFromFormat('Y/m/d H:i:s', $request['publish_at'])]);

        $this->validate($request, $this->validator());

        $blog = Blog::findOrFail($id);
        $blog->update($this->fields($request, $blog));

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
        $rules = [
            'title' => 'required|max:100',
            'image' => 'required',
            'summary' => 'required|max:250',
            'content' => 'required',
            'publish_at' => 'required',
            'category' => 'required',
        ];


        if (\request()->method() === 'PUT')
            $rules['image'] = 'nullable';

        return $rules;
    }

    private function fields(Request $request, $blog = null)
    {
        return [
            'user_id' => Auth::id(),
            'title' => $request['title'],
            'image' => empty($request['image']) ? $blog['image'] : $request['image'],
            'summary' => $request['summary'],
            'content' => $request['content'],
            'publish_at' => $request['publish_at'],
            'category_id' => $request['category'],
        ];
    }
}
