<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebCategoryStore;
// use App\Http\Requests\WebStore;
use App\Model\WebCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = WebCategory::all();
        $data = WebCategory::orderBy('id', 'desc')->get();
        return view('web-category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        WebCategory::create($request->except('_token'));
        return redirect(route('web_category.index'))->with(['success' => 'Berhasil menambah data', 'data' => WebCategory::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('web-category.show')->with(['data' => WebCategory::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = WebCategory::find($id);
        return view('web-category.update', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(WebCategoryStore $request, $id)
    {
        $data           = $request->except('_token');
        // $data['status'] = $request->has('status') ? true :

        $web = WebCategory::find($id);
        $web->update($data);

        return redirect(route('web_category.index'))->with(['success' => 'Berhasil update data', 'data' => WebCategory::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function destroy($id)
    {
        DB::table('web_categories')->where('id','=',$id)->delete();
        // $web = WebCategory::find($id);
        // $web->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
