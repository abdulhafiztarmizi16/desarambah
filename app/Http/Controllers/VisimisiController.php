<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VisimisiController extends Controller
{
    // kelola page visimisi admin
    public function index(Request $request)
    {
        $visimisi = Visimisi::all();
        // dd($visimisi);
        return view('visi-misi.index',compact('visimisi'));
    }
    // kelola page menyimpan data
    public function create()
    {
        return view('visi-misi.create');
    }
    // meyimpan data
    public function store(Request $request)
    {
        $data = $request->validate([
            'visi_desa'      => ['nullable', 'string'],
            'misi_desa'    => ['required','string'],
        ]);


        Visimisi::create($data);
        // dd($data);
        return redirect()->route('visimisi.index')->with('success','Visimisi berhasil ditambahkan');
    }
    // kelola page mengubah data
    public function edit(Visimisi $visimisi)
    {
        return view('visi-misi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {

            $visimisi = Visimisi::find($id);

            $data = $request->validate([
                'visi_desa'      => ['nullable','string'],
                'misi_desa'    => ['required','string'],
            ]);

                // $data['pict_visi'] = $request->pict_visi->store('public/aparat');

                $visimisi->update($data);
                return redirect()->back()->with('success','Data Visimisi desa berhasil di perbarui');
            
    }
    // menghapus data
    public function destroy(Visimisi $visimisi)
    {
        $visimisi->delete();
        return back()->with('success','Visimisi berhasil dihapus');
    }
}
