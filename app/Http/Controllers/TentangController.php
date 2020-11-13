<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Tentang;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = DB::table('tentang')->where('id', 1)->first();
        return view('tentang.index', compact('tentang'));
    }

    public function edit($id)
    {
        $tentang = DB::table('tentang')->where('id', $id)->first();
        return view('tentang.update', compact('tentang'));
    }

    public function update(Request $request, $id)
    {
        $post = Tentang::find($id);
        $post->deskripsi   = $request->deskripsi;
        if ($request->hasFile('image')) {
            $request->file('image')->move('vendor/client/images/', $request->file('image')->getClientOriginalName());
            $post->gambar = $request->file('image')->getClientOriginalName();
        }
        $post->update();

        return redirect('/tentang')->with(['success' => 'Berhasil update data']);
    }
}
