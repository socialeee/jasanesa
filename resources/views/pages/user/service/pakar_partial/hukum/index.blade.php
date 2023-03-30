@extends('pages.user.layout.homepage')

@section('title', 'EDUNESA - Our Expertise')
@section('styling')
    <style>
        .member-desc {
            max-height: 6em;
            /* maksimal tinggi deskripsi dalam 6 baris */
            overflow: hidden;
            /* memastikan deskripsi tidak keluar dari kotaknya */
        }
    </style>
@endsection

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
                        <div class="member-img">
                            @foreach ($chunk as $pakar)
                                <img src="{{ $pakar->showImage() }}" width="200" height="200">
                            @endforeach
                        </div>

                        @foreach ($chunk as $pakar)
                            <div class="member-info text-center">
                                <h4>{{ $pakar->nama_pakar }}</h4>
                                {{-- @foreach ($pakar->bidangs as $bidang)
                                    <span>{{ $bidang->name }}</span>
                                @endforeach --}}
                                <p class="member-desc">{{ $pakar->deskripsi }}</p>
                                {{-- <h4>{{ number_format($pakar->harga_jasa, 2, ',', '.') }}</h4> --}}
                                <hr>
                            </div>
                            <div class="w-100"></div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-modal"
                                data-href="{{ route('consultant.show', $pakar->id) }}" data-container=".app-modal">
                                lihat detail
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- End Team Member -->
        <div class="modal fade app-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true"></div>
    </section><!-- End Our Team Section -->

    <div class="container">
        <div class="d-flex justify-content-center">
            {{-- {{ $pakars->links() }} --}}
        </div>
    </div>

    <script>
        $('.btn-modal').on('click', function(e) {
            var t = $(this).data('container')
            $.ajax({
                url: $(this).data('href'),
                dataType: 'html',
                success: function(e) {
                    $(t).html(e).modal('show')
                }
            })
        })
    </script>
    <script>
        $('div.alert').delay(5000).fadeOut(350);
    </script>

    @include('pages.user.layout.partial_homepage.footer')

@endsection
