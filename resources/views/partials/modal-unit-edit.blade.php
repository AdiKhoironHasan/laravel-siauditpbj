<div class="modal fade" id="modal_unit_edit{{ $data->id }}" role="dialog">
    @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#exampleModal').modal('show');
            });
        </script>
    @endif
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/unit/{{ $data->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data {{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                    <div class="form-group">
                        <label>Nama Unit</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}">
                        <div id="hasilCekUnit"></div>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ketua Unit</label>
                        <select type="text" name="user_id" id="user_id" class="form-control">
                            <option value="{{ $data->user->id }}" hidden selected>{{ $data->user->name }}</option>
                            @foreach ($ketuaUnits as $ketuaUnit)
                                <option value="{{ $ketuaUnit->id }}">{{ $ketuaUnit->name }}</option>
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
