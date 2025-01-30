@extends('backend.index');
@section('content')
    <div class="section-header">
        <h1>Halaman Detail</h1>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" value="{{ $data->judul }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Sub Judul</label>
                            <input type="text" class="form-control" value="{{ $data->sub_judul }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <img src="{{ asset($data->gambar) }}" width="100" readonly>
                        </div>
                        {{-- <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" value="{{ $data-> }}">
                        </div> --}}
                        <div class="form-group">
                            <label>deskripsi</label>
                            <textarea name="deskripsi" class="form-control" readonly>{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" value="{{ $data->status }}" readonly>
                        </div>
                        <div class="">
                            <a href="{{ route('admin.program') }}" class="btn btn-primary">Back to program</a>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
