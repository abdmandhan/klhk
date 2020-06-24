<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;


class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::all();

        return view('user-management.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();

        return view('user-management.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = collect($request->validate([
            'name'          => ['required'],
            'email'         => ['required', 'email', 'unique:users'],
            'roles'         => ['required'],
            'password'      => ['required', 'confirmed'],
        ]));

        $data->put('password', Hash::make($data->get('password')));
        $user_data = $data->only('name', 'email', 'password');

        $user = User::create($user_data->toArray());
        $user->assignRole($data->get('roles'));

        return redirect(route('user_management.index'))->with('success', 'Berhasil membuat user');;
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        $roles = Role::all();

        return view('user-management.edit', compact('data', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = collect($request->validate([
            'name'          => ['required'],
            'email'         => ['required', 'email', Rule::unique('users')->ignore($id)],
            'roles'         => ['required'],
            'password'      => ['required', 'confirmed'],
        ]));

        $data->put('password', Hash::make($data->get('password')));
        $user_data = $data->only('name', 'email', 'password');

        $user = User::find($id)->update($user_data->toArray());

        $user = User::find($id);
        $user->syncRoles($data->get('roles'));

        return redirect(route('user_management.index'))->with('success', 'Berhasil update user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->back()->with('success', 'Berhasil delete web');
    }
}
