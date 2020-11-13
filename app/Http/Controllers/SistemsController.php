<?php

namespace App\Http\Controllers;

use App\Model\Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Sistem;

class SistemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sistem = DB::table('sistems')->get();
        // $sistem = Sistem::all();
        $sistem = DB::table('webs')->where('id_web_category', 1)->get();
        return view('sistem.index', ['sistem' => $sistem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistem/create');
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
        $request->validate([
            'nama_si' => 'required',
            'deskripsi' => 'required',
            'alamat_url' => 'required',
            'ip_host' => 'required'
        ]);


        Web::create($request->all());
        return redirect('/sistem')->with('status', 'Data Berhasil Ditambahkan!');
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
        //
        $sistem = Web::find($id);
        return view('sistem/edit', ['sistem' => $sistem]);
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
        //
        $sistem = Web::find($id);
        $sistem->url_name             = $request->alamat_url;
        $sistem->name                 = $request->nama_si;
        $sistem->ip_address           = $request->ip_host;
        $sistem->description          = $request->deskripsi;
        $sistem->update();
        // $sistem->update($request->all());

        return redirect('/sistem')->with('status', 'Data Berhasil Diedit!');
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
        DB::table('sistems')->where('id', $id)->delete();

        return redirect('/sistem')->with('status', 'Data Berhasil Dihapus!');
    }

    public function detail($id)
    {
        // $detail = Sistem::find($id);
        $detail = Web::find($id);
        return view('sistem/detail', ['detail' => $detail]);
    }
}
