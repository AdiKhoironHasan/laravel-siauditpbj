@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Data Barang</h3>

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
                        <th>Tanggal</th>
                        <th>Nilai Kontrak</th>
                        <th>Tahun Anggaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $barang }}</td>
                        <td>
                            <div class="text-center">
                                <!-- <a href="timeline.php" style="color: deepskyblue"><i class="fas fa-info-circle"></i></a> -->
                                <a href="#modal_barang_edit<?= $row['id_barang'] ?>" data-toggle="modal"
                                    style="color: limegreen;"><i class="far fa-edit"></i></a>
                                <a href="functions/barang_delete.php?id=<?= $row['id_barang'] ?>"
                                    onclick="return confirm('Anda yakin mau menghapus item ini ?')"
                                    style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
    </div>
@endsection
