@extends('layouts.main')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (count($errors) > 0)
        {{ $errors }}
    @endif

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftar Rencana Kerja Audit</h3>
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
                    data-target="#modal_rencana_tambah">Tambah</button>
                <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
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
                    @foreach ($rencanas as $rencana)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <th>{{ $rencana->barang->unit->nama }}</th>
                            <th>{{ $rencana->barang->nama }}</th>
                            <th>{{ $rencana->auditor1->nama }}</th>
                            <th>{{ $rencana->auditor2->nama }}</th>
                            <th>{{ $rencana->auditor3->nama }}</th>
                            <th>Status</th>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.rencana.modal-rencana-tambah')
@endsection
