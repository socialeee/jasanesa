@extends('pages.user.layout.homepage')

@section('content')
    @include('pages.user.layout.partial_homepage.header')
@section('title', 'kediklatan')




<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Layanan Diklat</h2>
            <p>Layanan yang bisa anda gunakan untuk menunjang karir anda</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 posts-list">
                @foreach ($diklat as $item)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/bg_image_1.jpg" class="img-fluid" alt="">
                                {{-- <span class="post-date">March 19</span> --}}
                            </div>
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">{{ $item->judul }}</h3>
                                <div class="meta d-flex align-items-center">
                                </div>
                                <p>{{ $item->informasi_diklat }}</p>
                                <hr>
                                <a href="{{ route('blog', ['id' => $item->id]) }}"
                                    class="readmore stretched-link"><span>Lihat</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End post list item -->
                @endforeach
            </div>
        </div>
</section>
@include('pages.user.layout.partial_homepage.footer')

@endsection
