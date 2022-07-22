@extends('layouts.main')

@section('content')
<div class="card card-orange">
    <div class="card-header" style="color: white; border-color:transparent">
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
                    <th>Ketua Auditor</th>
                    <th>Tanggal Desk</th>
                    <th>Tanggal Visit</th>
                    <th>Status</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rencanas as $rencana)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$rencana->auditor1->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($rencana->tanggal_desk)->format('d F Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($rencana->tanggal_visit)->format('d F Y')}}</td>
                    <td>{{ $rencana->status }}</td>
                    <td>{{ $rencana->tahun }}</td>
                    <td style="width: 20%">
                        {{-- <div class="d-flex justify-content-around">
                            {{-- <a href="#"><i class="fas fa-info-circle" style="color: deepskyblue;"></i></a> --}}
                            {{-- <a href="/rencana/timeline/{{ $rencana->id }}" class="btn btn-primary btn-sm"><i
                                    style="color:coral" class="fas fa-stream"></i>&nbsp;Timeline</a>
                            @if (Auth::user()->level === "Ketua SPI" || Auth::user()->level === "Auditor")
                            <a href="#modal_rencana_edit{{ $rencana->id }}" class="btn btn-primary btn-sm"
                                data-toggle="modal"><i style="color: #5FD068;" class="fas fa-edit"></i>&nbsp;Edit</a>
                            <form action="/rencana/{{ $rencana->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-primary btn-sm"
                                    onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i
                                        style="color: #DD4A48;" class="fas fa-trash-alt"></i>&nbsp;Hapus</button>
                            </form>
                            @endif
                        </div> --}}
                        <div class="d-flex justify-content-around">
                            <a href="/rencana/timeline/{{ $rencana->id }}" style="color:coral" data-toggle="tooltip"
                                data-placement="top" title="Timeline"><i class="fas fa-stream"></i></a>
                            @if (Auth::user()->level === "Ketua SPI")
                            <a href="#modal_rencana_edit{{ $rencana->id }}" data-toggle="modal"
                                style="color: limegreen;" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                    class="far fa-edit"></i></a>
                            <form action="/rencana/{{ $rencana->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="border-0 bg-transparent p-0 m-0"
                                    onclick="return confirm('Anda yakin mau menghapus item ini ?')"
                                    style="color: crimson;" data-toggle="tooltip" data-placement="top" title="Hapus"><i
                                        class="far fa-trash-alt"></i></button>
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
