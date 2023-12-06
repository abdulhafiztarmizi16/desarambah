<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Pariwisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PariwisataController extends Controller
{
    // control tampilan pariwisata admin
    public function index(Request $request)
    {
        $pariwisata = Pariwisata::orderBy('id','desc')->paginate(6);

        if ($request->cari) {
            $pariwisata = Pariwisata::where('judul','like',"%{$request->cari}%")
            ->orWhere('konten','like',"%{$request->cari}%")
            ->orderBy('id','desc')->paginate(6);
        }

        $pariwisata->appends($request->only('cari'));
        return view('pariwisata.index', compact('pariwisata'));
    }

    // contorl pariwisata masyarakat
    public function pariwisata(Request $request)
    {
        $pariwisata = Pariwisata::orderBy('id','desc')->paginate(6);
        $desa = Desa::find(1);
        
        if ($request->cari) {
            $pariwisata = Pariwisata::where('judul','like',"%{$request->cari}%")
            ->orWhere('konten','like',"%{$request->cari}%")
            ->orderBy('id','desc')->paginate(6);
        }

        $pariwisata->appends($request->only('cari'));
        return view('pariwisata.pariwisata', compact('pariwisata','desa'));
    }

    // form tambah pariwisata
    public function create()
    {
        return view('pariwisata.create');
    }
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

        Pariwisata::create($data);

        return redirect()->route('pariwisata.index')->with('success','Pariwisata berhasil ditambahkan');
    }

    // control tampilan isi dari konten pariwisata
    public function show(Pariwisata $pariwisata, $slug)
    {
        $desa = Desa::find(1);
        $pariwisatas = Pariwisata::where('id','!=', $pariwisata->id)->inRandomOrder()->limit(3)->get();
        if ($slug != Str::slug($pariwisata->judul)) {
            return abort(404);
        }
        // $pariwisata->update(['dilihat' => $pariwisata->dilihat + 1]);
        return view('pariwisata.show', compact('pariwisata','desa','pariwisatas'));
    }

    // halaman edit pariwisata
    public function edit(Pariwisata $pariwisata)
    {
        return view('pariwisata.edit', compact('pariwisata'));
    }
    public function update(Request $request, Pariwisata $pariwisatum)
    {
        $data = $request->validate([
            'judul'     => ['required','string','max:191'],
            'konten'    => ['required'],
            'gambar'    => ['nullable','image','max:2048'],
        ]);

        if ($request->gambar) {
            if ($pariwisatum->gambar) {
                File::delete(storage_path('app/' . $pariwisatum->gambar));
            }
            $data['gambar'] = $request->gambar->store('public/gallery');
        }

        $pariwisatum->update($data);

        return back()->with('success','Pariwisata berhasil diperbarui');
    }

    // menghapus data pariwisata
    public function destroy(Pariwisata $pariwisatum)
    {
        $pariwisatum->delete();
        return back()->with('success','Pariwisata berhasil dihapus');
    }

}
