<?php

namespace App\Http\Controllers;

use App\Model\Eselon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EselonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Eselon::all();
        $data = Eselon::orderBy('id', 'desc')->get();
        return view('eselon.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eselon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Eselon::create($request->except('_token'));
        return redirect(route('eselon.index'))->with(['success' => 'Berhasil menambah data', 'data' => Eselon::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('eselon.show')->with(['data' => Eselon::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Eselon::find($id);
        return view('eselon.update', compact('data'));
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
        $data           = $request->except('_token');
        // $data['status'] = $request->has('status') ? true : false;

        $web = Eselon::find($id);
        $web->update($data);

        return redirect(route('eselon.index'))->with(['success' => 'Berhasil update data', 'data' => Eselon::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('eselons')->where('id','=',$id)->delete();
        // $web = Eselon::find($id);
        // $web->destroy();

        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }
}
