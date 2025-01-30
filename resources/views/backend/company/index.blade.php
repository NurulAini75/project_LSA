@extends('backend.index');
@section('content')
<div class="section-header">
    {{-- <h1>ini halaman tambah</h1> --}}
  </div>
<div class="section-body">
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg">
      <div class="card">
        <div class="card-header">
          <h4>Company</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Nama Perusahaan 1</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Perusahaan 2</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat 2</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>No Tlp</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Maps</label>
            <input type="text" class="form-control">
          </div>
          <div>
              <button class="btn btn-primary">submit</button>
          </div>
        </div>
  </div>
</div>
@endsection
