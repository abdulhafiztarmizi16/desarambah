<?php

namespace App\Http\Controllers;

use App\Desa;
use App\User;
use App\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // control tampilan berita admin
    public function index(Request $request)
    {
        $berita = Berita::orderBy('id','desc')->paginate(6);

        if ($request->cari) {
            $berita = Berita::where('judul','like',"%{$request->cari}%")
            ->orWhere('konten','like',"%{$request->cari}%")
            ->orderBy('id','desc')->paginate(6);
        }

        $berita->appends($request->only('cari'));
        return view('berita.index', compact('berita'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // control berita pada tampilan berita masyarakat
    public function berita(Request $request)
    {
        $berita = Berita::orderBy('id','desc')->paginate(8);
        $desa = Desa::find(1);
        $user = User::all();
        
        // dd(request('cari'));--> testing ambil data
        // untuk mencari/search data daftar berita
        if ($request->cari) {
            $berita = Berita::where('judul','like',"%{$request->cari}%")
            ->orWhere('konten','like',"%{$request->cari}%")
            ->orderBy('id','desc')->paginate(8);
        }

        $berita->appends($request->only('cari'));
        return view('berita.berita', compact('user','berita','desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // form tambah berita
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul'     => ['required','string','max:191'],
            'konten'    => ['required'],
            'gambar'    => ['nullable','image','max:2048'],
        ]);

        if ($request->gambar) {
            $data['gambar'] = $request->gambar->store('public/gallery');
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success','Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    // control tampilan isi dari konten berita
    public function show(Berita $berita, $slug)
    {
        $user = User::all();
        $desa = Desa::find(1);
        $beritas = Berita::where('id','!=', $berita->id)->inRandomOrder()->limit(3)->get();
        if ($slug != Str::slug($berita->judul)) {
            return abort(404);
        }
        $berita->update(['dilihat' => $berita->dilihat + 1]);
        return view('berita.show', compact('user','berita','desa','beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $beritum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $beritum)
    {
        $data = $request->validate([
            'judul'     => ['required','string','max:191'],
            'konten'    => ['required'],
            'gambar'    => ['nullable','image','max:2048'],
        ]);

        if ($request->gambar) {
            if ($beritum->gambar) {
                File::delete(storage_path('app/' . $beritum->gambar));
            }
            $data['gambar'] = $request->gambar->store('public/gallery');
        }

        $beritum->update($data);

        return back()->with('success','Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $beritum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        return back()->with('success','Berita berhasil dihapus');
    }
}