@extends('backend.index');
@section('content')
<div class="section-header">
    {{-- <h1>ini halaman edit</h1> --}}
  </div>
<div class="section-body">
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg">
      <div class="card">
        <div class="card-header">
          <h4>Edit</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Nama Kegiatan</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control">
          </div>
          <div>
              <a href="" class="btn btn-primary">edit</a>
              <a href="{{ route('admin.gallery') }}" class="btn btn-primary">Back to gallery</a>
          </div>
        </div>
  </div>
</div>
@endsection
