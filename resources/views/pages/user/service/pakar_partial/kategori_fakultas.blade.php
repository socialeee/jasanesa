@extends('pages.user.layout.homepage')

@section('content')
    @include('pages.user.layout.partial_homepage.header')

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Layanan jasa pakar kami</h2>
                <p>Layanan yang mendukung anda sesuai fakultas yang tersedia</p>
            </div>

            <div class="row gy-4">
                @foreach ($bidangs as $item)
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-users-line"></i>
                            </div>
                            <h3>{{ $item->name }}</h3>
                            <p>Layanan khusus bagi anda untuk kebutuhan legal.</p>
                            <a href="{{ route('consultant.index', ['bidang_id' => $item->id]) }}"
                                class="readmore stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach
            </div>
    </section>



    @include('pages.user.layout.partial_homepage.footer')
@endsection
