<div class="modal fade" id="modal_rencana_info{{ $rencana->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Info Data {{ $title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" id="status" class="form-control" readonly
                            value="{{ $rencana->status }}">
                    </div>
                    <label>Nomor Surat</label>
                    <input type=" text" name="nomor_surat" id="nomor_surat" class="form-control" readonly
                        value="{{ $rencana->nomor_surat }}" placeholder="Nomor Surat" minlength="3">
                    <div id="hasilCekEdit"></div>
                </div>
                <div class="form-group">
                    <label>Ketua Auditor</label>
                    <input type="text" name="auditor1_id" id="auditor1_id" class="form-control" readonly
                        value="{{ $rencana->auditor1->name }}">

                </div>
                <div class="form-group">
                    <label>Anggota 1</label>
                    <input type="text" name="auditor2_id" id="auditor2_id" class="form-control" readonly
                        value="{{ $rencana->auditor2->name }}">
                </div>
                <div class="form-group">
                    <label>Anggota 2</label>
                    <input type="text" name="auditor3_id" id="auditor3_id" class="form-control" readonly
                        value="{{ $rencana->auditor3->name }}">

                </div>
                <div class="form-group">
                    <label>Auditee</label>
                    <input type="text" name="auditee_id" id="auditee_id" class="form-control" readonly
                        value="{{ $rencana->auditee->name }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Monitoring Awal</label>
                    <input type="date" name="monitoring_awal" id="monitoring_awal" class="form-control"
                        value="{{ $rencana->monitoring_awal }}" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Monitoring Akhir</label>
                    <input type="date" name="monitoring_akhir" id="monitoring_akhir" class="form-control"
                        value="{{ $rencana->monitoring_akhir }}" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Audit Desk</label>
                    <input type="date" name="tanggal_desk" id="tanggal_desk" class="form-control"
                        value="{{ $rencana->tanggal_desk }}" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Audit Visit</label>
                    <input type="date" name="tanggal_visit" id="tanggal_visit" class="form-control"
                        value="{{ $rencana->tanggal_visit }}" readonly>
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" name="tahun" id="tahun" class="form-control" readonly
                        value="{{ $rencana->tahun }}">
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
