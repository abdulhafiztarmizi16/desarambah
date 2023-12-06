<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $desa = Desa::find(1);
        $gallery = Gallery::where('slider', null)->get();
        $galleries = array();

        foreach ($gallery as $key => $value) {
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

        // pagination untuk mengambil nilai array galeri
        $perPage = 9;
        $currentPage = $request->query('page', 1);
        $pagedGalleries = array_slice($galleries, ($currentPage - 1) * $perPage, $perPage);
    
        $galleriesPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedGalleries,
            count($galleries),
            $perPage,
            $currentPage,
            [
                'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
                'pageName' => 'page',
            ]
        );

        return view('gallery.index', compact('galleriesPaginated','desa'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery(Request $request)
    {
        $desa = Desa::find(1);
        $gallery = Gallery::where('slider', null)->get();
        $galleries = array();
    
        foreach ($gallery as $key => $value) {
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
        // pagination untuk mengambil nilai array galeri
        $perPage = 12;
        $currentPage = $request->query('page', 1);
        $pagedGalleries = array_slice($galleries, ($currentPage - 1) * $perPage, $perPage);
    
        $galleriesPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $pagedGalleries,
            count($galleries),
            $perPage,
            $currentPage,
            [
                'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
                'pageName' => 'page',
            ]
        );
    
        return view('gallery.gallery', compact('galleriesPaginated', 'desa'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSlider()
    {
        $gallery = Gallery::where('slider', 1)->latest()->get();
        return view('gallery.slider', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar'    => ['required', 'image', 'max:2048'],
            'caption'   => ['nullable', 'string']
        ]);

        Gallery::create([
            'gallery'   => $request->gambar->store('public/gallery'),
            'caption'   => $request->caption,
            'slider'    => $request->slider
        ]);

        return redirect()->back()->with('success', 'Gambar berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        File::delete(storage_path('app/'.$gallery->gallery));
        $gallery->delete();
        return back()->with('success', 'Gambar berhasil dihapus');
    }
}
