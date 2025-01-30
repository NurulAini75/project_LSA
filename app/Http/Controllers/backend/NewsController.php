<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function read(){
        $data = News::all();
        return view('backend.news.index', compact('data'));

    }
    public function create(){
        return view('backend.news.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required'
        ]);

        $nama_gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image/program/'), $nama_gambar);

        News::create ([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => 'image/program/' . $nama_gambar
        ]);

        return redirect()->route('admin.news');
    }
    public function detail($id){
        $data = News::findOrFail($id);
        return view('backend.news.detail', compact('data'));
    }

    public function edit($id){
        $data = News::findOrFail($id);
        return view('backend.news.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        if($request->gambar){
            $request->validate(
                ['gambar' => 'required']
            );
        }
        $data = News::findOrFail($id);

        if($request->hasFile('gambar')){
            if($data->gambar && file_exists(public_path($data->gambar))){
                unlink(public_path($data->gambar));
            }

        $nama_gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image/program/'), $nama_gambar);
        }else {
            $nama_gambar = $data->gambar;
        }

        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => 'image/program/' . $nama_gambar
        ]);


        return redirect()->route('admin.news');
    }

    public function delete($id){
        $data = News::findOrFail($id);

        if($data->gambar && file_exists(public_path($data->gambar))){
            unlink(public_path($data->gambar));
        }
        $data->delete();
        return redirect()->route('admin.news');
    }



}
