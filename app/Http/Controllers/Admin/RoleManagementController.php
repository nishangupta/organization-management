<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleManagementController extends Controller
{
    public function index(){
        $roles = Role::with('permissions')->get();

        return view('admin.role.index')->with([
            'roles'=>$roles
        ]);
    }

    public function edit($role){
        $role= Role::where('id',$role)->with('permissions')->first();
        return view('admin.role.edit')->with([
            'role'=>$role,
            'allPermissions'=>Permission::all(),
        ]);
    }

    public function update(Role $role,Request $request){
        $request->validate([
            'permission'=>'required'
        ]);

        if($permission = Permission::findById($request->permission)){
            $role->givePermissionTo($permission);
        }
        return redirect(route('roleManagement.edit',$role));
    }

    public function revokePermission(Role $role,Permission $permission){
        try{
            $role->revokePermissionTo($permission);
        }
        catch(Exception $e){
            throw new NotFoundHttpException('Role not found');
        }

        return redirect(route('roleManagement.edit',$role));
    }
}
