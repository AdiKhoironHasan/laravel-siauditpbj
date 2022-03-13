<div class="modal fade" id="modal_barang_edit{{ $barang->id }}">
    <div class="modal-dialog">
        <div class="modal-header">
            <h4 class="modal-title">Edit Data {{ $title }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-content">
            <form action="/barang/{{ $barang->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="{{ $barang->id }}">
                    <input type="hidden" name="unit_id" id="unit_id" value="{{ $barang->unit_id }}">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Barang"
                            value="{{ $barang->nama }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Nomor Kontrak</label>
                        <input type="text" name="no_kontrak" id="no_kontrak" class="form-control" placeholder="No."
                            value="{{ $barang->no_kontrak }}" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tgl_kontrak" id="tgl_kontrak"
                            value="{{ $barang->tgl_kontrak }}" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <!-- id="rupiah" -->
                        <input type="text" name="nilai_kontrak" id="nilai_kontrak" class="form-control"
                            placeholder="Rp." value="{{ $barang->nilai_kontrak }}" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Anggaran</label>
                        <select type="text" name="tahun_anggaran" id="tahun_anggaran" class="form-control" required>
                            <option hidden selected value="{{ $barang->tahun_anggaran }}">
                                {{ $barang->tahun_anggaran }}</option>
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
