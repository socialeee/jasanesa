@extends('pages.user.layout.homepage')

@section('title', 'EDUNESA - Expertise')

@section('content')

    @include('pages.user.layout.partial_homepage.header')

    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                @foreach ($consultant as $pakar)
                    <div class="col-lg-6" style="background-image:url()" data-aos="zoom-in" data-aos-delay="100"> <img
                            src="{{ $pakar->showImage() }}" width="100%"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>{{ $pakar->nama_pakar }}</h3>
                        <p>{{ $pakar->deskripsi }}</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4>Pengalaman Profesional</h4>
                                <p>{{ $pakar->pengalaman }}.</p>
                            </div>
                        </div><!-- End Icon Box -->
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-bar-chart-steps flex-shrink-0"></i>
                            <div>
                                <h4>Kemitraan</h4>
                                <p>{{ $pakar->pengalaman_luar }}.</p>
                            </div>
                        </div><!-- End Icon Box -->
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-file-earmark-check flex-shrink-0"></i>
                            <div>
                                <h4>sertifikasi</h4>
                                <p>{{ $pakar->sertifikat }}.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4>Hari Kerja</h4>
                                <p>{{ $pakar->hari_pakar }}.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4>Lokasi</h4>
                                <p>{{ $pakar->lokasi }}.</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Alt Services Section -->

    @include('pages.user.layout.partial_homepage.footer')
@endsection
