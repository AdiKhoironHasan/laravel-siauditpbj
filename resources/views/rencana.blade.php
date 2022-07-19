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
        @if (Auth::user()->level == 'Ketua SPI')
        <div class="mb-2">
            <button type="button" class="btn btn-secondary" data-toggle="modal"
                data-target="#modal_rencana_tambah">Tambah</button>
            <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
        </div>
        @endif
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    {{-- <th>Unit</th> --}}
                    {{-- <th>Paket Barang</th> --}}
                    {{-- <th>Auditor 1</th>
                    <th>Auditor 2</th>
                    <th>Auditor 3</th> --}}
                    <th>Tanggal Desk</th>
                    <th>Tanggal Visit</th>
                    <th>Status</th>
                    <th>Tahun</th>
                    {{-- <th>Tanggal</th> --}}
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rencanas as $rencana)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $rencana->barang->unit->name }}</td> --}}
                    {{-- <td>{{ $rencana->barang->name }}</td> --}}
                    {{-- <td>{{ $rencana->auditor1->name }}</td>
                    <td>{{ $rencana->auditor2->name }}</td>
                    <td>{{ $rencana->auditor3->name }}</td> --}}
                    <td>{{ $rencana->tanggal_desk }}</td>
                    <td>{{ $rencana->tanggal_visit }}</td>
                    <td>{{ $rencana->status }}</td>
                    <td>{{ $rencana->tahun }}</td>
                    {{-- <td>{{ tanggal($rencana->tanggal) }}</td> --}}
                    <td>
                        <div class="d-flex justify-content-around">
                            {{-- <a href="#"><i class="fas fa-info-circle" style="color: deepskyblue;"></i></a> --}}
                            <a href="/rencana/timeline/{{ $rencana->id }}" style="color:coral"><i
                                    class="fas fa-stream"></i></a>
                            @if (Auth::user()->level === "Ketua SPI" || Auth::user()->level === "Auditor")
                            <a href="#modal_rencana_edit{{ $rencana->id }}" data-toggle="modal"
                                style="color: limegreen;"><i class="far fa-edit"></i></a>
                            <form action="/rencana/{{ $rencana->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="border-0 bg-transparent p-0 m-0"
                                    onclick="return confirm('Anda yakin mau menghapus item ini ?')"
                                    style="color: crimson;"><i class="far fa-trash-alt"></i></button>
                            </form>
                            @endif
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
