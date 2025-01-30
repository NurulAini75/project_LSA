<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function read(){
        $data = Gallery::all();
        return view('backend.Gallery.index', compact('data'));
    }

    public function create(){
        return view('backend.Gallery.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required'
        ]);

        $nama_gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image/program/'), $nama_gambar);

        Gallery::create([
            'nama' => $request->nama,
            'gambar' =>'image/program/' . $nama_gambar
        ]);

        return redirect()->route('admin.gallery');
    }

    public function detail($id){
        $data = Gallery::findOrFail($id);
        return view('backend.Gallery.detail', compact('data'));
    }

    public function edit(){
        return view('backend.Gallery.edit');
    }
}
