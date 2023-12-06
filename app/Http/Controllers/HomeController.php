<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use App\Models\Aparat;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\Penduduk;
use App\Models\Visimisi;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::all();
        $visimisi = Visimisi::get();
        $desa = Desa::find(1);
        $berita = Berita::latest()->take(5)->get();
        $gallery = Gallery::where('slider', 1)->latest()->get();
        $galleries = array();
        $totalPenduduk = Penduduk::all();
        $lk = Penduduk::where('jenis_kelamin',1)->count();
        $pr = Penduduk::where('jenis_kelamin',2)->count();
        $aparat = Aparat::all();
        

        foreach (Gallery::where('slider', null)->get() as $key => $value) {
            $gambar = [
                'gambar'    => $value->gallery,
                'id'        => $value->id,
                'caption'   => $value->caption,
                'jenis'     => 1,
                'created_at'=> strtotime($value->created_at),
            ];
            array_push($galleries, $gambar);
        }

        usort($galleries, function($a, $b) {
            return $a['created_at'] < $b['created_at'];
        });
        // dd($aparat);
        return view('index', compact('visimisi','user', 'desa', 'gallery','berita','galleries','totalPenduduk','lk','pr','aparat'));
    }
    
    public function dashboard()
    {
        $totalPenduduk = new Penduduk();
        $man = $totalPenduduk->where('jenis_kelamin',1)->count();
        $woman = $totalPenduduk->where('jenis_kelamin',2)->count();
        return view('dashboard', compact('totalPenduduk','man','woman'));
    }
}
