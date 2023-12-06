<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Penduduk;

use Illuminate\Http\Request;

class DataDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $desa = Desa::find(1);
        $penduduk = Penduduk::all();
        
        $jkCounts=[
            'lk' => $penduduk->where('jenis_kelamin', 1)->count(),
            'pr' => $penduduk->where('jenis_kelamin', 2)->count(),
            'jmlJK' => $penduduk->where('jenis_kelamin', 1)->count()+$penduduk->where('jenis_kelamin', 2)->count(),
        ];

        $pendidikanCounts = [
            'bsP' => $penduduk->where('pendidikan_id', 1)->count(),
            'sdP' => $penduduk->where('pendidikan_id', 2)->count(),
            'tsdP' => $penduduk->where('pendidikan_id', 3)->count(),
            'sltpP' => $penduduk->where('pendidikan_id', 4)->count(),
            'sltaP' => $penduduk->where('pendidikan_id', 5)->count(),
            'diplomaP' => $penduduk->where('pendidikan_id', 6)->count(),
        ];
        
        $agamaCounts = [
            'isA' => $penduduk->where('agama_id', 1)->count(),
            'krA' => $penduduk->where('agama_id', 2)->count(),
            'itA' => $penduduk->where('agama_id', 3)->count(),
            'hiA' => $penduduk->where('agama_id', 4)->count(),
            'buA' => $penduduk->where('agama_id', 5)->count(),
            'khA' => $penduduk->where('agama_id', 6)->count(),
            'laA' => $penduduk->where('agama_id', 7)->count(),
        ];
        
        $statusPerkawinanCounts = [
            'bkSP' => $penduduk->where('status_perkawinan_id', 1)->count(),
            'kwSP' => $penduduk->where('status_perkawinan_id', 2)->count(),
            'chSP' => $penduduk->where('status_perkawinan_id', 3)->count(),
            'cmSP' => $penduduk->where('status_perkawinan_id', 4)->count(),
        ];

        return view('data-desa.index', compact('desa','penduduk','pendidikanCounts','agamaCounts','statusPerkawinanCounts','jkCounts'));
    }
}
