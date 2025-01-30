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
            <label>Nama kegiatan</label>
            <input type="text" class="form-control"  value="{{ $data->nama }}">
          </div>
          <div class="form-group">
            <label>gambar</label>
            <img src="{{ asset($data->gambar) }}" width="100">
          </div>
          <div class="">
              <a href="{{ route('admin.gallery') }}" class="btn btn-primary">Back to gallery</a>
          </div>
        </div>
  </div>
</div>
@endsection
