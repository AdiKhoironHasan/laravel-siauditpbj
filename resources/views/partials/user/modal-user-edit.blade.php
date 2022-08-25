<div class="modal fade" id="modal_user_edit{{ $user->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onClick="window.location.reload();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/user/{{ $user->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="usernameEdit" class="form-control"
                            value="{{ $user->username }}" required minlength="3" maxlength="10">
                        <div id="hasilCekEdit"></div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="********">
                        {{-- value="{{ Str::substr($user->password, 0, 8) }}"> --}}
                    </div>
                    <div class="form-group">
                        <label>Status User</label>
                        <select type="text" name="status" class="form-control">
                            <option hidden selected>{{ $user->status }}</option>
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                            {{-- <option>Mendaftar</option> --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select type="text" name="level" class="form-control">
                            <option hidden selected>{{ $user->level }}</option>
                            <option value="Auditor">Auditor</option>
                            <option value="Auditee">Auditee</option>
                            <option value="Direktur">Direktur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $user->jabatan }}"
                            required minlength="3" maxlength="10">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="edit" class="btn btn-secondary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
