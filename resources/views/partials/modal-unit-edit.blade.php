<div class="modal fade" id="modal_unit_edit{{ $data->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/unit/{{ $data->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Unit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="form-group">
                        <label>Nama Unit</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}">
                        <div id="hasilCekUnit"></div>
                    </div>
                    <div class="form-group">
                        <label>Ketua Unit</label>
                        <select type="text" name="user_id" id="user_id" class="form-control">
                            <option value="{{ $data->user->id }}" hidden selected>{{ $data->user->nama }}</option>
                            @foreach ($ketuaUnits as $ketuaUnit)
                            <option value="{{ $ketuaUnit->id }}">{{ $ketuaUnit->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" name="tambah" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
