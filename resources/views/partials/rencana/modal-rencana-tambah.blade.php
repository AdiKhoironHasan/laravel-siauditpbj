<div class="modal fade" id="modal_rencana_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data {{ $title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/rencana" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label>Paket Barang</label>
                        <select type="text" id="barang_id" name="barang_id" class="form-control" required>
                            @if (count($barangs))
                            <option hidden selected value="">--Pilih Paket Barang--</option>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                            @endforeach
                            @else
                                <option selected value="">--Tidak Ada Data Barang--</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 1</label>
                        <select type="text" name="auditor1_id" id="auditor1_id" class="form-control" required>
                            <option hidden selected value="">--Pilih Auditor 1--</option>
                            @foreach ($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 2</label>
                        <select type="text" name="auditor2_id" id="auditor2_id" class="form-control" required>\
                            <option hidden selected value="">--Pilih Auditor 2--</option>
                            @foreach ($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 3</label>
                        <select type="text" name="auditor3_id" id="auditor3_id" class="form-control" required>
                            <option hidden selected value="">--Pilih Auditor 3--</option>
                            @foreach ($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <select type="text" name="tahun" id="tahun" class="form-control" required>
                            <option hidden selected value="">--Pilih Tahun--</option>
                            <?php
                            $tahunAwal = date('Y') - 5;
                            $tahunAkhir = date('Y') + 10;
                            for ($tahun = $tahunAkhir; $tahun >= $tahunAwal; $tahun--) {
                                echo "<option value='$tahun'>$tahun</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
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
