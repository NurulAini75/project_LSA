@extends('backend.index')

@section('content')
    <div class="section-header">
        <h1>Partner</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Table Partner</h4>
                        <div class="card-header-form d-flex justify-content-between">
                            <a href="{{ route('admin.partner.tambah') }}" class="btn btn-primary mr-2">Tambah gallery</a>
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Partner</th>
                                    <th>Isi Partner</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->isi }}</td>
                                        <td>
                                            <a href="{{ route('admin.partner.detail', $item->id) }}" class="btn btn-primary">Detail<a>
                                            <a href="{{ route('admin.partner.edit', $item->id) }}"class="btn btn-warning">edit</a>
                                            <a href="{{ route('admin.partner.delete', $item->id) }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
