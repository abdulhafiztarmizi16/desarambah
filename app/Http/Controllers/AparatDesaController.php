<?php

namespace App\Http\Controllers;

use App\Aparat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AparatDesaController extends Controller
{
    // kelola halaman aparat admin
    public function index(Request $request)
    {
        $aparat = Aparat::orderBy('id','desc')->paginate(6);
        return view('aparat.index',compact('aparat'));
    }

    public function create()
    {
        return view('aparat.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_aparat'      => ['required', 'max:64', 'string'],
                'gambar'    => ['nullable','image','max:2048'],
                'jabatan'    => ['required', 'string']
        ]);

        if ($request->gambar) {
            $data['gambar'] = $request->gambar->store('public/aparat');
        }

        aparat::create($data);

        return redirect()->route('aparat.index')->with('success','Aparat berhasil ditambahkan');
    }

    public function edit(aparat $aparat)
    {
        return view('aparat.edit', compact('aparat'));
    }

    public function update(Request $request, $id)
    {

            $aparat = aparat::find($id);

            $data = $request->validate([
                'nama_aparat'      => ['required', 'max:64', 'string'],
                'gambar'    => ['nullable','image','max:2048'],
                'jabatan'    => ['required', 'string']
            ]);
            if ($request->gambar) {
                if ($aparat->gambar) {
                    File::delete(storage_path('app/' . $aparat->gambar));
                }
                $data['gambar'] = $request->gambar->store('public/aparat');
            }

                $aparat->update($data);
                return redirect()->back()->with('success','Data aparat desa berhasil di perbarui');
            
        
    }

    public function destroy(aparat $aparat)
    {
        $aparat->delete();
        return back()->with('success','Aparat berhasil dihapus');
    }
}
