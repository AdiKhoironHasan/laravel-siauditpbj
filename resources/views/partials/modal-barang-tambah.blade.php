<!-- Modal Tambah -->
<div class="modal fade" id="modal_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/barang" method="POST">
                @csrf
                <input type="hidden" name="unit_id" id="unit_id" value="{{ $unit_id }}">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Barang" required
                            autofocus>
                    </div>
                    <div class="form-group">
                        <label>Nomor Kontrak</label>
                        <input type="text" name="no_kontrak" id="no_kontrak" class="form-control" placeholder="No."
                            required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tgl_kontrak" id="tgl_kontrak" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <input type="text" name="nilai_kontrak" id="nilai_kontrak" class="form-control"
                            placeholder="Rp." required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Anggaran</label>
                        <select type="text" name="tahun_anggaran" id="tahun_anggaran" class="form-control" required>
                            <option value="" selected hidden>--Pilih Tahun Anggaran--</option>
                            <?php
                            $tahunAwal = date('Y') - 5;
                            $tahunAkhir = date('Y') + 10;
                            for ($tahun = $tahunAkhir; $tahun >= $tahunAwal; $tahun--) {
                                echo "<option value='$tahun'>$tahun</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
