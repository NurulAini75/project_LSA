@extends('backend.index')

@section('content')
    <div class="section-header">
        <h1>Halaman Company</h1>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg">
                <div class="card">
                    <div class="card-header">
                        <h4>Company</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.company.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $data->email }}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <label>About</label>
                                <textarea type="text" class="form-control" name="about">{{ $data->about }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Nama Perusahaan 1</label>
                                <input type="text" class="form-control" name="nama_perusahaan1"
                                    value="{{ $data->nama_perusahaan1 }}">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea type="text" class="form-control" name="alamat1">{{ $data->alamat1 }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Nama Perusahaan 2</label>
                                <input type="text" class="form-control" name="nama_perusahaan2"
                                    value="{{ $data->nama_perusahaan2 }}">
                            </div>

                            <div class="form-group">
                                <label>Alamat 2</label>
                                <textarea type="text" class="form-control" name="alamat2">{{ $data->alamat2 }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>No Tlp</label>
                                <input type="text" class="form-control" name="no_tlp" value="{{ $data->no_tlp }}">
                            </div>

                            <div class="form-group">
                                <label>Email Kantor</label>
                                <input type="text" class="form-control" name="email_kantor"
                                    value="{{ $data->email_kantor }}">
                            </div>

                            <div class="form-group">
                                <label>Maps</label>
                                <textarea type="text" class="form-control" name="maps">{{ $data->maps }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="facebook"
                                    value="{{ $data->sosial_media }}">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control" name="instagram"
                                    value="{{ $data->sosial_media }}">
                            </div>
                            <div class="form-group">
                                <label>You tube</label>
                                <input type="text" class="form-control" name="youtube"
                                    value="{{ $data->sosial_media }}">
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
