{{-- @dd($datas) --}}

@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Daftar {{ $title }}</h3>
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
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_unit_tambah">Tambah</button>
        </div>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Unit</th>
                    <th>Ketua Unit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>
                        <div class="text-center">
                            <div class="row">
                                <div class="col">
                                    <a href="#modal_unit_edit{{ $data->id }}" data-toggle="modal" style="color: limegreen;"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="col">
                                    <a href="#" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @include('partials.modal-unit-edit')
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('partials.modal-unit-tambah')

@endsection