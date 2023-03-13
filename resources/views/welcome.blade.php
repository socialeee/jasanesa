@extends('pages.user.layout.homepage')

@section('title', 'Mall - EDUNESA')

@section('content')


    @include('pages.user.layout.partial_homepage.header')

    <!-- ======= Services Section ======= -->
    @include('pages.user.layout.partial_homepage.main')
    <!-- End Services Section -->

    <!-- ======= Footer ======= -->
    @include('pages.user.layout.partial_homepage.footer')
    <!-- End Footer -->

@endsection
