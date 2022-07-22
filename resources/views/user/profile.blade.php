@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <div class="card card-orange card-outline">
                <div class="card-body box-profile">
                    <img class="card-img-top" {{--
                        src="https://img5.goodfon.com/wallpaper/nbig/c/5c/by-oretsuu-liod-i-plamia-liod-ogon-paren-boku-no-hero-academ.jpg"
                        --}} src="/uploads/{{ $user->foto }}" alt="Card image cap"
                        style="height: 270px; object-fit:cover">
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <h3 class="profile-username text-center mb-0">{{ $user->name }}</h3>
                        </li>
                        <h5 class="text-muted text-center">{{ $user->level }}</h5>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#Biodata" data-toggle="tab">Biodata</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#Profil" data-toggle="tab">Profil</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#Keamanan" data-toggle="tab">Keamanan</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="Biodata">
                            <div class="card card-orange">
                                    <div class="card-header" style="color: white; border-color:transparent">
                                    <h3 class="card-title">Edit Profil</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="/profile/update/{{ $user->id }}"
                                        method="POST">
                                        @method('PUT')
                                        @csrf
                                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama
                                                Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    value="{{ $user->name }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="username" id="username"
                                                    value="{{ $user->username }}" required maxlength="10" minlength="3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">NPAK</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="npak" id="npak"
                                                    placeholder="{{ $user->npak ? $user->npak : '---- Data Belum Diisi ---' }}"
                                                    value="{{ $user->npak }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No.
                                                Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nohp" id="nohp"
                                                    placeholder="{{ $user->nohp ? $user->nohp : '---- Data Belum Diisi ---' }}"
                                                    required maxlength="13" minlength="3" value="{{ $user->nohp }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Simpan
                                                    Perubahan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="Profil">
                            <div class="card card-orange">
                                    <div class="card-header" style="color: white; border-color:transparent">
                                    <h3 class="card-title">Edit Foto Profil</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <img src="/uploads/{{ $user->foto }}" class="h-25 w-25  border border-primary">
                                    </div>
                                    <form class="form-horizontal" action="/profile/photoUpdate/{{ $user->id }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Foto
                                                Profil</label>
                                            <div class="col-sm-10 input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto" id="foto"
                                                        accept="image/*" required>
                                                    <label class="custom-file-label" for="customFile">Pilih
                                                        File</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <input type="submit" class="input-group-text" value="Upload">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card card-orange">
                                    <div class="card-header" style="color: white; border-color:transparent">
                                    <h3 class="card-title">Edit Tanda Tangan</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <img src="/uploads/{{ $user->ttd }}" class="h-25 w-25  border border-primary">
                                    </div>
                                    <form class="form-horizontal" action="/profile/ttdUpdate/{{ $user->id }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanda
                                                Tangan</label>
                                            <div class="col-sm-10 input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="ttd"
                                                        accept="image/*" required>
                                                    <label class="custom-file-label" for="customFile">Pilih
                                                        File</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <input type="submit" class="input-group-text" value="Upload">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane" id="Keamanan">
                            <div class="card card-orange">
                                    <div class="card-header" style="color: white; border-color:transparent">
                                    <h3 class="card-title">Edit Password</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="/profile/passwordUpdate/{{ $user->id }}/"
                                        method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password Lama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="passwordLama"
                                                    name="passwordLama" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password Baru</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password1"
                                                    name="password1" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password Lagi</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password2"
                                                    name="password2" placeholder="Password Lagi" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <input type="submit" class="btn btn-danger" value="Simpan Perubahan">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
