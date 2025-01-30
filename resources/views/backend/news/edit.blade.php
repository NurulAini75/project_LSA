@extends('backend.index');
@section('content')
    <div class="section-header">
        <h1>Halaman Edit</h1>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit</h4>
                    </div>
                    <form action="{{ route('admin.news.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" value="{{ $data->judul }}" name="judul">
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <input type="text" class="form-control" value="{{ $data->isi }}" name="isi">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">save</button>
                                <a href="{{ route('admin.news') }}" class="btn btn-outline-primary">Back to news</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
