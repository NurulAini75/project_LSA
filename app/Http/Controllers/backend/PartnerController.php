<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;


class PartnerController extends Controller
{
    public function read(){
        $data = Partner::all();
        return view('backend.partner.index', compact('data'));
    }
    public function create(){
        return view('backend.partner.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'isi' => 'required',
            'gambar' => 'required'
        ]);
        $nama_gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image/program/'), $nama_gambar);

        Partner::create([
            'nama'=>$request->nama,
            'isi'=>$request->isi,
            'gambar' => 'image/program/' . $nama_gambar

        ]);

        return redirect()->route('admin.partner');
    }

    public function detail($id){
        $data = Partner::findOrFail($id);
        return view('backend.partner.detail', compact('data'));
    }
    
    public function edit($id){
        $data = Partner::findOrFail($id);
        return view('backend.partner.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama'=>'required',
            'isi'=>'required'
        ]);
        if($request->gambar){
            $request->validate(
                ['gambar'=>'required']);
        }
        $data = Partner::findOrFail($id);
        if($request->hasFile('gambar')){
            if($data->gambar && file_exists(public_path($data->gambar))){
                unlink(public_path($data->gambar));
            }
        $nama_gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image/program/'), $nama_gambar);
        }else{
            $nama_gambar = $data->gambar;
        }
        $data->update([
            'nama'=>$request->nama,
            'isi'=>$request->isi,
            'gambar'=>'image/program/' .  $nama_gambar
        ]);

        return redirect()->route('admin.partner');
    }

    public function delete($id){
        $data = Partner::findOrFail($id);
        if($data->gambar && file_exists(public_path($data->gambar))){
            unlink(public_path($data->gambar));
        }
        $data->delete();
        return redirect()->route('admin.partner');
    }

    }
