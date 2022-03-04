<div class="modal fade" id="modal_unit_edit{{ $data->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="data_unit.php" method="post">
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
                        <input type="text" name="nama_unit" id="cekNamaUnit" class="form-control" value="{{ $data->nama }}">
                        <div id="hasilCekUnit"></div>
                    </div>
                    <div class="form-group">
                        <label>Ketua Unit</label>
                        <select type="text" name="ketua_unit" class="form-control">
                            <option value="" hidden selected>terpilih</option>
                            <option value="">options</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" name="tambah" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" name="edit" id="editUnit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>