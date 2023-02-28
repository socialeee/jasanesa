@extends('pages.user.layout.homepage')

@section('title', 'Pakar Hukum')

@section('content')

    @include('pages.user.layout.partial_homepage.header')

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Pakar Kami di UNESA</h2>
                <p>Telah tersertifikasi di bidangnya masing-masing</p>
            </div>

            <div class="row gy-5">
                @foreach ($pakars->chunk(1) as $chunk)
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        {{-- @foreach ($pakars as $pakar) --}}
                        <div class="member-img">
                            @foreach ($chunk as $pakar)
                                <img src="{{ $pakar->showImage('alt', ['width' => 70, 'height' => 70]) }}"
                                    class="img-fluid">
                            @endforeach
                        </div>
                        @foreach ($chunk as $pakar)
                            <div class="member-info text-center">
                                <h4>{{ $pakar->nama_pakar }}</h4>
                                <span>{{ $pakar->bidang }}</span>
                                <p>{{ $pakar->deskripsi }}</p>
                                <h4>{{ number_format($pakar->harga_jasa, 2, ',', '.') }}</h4>
                                <br>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter" data-href="{{ route('payment') }}"
                                    data-container=".my-modal">
                                    Pesan
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div><!-- End Team Member -->


        </div>
        @foreach ($pakars as $pakar)
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Book Consultant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="GET|HEAD" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="member-img col-lg-4 col-md-6 member rounded mx-auto d-block">
                                    @foreach ($pakars as $pakar)
                                        <img src="{{ $pakar->showImage() }}" class="img-fluid" alt="">
                                    @endforeach
                                </div>
                                <div class="member-info text-center">
                                    @foreach ($pakars as $pakar)
                                        <h4>{{ $pakar->nama_pakar }}</h4>
                                        <span>{{ $pakar->bidang }}</span>
                                        <p>{{ $pakar->deskripsi }}</p>
                                        <h4>Rp. {{ number_format($pakar->harga_jasa, 2, ',', '.') }}</h4>
                                    @endforeach
                                </div>
                                <div class="modal-footer"><button class="btn btn-danger" type="button"
                                        data-dismiss="modal">Batalkan</button><button class="btn btn-primary" type="submit"
                                        data-href="{{ route('payment') }}">Lanjut Pembayaran</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade my-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true"></div>
            {{-- {{ $pakars->links() }} --}}
        @endforeach
    </section><!-- End Our Team Section -->
    {{ $pakars->links() }}

    @include('pages.user.layout.partial_homepage.footer')

@endsection
