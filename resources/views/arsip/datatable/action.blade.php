<div class="btn-group" role="group">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
                <p>Yakin Menghapus Data Ini</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('arsip.destroy', $model->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger delete-notification">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="mx-1">
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default"><i class="bi bi-trash"></i> Hapus</button>
    </div>
    <div class="mx-1">
        <a href="{{ route('arsip.download', $model->id) }}" class="btn btn-warning btn-sm">
                <i class="bi bi-download"></i> Unduh
        </a>
    </div>
    <div class="mx-1">
        <a href="{{ route('arsip.show', $model->id) }}" class="btn btn-primary btn-sm">
            <i class="bi bi-search"></i> Lihat
        </a>
    </div>
</div>

