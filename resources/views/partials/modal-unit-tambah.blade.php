<div class="modal fade" id="modal_unit_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/unit" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Unit</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Unit" required>
                        <div id="hasilUnitTambah"></div>
                    </div>
                    <div class="form-group">
                        <label>Ketua Unit</label>
                        <select type="text" name="user_id" id="user_id" class="form-control" required>
                            <option hidden selected value="">--Pilih Ketua Unit--</option>
                            @foreach ($ketuaUnits as $ketuaUnit)
                            <option value="{{ $ketuaUnit->id }}">{{ $ketuaUnit->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
