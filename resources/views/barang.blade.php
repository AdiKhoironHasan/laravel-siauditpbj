@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel {{ $title }}</h3>

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
                    data-target="#modal_tambah">Tambah</button>
                <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
            </div>
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Unit</th>
                        <th>Nama Barang</th>
                        <th>No Kontrak</th>
                        <th>Tanggal Kontrak</th>
                        <th>Nilai Kontrak</th>
                        <th>Tahun Anggaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($barangs) --}}
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $barang->unit->nama }}</td>
                            <td>{{ $barang->nama }}</td>
                            <td>{{ $barang->no_kontrak }}</td>
                            <td>{{ tanggal($barang->tgl_kontrak) }}</td>
                            <td>{{ $barang->nilai_kontrak }}</td>
                            <td>{{ $barang->tahun_anggaran }}</td>
                            <td>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#modal_barang_edit{{ $barang->id }}" data-toggle="modal"
                                                style="color: limegreen;"><i class="far fa-edit"></i></a>
                                        </div>
                                        <div class="col">
                                            <form action="/barang/{{ $barang->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="border-0 bg-transparent"
                                                    onclick="return confirm('Anda yakin mau menghapus item ini ?')"
                                                    style="color: crimson;"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('partials.modal-barang-edit')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}

    @include('partials.modal-barang-tambah')
@endsection
