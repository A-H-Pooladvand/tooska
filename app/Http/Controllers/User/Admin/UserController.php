<?php
/**
 * Created by Amirhossein Pooladvand
 */

namespace App\Http\Controllers\User\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
        return view('user.admin.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator());

        User::create($this->fields($request));

        return ['message' => 'کاربر جدید با موفقیت ثبت شد.'];
    }

    public function show($id)
    {
        return User::withTrashed()->findOrFail($id);
        return view('user.admin.show');
    }

    public function edit($id)
    {
        return view('user.admin.form');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->validator());

        User::findOrFail($id)->update($this->fields($request));
    }

    public function destroy($id)
    {
        $ids = explode(',', $id);

        User::withTrashed()->whereIn('id', $ids)->forceDelete();
    }

    public function softDestroy($id)
    {
        $ids = explode(',', $id);

        $users = User::withTrashed()->findMany($ids);

        foreach ($users as $user) {
            if ($user->deleted_at === null)
                $user->delete();
            else
                $user->restore();
        }
    }

    // Methods

    protected function validator()
    {
        return [
            'name' => 'required|string|max:100',
            'family' => 'string|max:100',
            'username' => 'string|max:100',
            'mobile' => 'string|max:100',
            'phone' => 'string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required'
        ];
    }

    protected function fields(Request $request)
    {
        return [
            'name' => $request['name'],
            'family' => $request['family'],
            'username' => $request['username'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'phone' => $request['phone'],
            'password' => $request['password'],
            'avatar' => $request['avatar']
        ];
    }
}
