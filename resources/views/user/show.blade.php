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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle h-25 w-25" src="../AdminLTE/dist/img/foto/#"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">NAMA</h3>

                        <p class="text-muted text-center">JABATAN</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                    data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline"
                                    data-toggle="tab">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings"
                                    data-toggle="tab">Settings</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">

                                POST

                            </div>
                            <div class="tab-pane" id="timeline">
                                TIMELINE
                            </div>

                            <div class="tab-pane" id="settings">
                                <div class="container-fluid h-100">

                                    <div class="card card-primary">
                                        <div class="card-header">
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
                                                        <input type="text" class="form-control" name="nama" id="nama"
                                                            value="{{ $user->nama }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="username"
                                                            id="username" value="{{ $user->username }}" required
                                                            maxlength="10" minlength="3">
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
                                                            required maxlength="13" minlength="3"
                                                            value="{{ $user->nohp }}">
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

                                    <div class="card card-primary">
                                        <div class="card-header">
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
                                            <form class="form-horizontal"
                                                action="/profile/passwordUpdate/{{ $user->id }}/" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Password Lama</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="passwordLama"
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
                                                        <input type="submit" class="btn btn-danger"
                                                            value="Simpan Perubahan">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card card-primary">
                                        <div class="card-header">
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
                                            <form class="form-horizontal" action="" method="" enctype="multipart/form-data">
                                                <div class="text-center mb-3">
                                                    <img src="../AdminLTE/dist/img/foto/#"
                                                        class="h-25 w-25  border border-primary">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Foto
                                                        Profil</label>
                                                    <div class="col-sm-10 input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="foto"
                                                                id="foto" accept="image/*" required>
                                                            <label class="custom-file-label" for="customFile">Pilih
                                                                File</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <input type="submit" name="edit_foto" class="input-group-text"
                                                                value="Upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card card-primary">
                                        <div class="card-header">
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
                                            <form class="form-horizontal" action="" method=""
                                                enctype="multipart/form-data">
                                                <div class="text-center mb-3">
                                                    <img src="../AdminLTE/dist/img/ttd/#"
                                                        class="h-25 w-25  border border-primary">
                                                </div>
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
                                                            <input type="submit" name="edit_ttd" class="input-group-text"
                                                                value="Upload">
                                                        </div>
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
