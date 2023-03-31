@extends('pages.user.layout.homepage')

@section('content')
    @include('pages.user.layout.partial_homepage.header')
@section('title', 'daftar bidang ilmu')

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
                            @if ($item->name === 'ilmu ekonomi')
                                <i class="fas fa-hand-holding-usd"></i>
                            @elseif ($item->name === 'ilmu agama & filsafat')
                                <i class="fas fa-place-of-worship"></i>
                            @elseif ($item->name === 'ilmu pendidikan')
                                <i class="fas fa-user-graduate"></i>
                            @elseif ($item->name === 'seni, desain & media')
                                <i class="fas fa-theater-masks"></i>
                            @elseif ($item->name === 'ilmu kesehatan')
                                <i class="fas fa-medkit"></i>
                            @elseif ($item->name === 'ilmu sosial humaniora')
                                <i class="fas fa-user-friends"></i>
                            @elseif ($item->name === 'ilmu olahraga')
                                <i class="fas fa-futbol"></i>
                            @elseif ($item->name === 'ilmu psikologi')
                                <i class="fas fa-user-tie"></i>
                            @elseif ($item->name === 'ilmu hukum')
                                <i class="fas fa-gavel"></i>
                            @elseif ($item->name === 'bimbingan & konseling')
                                <i class="fab fa-accessible-icon"></i>
                            @elseif ($item->name === 'ilmu teknik')
                                <i class="fas fa-tools"></i>
                            @elseif ($item->name === 'ilmu bahasa')
                                <i class="fas fa-language"></i>
                                {{-- // ... dan seterusnya hingga bidang ke-10 --}}
                            @else
                                <i class="fa-solid fa-users-line"></i>
                            @endif
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
