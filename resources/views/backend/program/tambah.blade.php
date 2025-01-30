@extends('backend.index');
@section('content')
    <div class="section-header">
        <h1>Hlaman Tambah</h1>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Program</h4>
                    </div>
                    <form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="form-group">
                                <label>Sub Judul</label>
                                <input type="text" class="form-control" name="sub_judul">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" id="">
                                    <option value="" hidden>--pilih status--</option>
                                    <option value="status">Active</option>
                                    <option value="status">no active</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
