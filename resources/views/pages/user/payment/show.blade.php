<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Book Consultant</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Anda akan melakukan pembayaran untuk biaya konsultasi dengan {{ $consultant->nama_pakar }}</p>
            <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="member-info word-wrap">
                    @if (isset($user))
                        <p>Pembayaran Melalui :</p>
                        <img src="/assets/img/btn_logo.png" width="30%" alt="">
                        <hr>
                        <h5>Informasi pemesanan</h5>
                        <ul class="mt-3">
                            <li style="display: inline-block;">Nama Pemesan </li>
                            <li style="display: inline-block;"><span>: {{ $user->name }}</span></li>
                            <li style="display: inline-block; width: 118px; padding-right: 10px;">No HP </li>
                            <li style="display: inline-block;"><span>: {{ $user->nohp }}</span></li><br>
                        </ul>
                        <div class="mb-3">
                            <label for="total_pembayaran" class="form-label">Total Pembayaran</label>
                            <input type="text" class="form-control" id="total_pembayaran" name="total_pembayaran"
                                value="{{ number_format($consultant->harga_jasa, 2, ',', '.') }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Unggah foto bukti pembayaran</label>
                            <input class="form-control" type="file" id="image" name="bukti_pembayaran" required>
                        </div>
                    @endif
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="consultant_id" value="{{ $consultant->id }}">
                </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button"
                        data-dismiss="modal">tutup</button><button class="btn btn-primary"
                        type="submit">Simpan</button></div>
            </form>
        </div>
    </div>
</div>
