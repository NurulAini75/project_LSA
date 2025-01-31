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
        $request->gambar->move(public_path('image/gallery/'), $nama_gambar);

        Gallery::create ([
            'nama' => $request->nama,
            'gambar' =>'image/gallery/' . $nama_gambar
        ]);

        return redirect()->route('admin.gallery');
    }

    public function detail($id){
        $data = Gallery::findOrFail($id);
        return view('backend.Gallery.detail', compact('data'));
    }

    public function edit($id){
        $data = Gallery::findOrFail($id);
        return view('backend.Gallery.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama'=> 'required',
            'gambar'=> 'required',
        ]);

        if($request->gambar){
            $request->validate(
                ['gambar' => 'required']
            );
        }

        $data = Gallery::findOrFail($id);

        if($request->hasFile('gambar')){
            if($data->gambar && file_exists(public_path($data->gambar))){
                unlink(public_path($data->gambar));
            }
            $nama_gambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('image/gallery/'),$nama_gambar);
            } else{
                $nama_gambar = $data->gambar;
            }

            $update =[
                'nama' => $request->nama,
                'gambar' =>  'image/gallery/'.$nama_gambar,
                ];

                $data->update($update);

                return redirect()->route('admin.gallery');
        }

        public function delete($id){
            $data = Gallery::findOrFail($id);

                if($data->gambar && file_exists(public_path($data->gambar))){
                    unlink(public_path($data->gambar));
                }
                $data->delete();

                return redirect()->route('admin.gallery');

        }
}

