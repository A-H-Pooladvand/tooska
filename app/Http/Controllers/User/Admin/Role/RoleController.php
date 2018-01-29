<?php

namespace App\Http\Controllers\User\Admin\Role;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('user.admin.role.index');
    }

    public function items(Request $request)
    {
        $roles = Role::select('id', 'name', 'display_name', 'description', 'created_at', 'updated_at');

        return $this->getGrid($request)->items($roles);
    }

    public function create()
    {
        $permissions = Permission::get(['id', 'display_name']);

        $form = ['action' => route('admin.role.store')];

        return view('user.admin.role.form', compact('permissions', 'form'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator($request));

        $role = new Role();
        $role->name = $request['name'];
        $role->display_name = $request['display_name'];
        $role->description = $request['description'];
        $role->save();

        $role->attachPermissions($request['permissions']);

        return ['message' => 'نقش جدید با موفقیت ایجاد گردید'];
    }

    public function show($id)
    {
        $role = Role::find($id);

        $role_permissions = $role->permissions()->pluck('id')->toArray();

        $permissions = Permission::get();

        return view('user.admin.role.show', compact('role', 'role_permissions', 'permissions'));
    }

    public function edit($id)
    {
        $role = Role::find($id);

        $rolePermissions = $role->permissions()->get()->pluck('id')->toArray();

        $permissions = Permission::get(['id', 'display_name']);

        $form = [
            'action' => route('admin.role.update', $role->id),
            'method' => 'PUT'
        ];

        return view('user.admin.role.form', compact('permissions', 'rolePermissions', 'role', 'form'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);

        $this->validate($request, $this->validator($request, $role));

        $role->name = $request['name'];
        $role->display_name = $request['display_name'];
        $role->description = $request['description'];
        $role->save();

        $role->syncPermissions($request['permissions']);

        return ['message' => 'نقش جدید با موفقیت ایجاد گردید'];
    }

    public function destroy($id)
    {
        $ids = explode(',', $id);

        if ($this->preventUserToDeleteSuperAdminRoles($ids))
            return ['error' => 'شما اجازه حذف ادمین های برتر را ندارید'];


        try {
            Role::whereIn('id', $ids)->delete();
        } catch (\Exception $e) {
            return $e;
        }

        return ['message' => 'رکورد ها به درستی حذف گردیدند'];
    }

    /**
     * @param Request $request
     * @param Role|null $role
     * @return array
     */
    private function validator(Request $request, Role $role = null)
    {
        $rules = [
            'name' => 'required|unique:roles|regex:/(^[A-Za-z-_ ]+$)+/',
            'display_name' => 'required',
            'description' => 'required'
        ];

        if ($request->method() === 'PUT')
            $rules['name'] = 'required|regex:/(^[A-Za-z-_ ]+$)+/|unique:roles,name,' . $role->id;

        return $rules;
    }

    /**
     * @param array $ids
     * @return bool
     */
    private function preventUserToDeleteSuperAdminRoles(array $ids)
    {
        $super_admin_ids = [1, 2, 3, 4];

        foreach ($super_admin_ids as $item) {
            if (in_array($item, $ids))
                return true;
        }

        return false;
    }
}
