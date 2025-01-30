@extends('backend.index')

@section('content')
    <div class="section-header">
        <h1>News</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Table News</h4>
                        <div class="card-header-form d-flex justify-content-between">
                            <a href="{{ route('admin.news.tambah') }}" class="btn btn-primary mr-2">Tambah News</a>
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
                                    <th class="text-center">No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td class="p-0 text-center">
                                            {{ $index + 1 }}
                                            </div>
                                        </td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->isi }}</td>
                        </div>
                        <td>{{ $item->created_at->format('d F Y') }}</td>
                        </td>
                        <td >
                            <a href="{{ route('admin.news.detail', $item->id) }}" class="btn btn-primary mr-2">Detail</a>
                            <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning mr-2">edit</a>
                            <a href="{{ route('admin.news.delete', $item->id) }}" class="btn btn-danger">Hapus</a>
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
