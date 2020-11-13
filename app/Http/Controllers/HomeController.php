<?php

namespace App\Http\Controllers;

use App\Model\Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aktif = DB::table('webs')->where('status', '1')->get();
        $nonaktif = DB::table('webs')->where('status', '0')->get();

        $jumlah = array();
        $kategori = DB::table('web_categories')->get();
        $index = 0;
        foreach ($kategori as $k) {
            $j = DB::table('webs')->where('id_web_category', $k->id)->get();
            $jumlah[$index] = count($j);
            $index++;
        }
        $sistem = DB::table('webs')->get();
        $umum = DB::table('web_categories')->get();
        $eselon = DB::table('eselons')->get();
        return view('home', compact('aktif', 'nonaktif', 'jumlah', 'kategori', 'umum', 'sistem', 'eselon'));
    }
}
