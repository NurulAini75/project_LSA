@extends('backend.index')

@section('content')
    <div class="section-header">
        <h1>program</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Table Program</h4>
                        <div class="card-header-form d-flex justify-content-between">
                            <a href="{{ route('admin.program.tambah') }}" class="btn btn-primary mr-2">Tambah Program</a>
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
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Judul</th>
                                    <th>Sub Judul</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->sub_judul }}
                        </div>
                        </td>
                        <td>{{ $item->created_at->format('d F Y') }}</td>
                        <td>
                            <div class="badge badge-success">{{ $item->status }}</div>
                        </td>
                        <td>
                            <a href="{{ route('admin.program.detail', $item->id) }}" class="btn btn-primary">Detail<a>
                            <a href="{{ route('admin.program.edit', $item->id) }}" class="btn btn-warning">edit</a>
                            <a href="{{ route('admin.program.delete', $item->id) }}"class="btn btn-danger">Hapus</a>
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
