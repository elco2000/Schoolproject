<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermissionPost;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Session;

class PermissionController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions = Permission::all();
        return view ('permissions.index', compact('permissions') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::get(); //Get all roles
        return view('permissions.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionPost $request)
    {
        //
        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;
        $roles = $request['roles'];
        $permission->save();

        if (!empty($request['roles'])) { //If one or more role is selected
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail(); //Match input role to db record

                $permission = Permission::where('name', '=', $name)->first(); //Match input //permission to db record
                $r->givePermissionTo($permission);
            }



        }
        return redirect()->action('PermissionController@index')->with('correct', 'Permission gemaakt');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
        return view('permissions.edit', compact('permission' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $permission
     * @return \Illuminate\Http\Response
     */
    public function update(StorePermissionPost $request, Permission $permission)
    {
        //
        $permission->name = $request['name'];
        $permission->save();

        return redirect ()->action('PermissionController@index')->with('correct', 'Permission gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect ()->action('PermissionController@index')->with('correct', 'Permission verwijderd');
    }
}
