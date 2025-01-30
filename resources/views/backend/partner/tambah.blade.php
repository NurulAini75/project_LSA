@extends('backend.index');
@section('content')
    <div class="section-header">
        <h1>Halaman Tambah</h1>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Partner</h4>
                    </div>
                    <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Partner</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label>Isi Partner</label>
                                <input type="text" class="form-control" name="isi">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div>
                                <button class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endsection
