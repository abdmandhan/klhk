<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cari as t_web;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $data['web'] = DB::table('webs')->orderByDesc('id')->limit(3)->get();
        $data['tentang'] = DB::table('tentang')->where('id', 1)->first();
        $data['eselons'] = DB::table('eselons')->get();
        $data['web_categories'] = DB::table('web_categories')->get();
        return view('client/home',$data);
    }
    
    public function eselons($id)
    {  
        $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
        $data['eselon'] = DB::table('eselons')->where('id', $id)->first();
        $data['eselons'] = DB::table('eselons')->get();
        $data['web_categories'] = DB::table('web_categories')->get();
        return view('client/eselon',$data);
    }

    public function categori($id)
    {
        $data['web'] = DB::table('webs')->where('id_web_category', $id)->get();
        $data['categori'] = DB::table('web_categories')->where('id', $id)->first();
        $data['eselons'] = DB::table('eselons')->get();
        $data['web_categories'] = DB::table('web_categories')->get();
        return view('client/categori', $data);
    }

    public function ppid($id)
    {
        $data['web'] = DB::table('webs')->where('id', $id)->first();
        $data['eselons'] = DB::table('eselons')->get();
        $data['web_categories'] = DB::table('web_categories')->get();
        return view('client/ppid',$data);
    }

    public function ritc()
    {
        return view('client/ritc');
    }

    public function coba()
    {
        return view('client/coba');
    }

    
    public function hasil(Request $req)
    {
        $eselons = DB::table('eselons')->get();
        $web_categories = DB::table('web_categories')->get();
        if ($req->has('search')) {
            // $web = t_web::where('url', 'like', '%' . $req->search . '%')
            //     ->latest()->paginate(10);
            $web = DB::table('webs')->where('name','like', '%' . $req->search . '%')->latest()->paginate(10);
        } else {
            // $web = t_web::latest()->paginate(10);
            $web = DB::table('webs')->latest()->paginate(10);
        }
        return view('client/hasil', compact('web','eselons','web_categories'))->with('search', $req->search);;
    }

    // public function website()
    // {
    //     // $web = t_web::latest()->where('kategori', 'like', 'Sistem Informasi');
    //     $data['web'] = DB::table('webs')->where('id_web_category', 2)->get();
    //     return view('client/website', $data);
    // }

    // public function sistem()
    // {
    //     $data['web'] = DB::table('webs')->where('id_web_category', 1)->get();
    //     return view('client/sistem', $data);
    // }

    // public function setjen($id)
    // {  
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Sekretariat Jenderal";
    //     return view('client/eselon',$data);
    // }

    // public function itjen($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Inspektorat Jenderal";
    //     return view('client/eselon',$data);
    // }

    // public function pktl($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Planologi Kehutanan dan Tata Lingkungan";
    //     return view('client/eselon',$data);
    // }

    // public function ksdae($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Konservasi Sumber Daya Alam dan Ekosistem";
    //     return view('client/eselon',$data);
    // }
    // public function pdashl($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Pengendalian Daerah Aliran Sungai dan Hutan Lindung";
    //     return view('client/eselon',$data);
    // }
 
    // public function phpl($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Pengelolaan Hutan Produksi Lestari";
    //     return view('client/eselon',$data);
    // }

    // public function ppkl($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Pengendalian Pencemaran dan Kerusakan Lingkungan";
    //     return view('client/eselon',$data);
    // }
    
    // public function pslb3($id)
    // {
    
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Pengelolaan Sampah, Limbah, Bahan Beracun dan Berbahaya";
    //     return view('client/eselon',$data);
    // }

    // public function ppi($id)
    // {
    
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Pengendalian Perubahan Iklim";
    //     return view('client/eselon',$data);
    // }
    // public function pskl($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Perhutanan Sosial dan Kemitraan Lingkungan";
    //     return view('client/eselon',$data);
    // }
 
    // public function gakkum($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Penegakkan Hukum";
    //     return view('client/eselon',$data);
    // }

    // public function bp2sdm($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Badan Penyuluhan dan Pengembangan Sumber Daya Manusia";
    //     return view('client/eselon',$data);
    // }
    
    // public function litbang($id)
    // {
    //     $data['web'] = DB::table('webs')->where('id_eselon', $id)->get();
    //     $data['judul'] = "Badan Litbang dan Inovasi";
    //     return view('client/eselon',$data);
    // }
}
