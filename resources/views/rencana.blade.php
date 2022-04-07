@extends('layouts.main')

@section('content')
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
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rencana->barang->unit->nama }}</td>
                            <td>{{ $rencana->barang->nama }}</td>
                            <td>{{ $rencana->auditor1->nama }}</td>
                            <td>{{ $rencana->auditor2->nama }}</td>
                            <td>{{ $rencana->auditor3->nama }}</td>
                            <td>{{ $rencana->status }}</td>
                            <td>{{ $rencana->tahun }}</td>
                            <td>{{ tanggal($rencana->tanggal) }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="/timeline/{{ $rencana->id }}"><i class="fas fa-info-circle"
                                                style="color: deepskyblue;"></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="#modal_rencana_edit{{ $rencana->id }}" data-toggle="modal"
                                            style="color: limegreen;"><i class="far fa-edit"></i></a>
                                    </div>
                                    <div class="col">
                                        <form action="/rencana/{{ $rencana->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="border-0 bg-transparent"
                                                onclick="return confirm('Anda yakin mau menghapus item ini ?')"
                                                style="color: crimson;"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('partials.rencana.modal-rencana-edit')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.rencana.modal-rencana-tambah')
@endsection
