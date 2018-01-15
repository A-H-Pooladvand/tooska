<?php

namespace App\Http\Controllers\User\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Created by Amirhossein Pooladvand
     */

    public function index()
    {
        return view('user.admin.index');
    }

    public function items(Request $request)
    {
        $columns = $request['columns'];
        $order = $request['order'];

        $requestedOrderColumn = $columns[$order[0]['column']]['data'];
        $requestedOrderDir = $order[0]['dir'];

        $draw = intval($request['draw']);

        $start = $request['start'];

        $length = $request['length'];

        $users = User::orderBy($requestedOrderColumn, $requestedOrderDir);

        $total = $users->count();

        $users = $users->skip($start)->take($length);

        return [
            'draw' => $draw,
            "recordsTotal" => $total,
            "recordsFiltered" => $total,
            'data' => $users->get()->each(function ($item) {
//                $item->created_at = $item->created_at_fa;
//                $item->updated_at = $item->updated_at_fa;
            })];
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
        //
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
