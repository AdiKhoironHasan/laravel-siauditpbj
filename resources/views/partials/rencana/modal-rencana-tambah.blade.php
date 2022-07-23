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
                        <label>Nomor Surat</label>
                        <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" required
                            minlength="3" maxlength="10" placeholder="Nomor Surat">
                        <div id="hasilCekEdit"></div>
                    </div>
                    <div class="form-group">
                        <label>Ketua Auditor</label>
                        <select type="text" name="auditor1_id" id="auditor1_id" class="form-control" required>
                            <option hidden selected value="">--Pilih Auditor 1--</option>
                            @foreach ($auditors as $auditor)
                            <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Anggota 1</label>
                        <select type="text" name="auditor2_id" id="auditor2_id" class="form-control" required>\
                            <option hidden selected value="">--Pilih Auditor 2--</option>
                            @foreach ($auditors as $auditor)
                            <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                            @endforeach
                        </select>
                        <div class="form-group">
                            <label>Anggota 2</label>
                            <select type="text" name="auditor3_id" id="auditor3_id" class="form-control" required>
                                <option hidden selected value="">--Pilih Auditor 3--</option>
                                @foreach ($auditors as $auditor)
                                <option value="{{ $auditor->id }}">{{ $auditor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Auditee</label>
                        <select type="text" name="auditee_id" id="auditee_id" class="form-control" required>\
                            <option hidden selected value="">--Pilih Auditee--</option>
                            @foreach ($auditees as $auditee)
                            <option value="{{ $auditee->id }}">{{ $auditee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Monitoring Awal</label>
                        <input type="date" name="monitoring_awal" id="monitoring_awal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Monitoring Akhir</label>
                        <input type="date" name="monitoring_akhir" id="monitoring_akhir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Audit Desk</label>
                        <input type="date" name="tanggal_desk" id="tanggal_desk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Audit Visit</label>
                        <input type="date" name="tanggal_visit" id="tanggal_visit" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Anggaran</label>
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
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
