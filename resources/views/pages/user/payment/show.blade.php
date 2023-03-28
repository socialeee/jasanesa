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
                <div class="member-info text-center word-wrap">
                    <h4>{{ $consultant->nama_pakar }}</h4>
                    <h5>Pengalaman</h5>
                    <p>{{ $consultant->pengalaman }}</p>
                </div>
            </form>
        </div>
    </div>
</div>
