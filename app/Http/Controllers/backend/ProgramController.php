<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller{
    public function read(){
        $data = Program::all();
        return view('backend.program.index', compact('data'));
    }

    public function create(){
        return view('backend.program.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'judul' =>'required',
            'sub_judul' =>'required',
            'gambar' =>'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' =>'required',
            'status' =>'required'
        ]);

    $nama_gambar = time() . '.' . $request->gambar->extension();
    $request->gambar->move(public_path('image/program/'), $nama_gambar);


    Program::create([
        'judul' => $request->judul,
        'sub_judul' => $request->sub_judul,
        'gambar' => 'image/program/' . $nama_gambar,
        'deskripsi' => $request->deskripsi,
        'status' => $request->status,
    ]);

    return redirect()->route('admin.program');
    }

        public function detail($id)
        {
        $data = Program::findOrFail($id);
        return view('backend.program.detail', compact('data'));
        }
    public function edit($id)
        {
        $data = Program::findOrFail($id);
        return view('backend.program.edit', compact('data'));
        }

    public function update(Request $request, $id){
        $request->validate([
            'judul' =>'required',
            'sub_judul' =>'required',
            'deskripsi' =>'required',
            'status' =>'required'
        ]);

        if($request->gambar){
            $request->validate(
                ['gambar' =>'required']);
        }

        $data = Program::findOrFail($id);

        if($request->hasFile('gambar')){
            if($data->gambar && file_exists(public_path($data->gambar))){
                unlink(public_path($data->gambar));
            }
            $nama_gambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('image/program/'), $nama_gambar);

        }else{
            $nama_gambar = $data->gambar;
        }
        $update = [
            'judul' => $request->judul,
            'sub_judul' => $request->sub_judul,
            'gambar' => 'image/program/' . $nama_gambar,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ];


        $data->update($update);

        return redirect()->route('admin.program');
    }

    public function delete($id){
        $data = Program::findOrFail($id);

        if($data->gambar && file_exists(public_path($data->gambar))){
            unlink(public_path($data->gambar));
        }
        $data->delete();

        return redirect()->route('admin.program');
    }
}
