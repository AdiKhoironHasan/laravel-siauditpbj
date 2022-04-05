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

    @if ($timeline)
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ $title }} Rencana Kerja Audit</h3>
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
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="timeline">
                                <div class="time-label">
                                    <span class="bg-primary">{{ $timeline->rencana->tanggal }}</span>
                                </div>
                                <div>
                                    <i class="fas fa-bookmark bg-success"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Perencanaan RKA</b> <i
                                                class="fas fa-check-circle text-success"></i></h3>
                                        <div class="timeline-body">
                                            Rencana Kerja Audit dibuat pada {{ $timeline->rencana->tanggal }}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-file-alt"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Pengisian Data Desk</b> <i
                                                class="fas"></i>
                                        </h3>
                                        <div class="timeline-body">
                                            keterangan desk
                                        </div>
                                        <div class="timeline-footer ">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/timeline/desk/{{ $timeline->rencana->id }}"
                                                    class=" btn btn-primary btn-sm {{ $timeline->desk_id != null ? 'disabled' : '' }}">Tambah</a>
                                                {{-- @dd($desk) --}}
                                                <a href="/desk/{{ $desk != null ? $desk->id : '' }}/edit"
                                                    class="btn btn-info btn-sm {{ $timeline->desk_id != null ? '' : 'disabled' }}">Ubah</a>
                                                <form action="/desk/{{ $desk != null ? $desk->id : '' }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="submit"
                                                        onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                        class="btn btn-danger rounded-0 btn-sm {{ $timeline->desk_id != null ? '' : 'disabled' }}"
                                                        value="Hapus">
                                                </form>
                                                <a href="/desk/print/{{ $desk != null ? $desk->id : '' }}"
                                                    class="btn btn-success btn-sm {{ $timeline->desk_id != null ? '' : 'disabled' }}">Cetak</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-file-alt"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Pengisian Data Visit</b> <i
                                                class="fas"></i>
                                        </h3>
                                        <div class="timeline-body">
                                            visit keterangan</div>
                                        <div class="timeline-footer">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/timeline/visit/{{ $timeline->rencana->id }}"
                                                    class=" btn btn-primary btn-sm {{ $timeline->visit_id != null ? 'disabled' : '' }}">Tambah</a>
                                                <a href="/visit/{{ $visit != null ? $visit->id : '' }}/edit"
                                                    class="btn btn-info btn-sm {{ $timeline->visit_id != null ? '' : 'disabled' }}">Ubah</a>
                                                <form action="/visit/{{ $visit != null ? $visit->id : '' }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="submit"
                                                        onclick="return confirm('Anda yakin mau menghapus data visit ini ?')"
                                                        class="btn btn-danger rounded-0 btn-sm {{ $timeline->visit_id != null ? '' : 'disabled' }}"
                                                        value="Hapus">
                                                </form>
                                                <a href="/visit/print/{{ $visit != null ? $visit->id : '' }}"
                                                    class="btn btn-success btn-sm {{ $timeline->visit_id != null ? '' : 'disabled' }}">Cetak</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-check-double"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Konfirmasi Data Audit</b> <i
                                                class="fas"></i>
                                        </h3>
                                        <div class="timeline-body">
                                            <form action="/rencana/confirm/{{ $timeline->rencana->id }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="visit_id" id="visit_id" value="{{ $visit != null ? $visit->id : '' }}">
                                                <select type="text" name="status" class="form-control" required>
                                                    <option selected hidden value="">--Pilih Aksi--</option>
                                                    <option value="Disetujui">Terima</option>
                                                    <option value="Tidak Disetujui">Tolak</option>
                                                </select>
                                                <button type="submit" class="btn btn-sm btn-primary mt-2 {{ $timeline->berita_id != null ? 'disabled' : '' }}">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-newspaper"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Berita Acara</b> <i class="fas"></i></h3>
                                        <div class="timeline-body">
                                            berita status</div>
                                        <div class="timeline-footer">
                                            <a href="/berita/{{ $timeline->berita_id != null ? $timeline->berita_id : '' }}"
                                                class="btn btn-success btn-sm {{ $timeline->berita_id != null ? '' : 'disabled' }}">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- DATA DARI BOT TELE --}}
                                {{-- <div>
                                <i class="fas fa-clock bg-danger"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><b>Rencana Audit Tidak Terlaksana</b> <i
                                            class="fas fa-times-circle  text-danger"></i></h3>
                                    <div class="timeline-body">
                                        Data tidak di isi dampai waktu tenggang
                                    </div>
                                </div>
                            </div> --}}
                                <div class="time-label">
                                    @if ($timeline->berita_id != null)
                                        <span class="bg-danger">20 Agustus 2022</span>
                                    @else
                                        <span class="bg-danger">Proses audit belum selesai</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        Tidak ada data
    @endif
@endsection
