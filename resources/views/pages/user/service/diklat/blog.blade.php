@extends('pages.user.layout.homepage')

@section('title', 'EDUNESA - Expertise')

@section('content')

    @include('pages.user.layout.partial_homepage.header')

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($diklat as $pelatihan)
                <div class="row g-5">
                    <div class="col-lg-8">
                        <article class="blog-details">
                            <div class="post-img">
                                <img src="/assets/img/blog/bg_image_1.jpg" alt="" class="img-fluid">
                            </div>
                            <h2 class="title">{{ $pelatihan->judul }}</h2>
                            <hr>
                            <div class="content">
                                <p>
                                    {!! nl2br($pelatihan->pembahasan_diklat) !!}
                                </p>
                            </div>

                        </article><!-- End blog post -->
                    </div>
                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Informasi</h3>
                                <ul class="mt-3">
                                    <li style="display: inline-block; width: 100px; padding-right: 10px;">Tanggal </li>
                                    <li style="display: inline-block;"><span>: {{ $pelatihan->date_start }}</span></li>
                                    <li style="display: inline-block; width: 100px; padding-right: 10px;">Waktu </li>
                                    <li style="display: inline-block;"><span>: {{ $pelatihan->time_start }}</span></li><br>
                                    <li style="display: inline-block; width: 100px; padding-right: 10px;">biaya </li>
                                    <li style="display: inline-block;"><span>:
                                            {{ number_format($pelatihan->harga, 2, ',', '.') }}</span></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>
            @endforeach
        </div>
    </section>
