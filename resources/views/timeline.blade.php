@extends('layouts.main')

@section('content')
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
                                    <span class="bg-primary">{{ $rencana[0]->tanggal }}</span>
                                </div>
                                <div>
                                    <i class="fas fa-bookmark bg-success"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Perencanaan RKA</b> <i
                                                class="fas fa-check-circle text-success"></i></h3>
                                        <div class="timeline-body">
                                            Rencana Kerja Audit dibuat pada {{ $rencana[0]->tanggal }}
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
                                        <div class="timeline-footer">
                                            <a href="#"
                                                class=" btn btn-primary btn-sm {{ $timeline[0]->desk_id != null ? 'disabled' : '' }}">Tambah</a>
                                            <a href="#"
                                                class="btn btn-info btn-sm {{ $timeline[0]->desk_id != null ? '' : 'disabled' }}">Ubah</a>
                                            <a href="#" onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger btn-sm {{ $timeline[0]->desk_id != null ? '' : 'disabled' }}">Hapus</a>
                                            <a href="#"
                                                class="btn btn-success btn-sm {{ $timeline[0]->desk_id != null ? '' : 'disabled' }}">Cetak</a>
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
                                            <a href="#"
                                                class=" btn btn-primary btn-sm {{ $timeline[0]->visit_id != null ? 'disabled' : '' }}">Tambah</a>
                                            <a href="#"
                                                class="btn btn-info btn-sm {{ $timeline[0]->visit_id != null ? '' : 'disabled' }}">Ubah</a>
                                            <a href="#" onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger btn-sm {{ $timeline[0]->visit_id != null ? '' : 'disabled' }}">Hapus</a>
                                            <a href="#"
                                                class="btn btn-success btn-sm {{ $timeline[0]->visit_id != null ? '' : 'disabled' }}">Cetak</a>
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
                                            konfirmasi status </div>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-newspaper"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Berita Acara</b> <i class="fas"></i></h3>
                                        <div class="timeline-body">
                                            berita status</div>
                                        <div class="timeline-footer">
                                            <a href="#"
                                                class="btn btn-success btn-sm {{ $timeline[0]->berita_id != null ? '' : 'disabled' }}">Lihat</a>
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
                                    @if ($timeline[0]->berita_id != null)
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
