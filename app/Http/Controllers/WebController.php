<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebStore;
use App\Model\Web;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index')->with(['data' => Web::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebStore $request)
    {
        Web::create($request->except('_token'));
        return redirect(route('web.index'))->with(['success' => 'Berhasil menambah web', 'data' => Web::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('web.show')->with(['data' => Web::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Web::find($id);
        return view('web.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WebStore $request, $id)
    {
        $data           = $request->except('_token');
        $data['status'] = $request->has('status') ? true : false;

        $web = Web::find($id);
        $web->update($data);

        return redirect(route('web.index'))->with(['success' => 'Berhasil update web', 'data' => Web::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $web = Web::find($id);
        $web->delete();

        return redirect()->back()->with('success', 'Berhasil delete web');
    }
}
