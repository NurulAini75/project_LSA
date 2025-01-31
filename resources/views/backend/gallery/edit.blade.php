@extends('backend.index')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg">
        <div class="card">
        <div class="card-header">
            <h4>Update</h4>
        </div>
        <form action=" {{ route('admin.gallery.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
            <div class="form-group">
            <label>Nama Kegiatan</label>
            <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
            </div>
            {{-- <div class="form-group">
            <label></label>
            <input type="text" name="Sub_judul" class="form-control">
            </div> --}}
            <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" >
            </div>
            {{-- <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" id="">
                <option value="">-- Pilih Status --</option>
                <option value="Aktif">Akti</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
            </div> --}}
            <div>
            <button class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>

        </div>
        @endsection
