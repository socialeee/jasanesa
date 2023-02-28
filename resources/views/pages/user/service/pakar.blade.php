@extends('pages.user.layout.homepage')

@section('title', 'Jasa Pakar Fakultas')

@section('content')

    @include('pages.user.layout.partial_homepage.header')

    @include('pages.user.service.pakar_partial.kategori_fakultas')

@endsection
