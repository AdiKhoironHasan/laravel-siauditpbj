<div class="modal fade" id="modal_rencana_edit{{ $rencana->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data {{ $title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/rencana/{{ $rencana->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Paket Barang</label>
                        <select type="text" id="barang_id" name="barang_id" class="form-control" required>
                            <option hidden selected value="{{ $rencana->barang_id }}">{{ $rencana->barang->name }}
                            </option>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 1</label>
                        <select type="text" name="auditor1_id" id="auditor1_id" class="form-control" required>
                            <option hidden selected value="{{ $rencana->auditor1_id }}">
                                {{ $rencana->auditor1->name }}</option>
                            @foreach ($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 2</label>
                        <select type="text" name="auditor2_id" id="auditor2_id" class="form-control" required>\
                            <option hidden selected value="{{ $rencana->auditor2_id }}">
                                {{ $rencana->auditor2->name }}</option>
                            @foreach ($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 3</label>
                        <select type="text" name="auditor3_id" id="auditor3_id" class="form-control" required>
                            <option hidden selected value="{{ $rencana->auditor3_id }}">
                                {{ $rencana->auditor3->name }}</option>
                            @foreach ($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <select type="text" name="tahun" id="tahun" class="form-control" required>
                            <option hidden selected value="{{ $rencana->tahun }}">{{ $rencana->tahun }}</option>
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
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $rencana->tanggal }}" required>
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
