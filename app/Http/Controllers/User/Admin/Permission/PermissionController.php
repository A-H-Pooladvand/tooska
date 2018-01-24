<?php

namespace App\Http\Controllers\User\Admin\Permission;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.admin.permission.index');
    }

    public function items(Request $request)
    {
        $permissions = Permission::select('id', 'name', 'display_name', 'description', 'created_at', 'updated_at');

        return $this->getGrid($request)->items($permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.admin.permission.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|regex:/(^[A-Za-z-_ ]+$)+/',
            'display_name' => 'required',
            'description' => 'required'
        ]);

        $permission = new Permission();
        $permission->name = $request['name'];
        $permission->display_name = $request['display_name'];
        $permission->description = $request['description'];
        $permission->save();

        return ['message' => 'دسترسی جدید با موفقیت ایجاد گردید.'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.admin.permission.form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
