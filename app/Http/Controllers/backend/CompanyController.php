<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $data = User::findOrFail($id);
        return view('backend.company.index', compact('data'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        if($request->password){
            $request->validate([
                'password' => 'required'
            ]);
        }

        $data_company = User::findOrFail($id);

        $data_company->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ?? $data_company->password,
            'nama_perusahaan1' => $request->nama_perusahaan1,
            'alamat1' => $request->alamat1,
            'nama_perusahaan2' => $request->nama_perusahaan2,
            'alamat2' => $request->alamat2,
            'about' => $request->about,
            'email_kantor' => $request->email_kantor,
            'no_tlp' => $request->no_tlp,
            'maps' => $request->maps,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
        ]);

        return redirect()->route('admin.company');
    }
}
