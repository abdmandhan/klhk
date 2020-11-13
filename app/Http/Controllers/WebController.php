<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebStore;
use App\Model\Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('web.index')->with(['data' => Web::all()]);
        $data = Web::all();
        $data = Web::orderBy('id', 'desc')->get();
        return view('web.index', compact('data'));
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
    public function store(Request $request)
    {
        // dd($request->file('image'));
        $post = new Web();
        $post->url_name             = $request->url_name;
        $post->name                 = $request->name;
        $post->ip_address           = $request->ip_address;
        $post->id_web_category      = $request->id_web_category;
        $post->id_eselon            = $request->id_eselon;
        $post->description          = $request->description;
        $post->status               = $request->has('status') ? 1 : 0;
        if ($request->hasFile('image')) {
            $request->file('image')->move('vendor/client/images/', $request->file('image')->getClientOriginalName());
            $post->image = $request->file('image')->getClientOriginalName();
        }
        // Web::create($request->except('_token'));
        $post->save();
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
    public function update(Request $request, $id)
    {
        $post = Web::find($id);
        $post->url_name             = $request->url_name;
        $post->name                 = $request->name;
        $post->ip_address           = $request->ip_address;
        $post->id_web_category      = $request->id_web_category;
        $post->id_eselon            = $request->id_eselon;
        $post->description          = $request->description;
        $post->status               = $request->has('status') ? 1 : 0;
        if ($request->hasFile('image')) {
            $request->file('image')->move('vendor/client/images/', $request->file('image')->getClientOriginalName());
            $post->image = $request->file('image')->getClientOriginalName();
        }
        $post->update();
        // $data           = $request->except('_token');
        // // $data['status'] = $request->has('status') ? true : false;

        // $web = Web::find($id);
        // $web->update($data);

        return redirect(route('web.index'))->with(['success' => 'Berhasil update data', 'data' => Web::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('webs')->where('id', '=', $id)->delete();
        // $web = Web::find($id);
        // $web->destroy();

        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
