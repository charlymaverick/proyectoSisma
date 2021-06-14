<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $roles = Role::all();
        return view('admin.roles.index')->with(['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $permission = Permission::all();
        return view('admin.roles.create')->with(['permission'=>$permission]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        session()->flash('error', 'success');
        return redirect()->route('roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function show(Role $logs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::all();
        $rolePermission = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();
        return view('admin.roles.edit')->with(['role'=>$role, 'permission'=>$permission, 'rolePermission'=>$rolePermission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $role = Role::find($request->id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));
        session()->flash('error', 'edit');
        return redirect()->route('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();

        session()->flash('error', 'delete');
        return redirect()->route('roles');
    }
}
