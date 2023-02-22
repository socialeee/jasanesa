@extends('layout.homepage')

@section('title', 'jasanesa')

@section('content')
    
  
    @include('partial_homepage.header')

    <!-- ======= Services Section ======= -->
    @include('partial_homepage.main')
    <!-- End Services Section -->

  <!-- ======= Footer ======= -->
  @include('partial_homepage.footer')
  <!-- End Footer -->
    
@endsection