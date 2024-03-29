<div class="modal fade" id="modal_user_info{{ $user->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle h-25 w-25" src="/uploads/{{ $user->foto }}"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $user->name }}</h3>

                    <p class="text-muted text-center">{{ $user->level }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Jabatan</b> <a class="float-right">{{ $user->jabatan }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Username</b> <a class="float-right">{{ $user->username }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>NPAK</b> <a class="float-right">{{ $user->npak }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nomor HP</b> <a class="float-right">{{ $user->nohp }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <button type="submit" name="tambah" class="btn btn-primary">Save changes</button> -->
                <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
