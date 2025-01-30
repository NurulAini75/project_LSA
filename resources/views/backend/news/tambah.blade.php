@extends('backend.index');
@section('content')
    <div class="section-header">
        {{-- <h1>ini halaman detail</h1> --}}
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data</h4>
                    </div>
                    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <input type="text" class="form-control" name="isi">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div>
                                <button class="btn btn-primary">Tambah data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
