<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">edit consultant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Input gagal.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route('pakar.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="mb-3">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Unggah Foto Profil consultant</label>
                  <input class="form-control" type="file" id="image" name="pakarFoto" required>
                </div>
                <label for="exampleInputEmail1" class="form-label">Nama konsultan</label>
                <input type="text" name="pakarName" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">bidang</label>
                <input type="text" name="pakarBidang" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">harga jasa</label>
                <input type="number" name="pakarHarga" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">deskripsi</label>
                <input type="text" name="pakarDeskripsi" class="form-control" required>
              </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">tutup</button><button class="btn btn-primary" type="submit">Simpan</button></div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Modal -->  
