<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Model\Web;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$websites = DB::table('websites')->get();
        // $websites = Web::all();
        $websites = DB::table('webs')->where('id_web_category', 2)->get();
        return view('website/index', ['websites' => $websites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $tambah = new Web;
        // $tambah->alamat_url = $request->alamat_url;
        // $tambah->ip_host = $request->ip_host;

        // $tambah->save();
        // return redirect('/website');


        // Web::create([
        //     'alamat_url' => $request->alamat_url,
        //     'ip_host' => $request->ip_host
        // ]);
        $request->validate([
            'nama_web' => 'required',
            'deskripsi' => 'required',
            'alamat_url' => 'required',
            'ip_host' => 'required'
        ]);


        Web::create($request->all());
        return redirect('/website')->with('status', 'Data Berhasil Ditambahkan!');
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
        $web = Web::find($id);
        return view('website/edit', ['web' => $web]);
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

        $web = Web::find($id);
        $web->url_name             = $request->alamat_url;
        $web->name                 = $request->nama_web;
        $web->ip_address           = $request->ip_host;
        $web->description          = $request->deskripsi;
        $web->update();
        // $web->update($request->all());
        return redirect('/website')->with('status', 'Data Berhasil Diedit!');
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
        //  Web::destroy($webs->id);
        //  return redirect('/website')->with('status','Data Berhasil Dihapus!');
        DB::table('webs')->where('id', $id)->delete();

        return redirect('/website')->with('status', 'Data Berhasil Dihapus!');
    }

    //     public function pingAddress($ip) {
    //     $ping = exec("ping -n 2 $ip", $output, $status);
    //     if (strpos($output[2], 'unreachable') !== FALSE) {
    //         return '<span style="color:#f00;">OFFLINE</span>';
    //     } else {
    //         return '<span style="color:green;">ONLINE</span>';
    //     }
    // }

    // echo pingAddress($ip);

    //   public function getList()
    // {
    //     $countries = Web::select(['id', 'alamat_url', 'ip_host', 'created_at', 'updated_at']);
    //     return Datatables::of($countries)->make(true);
    // }
    public function count_web($id)
    {
        $count = DB::table('nama_web')->count();
    }


    public function detail($id)
    {
        $detail = Web::find($id);

        return view('website/detail', ['detail' => $detail]);
    }
    // public function details($id)
    // {
    //     $data = Web::find($id);
    //     $resp = Http::timeout(1000)->get($data->alamat_url);

    //     $result =
    //     [
    //         'http_status' => $resp ->status(),
    //         'header' => $resp ->header(),
    //     ];

    //     return response() ->json($result, 500);
    // }

    public function web_status(Request $request)
    {
        if ($request->input('id') == null)
            return response()->json(['status' => false]);
        $web = Web::find($request->input('id'));
        if ($web == null) return response()->json(['status' => false]);

        try {
            $resp = Http::timeout(1000)->get($web->alamat_url);
            $resp = $resp->status();

            Web::updateOrCreate(
                [
                    'id'    => $web->id,
                    'status'    => true,
                ],
                [
                    'id'    => $web->id
                ]
            );
            return response()->json(
                [
                    'status'    => true,
                    'data'      =>
                    [
                        'nama_web'      => $web->nama_web,
                        'alamat_url'    => $web->alamat_url,
                        'ip_host'       => $web->ip_host
                    ]
                ]
            );
        } catch (\Illuminate\Http\Client\ConnectionException $th) {
            Web::updateOrCreate(
                [
                    'id'    => $web->id,
                    'status'    => false,
                ],
                [
                    'id'    => $web->id
                ]
            );
            return response()->json(
                [
                    'status' => false,
                    'data'      =>
                    [
                        'nama_web'      => $web->nama_web,
                        'alamat_url'    => $web->alamat_url,
                        'ip_host'       => $web->ip_host
                    ]
                ]
            );
        }
    }
}
