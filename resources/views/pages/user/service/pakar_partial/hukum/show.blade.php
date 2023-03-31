<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Book Consultant</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="member-info text-center word-wrap">
                    <h4>{{ $consultant->nama_pakar }}</h4>
                    <h5>Pengalaman</h5>
                    <p>{{ $consultant->pengalaman }}</p>
                    <h5>Rate Card</h5>
                    <h5>Rp. {{ number_format($consultant->harga_jasa, 2, ',', '.') }}</h5>
                </div>
                <div class="modal-footer"><button class="btn btn-danger" type="button"
                        data-bs-dismiss="modal">Batalkan</button>
                    <a type="button" class="btn btn-info" href="{{ route('cv', ['id' => $consultant->id]) }}">Lihat
                        CV</a>
                    <a type="button" class="btn btn-primary"
                        href="{{ route('payment', ['id' => $consultant->id]) }}">Pemesanan</a>
                </div>
            </form>
        </div>
    </div>
</div>
