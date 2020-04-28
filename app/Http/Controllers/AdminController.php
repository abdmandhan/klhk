<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\AdminStore;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_admin['admin'] = DB::table('admin')->get();
        return view('admin.index', $data_admin);
        // $data_admin = \App\Admin::all();
        // var_dump($data_admin);
        // die();
        // return view('profil.index', $data_admin, '$data_admin');

        // $data_admin = \App\Admin::all();
        // return view('profil.index', ['admin' => $data_admin]);
        // $data_admin['admin'] = \App\Admin::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'eselon' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        //insert ke tabel user
        $user = new \App\User;
        $user->role = 'admin';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // $user->remeber_token = str_random(40);
        $user->save();
        //insert ke tabel admin
        $request->request->add(['user_id' => $user->id]);
        $request = \App\Admin::create($request->all());
        return redirect(route('admin.index'))->with(['success' => 'Berhasil menambah Admin', 'data_admin' => Admin::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.show')->with(['data_admin' => Admin::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_admin = Admin::find($id);
        return view('admin.update', compact('data_admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminStore $request, $id)
    {
        // $data           = $request->except('_token');
        // $data['status'] = $request->has('status') ? true : false;

        $data_admin = Admin::find($id);
        $data_admin->update(
            [
                'name' => $request->name,
                'eselon' => $request->eselon,
                'email' => $request->email,
                'password' => $request->password
            ]
        );

        return redirect(route('admin.index'))->with(['success' => 'Berhasil update Admin', 'data_admin' => Admin::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_admin = Admin::find($id);
        $data_admin->delete();

        return redirect()->back()->with('success', 'Berhasil delete Admin');
    }
}
