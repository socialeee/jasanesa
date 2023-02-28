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

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-toggle="modal" data-target="#myModal"
                    href="#">
                    {{-- <a data-toggle="modal" data-target="#myModal" href="#" ></a> <!-- not solved --> --}}
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-users-line"></i>
                        </div>
                        <h3>Bidang Ilmu Praktisi Hukum</h3>
                        <p>Layanan khusus bagi anda untuk kebutuhan legal.</p>
                        {{-- <a href="{{route('kategori')}}" class="readmore stretched-link"></a> --}}
                    </div>
                </div><!-- End Service Item -->

                {{-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
            <div class="icon">
                <i class="fa-solid fa-users-line"></i>
            </div>
            <h3>Fakultas Ekonomi & Bisnis</h3>
            <p>Layanan khusus bagi anda untuk kebutuhan legal.</p>
            <a href="{{route('kategori')}}" class="readmore stretched-link"></a>
            </div>
        </div><!-- End Service Item --> --}}
            </div>
    </section>

    <!-- modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Modal body..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @include('pages.user.layout.partial_homepage.footer')
@endsection
