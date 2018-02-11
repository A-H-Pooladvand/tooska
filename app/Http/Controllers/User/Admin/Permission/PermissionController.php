<?php

namespace App\Http\Controllers\User\Admin\Permission;

use App\Permission;
use App\PermissionTitle;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $permissionTitles = PermissionTitle::with('permissions:id,title_id,display_name')->get(['id', 'title']);

        $userPermissions = $user->permissions->pluck('id')->toArray();

        return view('user.admin.permission.form', compact('user', 'permissionTitles', 'userPermissions'));
    }

    public function update(Request $request, $id)
    {


        return ['message' => 'دسترسی کاربر با موفقیت ویرایش گردید.'];
    }
}
