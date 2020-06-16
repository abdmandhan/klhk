<?php

namespace App\Http\Controllers;

use App\Model\Web;
use App\Model\WebMonitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebMonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = WebMonitoring::with('web')->get();
        return view('web-monitoring.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    public function details($id)
    {
        $data = Web::find($id);
        $resp = Http::timeout(1000)->get($data->url_name);

        $result =
            [
                'http_status'       => $resp->status(),
                'header'            => $resp->headers(),
            ];

        return response()->json($result, 200);
    }

    public function web_status(Request $request)
    {
        if ($request->input('id') == null) return response()->json(['status' => false]);
        $web = Web::find($request->input('id'));
        if ($web == null) return response()->json(['status' => false]);
        try {
            $resp = Http::timeout(1000)->get($web->url_name);
            $resp = $resp->status();
            WebMonitoring::updateOrCreate(
                [
                    'id_web'    => $web->id,
                    'status'    => true,
                ],
                [
                    'id_web'    => $web->id
                ]
            );
            return response()->json(
                [
                    'status'    => true,
                    'data'      =>
                    [
                        'web_name'      => $web->name,
                        'url'           => $web->url_name,
                        'ip_address'    => $web->ip_address
                    ]
                ]
            );
        } catch (\Illuminate\Http\Client\ConnectionException $th) {
            WebMonitoring::updateOrCreate(
                [
                    'id_web'    => $web->id,
                    'status'    => false,
                ],
                [
                    'id_web'    => $web->id
                ]
            );
            return response()->json(
                [
                    'status' => false,
                    'data'      =>
                    [
                        'web_name'      => $web->name,
                        'url'           => $web->url_name,
                        'ip_address'    => $web->ip_address
                    ]
                ]
            );
        }
    }
}
