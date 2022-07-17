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
                            <span class="bg-primary">{{ date('d F Y',
                                strtotime($timeline->rencana->tanggal)) }}</span>
                        </div>
                        <div>
                            <i class="fas fa-bookmark bg-success"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Perencanaan RKA</b> <i
                                        class="fas fa-check-circle text-success"></i></h3>
                                <div class="timeline-body">
                                    Rencana Kerja Audit dibuat pada
                                    <strong>{{ date('d F Y', strtotime($timeline->rencana->tanggal)) }}</strong>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i
                                class="fas fa-file-alt {{ $timeline->kerja_desk_id != null ? 'bg-success' : 'bg-danger' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Pengisian Kertas Kerja Audit Desk</b> <i class="fas"></i>
                                </h3>
                                <div class="timeline-body">
                                    {{ $timeline->kerja_desk_id != null ? 'Data Desk sudah diisi' : 'Data Desk belum
                                    diisi' }}
                                </div>
                                <div class="timeline-footer ">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        <a href="/rencana/timeline/kerjadesk/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{ $timeline->kerja_desk_id != null ? 'disabled' : '' }}">Tambah</a>
                                        <a href="/rencana/timeline/kerjadesk/{{ $kerja_desk != null ? $kerja_desk->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{ $timeline->kerja_desk_id != null ? '' : 'disabled' }}">Ubah</a>
                                        <form
                                            action="/rencana/timeline/kerjadesk/{{ $kerja_desk != null ? $kerja_desk->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{ $timeline->kerja_desk_id != null ? '' : 'disabled' }}"
                                                value="Hapus">
                                        </form>
                                        @endcanany
                                        <a href="/rencana/timeline/kerjadesk/print/{{ $kerja_desk != null ? $kerja_desk->id : '' }}"
                                            class="btn btn-success btn-sm {{ $timeline->kerja_desk_id != null ? '' : 'disabled' }}">Cetak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i
                                class="fas fa-file-alt {{ $timeline->desk_id != null ? 'bg-success' : 'bg-danger' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Pengisian Data Desk</b> <i class="fas"></i>
                                </h3>
                                <div class="timeline-body">
                                    {{ $timeline->desk_id != null ? 'Data Desk sudah diisi' : 'Data Desk belum diisi' }}
                                </div>
                                <div class="timeline-footer ">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        <a href="/rencana/timeline/desk/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{ $timeline->desk_id != null ? 'disabled' : '' }}">Tambah</a>
                                        <a href="/rencana/timeline/desk/{{ $desk != null ? $desk->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{ $timeline->desk_id != null ? '' : 'disabled' }}">Ubah</a>
                                        <form action="/rencana/timeline/desk/{{ $desk != null ? $desk->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{ $timeline->desk_id != null ? '' : 'disabled' }}"
                                                value="Hapus">
                                        </form>
                                        @endcanany
                                        <a href="/rencana/timeline/desk/print/{{ $desk != null ? $desk->id : '' }}"
                                            class="btn btn-success btn-sm {{ $timeline->desk_id != null ? '' : 'disabled' }}">Cetak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i
                                class="fas fa-file-alt {{ $timeline->kerja_visit_id != null ? 'bg-success' : 'bg-danger' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Pengisian Kertas Kerja Audit Visit</b> <i
                                        class="fas"></i>
                                </h3>
                                <div class="timeline-body">
                                    {{ $timeline->kerja_visit_id != null ? 'Data Desk sudah diisi' : 'Data Desk belum
                                    diisi' }}
                                </div>
                                <div class="timeline-footer ">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        <a href="/rencana/timeline/kerjavisit/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{ $timeline->kerja_visit_id != null ? 'disabled' : '' }}">Tambah</a>
                                        <a href="/rencana/timeline/kerjavisit/{{ $kerja_visit != null ? $kerja_visit->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{ $timeline->kerja_visit_id != null ? '' : 'disabled' }}">Ubah</a>
                                        <form
                                            action="/rencana/timeline/kerjavisit/{{ $kerja_visit != null ? $kerja_visit->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{ $timeline->kerja_visit_id != null ? '' : 'disabled' }}"
                                                value="Hapus">
                                        </form>
                                        @endcanany
                                        <a href="/rencana/timeline/kerjavisit/print/{{ $kerja_visit != null ? $kerja_visit->id : '' }}"
                                            class="btn btn-success btn-sm {{ $timeline->kerja_visit_id != null ? '' : 'disabled' }}">Cetak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div>
                            <i
                                class="fas fa-file-alt {{ $timeline->visit_id != null ? 'bg-success' : 'bg-danger' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Pengisian Data Visit</b> <i class="fas"></i>
                                </h3>
                                <div class="timeline-body">
                                    {{ $timeline->visit_id != null ? 'Data Visit sudah diisi' : 'Data Visit belum diisi'
                                    }}
                                </div>
                                <div class="timeline-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        <a href="/rencana/timeline/visit/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{ $timeline->visit_id != null ? 'disabled' : '' }}">Tambah</a>
                                        <a href="/rencana/timeline/visit/{{ $visit != null ? $visit->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{ $timeline->visit_id != null ? '' : 'disabled' }}">Ubah</a>
                                        <form action="/rencana/timeline/visit/{{ $visit != null ? $visit->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data visit ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{ $timeline->visit_id != null ? '' : 'disabled' }}"
                                                value="Hapus">
                                        </form>
                                        @endcanany
                                        <a href="/rencana/timeline/visit/print/{{ $visit != null ? $visit->id : '' }}"
                                            class="btn btn-success btn-sm {{ $timeline->visit_id != null ? '' : 'disabled' }}">Cetak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i
                                class="fas fa-check-double {{ $timeline->rencana->status === 'Belum Terlaksana' ? 'bg-danger' : 'bg-success' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Konfirmasi Data Audit</b> <i class="fas"></i>
                                </h3>
                                @if (Auth::user()->level == "Auditee" )
                                <div class="timeline-body">
                                    <form action="/rencana/timeline/confirm/{{ $timeline->rencana->id }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="visit_id" id="visit_id"
                                            value="{{ $visit != null ? $visit->id : '' }}">
                                        <select type="text" name="status" class="form-control" required {{
                                            $timeline->visit_id === null || $timeline->berita_id != null ? 'disabled' :
                                            '' }}>
                                            <option selected hidden value="">--Pilih Aksi--</option>
                                            <option value="Disetujui">Terima</option>
                                            <option value="Tidak Disetujui">Tolak</option>
                                        </select>
                                        <button type="submit"
                                            class="btn btn-sm btn-primary mt-2 {{ $timeline->visit_id === null || $timeline->berita_id != null ? 'disabled' : '' }}">Submit</button>
                                    </form>
                                </div>
                                @else
                                <div class="timeline-body">
                                    {{$timeline->berita_id != null ? 'Data sudah dikonfirmasi' : 'Data belum
                                    dikonfirmasi'}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div>
                            <i
                                class="fas fa-newspaper {{ $timeline->berita_id != null ? 'bg-success' : 'bg-danger' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Berita Acara</b> <i class="fas"></i></h3>
                                <div class="timeline-body">
                                    berita status</div>
                                <div class="timeline-footer">
                                    <a href="/rencana/timeline/berita/{{ $timeline->berita_id != null ? $timeline->berita_id : '' }}"
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
                            <span class="bg-danger">{{ date('d F Y', strtotime($berita->tanggal)) }}</span>
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
