@extends('layouts.main')

@section('content')
<div class="card card-orange">
    <div class="card-header" style="color: white; border-color:transparent">
        <h3 class="card-title">Data User Aktif</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-2">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target="#modal_user_tambah">Tambah</button>
        </div>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Hak Akses</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->level }}</td>
                    <td>{{ $user->jabatan }}</td>
                    @if ($user->status == 'Aktif')
                    <td><span class="badge badge-success">{{ $user->status }}</span></td>
                    @else
                    <td><span class="badge badge-aktif">{{ $user->status }}</span></td>
                    @endif
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="#modal_user_info{{ $user->id }}" data-toggle="modal" style="color: deepskyblue"
                                    data-toggle="tooltip" data-placement="top" title="Info"><i
                                        class="fas fa-info-circle"></i></a>
                            </div>
                            <div class="col-0">
                                <a href="#modal_user_edit{{ $user->id }}" data-toggle="modal" style="color: limegreen;"
                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                        class="far fa-edit"></i></a>
                            </div>
                            <div class="col">
                                <form action="/user/{{ $user->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="border-0 bg-transparent"
                                        onclick="return confirm('Anda yakin mau menghapus user ini ?')"
                                        style="color: crimson;" data-toggle="tooltip" data-placement="top"
                                        title="Hapus"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @include('partials.user.modal-user-edit')
                @include('partials.user.modal-user-info')
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('partials.user.modal-user-tambah')
@endsection
