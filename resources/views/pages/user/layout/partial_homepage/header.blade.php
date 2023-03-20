 <header id="header" class="header d-flex align-items-center">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-sm-between">

         <a href="/" class="logo d-flex align-items-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             {{-- <img src="assets/img/logo.png" alt="">  --}}
             <h1>EDUNESA</h1>
         </a>

         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
         <nav id="navbar" class="navbar">
             <ul class="nav nav-pills">
                 <!--  "scrollto active" below -->

                 <li class="dropdown"><a href="{{ route('list') }}"><span>Jasa Kepakaran</span> <i
                             class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>
                         <li class="dropdown">
                             @foreach ($bidangs as $bidang)
                         <li><a
                                 href="{{ route('consultant.index', ['bidang_id' => $bidang->id]) }}">{{ $bidang->name }}</a>
                         </li>
                         @endforeach
                         {{-- <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                         <ul>
                             <li><a href="#">Hukum</a></li>
                             <li><a href="#">Sejarah</a></li>
                         </ul> --}}
                 </li>

             </ul>


             <li class="dropdown"><a href="#"><span>Lembaga Pendidikan & Sertifikasi Profesi</span> <i
                         class="bi bi-chevron-down dropdown-indicator"></i></a>
                 <ul>
                     <li class="dropdown"><a href="#"><span>Diklat</span> <i
                                 class="bi bi-chevron-down dropdown-indicator"></i></a>
                         <!-- ganti route ke halaman di FISH -->
                         <ul>
                             <li><a href="#">LKMM - TINGKAT LANJUT</a></li>
                         </ul>
                     </li>
                 </ul>
             </li>

             <li class="dropdown"><a href="#"><span>Fasilitas Komersil</span> <i
                         class="bi bi-chevron-down dropdown-indicator"></i></a>
                 <ul>
                     {{-- <li><a href="{{ route('userolahraga.index') }}"><span>Lapangan</span></a></li> --}}
                     <li><a href="#"><span>Penyewaan Gedung</span></a></li>
                     {{-- <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul> --}}

                     {{-- <li class="dropdown"><a href="#"><span>Fakultas Ilmu Sosial</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li> --}}
                 </ul>

                 {{-- <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>
          <li><br></li>

          <div class="float-right mb-2">
            <button class="btn btn-dark" data-href="#">login</button>
          </div> --}}

             </li>
             </ul>

         </nav>
         <nav>
             {{-- <div class="float-right mb-2"> --}}
             @if (Auth::user())
                 <a class="btn btn-danger btn-sm" href="{{ route('logout') }}" role="button">logout</a>
             @else
                 <a class="btn btn-link" href="{{ route('login') }}" role="button">Login</a>
                 <a class="btn btn-outline-light btn-sm" href="{{ route('register') }}" role="button">Register</a>
             @endif

             {{-- </div> --}}
         </nav>
         <!-- .navbar -->

     </div>


 </header><!-- End Header -->

 <section id="hero" class="hero">

     <div id="hero-carousel" class="carousel slide">

         <div class="carousel-item active" style="background-image: url(/assets/img/hero-carousel/bg_image_5.jpg)">
         </div>
     </div>
 </section>
