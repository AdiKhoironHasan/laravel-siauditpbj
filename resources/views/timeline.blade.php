@extends('layouts.main')

@section('content')
@if ($timeline)
<div class="card card-orange">
    <div class="card-header" style="color: white; border-color:transparent">
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
                            {{-- <span class="bg-primary">{{ date('d F Y',
                                strtotime($timeline->rencana->tanggal)) }}</span> --}}
                            <span class="bg-primary">{{
                                Carbon\Carbon::parse($timeline->rencana->tanggal)->isoFormat('D MMMM Y') }}</span>
                        </div>
                        <div>
                            <i class="fas fa-bookmark bg-success"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Perencanaan RKA</b> <i
                                        class="fas fa-check-circle text-success"></i></h3>
                                <div class="timeline-body">
                                    Rencana Kerja Audit dibuat pada
                                    {{ date('d F Y', strtotime($timeline->rencana->tanggal)) }}
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
                                    {{ $timeline->kerja_desk_id != null ? 'Kertas Kerja Audit Desk sudah diisi
                                    pada '. date('d F Y', strtotime($kerja_desk->updated_at)) :
                                    'Kertas Kerja Audit Desk belum diisi' }}
                                </div>
                                <div class="timeline-footer ">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        <a href="/rencana/timeline/kerjadesk/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{($timeline->rencana->status == 'Tidak Terlaksana' || $timeline->kerja_desk_id != null) ? 'disabled' : '' }}">Tambah</a>
                                        <a href="/rencana/timeline/kerjadesk/{{ $kerja_desk != null ? $kerja_desk->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{($timeline->desk_id == null && $timeline->kerja_desk_id != null) ? '' : 'disabled' }}">Ubah</a>
                                        <form
                                            action="/rencana/timeline/kerjadesk/{{ $kerja_desk != null ? $kerja_desk->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{ ($timeline->berita_id == null && $timeline->kerja_desk_id != null) ? '' : 'disabled' }}"
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
                                <h3 class="timeline-header"><b>Pengisian Kertas Data Audit Desk</b> <i class="fas"></i>
                                </h3>
                                <div class="timeline-body">
                                    {{ $timeline->desk_id != null ? 'Kertas Data Audit Desk sudah diisi pada
                                    '.date('d F Y', strtotime($desk->updated_at)) :
                                    'Kertas Data Audit Desk belum diisi' }}
                                </div>
                                <div class="timeline-footer ">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        {{-- <a href="/rencana/timeline/desk/create/{{ $timeline->kerja_desk_id }}"
                                            class="btn btn-primary btn-sm {{ ($timeline->desk_id != null ||
                                            $timeline->kerja_desk_id == null) ? 'disabled'
                                            : '' }}">Create</a> --}}
                                        <form action="/rencana/timeline/desk/create/{{ $timeline->kerja_desk_id }}"
                                            method="POST">
                                            @csrf
                                            <input type="submit" class="btn btn-primary btn-sm {{ ($timeline->desk_id != null ||
                                                $timeline->kerja_desk_id == null) ? 'disabled'
                                                : '' }}" value="Buat">
                                        </form>
                                        {{-- <a href="/rencana/timeline/desk/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{ $timeline->desk_id != null ? 'disabled' : '' }}">Tambah</a>
                                        --}}
                                        <a href="/rencana/timeline/desk/{{ $desk != null ? $desk->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{ ($timeline->konfirmasi_desk == 0 && $timeline->desk_id != null) ? '' : 'disabled' }}">Ubah</a>
                                        <form action="/rencana/timeline/desk/{{ $desk != null ? $desk->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{$timeline->konfirmasi_desk == 0 && $timeline->desk_id != null ? '' : 'disabled' }}"
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
                                class="fas fa-check-double {{ $timeline->konfirmasi_desk == 0 ? 'bg-danger' : 'bg-success' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Konfirmasi Data Audit Desk</b> <i class="fas"></i>
                                </h3>
                                @if (Auth::user()->id == $timeline->rencana->auditee_id )
                                <div class="timeline-body">
                                    {{-- <form action="/rencana/timeline/confirm/{{ $timeline->rencana->id }}"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="visit_id" id="visit_id"
                                            value="{{ $visit != null ? $visit->id : '' }}">
                                        <select type="text" name="status" class="form-control" required {{
                                            $timeline->visit_id === null || $timeline->berita_id != null ? 'disabled' :
                                            '' }}>
                                            <option selected hidden value="">--Pilih Aksi--</option>
                                            <option value="Disetujui">Terima</option>
                                            <option value="Tidak Disetujui">Tolak</option>
                                        </select> --}}
                                        <button type="submit" class="btn btn-sm btn-primary mt-2" data-toggle="modal"
                                            data-target="#modal-konfirmasi-desk" {{ ($timeline->konfirmasi_desk != 0 ||
                                            $timeline->desk_id == null) ? 'disabled' : '' }}>Konfirmasi</button>
                                        {{--
                                    </form> --}}
                                </div>
                                @else
                                <div class="timeline-body">
                                    {{$timeline->konfirmasi_desk != null ? 'Data sudah dikonfirmasi pada '.date('d F Y',
                                    strtotime($desk->updated_at)) : 'Data belum
                                    dikonfirmasi'}}
                                </div>
                                @endif
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
                                    {{ $timeline->kerja_visit_id != null ? 'Kertas Kerja Audit Visit sudah diisi pada
                                    '.date('d F Y', strtotime($kerja_visit->updated_at)) :
                                    'Kertas Kerja Audit Visit belum diisi' }}
                                </div>
                                <div class="timeline-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        <a href="/rencana/timeline/kerjavisit/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{ ($timeline->kerja_visit_id != null ||
                                                $timeline->kerja_desk_id == null || $timeline->konfirmasi_desk == null) ? 'disabled'
                                                : '' }}">Tambah</a>
                                        <a href="/rencana/timeline/kerjavisit/{{ $kerja_visit != null ? $kerja_visit->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{ ($timeline->visit_id == null && $timeline->kerja_visit_id != null) ? '' : 'disabled' }}">Ubah</a>
                                        <form
                                            action="/rencana/timeline/kerjavisit/{{ $kerja_visit != null ? $kerja_visit->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data desk ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{ ($timeline->berita_id == null && $timeline->kerja_visit_id != null) ? '' : 'disabled' }}"
                                                value="Hapus">
                                        </form>
                                        @endcanany
                                        <a href="/rencana/timeline/kerjavisit/print/{{ $kerja_visit != null ? $kerja_visit->id : '' }}"
                                            class="btn btn-success btn-sm {{ $timeline->kerja_visit_id != null ? '' : 'disabled' }}">Cetak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i
                                class="fas fa-file-alt {{ $timeline->visit_id != null ? 'bg-success' : 'bg-danger' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Pengisian Kertas Data Audit Visit</b> <i class="fas"></i>
                                </h3>
                                <div class="timeline-body">
                                    {{ $timeline->visit_id != null ? 'Kertas Data Audit Visit sudah diisi '.date('d F
                                    Y', strtotime($visit->updated_at)) :
                                    'Kertas Data Audit Visit belum diisi'
                                    }}
                                </div>
                                <div class="timeline-footer">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @canany(['admin', 'auditor'])
                                        <form action="/rencana/timeline/visit/create/{{ $timeline->kerja_visit_id }}"
                                            method="POST">
                                            @csrf
                                            <input type="submit"
                                                class=" btn btn-primary btn-sm {{ ($timeline->visit_id != null || $timeline->kerja_visit_id == null) ? 'disabled' : '' }}"
                                                value="Buat">
                                        </form>
                                        {{-- <a href="/rencana/timeline/visit/create/{{ $timeline->kerja_visit_id }}"
                                            class=" btn btn-primary btn-sm {{ ($timeline->visit_id != null ||
                                                $timeline->kerja_visit_id == null) ? 'disabled'
                                                : '' }}">Create</a> --}}
                                        {{-- <a href="/rencana/timeline/visit/create/{{ $timeline->rencana->id }}"
                                            class=" btn btn-primary btn-sm {{ $timeline->visit_id != null ? 'disabled' : '' }}">Tambah</a>
                                        --}}
                                        <a href="/rencana/timeline/visit/{{ $visit != null ? $visit->id : '' }}/edit"
                                            class="btn btn-info btn-sm {{($timeline->konfirmasi_visit == 0 && $timeline->visit_id != null) ? '' : 'disabled' }}">Ubah</a>
                                        <form action="/rencana/timeline/visit/{{ $visit != null ? $visit->id : '' }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit"
                                                onclick="return confirm('Anda yakin mau menghapus data visit ini ?')"
                                                class="btn btn-danger rounded-0 btn-sm {{ ($timeline->konfirmasi_visit == 0 && $timeline->visit_id) != null ? '' : 'disabled' }}"
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
                                class="fas fa-check-double {{ $timeline->konfirmasi_visit == 0 ? 'bg-danger' : 'bg-success' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Konfirmasi Data Audit Visit</b> <i class="fas"></i>
                                </h3>
                                @if (Auth::user()->level == "Ketua SPI" || Auth::user()->level == "Auditor"
                                ||Auth::user()->id == $timeline->rencana->auditee_id )
                                <div class="timeline-body">
                                    {{-- <form action="/rencana/timeline/confirm/{{ $timeline->rencana->id }}"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="visit_id" id="visit_id"
                                            value="{{ $visit != null ? $visit->id : '' }}">
                                        <select type="text" name="status" class="form-control" required {{
                                            $timeline->visit_id === null || $timeline->berita_id != null ? 'disabled' :
                                            '' }}>
                                            <option selected hidden value="">--Pilih Aksi--</option>
                                            <option value="Disetujui">Terima</option>
                                            <option value="Tidak Disetujui">Tolak</option>
                                        </select> --}}
                                        <button type="submit" class="btn btn-sm btn-primary mt-2" data-toggle="modal"
                                            data-target="#modal-konfirmasi-visit" {{ ($timeline->konfirmasi_visit != 0
                                            ||
                                            $timeline->visit_id == null) ? 'disabled' : '' }}>Konfirmasi</button>
                                        {{--
                                    </form> --}}

                                </div>
                                @else
                                <div class="timeline-body">
                                    {{$timeline->konfirmasi_visit != null ? 'Data sudah dikonfirmasi pada '.date('d F
                                    Y',
                                    strtotime($visit->updated_at)) : 'Data belum
                                    dikonfirmasi'}}
                                </div>
                                @endif
                            </div>
                        </div>
                        {{-- <div>
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
                        </div> --}}
                        <div>
                            <i
                                class="fas fa-newspaper {{ $timeline->berita_id != null ? 'bg-success' : 'bg-danger' }}"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Berita Acara</b> <i class="fas"></i></h3>
                                <div class="timeline-body">
                                    {{$timeline->berita_id != null ? 'Berita acara dibuat secara otomatis pada '.date('d
                                    F
                                    Y',
                                    strtotime($berita->updated_at)) : 'Berita acara belum ada'}}
                                </div>
                                <div class="timeline-footer">
                                    <a href="/rencana/timeline/berita/{{ $timeline->berita_id != null ? $timeline->berita_id : '' }}"
                                        class="btn btn-success btn-sm {{ $timeline->berita_id != null ? '' : 'disabled' }}">Lihat</a>
                                </div>
                            </div>
                        </div>
                        {{-- DATA DARI BOT TELE --}}
                        @if ($timeline->rencana->status == 'Tidak Terlaksana')
                        <div>
                            <i class="fas fa-clock bg-danger"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><b>Rencana Audit Tidak Terlaksana</b> <i
                                        class="fas fa-times-circle  text-danger"></i></h3>
                                <div class="timeline-body">
                                    Data Audit tidak di isi dampai waktu tenggang
                                </div>
                            </div>
                        </div>
                        @endif
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
@include('partials.modal-konfirmasi-desk')
@include('partials.modal-konfirmasi-visit')
@else
Tidak ada data
@endif
@endsection
