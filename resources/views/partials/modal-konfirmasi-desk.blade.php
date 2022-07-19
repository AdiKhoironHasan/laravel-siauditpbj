<div class="modal fade" id="modal-konfirmasi-desk">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/rencana/timeline/desk/confirm/{{ $timeline->rencana->id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="desk_id" id="desk_id" value="{{ $timeline->desk_id }}">
                    {{-- <div class="form-group"> --}}
                        {{-- <label>Status Konfirmasi</label>
                        <select type="text" name="status" class="form-control" required>
                            <option selected hidden value="">--Pilih Aksi--</option>
                            <option value="Disetujui">Terima</option>
                            <option value="Tidak Disetujui">Tolak</option>
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label>Tanggapan</label>
                        <textarea class="form-control" name="tanggapan_auditee" id="tanggapan_auditee" rows="3"
                            placeholder="Ketik disini ..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rencana Perbaikan</label>
                        <textarea class="form-control" name="rencana_perbaikan" id="rencana_perbaikan" rows="3"
                            placeholder="Ketik disini ..." required></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
