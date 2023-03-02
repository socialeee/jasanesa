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
                        <div class="member-img">
                            @foreach ($chunk as $pakar)
                                <img src="{{ $pakar->showImage() }}" width="200" height="200">
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
                        @endforeach
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-modal"
                                data-href="{{ route('consultant.show', $pakar->id) }}" data-container=".app-modal">
                                Pesan
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- End Team Member -->
        <div class="modal fade app-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true"></div>
        {{-- {{ $pakars->links() }} --}}
        {{-- @endforeach --}}
    </section><!-- End Our Team Section -->
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
