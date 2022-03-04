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
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_rka_tambah">Tambah</button>
        </div>
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Unit</th>
                    <th>Paket Barang</th>
                    <th>Auditor 1</th>
                    <th>Auditor 2</th>
                    <th>Auditor 3</th>
                    <th>Status</th>
                    <th>Tahun</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
