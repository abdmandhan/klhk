<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Web as t_web;
use Illuminate\Support\Facades\DB;

class CariController extends Controller
{
    public function index()
    {
        $data_cari = t_web::all();
        $eselon = DB::table('eselons')->get();
        return view('client.cari.index',['data_cari' => $data_cari,'eselon' => $eselon]);
    }
    public function create(Request $request)
    {
        // \App\cari::create($request->all());
        $post = new t_web();
        $post->url_name             = $request->url;
        $post->name                 = $request->nama;
        $post->ip_address           = $request->ip_address;
        $post->id_web_category      = $request->kategori;
        $post->id_eselon            = $request->eselon;
        $post->description          = $request->deskripsi;
        $post->status               = $request->status;
        if ($request->hasFile('image')) {
            $request->file('image')->move('vendor/client/images/', $request->file('image')->getClientOriginalName());
            $post->image = $request->file('image')->getClientOriginalName();
        }
        $post->save();
        return redirect('/front/cari')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $cari = t_web::find($id);
        $eselon = DB::table('eselons')->get();
        return view('/client/cari/edit', ['cari' => $cari,'eselon' => $eselon]);
    }
    public function update(Request $request, $id)
    {
        $post = t_web::find($id);
        $post->url_name             = $request->url;
        $post->name                 = $request->nama;
        $post->ip_address           = $request->ip_address;
        $post->id_web_category      = $request->kategori;
        $post->id_eselon            = $request->eselon;
        $post->description          = $request->deskripsi;
        $post->status               = $request->status;
        $post->update();
        return redirect('/front/cari')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $cari = t_web::find($id);
        $cari->delete();
        return redirect('/front/cari')->with('sukses', 'Data berhasil dihapus');
    }
}
