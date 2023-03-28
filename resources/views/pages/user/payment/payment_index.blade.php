@extends('pages.user.layout.homepage')

@section('title', 'payment')

@section('content')
    @if (Session::has('success'))
        <p>{{ Session::get('success') }}</p>
    @else
        <p>{{ Session::get('error') }}</p>
    @endif

    @include('pages.user.layout.partial_homepage.header')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            {{-- @foreach ($consultant as $pelatihan) --}}
            <h3>Order Expertise</h3>
            <div class="row g-5">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="content">
                            <p>
                                Anda akan melakukan pembayaran untuk konsultasi dengan
                                {{ $consultant->nama_pakar }}
                            </p>
                        </div>
                        <br>
                        <div class="post-img">
                            <div class="d-flex justify-content-center">
                                <img src="{{ $consultant->showImage() }}" alt="" class="img-fluid" width="40%">
                            </div>
                        </div>
                        <h2 class="title">{{ $consultant->deskripsi }}</h2>

                    </article><!-- End blog post -->
                </div>



                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Order Recap</h3>
                            {{-- <div class="col-md-5 col-lg-4 col-xl-4 offset-lg-1 offset-xl-2"> --}}
                            {{-- <div class="p-3" style="background-color: #eee;"> --}}
                            <ul class="mt-3">
                                <li style="display: inline-block; width: 100px; padding-right: 10px;">biaya
                                </li>
                                <li style="display: inline-block;"><span class="font-weight-bold">:
                                        {{ number_format($consultant->harga_jasa, 2, ',', '.') }}</span></li>
                            </ul>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-success btn-modal btn-block"
                                    data-href="{{ route('payment.show', $consultant) }}" data-container=".app-modal">
                                    Buat Pesanan
                                </button>
                                {{-- <button type="button" class="btn btn-success btn-lg btn-block btn-modal"
                                    data-href="{{ route('payment.show', $consultant) }}">Proceed to payment</button> --}}
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:history.back()">Cancel and return to the website</a>
                            </div>

                        </div><!-- End sidebar categories-->

                    </div><!-- End Blog Sidebar -->
                </div>

                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="content">
                            <p>
                                Informasi akun pemesanan
                            </p>
                            <br>
                            @if (isset($user))
                                <p>Nama User: {{ $user->name }}</p>
                                <p>Email User: {{ $user->email }}</p>
                            @endif
                        </div>
                        {{-- <h2 class="title">{{ $pelatihan->judul }}</h2> --}}
                    </article><!-- End blog post -->
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
        <div class="modal fade app-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true"></div>
    </section>
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


    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="calendar">

                </div>
            </div>
        </div>
    </div> --}}
    {{-- <script>
        var list = []
        async function getEvents() {
            await $.ajax({
                url: 'http://127.0.0.1:8000/payment/events',
                type: 'GET',
                success: (data) => {
                    if (data) {
                        data.forEach(event => {
                            list.push({
                                // id: event.id,
                                title: event.title,
                                start: event.start_date,
                                // end: event.start_time,
                            })
                        });
                    }
                }
            })
        }

        console.log('list', list);

        document.addEventListener('DOMContentLoaded', async function() {
            await getEvents()
            var calendarEl = document.getElementById('calendar');
            var calendar = await new FullCalendar.Calendar(calendarEl, {
                aspectRatio: 2,
                // initialView: 'timeGridWeek',
                nowIndicator: true,
                headerToolbar: {
                    left: 'prev,next',
                    // center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                timeZone: 'UTC',
                // navLinks: true,
                dayMaxEvents: true,
                events: list,
                // events: [{
                //     title: 'All Day Event',
                //     start: '2023-03-06',
                // }],

                // events: [
                //     list.forEach((event) => {
                //         return {
                //             title: event.title,
                //             start: event.start
                //         }
                //     })
                // ],
                // events: [{
                //     id: 'a',
                //     title: 'my event',
                //     start: '2023-03-01',

                // }],

                // events: [{
                //     id: 's',
                //     radio: 'a',
                //     title: 'my event',
                //     start: '2023-03-05',
                // }],
                // events: [{

                //         // groupId: 'blueEvents', // recurrent events in this group move together
                //         // daysOfWeek: ['3'],
                //         // startTime: '10:45:00',
                //         // endTime: '12:45:00',
                //         // color: 'blue'
                //     },
                //     // {
                //     //     daysOfWeek: ['1'], // these recurrent events move separately
                //     //     startTime: '11:00:00',
                //     //     endTime: '11:30:00',
                //     //     color: 'red'
                //     // }
                // ],
                // editable: true
            });

            calendar.render();
        });
    </script> --}}
    @include('pages.user.layout.partial_homepage.footer')
@endsection
